<?php
require_once '../config/db.php';

$sql = "SELECT * FROM budgets";
$result = $conn->query($sql);

$budgets = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $budgets[] = $row;
    }
} else {
    //echo "0 results";
}
$conn->close();
?>
