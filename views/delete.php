<?php
require_once '../config/db.php';

$id = $_GET['id'] ?? 0;

if ($id > 0) {
    // Preparar e executar a exclusão
    $stmt = $conn->prepare("DELETE FROM budgets WHERE id = ?");
    $stmt->bind_param("i", $id);

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
                    Orçamento excluído com sucesso!
                </div>
            </div>
        </body>
        </html>';
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID inválido.";
}

$conn->close();
?>
