<?php require_once("include/db.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/function.php"); ?> 


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
       <?php include('./header.php');?>

        <!-- main -->
        <main id="main">

            <!-- shop section -->
            <section id="shop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item filter-title">Apply Filter</li>
                                <li class="list-group-item">Category</li>
                                <li class="list-group-item">
                                    <ul>
                                        <li>
                                            <button class="btn">Suits(52)</button>
                                        </li>
                                        <li>
                                            <button class="btn">Shirts(152)</button>
                                        </li>
                                        <li>
                                            <button class="btn">Trousers(852)</button>
                                        </li>
                                        <li>
                                            <button class="btn">Jackets(752)</button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">Price</li>
                                <li class="list-group-item">
                                    <input type="range" id="volume" name="volume" min="0" max="900">
                                    <span class="float-start">$168</span>
                                    <span class="float-end">$900</span>
                                </li>
                                <li class="list-group-item">Color</li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="colorBlack" style="border-color: black;">
                                        <label class="form-check-label" for="colorBlack">
                                            Black
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="colorOrange" style="border-color: orange;">
                                        <label class="form-check-label" for="colorOrange">
                                            Orange
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="colorBlue" style="border-color: blue;">
                                        <label class="form-check-label" for="colorBlue">
                                            Blue
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="colorBrown" style="border-color: Brown;">
                                        <label class="form-check-label" for="colorBrown">
                                            Brown
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">Size</li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="sizeXS" checked="">
                                        <label class="form-check-label" for="sizeXS">
                                            XS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="sizeS">
                                        <label class="form-check-label" for="sizeS">
                                            S
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="sizeM">
                                        <label class="form-check-label" for="sizeM">
                                            M
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="sizeL">
                                        <label class="form-check-label" for="sizeL">
                                            L
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="sizeXL">
                                        <label class="form-check-label" for="sizeXL">
                                            XL
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="sizeXXL">
                                        <label class="form-check-label" for="sizeXXL">
                                            XXL
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <div class="shop-hero-section" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(./images/background/bg-1.jpg);">
                                <div class="sub-container">
                                    <h1 class="hero-title">Upto 50%
                                        <br>
                                        offer!</h1>
                                    <p class="hero-text">for all women's collections</p>
                                </div>
                            </div>
                            <div class="shop-function-nav">
                                <h3 class="shop-title">Women</h3>
                                <div class="shop-function-box">
                                    <div class="show-pages">
                                        <h4 class="title">Show</h4>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>20 per page</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="show-pages">
                                        <h4 class="title"> Sort by</h4>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Popular</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="show-pages">
                                        <h4 class="title">View</h4>
                                        <button class="btn" id="view-sq">
                                            <img src="./images/icon/view_sq.png" alt="">
                                        </button>
                                        <button class="btn" id="view-ln">
                                            <img src="./images/icon/view_ln.png" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-product-container">
                                <?php 
                                
                                global $connection;
                                $viewQuery = "SELECT * FROM additems";
                                $viewExecute = mysqli_query($connection,$viewQuery);
                              
                                    while($datarows = mysqli_fetch_array($viewExecute,MYSQLI_BOTH)){
                                        $productId = $datarows["id"];
                                        $Title = $datarows["title"];
                                        $Price = $datarows["price"];
                                        $Image = $datarows["image"]; 
                                        ?>
                                        <div class="card">
                                            <img src="images/Upload/<?php echo $Image; ?>" class="card-img img-fluid" alt="...">
                                            <div class="card-img-overlay">
                                                <ul class="">
                                                    <li class="">
                                                        <a href="product-detail.php?id=<?php echo $productId;?>">                                                        
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
                                                <h5 class="card-title"><?php echo $Title?></h5>
                                                <p class="price"><?php echo $Price?></p>
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
                                            </div>
                                        </div>
                                <?php 
                                    }
                                


                                ?>
                              
                                
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="shop.php">Prev</a></li>
                                    <li class="page-item"><a class="page-link active" href="shop.php">1</a></li>
                                    <li class="page-item"><a class="page-link" href="shop.php">2</a></li>
                                    <li class="page-item"><a class="page-link" href="shop.php">...</a></li>
                                    <li class="page-item"><a class="page-link" href="shop.php">3</a></li>
                                    <li class="page-item"><a class="page-link" href="shop.php">Next</a></li>
                                </ul>
                            </nav>
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