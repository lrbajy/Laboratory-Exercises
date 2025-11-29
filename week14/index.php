<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Week 14 - Laboratory Exercise</title>
</head>
<body>
    <!-- <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://placehold.co/400" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> -->
    

   
        <?php
            $ctr=1;
            while($ctr<=20){
                if($ctr % 4==1){
            ?>
            <div class="container d-flex my-3">
            <?php
                }
        ?>

            <a href="page2.php" style="text-decoration: none;">
                <div class="card">
                    <img src="https://placehold.co/400" class="card-img-top">
                    <div class="card-body position-absolute bg-opacity-75  top-0 bottom-0 bg-dark text-white">
                        <h5 class="card-title">Java<?php echo $ctr?></h5>
                        <p class="card-text">Java is a versatile, object-oriented language known for portability, security, and robustness. It powers web apps, Android, and enterprise systems with platform independence and automatic memory management.</p>
                    </div>
                </div>
            </a>

        <?php
            if($ctr%4==0){
                ?>
            </div>
            <?php
            }
        $ctr++;
        }
        ?>
    </div>

   


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
        $('.card-body').hide();
        $('.card-img-top').hover(
        function() {
            $(this).siblings('.card-body').fadeIn();
        },

        function() {}
       );

        $('.card-body').hover(
            function() {},

            function() {
                $(this).fadeOut();
            }
        );
        })
    </script>
</body>
</html>