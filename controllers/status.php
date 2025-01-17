<?php
require_once '../config/db.php';

// Obter o ID e o novo status do orçamento
$budgetId = isset($_POST['budget_id']) ? intval($_POST['budget_id']) : 0;
$newStatus = isset($_POST['status']) ? intval($_POST['status']) : 0;

if ($budgetId > 0 && $newStatus > 0 && $newStatus <= 5) {
    $stmt = $conn->prepare("UPDATE budgets SET status = ? WHERE id = ?");
    $stmt->bind_param("ii", $newStatus, $budgetId);

    if ($stmt->execute()) {
        // Exibir mensagem de sucesso e redirecionar
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sucesso</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script>
                setTimeout(function() {
                    window.location.href = "../views/kanban.php";
                }, 2000); // Redireciona após 2 segundos
            </script>
        </head>
        <body>
            <div class="container mt-5">
                <div class="alert alert-success text-center" role="alert">
                    Status atualizado com sucesso!
                </div>
            </div>
        </body>
        </html>';
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Dados inválidos.";
}

$conn->close();
?>
