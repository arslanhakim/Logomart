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
                    <div class="row result">
                        <div class="col-md-4 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item filter-title">Apply Filter</li>
                                <div style="height: 300px; oveflow-y: auto; overflow-x:hidden" id="data">

                               
                                        <li class="list-group-item">Category</li>
                                        <?php
                                        global$connection;
                                        $viewCategories = "SELECT distinct sub_name FROM sub_categories where categories_id = '1' OR categories_id=' 2'  ";
                                        $catExecute = mysqli_query($connection,$viewCategories);
                                        while($dataarows = mysqli_fetch_array($catExecute, MYSQLI_BOTH)){
                                            ?>
                                            <li class="list-group-item " >
                                            <ul>
                                                <li class="common_selector name">
                                                    <button class="btn" id="name"><?php echo $dataarows['sub_name']; ?></button>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php }
                                        
                                        ?>
                                </div>
                                <li class="list-group-item">Price</li>
                                <li class="list-group-item data common_selector">
                                    <input type="range" id="volume" name="volume" min="0" max="900">
                                    <input type="hidden" id ="maximum_price" value="50">
                                    <input type="hidden" id ="minimum_price" value="900">
                                    <span class="float-start">$50</span>
                                    <span class="float-end">$900</span>
                                </li>
                                <li class="list-group-item">Color</li>
                                <li class="list-group-item">
                                    <?php
                                        global $connection;
                                        $viewColors = "SELECT distinct color FROM additems ";
                                        $colorExecute = mysqli_query($connection,$viewColors);
                                        while($datarows = mysqli_fetch_array($colorExecute, MYSQLI_BOTH)){
                                    ?>
                                        <div class="form-check data">
                                            <input class="form-check-input common_selector " type="checkbox"  id="colorBlack color" style="border-color: black;">
                                            <label class="form-check-label" for="colorBlack">
                                                <?php echo $datarows['color']; ?>
                                            </label>
                                        </div>
                                    <?php }
                                            
                                    ?>
                                    
                                   
                                </li>
                                <!-- <li class="list-group-item">Size</li>
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
                                </li> -->
                            </ul>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <div class="shop-hero-section" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(./images/background/bg-1.jpg);">
                                <div class="sub-container">
                                    <h1 class="hero-title">Upto 50%
                                        <br>
                                        offer!</h1>
                                    <p class="hero-text">for all Men & women's collections</p>
                                </div>
                            </div>
                            <div class="shop-function-nav">
                                <h3 class="shop-title" id="textChange">Men & Women</h3>
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
                                    <div class="show-pages" >
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
                            <div class="shop-product-container" id="result">
                                <?php 
                                
                                global $connection;
                                $viewQuery = "SELECT * FROM additems";
                                $viewExecute = mysqli_query($connection,$viewQuery);
                              
                                    while($datarows = mysqli_fetch_array($viewExecute,MYSQLI_BOTH)){
                                        $productId = $datarows["id"];
                                        $Title = $datarows["title"];
                                        $Price = $datarows["price"];
                                        $Image = $datarows["image"]; 
                                        
                                        include("./card-product.php");
                               
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        #loading{
            text-align: center;
            background: url('./images/loading.gif') no-repeat center;
            height: 150px;
        }
    </style>
    <script>
    $(document).ready(function(){
        //alert("Hello");
        $(".common_selector").click(function(){
            $("#loading").show();
            var action = 'data';
            // var maximum_price = $('#maximum_price').val();
            // var minimum_price = $('#minimum_price').val();
            var name =  get_filter_text('name');
            var color = get_filter_text('color');

            $.ajax({
                url:'fetch_data.php';
                method:'POST';
                data:{action:action,name:name,color:color},
                success:function(response){
                    $("#result").html(response);
                    $("loader").hide();
                    $("#textChange").text("Filtered Products")

                }
            });
        });

        function get_filter_text(text_id){
            var filterData = [];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
        }
     



        // function filter_data(){
        //     $('.filter_data').html('<div id="loading" style=""></div>');
        //     var action = 'fetch_data';
        //     var maximum_price = $('#maximum_price').val();
        //     var minimum_price = $('#minimum_price').val();
        //     var name = get_filter('name');
        //     var color = get_filter('color');
           
        //     $.ajax({
        //         url: "fetch_data.php";
        //         method: "post";
        //         data:{action:action, maximum_price:maximum_price,minimum_price:minimum_price, name:name, color: color },
        //         success: function(data){
        //             $('.filter_data').html(data);
        //         }
        //     });
        // }
        //     function get_filter(class_name){
        //         var filter = [];
        //         $('.'+class_name+':checked').each(function(){
        //             filter.push($(this).val());
        //         });
        //         return filter;
        //     }
        //     $('.common_selector').click(function()){
        //         filter_data();
        //     }
        
    });
    </script>
</body>

</html>