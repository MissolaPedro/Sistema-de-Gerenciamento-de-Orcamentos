<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Orçamento</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Criar Novo Orçamento</h1>
        <form action="../controllers/create.php" method="POST">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" class="form-control">
                    <option value="1">Aguardando</option>
                    <option value="2">Em cotação</option>
                    <option value="3">Enviado (Follow Up)</option>
                    <option value="4">Aprovado</option>
                    <option value="5">Reprovado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Criar Orçamento</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
