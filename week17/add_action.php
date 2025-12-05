<?php require('database_open.php')?>

<?php
    $title=$_POST['title'];
    $short_description=$_POST['short_description'];
    $long_description=$_POST['long_description'];
    $img_thumb=$_POST['img_thumb'];
    $img_banner=$_POST['img_banner'];

    $sql="INSERT INTO products(title, short_description, long_description, img_thumb, img_banner)
                      VALUES('$title', '$short_description', '$long_description', '$img_thumb', '$img_banner' )";

    mysqli_query($conn, $sql);
    header('Location: index.php');
?>

<?php require('database_close.php') ?>