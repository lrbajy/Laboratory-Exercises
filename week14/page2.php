<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Week 14 - Page 2</title>
</head>
<body>
    <?php
        $title="Java";
        $desc="Java is a versatile, object-oriented language known for portability, security, and robustness. It powers web apps, Android, and enterprise systems with platform independence and automatic memory management.";
        $img="image.png";
    ?>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $img; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $title; ?></h5>
            <p class="card-text"><?php echo $desc; ?></p>
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
</body>
</html>