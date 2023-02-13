<?php require_once("./include/session.php");  ?>
<?php require_once("./include/db.php");  ?>
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
        <?php include('./header.php');?>

        <!-- main -->
        <main id="main">

            <!-- cart section -->
            <section id="cart">
                <div class="container">
                    <form action="./proceed.php" method="POST">
                        <div class="nav-btn-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item disabled">Steps</li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                <li class="breadcrumb-item">Payment Options</li>
                                <li class="breadcrumb-item">Order Completion</li>
                            </ol>                       
                            <a href="" >
                            <button class="btn explore-more-btn" name="Proceed">Proceed</button></a>
                        </div>
                    </form>
                    <?php
                     $productsTotal=0;
                     $serviceCharges=50;
                     $otherCharges = 5;
                    if ($_SESSION['cart']){
                        foreach($_SESSION['cart'] as $data){
                            $total = $data["productPrice"] * $data["productQTY"];
                            global $connection;
                            
                            $GetID = $data['productID'];
                            $imageQuery="SELECT * FROM additems where id='$GetID'";
                            $exe = mysqli_query($connection,$imageQuery);
                            $Image = mysqli_fetch_array($exe,MYSQLI_BOTH);

                        ?>
                        
                        <form action="./store.php" method="post">
                            <div class="tab-content">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-2">
                                            <input type="text" value="<?php echo $GetID; ?>" name="PID">
                                            <input type="hidden" value="<?php echo $data['productDetails']; ?>" name="PDetails">
                                            <img class="img-fluid" name="PImage" src="./images/Upload/<?php echo $Image['image']; ?>" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body row">
                                                <div class="left-side-content-box col-sm-6">
                                                    <h5 class="card-title"><?php echo $data["productTitle"]; ?></h5>
                                                    <input type="hidden" name="PTitle" value="<?php echo $data['productTitle']; ?>">
                                                    <p class="card-text">
                                                        <strong>Size: </strong>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" required aria-label="Default select example" name="PSize">
                                                                
                                                                <option value="<?php echo $data['productSize']; ?>"><?php echo $data['productSize']; ?></option>
                                                                <option value="small">small</option>
                                                                <option value="medium">medium</option>
                                                                <option value="large">large</option>
                                                                <option value="XL">XL</option>
                                                            </select>
                                                        </div>
                                                         <br>
                                                        <strong>QTY: </strong>
                                                        <input type="text" name="qty" min="0" value=" <?php echo $data['productQTY'];?>">

                                                        <br>
                                                        <strong>Color: </strong><?php echo $data["productColor"]; ?> 
                                                        <input type="hidden" name="PColor" value=" <?php echo $data['productColor'];?>">
                                                        <input type="hidden" name="PPrice"  value=" <?php echo $data['productPrice'];?>">
                                                    </p>
                                                </div>
                                                <div class="right-side-content-box col-sm-6 text-end">
                                                    <button class="btn btn-danger" style="" name="Delete">
                                                        <img src="./images/icon/delete.png" alt=""> Delete
                                                    </button>
                                                    <button class="btn btn-warning" name="Update"> Update </button>
                                                    <input type="hidden" name="deleteitem" value="<?php echo $data['productTitle'];?>">
                                                    <input type="hidden" name="updateitem" value="<?php echo $data['productTitle'];?>">
                                                  
                                                    
                                                    <p class="product-price"><?php echo "$".$total.".00"; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>                                                
                     <?php
                     $productsTotal +=  $total; 
                     
                        }
                        
                       
                    }
                    ?>    
                </div>
                <div class="price-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="other-charges" >Other Charges</p>
                                <p class="other-charges-price" ><?php echo "$".$otherCharges.".00"?></p>
                               
                            </div>
                            <div class="col-sm-12">
                                <p class="services-charges">Services Chardes</p>
                                <p class="services-charges-price"><?php echo "$".$serviceCharges.".00"?></p>
                     
                            </div>
                            <?php 
                                
                                $GrandTotal =$productsTotal + $otherCharges + $serviceCharges;
                            ?>
                            <div class="col-sm-12">
                                <p class="total-charges">Total</p>
                                <p class="total-charges-price"><?php echo "$".$GrandTotal.".00"?></p>
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

    <script src="./lib/zoom/jquery.zoom.min.js"></script>

    <script src="./js/main.js"></script>
</body>

</html>