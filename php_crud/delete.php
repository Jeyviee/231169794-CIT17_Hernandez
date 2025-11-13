<?php
include 'db.php';

if (!isset($_GET['id'])) {
    die("No ID provided.");
}

$id = $_GET['id'];

$conn->query("DELETE FROM users WHERE id = $id");

header("Location: index.php");
exit;
?>
