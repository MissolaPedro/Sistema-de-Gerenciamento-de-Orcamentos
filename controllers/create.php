<?php
require_once '../config/db.php';

// Obtendo os dados do formulário
$name = $_POST['name'] ?? '';
$description = $_POST['description'] ?? '';
$status = $_POST['status'] ?? 1;

// Preparar e executar a inserção
$stmt = $conn->prepare("INSERT INTO budgets (name, description, status) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $name, $description, $status);

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
                Novo orçamento criado com sucesso!
            </div>
        </div>
    </body>
    </html>';
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
