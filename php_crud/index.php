<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>UC Peeps</h2>
    <a href="add.php" class="add-btn">➕ Add New User</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>School</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT users.id, users.name, users.email, users.phone, school.name AS school_name FROM users JOIN school ON users.school_id = school.id");
            while($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td data-label="ID"><?= $row['id']; ?></td>
                <td data-label="Name"><?= htmlspecialchars($row['name']); ?></td>
                <td data-label="Email"><?= htmlspecialchars($row['email']); ?></td>
                <td data-label="Phone"><?= htmlspecialchars($row['phone']); ?></td>
                <td data-label="School"><?= htmlspecialchars($row['school_name']); ?></td>
                <td class="actions" data-label="">
                    <a href="edit.php?id=<?= $row['id']; ?>" class="action-btn edit-btn">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" class="action-btn delete-btn" onclick="return confirm('Delete this user?');">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
