<?php require_once("./include/session.php"); ?>
<?php require_once("./include/db.php"); ?>
<?php
if(isset($_SESSION['access_token'])){
    $Errors = array('cardNumber'=>'','cvv'=>'','Exdate'=>'');
    
        
        if(isset($_POST["proceed"])){
           
            
            function inputTest($data) {
                $data = htmlspecialchars($data);
                $data = trim($data);
                $data = stripslashes($data);
                return $data;
            }  
            
          
        
            
            if(!empty($_POST["cvv"])){
                $cvv = inputTest($_POST["cvv"]);
                if(!strlen($cvv)===3){ 
                    $Errors["cvv"] = "Please enter the valid CVV";
                  
                }        
                
            
            }
        
            
            if(!empty($_POST["Exdate"])){
                $expiryDate = inputTest($_POST["Exdate"]);
                
            
            }
            $Name =$_SESSION["access_token"][1];
            $email = $_SESSION["access_token"][3];
            $type = "Visa";
            if(!empty($_POST["cardNumber"])){
                $cardNumber = inputTest($_POST["cardNumber"]);
                if(!strlen($cardNumber)>19 || !strlen($cardNumber)<16){
                  if(!empty($_POST["cardNumber"]) && !empty($_POST["cvv"]) && !empty($_POST["Exdate"]) && strlen($cvv)===3  ){
                    
                        global $connection;
                        $query = "INSERT INTO  visa_card_info(name,user_email,card_no,type,expiry_date,cvv)
                        VALUES('$Name','$email','$cardNumber','$type','$expiryDate','$cvv')";
                        $execute = mysqli_query($connection,$query);
                        if($execute ){ 
                            echo "
                            <script> 
                                alert('Thank You! Your card info have been recieved.');
                                window.location.href='./order-complete.php';
                            </script>
                            ";}
                    

                    }
                }
                else{
                    $Errors["cardNumber"] = "Please enter the valid card Number";
                }
             
            }
        
        }

}
else{ echo "
    <script> 
    alert'please Login First';
    windows.loation.href='./signup.php';
    </script>
    ";}

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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <!-- checkout-steps section -->
                <section id="payment-gateway">
                    <div class="container">                
                        <div class="nav-btn-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item disabled">Steps</li>
                                <li class="breadcrumb-item" aria-current="page">Cart</li>
                                <li class="breadcrumb-item active">Payment Options</li>
                                <li class="breadcrumb-item">Order Completion</li>
                            </ol>
                            
                            <button class="btn explore-more-btn" name="proceed"> Proceed </button>
                        </div>
                    </div>
                    <div class="payment-gateway-option-box">
                        <div class="container">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#visa" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">VISA</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#PayPal" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">PayPal </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#Amazon" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Amazon</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#Maestro" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Maestro</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#AMEX" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">AMEX</button>
                                </li>
                            </ul>
                            <p class="payment-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel possimus
                                sit odit laudantium veniam sed repellat. Harum autem dignissimos iure impedit atque,
                                voluptatum nesciunt, earum ex dolorum nisi corrupti fugit.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tab-content" id="pills-tabContent">

                                        
                                            <div class="tab-pane fade show active" id="visa" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <div class="mb-3 row">
                                                    <label for="inputPassword" class="col-sm-3 col-form-label">Card Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" required class="form-control" id="inputCardNumber"
                                                            placeholder="Card Number" name="cardNumber">
                                                            <span style="color:red"><?php echo $Errors['cardNumber']; ?></span>
                                                    </div>
                                                </div> 
                                                <div class="mb-3 row">
                                                    <label for="inputPassword" class="col-sm-3 col-form-label">Expiry date</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" required  class="form-control" id="inputExpiryDate"
                                                            placeholder="Expiry Date" name="Exdate">
                                                            <span style="color:red"><?php echo $Errors['Exdate']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="inputPassword" class="col-sm-3 col-form-label"  >CVV/CVC</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" name="cvv"required class="form-control" id="inputcvv" placeholder="CVV">
                                                        <span style="color:red"><?php echo $Errors['cvv']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked" > Save Card </label>
                                                </div>
                                            </div>
                                        
                                        <div class="tab-pane fade" id="PayPal" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">PayPal</div>
                                        <div class="tab-pane fade" id="Amazon" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">Amazon</div>
                                        <div class="tab-pane fade" id="Maestro" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">Maestro</div>
                                        <div class="tab-pane fade" id="AMEX" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">AMEX</div>
                                    </div>
                                </div>
                                <div class="col-md-6 sidebar">
                                    <div class="row">
                                        <?php
                                        $productsTotal=0;
                                        $serviceCharges=50;
                                        $otherCharges = 5;
                                        foreach ($_SESSION['cart'] as $data){
                                            $total = $data["productPrice"] * $data["productQTY"];
                                            ?>
                                            <div class="col-sm-12">
                                                <div class="artical">
                                                    <p class="artical-title"><?php echo $data["productTitle"]; ?></p>
                                                    <p class="artical-price"><?php echo $data["productPrice"]; ?></p>
                                                </div>
                                            </div>
                                            <?php 
                                            $productsTotal +=  $total; 
                                        } ?>
                                    
                                        <div class="col-sm-12">
                                            <div class="service-charges">
                                                <p class="service-charges-title">Services Charges</p>
                                                <p class="service-charges-price"><?php echo "$".$serviceCharges.".00"; ?></p>
                                            </div>
                                            <div class="service-charges">
                                                <p class="other-charges" >Other Charges</p>
                                                <p class="other-charges-price" ><?php echo "$".$otherCharges.".00"?></p>                                        
                                            </div>
                                        </div>
                                        <?php $GrandTotal =$productsTotal + $otherCharges + $serviceCharges; ?>
                                        <div class="col-sm-12">
                                            <div class="total-charges">
                                                <p class="total">Total</p>
                                                <p class="total-price"><?php echo "$".$GrandTotal.".00"; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
            <!-- feature-video section -->
            <?php include('./pre-footer.php');?>
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