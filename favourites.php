<?php require_once("./include/session.php"); ?>
<?php require_once("./include/db.php"); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.svg" />
    <title>Favourites | LogoMart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./scss/main.css">
</head>

<body>
    <div class="wrapper">

        <!-- header -->
        <?php include('./header.php');?>

        <!-- main -->
        <main id="main">

            <!-- cart section -->
            <section id="favourites">
                <div class="container mt-2 mb-5">
                    <div class="nav-btn-container">
                        <a href="./payment-gateway.php" class="btn explore-more-btn ms-auto text-uppercase">Move to cart</a>
                    </div>
                    <div class="tab-content">
                        <div class="card">
                            <img src="./images/product/product_31.png" class="card-img img-fluid" alt="...">
                            <div class="card-img-overlay">
                                <ul class="">
                                    <li class="">
                                        <a href="./product-detail.php">
                                            <img src="./images/icon/zoom.png" alt="">
                                        </a> </li>
                                    <li class="">
                                        <img src="./images/icon/cart_black.png" alt="">
                                    </li>
                                    <li class="">
                                        <img src="./images/icon/wishlist_black.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cruise Dual Analog</h5>
                                <p class="price">$250.00</p>
                                <ul class="rating">
                                    <li>
                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid" alt="">
                                    </li>
                                    <li>
                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid" alt="">
                                    </li>
                                    <li>
                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid" alt="">
                                    </li>
                                    <li>
                                        <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid" alt="">
                                    </li>
                                    <li>
                                        <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid" alt="">
                                    </li>
                                </ul>
                                <button class="btn-delete">
                                    <img src="./images/icon/delete.png" alt=""> Delete
                                </button>
                            </div>
                        </div>
                        
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
</body>

</html>