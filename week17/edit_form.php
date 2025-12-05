<?php require('database_open.php'); ?>
<?php include('header.php'); ?>

<main class="container-fluid">
    <h2>Products - Edit Product</h2>

    <?php
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        if ($id > 0) {
            $sql = "SELECT * FROM products WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if ($row = mysqli_fetch_assoc($result)) {
    ?>

    <div class="container-fluid mt-4">
        <form action="edit_action.php" method="POST" id="add">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>

            <div>
                <strong>Title</strong>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo htmlspecialchars($row['title']); ?>">
                <span id="title_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Short Description</strong>
                <textarea class="form-control" name="short_description" id="short_description"><?php echo htmlspecialchars($row['short_description']); ?></textarea>
                <span id="short_description_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Long Description</strong>
                <textarea class="form-control" name="long_description" id="long_description"><?php echo htmlspecialchars($row['long_description']); ?></textarea>
                <span id="long_description_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Thumb Image</strong>
                <input type="text" class="form-control" name="img_thumb" id="img_thumb" value="<?php echo htmlspecialchars($row['img_thumb']); ?>"/>
                <span id="img_thumb_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Banner Image</strong>
                <input type="text" class="form-control" name="img_banner" id="img_banner" value="<?php echo htmlspecialchars($row['img_banner']); ?>"/>
                <span id="img_banner_error" class="message text-danger"></span>
            </div>

            <div class="mt-3">
                <a href="index.php" class="btn btn-secondary">Cancel</a>
                <input type="submit" class="btn btn-success"/>
            </div>
        </form>
    </div>

    <?php
            } else {
                echo "<p class='text-danger'>Product not found.</p>";
            }
        } else {
            echo "<p class='text-danger'>Invalid product ID.</p>";
        }
    ?>
</main>

<?php include('footer.php'); ?>
<?php require('database_close.php'); ?>
