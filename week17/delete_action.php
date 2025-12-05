<?php require('database_open.php')?>

<?php
    $id=$_GET['id'];

    $sql="DELETE FROM products WHERE id=$id";

    mysqli_query($conn, $sql);
    header('Location: index.php');
?>

<?php require('database_close.php') ?>