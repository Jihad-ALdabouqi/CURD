<?php
require "database.php";

$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll();
?>

<h2>Users</h2>

<a href="create.php">Create User</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= $u['id'] ?></td>
        <td><?= $u['name'] ?></td>
        <td><?= $u['email'] ?></td>
        <td>
            <a href="edit.php?id=<?= $u['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $u['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
