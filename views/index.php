<?php
require_once '../controllers/read.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Orçamentos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <h1 class="text-center">Lista de Orçamentos</h1>
        <a href="create.php" class="btn btn-primary mb-3">Novo Orçamento</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($budgets as $budget): ?>
                <tr>
                    <td><?php echo $budget['id']; ?></td>
                    <td><?php echo $budget['name']; ?></td>
                    <td><?php echo $budget['description']; ?></td>
                    <td><?php echo $budget['status']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $budget['id']; ?>&status=<?php echo $budget['status'] + 1; ?>" class="btn btn-warning">Atualizar</a>
                        <a href="delete.php?id=<?php echo $budget['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
