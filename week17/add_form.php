<?php require('database_open.php');?>
<?php include('header.php')?>

<main class="container-fluid">
    <h2>Products - Add Product</h2>

    <div class="container-fluit mt-4">
        <form action="add_action.php" method="POST" id="add">
            
            <div>
                <strong>Title</strong>
                <input type="text" class="form-control" name="title" id="title">
                <span id="title_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Short Description</strong>
                <textarea type="text" class="form-control" name="short_description" id="short_description"></textarea>
                <span id="short_description_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Long Description</strong>
                <textarea type="text" class="form-control" name="long_description" id="long_description"></textarea>
                <span id="long_description_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Thumb Image</strong>
                <input type="text" class="form-control" name="img_thumb" id="img_thumb">
                <span id="img_thumb_error" class="message text-danger"></span>
            </div>

            <div>
                <strong>Banner Image</strong>
                <input type="text" class="form-control" name="img_banner" id="img_banner">
                <span id="img_banner_error" class="message text-danger"></span>
            </div>

           
            <div class="mt-3">
                <a href="index.php" class="btn btn-secondary">Cancel</a>
                <input type="submit" class="btn btn-success"/>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php')?>
<?php require('database_close.php');?>
