<?php
include 'db.php';

if(isset($_POST['save'])){
    $conn->query("INSERT INTO users (name,email,phone,school_id) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."',1)");
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Add New User</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <button type="submit" name="save">Save</button>
    </form>
    <a class="btn" href="index.php">Back to List</a>
</div>
</body>
</html>
