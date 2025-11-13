<?php
include 'database.php'; // Database connection

if (!isset($_GET['id'])) {
    header('Location: cindex.php');
    exit;
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM users WHERE id = $id");
if ($result->num_rows == 0) {
    echo "User not found!";
    exit;
}
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $updateQuery = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($updateQuery)) {
        header('Location: cindex.php');
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Edit User</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']); ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($row['email']); ?>" required>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?= htmlspecialchars($row['phone']); ?>" required>

        <input type="submit" name="update" value="Update">
    </form>
    <a href="cindex.php" class="back-link">⬅ Back to User List</a>
</div>

</body>
</html>
