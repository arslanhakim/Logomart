
<?php require_once("include/function.php"); ?> 
<?php require_once("include/db.php"); ?> 
<?php require_once("include/session.php"); ?> 


<?php 


// if(!isset($_SESSION['access_token'])){
//     redirect_to("signup.php");
//     exit();
// }

?>



<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.svg" />
    <title>LogoMart | Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./scss/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '408533767109654',
      xfbml      : true,
      version    : 'v11.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- 
<br><br>
<br><br> -->


<!-- <?php print_r($_SESSION); ?> -->


    <div class="wrapper">

        <!-- header -->
        <?php include("./header.php"); ?>

        <!-- main -->
        <main id="main">
            <!-- hero-banner section -->
            <section id="banner" class="p-3"
                style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(./images/background/bg-1.jpg);">
                <div class="container">
                    <div class="sub-container">
                        <h1 class="hero-title">Upto 50%
                            <br>
                            offer!</h1>
                        <p class="hero-text">for all women's collections</p>
                        <a href="./shop.php" class="btn explore-more-btn buy-now-btn">Buy Now</a>
                    </div>
                </div>
            </section>

            <!-- best-seller-product section -->
            <section id="best-seller">
                <div class="container">
                    <div class="row">
                        <div class="info-card-outer-box">
                            <div class="info-card-inner-box">
                                <h3 class="best-seller-card-title">Best Sellers</h3>
                                <p class="best-seller-card-subtitle">The best production from us</p>
                                <p class="best-seller-card-desc">Rem ea tempore alias voluptate quia nemo quo vero
                                    aliquid deserunt doloremque qui nobis, accusantium consectetur asperiores est
                                    voluptatibus veniam debitis iure!</p>
                                <a href="./shop.php" class="btn explore-more-btn">Explore More</a>
                            </div>
                        </div>
                        
                            <?php
                               global $connection;
                               $viewQuery = "SELECT * FROM additems order by  id DESC";
                              
                               $execute = mysqli_query($connection,$viewQuery);  
                               $count=0;                           
                               while($datarows = mysqli_fetch_array($execute,MYSQLI_BOTH)){
                                if($count < 5){
                                    ?>
                                    <div class="">
                                    <div class="card">
                                        <img src="./images/Upload/<?PHP echo $datarows["image"]; ?>" class="card-img img-fluid" alt="...">
                                        <div class="card-img-overlay">
                                            <ul class="">
                                                <li class="">
                                                    <a href="product-detail.php?id=<?php echo $datarows["id"];?>">
                                                        
                                                            <img src="./images/icon/zoom.png" alt="">
                                                       
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <img src="./images/icon/cart_black.png" alt=""data-id="<?php echo $datarows['id']; ?>;" onclick="addToCart()">
                                                </li>
                                                <li class="">
                                                    <img src="./images/icon/wishlist_black.png" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $datarows["title"]; ?></h5>
                                            <p class="price"><?php echo $datarows["price"]; ?></p>
                                            <ul class="rating">
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                    
                               <?PHP }$count ++;
                             } ?>
                           
                        
                       
                    </div>
                </div>
            </section>

            <!-- our-features section -->
            <section id="our-feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature-card">
                                <img src="./images/icon/feature.png" alt="" class="img-fluid">
                                <h4 class="feature-title">Features</h4>
                                <p class="feature-desc">Lorem ipsum dolor</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-card">
                                <img src="./images/icon/featurex.png" alt="" class="img-fluid">
                                <h4 class="feature-title">Features</h4>
                                <p class="feature-desc">Lorem ipsum dolor</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-card">
                                <img src="./images/icon/featurey.png" alt="" class="img-fluid">
                                <h4 class="feature-title">Features</h4>
                                <p class="feature-desc">Lorem ipsum dolor</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-card">
                                <img src="./images/icon/featurez.png" alt="" class="img-fluid">
                                <h4 class="feature-title">Features</h4>
                                <p class="feature-desc">Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- product-discount-poster section -->
            <section id="discount-poster" class="p-3"
                style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(./images/background/bg-2.jpg);">
                <div class="container">
                    <div class="sub-container">
                        <h1 class="discount-poster-title">Canon Eos
                            <br>
                            Upto 30% flat offer!
                        </h1>
                        <p class="discount-poster-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="./shop.php" class="btn explore-more-btn buy-now-btn">Buy Now</a>
                    </div>
                </div>
            </section>

            <!-- product-filter section -->
            <section id="product-filter">
                <div class="container">
                    <div class="row filter-title-containe">
                        <div class="col-sm-6 col-md-3">
                            <h3 class="filter-title btn active" data-filter="all">Featured Products</h3>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="filter-title btn" data-filter=".best-seller">Best Sellers</h3>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="filter-title btn" data-filter=".new-arrival">New Arrivals</h3>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="filter-title btn" data-filter=".recommended">Recommended for you</h3>
                        </div>
                    </div>
                    <div class="row" id="MixItUpE16413">
                        <?php
                            global $connection;
                           $viewQuery = "SELECT * FROM additems";
                           $execute = mysqli_query($connection,$viewQuery);                            
                           while($datarows = mysqli_fetch_array($execute,MYSQLI_BOTH)){   
                               $count1=0;
                               if($count1<12){
                            ?>
                                    <div class="mix all ">
                                        <div class="card">
                                            <img src="./images/Upload/<?php echo $datarows["image"]; ?>" class="card-img img-fluid" alt="...">
                                            <div class="card-img-overlay">
                                                <ul class="">
                                                    <li class="">
                                                        <a href="./product-detail.php?id=<?php echo $datarows['id'];?>">
                                                            <img src="./images/icon/zoom.png" alt="">
                                                        </a> </li>
                                                    <li class="">
                                                    <img src="./images/icon/cart_black.png" alt="" data-id="<?php $datarows['id']; ?>;" onclick="addToCart()">
                                                    </li>
                                                    <li class="">
                                                        <img src="./images/icon/wishlist_black.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $datarows["title"]; ?></h5>
                                                <p class="price"><?php echo "$".$datarows["price"].".00"; ?></p>
                                                <ul class="rating">
                                                    <li>
                                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            <?php } $count1++;}
                            
                            $bestQuery = "SELECT * FROM additems";
                            $bestexecute = mysqli_query($connection,$bestQuery);
                            while($best = mysqli_fetch_array($bestexecute,MYSQLI_BOTH)){   
                                ?>   
                                <div class="mix all best-seller">

                                    <div class="card">
                                        <img src="./images/Upload/<?php echo $best["image"]; ?>" class="card-img img-fluid" alt="...">
                                        <div class="card-img-overlay">
                                            <ul class="">
                                                <li class="">
                                                    <a href="./product-detail.php?id=<?php echo $best['id'];?>">
                                                        <img src="./images/icon/zoom.png" alt="">
                                                    </a> </li>
                                                <li class="">
                                                    <img src="./images/icon/cart_black.png" alt="" data-id="<?php $best['id']; ?>;" onclick="addToCart()">
                                                </li>
                                                <li class="">
                                                    <img src="./images/icon/wishlist_black.png" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $best["title"]; ?></h5>
                                            <p class="price"><?php echo "$".$best["price"].".00"; ?></p>
                                            <ul class="rating">
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                             $NewArrivals = "SELECT * FROM additems order by id desc";
                             $Newexecute = mysqli_query($connection,$NewArrivals);
                             $count = 0;
                            while($News = mysqli_fetch_array($Newexecute,MYSQLI_BOTH)){   
                                if($count < 7){
                            ?>                                
                                <div class="mix all new-arrival">
                                    <div class="card">
                                        <img src="./images/Upload/<?php echo $News["image"]; ?>" class="card-img img-fluid" alt="...">
                                        <div class="card-img-overlay">
                                            <ul class="">
                                                <li class="">
                                                    <a href="./product-detail.php?id=<?php echo $News['id'];?>">
                                                        <img src="./images/icon/zoom.png" alt="">
                                                    </a> </li>
                                                <li class="">
                                                    <img src="./images/icon/cart_black.png" alt="" data-id="<?php $News['id']; ?>;" onclick="addToCart()">
                                                </li>
                                                <li class="">
                                                    <img src="./images/icon/wishlist_black.png" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $News["title"]; ?></h5>
                                            <p class="price"><?php echo "$".$News["price"].".00"; ?></p>
                                            <ul class="rating">
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php } $count++;}
                            $recQuery = "SELECT * FROM additems";
                            $recexecute = mysqli_query($connection,$recQuery);
                            while($recommend = mysqli_fetch_array($recexecute,MYSQLI_BOTH)){   
                            ?>
                                <div class="mix all recommended">
                                    <div class="card">
                                        <img src="./images/Upload/<?php echo $recommend["image"]; ?>" class="card-img img-fluid" alt="...">
                                        <div class="card-img-overlay">
                                            <ul class="">
                                                <li class="">
                                                    <a href="./product-detail.php?id=<?php echo $recommend['id'];?>">
                                                        <img src="./images/icon/zoom.png" alt="">
                                                    </a> </li>
                                                <li class="">
                                                    <img src="./images/icon/cart_black.png" alt="" data-id="<?php $recommend['id']; ?>;" onclick="addToCart()">
                                                </li>
                                                <li class="">
                                                    <img src="./images/icon/wishlist_black.png" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $recommend["title"]; ?></h5>
                                            <p class="price"><?php echo "$".$recommend["price"].".00"; ?></p>
                                            <ul class="rating">
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                                <li>
                                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid"
                                                        alt="">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="./shop.php" class="btn explore-more-btn">Explore More</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- client-testimonial -->
            <section id="client-testimonial">
                <div class="container">
                    <div class="sub-container">
                        <h3 class="client-testimonial-title">Our client love us</h3>
                        <p class="client-testimonial-subtitle">Mauris suscripit maximus</p>
                        <div id="customers-testimonials" class="text-center owl-carousel owl-theme">
                            <div class="testimonial">
                                <img src="./images/client/client-1.jpg" class="img-fluid rounded-circle"
                                    alt="testimonial">
                                <blockquote class="text-center">
                                    <p>De cernantur concursionibus do incididunt fore nostrud, quibusdam anim quorum ubi
                                        quae id aute sed eiusmod ita fore et expetendis irure dolore te legam e do an
                                        efflorescere, voluptate quo.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p class="client-name">Justin Fuller</p>
                                    <p class="client-detail">Convallis interdum</p>
                                </div>
                            </div>
                            <div class="testimonial">
                                <img src="./images/client/client-2.jpg" class="img-fluid rounded-circle" alt="client" />
                                <blockquote class="text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at pulvinar augue.
                                        Ut feugiat viverra pellentesque. Integer scelerisque malesuada orci in cursus.
                                        Fusce pellentesque urna quis risus rutrum, vitae blandit urna pharetra. Praesent
                                        nunc enim, pharetra sed erat nec.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p class="client-name">Justin Fuller</p>
                                    <p class="client-detail">Convallis interdum</p>
                                </div>
                            </div>
                            <div class="testimonial">
                                <img src="./images/client/client-3.jpg" class="img-fluid rounded-circle" alt="client" />
                                <blockquote class="text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at pulvinar augue.
                                        Ut feugiat viverra pellentesque. Integer scelerisque malesuada orci in cursus.
                                        Fusce pellentesque urna quis risus rutrum, vitae blandit urna pharetra. Praesent
                                        nunc enim, pharetra sed erat nec.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-author">
                                        <p class="client-name">Justin Fuller</p>
                                        <p class="client-detail">Convallis interdum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           <?php include("./pre-footer.php");?>
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

    <script src="./js/main.js"></script>

    <script>
        $(".filter-title-containe div .btn").on("click", function () {
            $(".filter-title-containe div .btn").removeClass("active");
            $(this).addClass("active");
        });
        var mixer = mixitup('#MixItUpE16413');
    </script>
    <script>
        $(document).ready(function (){
            function addToCart(){
                var item_id = (this).data("id");
                console.log(item_id);
                // $.ajax{

                //     action:"post"
                // }
            }
        });
    </script>
</body>

</html>