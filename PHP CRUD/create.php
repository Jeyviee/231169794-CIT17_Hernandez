<?php
include 'database.php';

if (isset($_POST['save'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);


    $query = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($query)) {
        header('Location: cindex.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Add User</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" placeholder="Name" required>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" required>

        <label>Phone:</label>
        <input type="text" name="phone" placeholder="Phone" required>

        <input type="submit" name="save" value="Save">
    </form>
    <a href="cindex.php" class="back-link">⬅ Back to User List</a>
</div>
</body>
</html>
