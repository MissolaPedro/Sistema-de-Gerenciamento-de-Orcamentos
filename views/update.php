<?php
require_once '../config/db.php';

$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM budgets WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$budget = $result->fetch_assoc();
$stmt->close();
$conn->close();

include 'header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Orçamento</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Atualizar Orçamento</h1>
        <form action="../controllers/update.php" method="GET">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($budget['id']); ?>">
            <div class="form-group">
                <label for="status">Novo Status:</label>
                <select id="status" name="status" class="form-control">
                    <option value="1" <?php if ($budget['status'] == 1) echo 'selected'; ?>>Aguardando</option>
                    <option value="2" <?php if ($budget['status'] == 2) echo 'selected'; ?>>Em cotação</option>
                    <option value="3" <?php if ($budget['status'] == 3) echo 'selected'; ?>>Enviado (Follow Up)</option>
                    <option value="4" <?php if ($budget['status'] == 4) echo 'selected'; ?>>Aprovado</option>
                    <option value="5" <?php if ($budget['status'] == 5) echo 'selected'; ?>>Reprovado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Orçamento</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
