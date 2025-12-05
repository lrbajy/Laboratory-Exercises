<?php
    require('database_open.php');
?>

<?php
        // $sql = "SELECT * FROM product_manager";
        // $result = $conn->query($sql);
        
        // if ($result->num_rows > 0) {
        // // output data of each row
        // while($row = $result->fetch_assoc()) {
        //     echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["long_description"]. "<br>";
        // }
        // } else {
        // echo "0 results";
        // }
?>

<?php include('header.php')?>

<main class="container-fluid" >
    <h2>Products</h2>
    <a class="btn btn-primary" href="add_form.php">Add Product</a>
            
<?php
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
    ?>
        <table class="table table-striped my-3">
        <tr>
            <th>ID</th>
            <th>Title</th>
           
            <th>Operation</th>
        </tr>
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row['id'] ?> </td>
            <td><?php echo $row['title']?></td>
            
            <td>
            <a class="btn btn-info" href="edit_form.php?id=<?php echo $row['id'] ?>">Edit</a>
                <a class="btn btn-danger" href="delete_action.php?id=<?php echo $row['id'] ?>">Delete</a>
            </td>
        </tr>    
    <?php
    }
    ?>
        </table>
    <?php
    }else{
        echo "0 results";
    }
    ?>

</main>



<?php include('footer.php') ?>

<?php
    require('database_close.php');
?>
