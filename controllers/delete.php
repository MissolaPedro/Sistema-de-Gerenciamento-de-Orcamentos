<?php
require_once '../config/db.php';

$id = $_GET['id'] ?? 0;

$sql = "DELETE FROM budgets WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Orçamento excluído com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
