<?php require_once("./include/db.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php 

    

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.svg" />
    <title>Product Detail Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./scss/main.css">
</head>

<body>
    <div class="wrapper">

        <!-- header -->
        <?php include('./header.php'); ?>

        <!-- main -->
        <main id="main">

            <!-- order-complete-dialog section -->
            <section id="order-complete-dialog">
                <div class="container">
                    <div class="nav-btn-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item disabled">Steps</li>
                            <li class="breadcrumb-item" aria-current="page">Cart</li>
                            <li class="breadcrumb-item">Payment Options</li>
                            <li class="breadcrumb-item active">Order Completion</li>
                        </ol>
                    </div>
                    <div class="sub-container">
                        <img src="./images/icon/order_confirm.png" class="img-fluid order_confirm" alt="">
                        <img src="./images/icon/loading_processing.png" class="img-fluid loading_processing" alt="">
                        <p class="process-status">Processing</p>
                        <h3 class="order-id">Order ID: a68sw1fd68q</h3>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum reprehenderit
                            voluptas culpa eius omnis recusandae dolor quaerat! Rerum doloribus in dolor totam! Totam
                            asperiores blanditiis est voluptate eius earum dolore.</p>
                        <a href="./cart.php" class="btn explore-more-btn order_confirm">My Orders</a>
                    </div>
                </div>
            </section>

            <!-- feature-video section -->
            <section id="feature-video" style="background-image: url(./images/background/bg-3.jpg);">
                <div class="container">
                    <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery"
                        data-caption="">
                        <img src="./images/icon/play_black.png" alt="">
                    </a>
                </div>
            </section>

            <!-- email-subscription section -->
            <section id="email-subscription">
                <div class="row">
                    <div class="col-md-6"
                        style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(./images/background/bg-4.jpg);">
                        <div class="email-field-container">
                            <div class="email-field-title">Get out special discount</div>
                            <div class="email-field-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            <div class="email-field-box">
                                <input type="email" placeholder="Email address ...">
                                <button class="btn explore-more-btn">Get Coupon Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"
                        style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./images/background/bg-5.jpg);">
                        <!-- <img src="./images/background/1-2.jpg" alt=""> -->
                    </div>
                </div>
            </section>
        </main>

        <!-- footer -->
        <?php include('./footer.php');?>
    </div>

    <script src="./lib/jquery/jquery-3.5.1.min.js"></script>

    <script src="./lib/popper/popper.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="./lib/mixitup/mixitup.min.js"></script>

    <script src="./lib/masonry/masonry.pkgd.min.js"></script>

    <script src="./lib/owlcarousel/js/owl.carousel.min.js"></script>

    <script src="./lib/quickview/js/jquery_image_quickview.js"></script>

    <script src="./lib/zoom/jquery.zoom.min.js"></script>

    <script src="./js/main.js"></script>

    <script>
        $(document).ready(function () {
            //Hide Loading Box (Preloader)
            $(window).on('load', function () {
                if ($('.loading_processing').length) {
                    $('.loading_processing').delay(200).fadeOut(1000);
                    $('.order_confirm').delay(1000).fadeIn();
                }
            });
        });
    </script>
</body>

</html>