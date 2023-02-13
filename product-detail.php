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

            <!-- product-detail section -->
            <?php
            
                $Getid = $_GET['id'] ;
                global $connection;
                $ViewQuery = "SELECT * FROM additems where id='$Getid'";
                $execute = mysqli_query($connection, $ViewQuery);
                if (!$execute){
                echo "ooopps! someting went wrong. please try again.";
                }
                while($datarows = mysqli_fetch_array($execute,MYSQLI_BOTH)){
                    $productId = $datarows["id"];
                    $Title = $datarows["title"];
                    $Price = $datarows["price"];
                    $Image = $datarows["image"];
                    $Color = $datarows["color"];
                    $Details = $datarows["post"];
                ?>
                        
                    <section id="product-detail">
                        <div class="container">
                            <form action="./store.php?<?php echo $_GET['id']; ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-pic-zoom">
                                            <img class="image-fluid product-big-img"src="images/Upload/<?php echo $Image; ?>"  alt="">
                                            
                                            <img role="presentation" alt="" src="./images/Upload/<?php echo $Image; ?>"class="zoomImg img-fluid">
                                             <input type="hidden" name="PImage" >
                                        </div>
                                        <div class="product-thumbs" tabindex="1">
                                            <div class="product-thumbs-track">
                                                <div class="pt active" data-imgbigurl="./images/Upload/<?php echo $Image; ?>">
                                                    <img class="img-fluid" src="./images/Upload/<?php echo $Image; ?>" alt="">
                                                </div>
                                                <div class="pt" data-imgbigurl="./images/Upload/<?php echo $Image; ?>">
                                                    <img class="img-fluid" src="./images/Upload/<?php echo $Image; ?>" alt="">
                                                </div>
                                                <div class="pt" data-imgbigurl="./images/Upload/<?php echo $Image; ?>">
                                                    <img class="img-fluid" src="./images/Upload/<?php echo $Image; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="product-short-info">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                    <h3 class="product-title" ><?php echo $Title;?></h3>
                                                    <input type="hidden" name="PTitle" value ="<?php echo $Title; ?>">
                                                    <p class="stock-status">In Stock</p>
                                                </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="rating-box">
                                                        <p class="rating-title">Rating</p>
                                                        <ul class="rating">
                                                            <li>
                                                                <img src="./images/icon/star_fill.png"
                                                                    class="d-inline-block img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="./images/icon/star_fill.png"
                                                                    class="d-inline-block img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="./images/icon/star_fill.png"
                                                                    class="d-inline-block img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="./images/icon/star_empty.png"
                                                                    class="d-inline-block img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="./images/icon/star_empty.png"
                                                                    class="d-inline-block img-fluid" alt="">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-detail-box">
                                            <h3 class="product-price"><?php echo $Price;?></h3>
                                            <input type="hidden" name="PPrice" value ="<?php echo $Price; ?>">
                                            <input type="hidden" name="PID" value="<?php echo $Getid;?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 row">
                                                        <label for="staticEmail" class="col-sm-2 col-form-label">Size</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" required aria-label="Default select example" name="PSize">
                                                                
                                                                <option value="small">small</option>
                                                                <option value="medium">medium</option>
                                                                <option value="large">large</option>
                                                                <option value="XL">XL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 row">
                                                        <label for="inputPassword" class="col-sm-2 col-form-label">Color</label>
                                                        <div class="col-sm-10"><?php echo $Color; ?></div>
                                                        <input type="hidden" name="PColor" value ="<?php echo $Color; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-1 col-form-label">QTY</label>                                               
                                                <div class="col-sm-11">
                                                <input type="number" name="qty" required ria-label="Default select example" required min="1" placeholder="select the quantity">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-action-btn-box">
                                            <p class="desc" > <?php echo $Details; ?></p>
                                            <input type="hidden" name="PDetails" value ="<?php echo $Details; ?>">
                                           <a href="store.php"> <button type="submit" name="AddCart" class="btn explore-more-btn">Buy now</button></a>
                                           <a href="store.php"> <button type="submit" name="AddCart" class="btn btn-outline-dark">Add to Cart</button> </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
               
                <?php } ?>
           
                <!-- recommended-product section -->
            <section id="recommended-product">
                <div class="container">
                    <h3 class="recommended-product-title text-center">Recommended for you</h3>
                    <div class="recommended-product-container">
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
        $('.product-thumbs-track > .pt').on('click', function () {
            $('.product-thumbs-track .pt').removeClass('active');
            $(this).addClass('active');
            var imgurl = $(this).data('imgbigurl');
            var bigImg = $('.product-big-img').attr('src');
            if (imgurl != bigImg) {
                $('.product-big-img').attr({
                    src: imgurl
                });
                $('.zoomImg').attr({
                    src: imgurl
                });
            }
        });
        $('.product-pic-zoom').zoom();
    </script>
</body>

</html>