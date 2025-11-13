<?php
include 'database.php';

// Check if 'id' is provided in the URL
if (!isset($_GET['id'])) {
    header('Location: cindex.php');
    exit;
}

$id = intval($_GET['id']); // Sanitize input

// Delete the user
$deleteQuery = "DELETE FROM users WHERE id = $id";
if ($conn->query($deleteQuery)) {
    header('Location: cindex.php');
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
