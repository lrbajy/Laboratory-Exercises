<?php require('database_open.php')?>

<?php
    $id=$_POST['id'];
    $title=$_POST['title']; 
    $short_description=$_POST['short_description'];
    $long_description=$_POST['long_description'];
    $img_thumb=$_POST['img_thumb'];
    $img_banner=$_POST['img_banner'];

    $sql="UPDATE products SET title='$title', short_description='$short_description', long_description='$long_description', img_thumb='$img_thumb', img_banner='$img_banner'  WHERE id=$id";

    mysqli_query($conn, $sql);
    header('Location: index.php');
?>

<?php require('database_close.php') ?>