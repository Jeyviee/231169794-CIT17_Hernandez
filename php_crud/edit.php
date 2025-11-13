<?php
include 'db.php';

if (!isset($_GET['id'])) {
    die("No ID provided.");
}

$id = $_GET['id'];

$user = $conn->query("SELECT * FROM users WHERE id = $id")->fetch_assoc();

if (!$user) {
    die("User not found.");
}

if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn->query("UPDATE users 
                  SET name='$name', email='$email', phone='$phone' 
                  WHERE id = $id");

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <h2>Edit User</h2>

    <form method="POST">
        <input type="text" name="name" value="<?= $user['name'] ?>" required>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>
        <input type="text" name="phone" value="<?= $user['phone'] ?>" required>

        <button type="submit" name="update">Update</button>
    </form>

    <a class="btn" href="index.php">Back</a>

</div>
</body>
</html>
