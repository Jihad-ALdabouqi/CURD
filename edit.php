<?php
require "database.php";

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare(
        "UPDATE users SET name = ?, email = ? WHERE id = ?"
    );
    $stmt->execute([$name, $email, $id]);

    header("Location: index.php");
}
?>

<h2>Edit User</h2>

<form method="POST">
    <input type="text" name="name" value="<?= $user['name'] ?>"><br><br>
    <input type="email" name="email" value="<?= $user['email'] ?>"><br><br>
    <button>Update</button>
</form>
