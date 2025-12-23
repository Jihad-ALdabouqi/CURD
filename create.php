<?php
require "database.php";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare(
        "INSERT INTO users (name, email) VALUES (?, ?)"
    );
    $stmt->execute([$name, $email]);

    header("Location: index.php");
}
?>

<h2>Create User</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <button>Add</button>
</form>
