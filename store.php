<?php require_once('./include/db.php'); 

session_start();

global $connection;
$ID = $_POST["PID"];                       

$imageQuery="SELECT * FROM additems where id='$ID'";
$exe = mysqli_query($connection,$imageQuery);
$Imag = mysqli_fetch_array($exe,MYSQLI_BOTH);


$color = $_POST["PColor"];
$Title = $_POST["PTitle"];
$Size = $_POST["PSize"];
$Image = $Imag["image"];
$Price = $_POST["PPrice"];
$Details = $_POST["PDetails"];
$QTY = $_POST["qty"];


if(isset($_POST["AddCart"])){
   $check_product = array_column($_SESSION['cart'],'productTitle');
   if(in_array($Title,$check_product)){
      echo "
      <script>
      
       alert('Product already added');
      window.location.href='shop.php';
      
      </script>
      ";
   }

   else{
      $_SESSION['cart'][] = array('productID'=>$ID,'productColor'=>$color,'productTitle'=>$Title,
                        'productSize'=>$Size,'productImage'=>$Image,'productPrice'=>$Price,
                        'productDetails'=>$Details,'productQTY'=>$QTY);
      // print_r($_SESSION['addcart']);
                        header("location:cart.php");
      }
}

//Deleting card item

if(isset($_POST["Delete"])){
   foreach($_SESSION['cart'] as $key=> $value){
      if($value['productTitle'] === $_POST['deleteitem']){
         unset($_SESSION['cart'][$key]);
         $_SESSION['cart'] = array_values($_SESSION['cart']);
         header('location:cart.php');
      }
   }
}


//updating cart items
if(isset($_POST["Update"])){
   foreach($_SESSION['cart'] as $key=> $value){
      if($value['productTitle'] === $_POST['updateitem']){
         $_SESSION['cart'][$key] = array('productID'=>$ID,'productColor'=>$color,'productTitle'=>$Title,
                        'productSize'=>$Size,'productImage'=>$Image,'productPrice'=>$Price,
                        'productDetails'=>$Details,'productQTY'=>$QTY);
                        header('location:cart.php');
                       
      }
   }
}



?>

