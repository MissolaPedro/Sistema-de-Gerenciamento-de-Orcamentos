<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban de Orçamentos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">Kanban de Orçamentos</h1>
    <div class="row">
        <?php
        // Conectar ao banco de dados
        require_once '../config/db.php';

        $statuses = [
            1 => 'Aguardando',
            2 => 'Em Cotação',
            3 => 'Enviado (Follow Up)',
            4 => 'Aprovado',
            5 => 'Reprovado'
        ];

        foreach ($statuses as $statusId => $statusName) {
            echo '<div class="col-md-2">';
            echo '<h5>' . $statusName . '</h3>';
            echo '<ul class="list-group">';
            
            // Preparar e executar a consulta
            if ($stmt = $conn->prepare("SELECT * FROM budgets WHERE status = ?")) {
                $stmt->bind_param("i", $statusId); // Vincular o parâmetro
                $stmt->execute(); // Executar a consulta
                $result = $stmt->get_result(); // Obter o resultado

                while ($budget = $result->fetch_assoc()) {
                    echo '<li class="list-group-item">';
                    echo '<h5>' . htmlspecialchars($budget['name']) . '</h5>';
                    echo '<p>' . htmlspecialchars($budget['description']) . '</p>';
                    echo '</li>';
                }

                $stmt->close(); // Fechar o statement
            } else {
                echo "Erro ao preparar a consulta.";
            }

            echo '</ul>';
            echo '</div>';
        }

        // Fechar a conexão
        $conn->close();
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
