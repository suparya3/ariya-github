<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM messages WHERE id=$id");
    header("Location: messages.php");
}
?>
