<?php
include 'database.php';


if (!isset($_GET['id'])) {
    header('Location: cindex.php');
    exit;
}

$id = intval($_GET['id']);


$deleteQuery = "DELETE FROM users WHERE id = $id";
if ($conn->query($deleteQuery)) {
    header('Location: cindex.php');
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
