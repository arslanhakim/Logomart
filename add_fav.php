<?php require_once('./include/db.php'); 

session_start();

global $connection;
$ID = $_GET["id"];                       

$imageQuery="SELECT * FROM additems where id='$ID'";
$exe = mysqli_query($connection,$imageQuery);
while($data = mysqli_fetch_array($exe,MYSQLI_BOTH)){

   $color = $data["color"];
   $Title = $data["title"];
   $Size = $data["size"];
   $Image = $data["image"];
   $Price = $data["price"];
   $Details = $data["detail"];
   $QTY = $data["qty"];
}




if(isset($_POST["Addfav"])){
   $check_product = array_column($_SESSION['fav'],'productTitle');
   if(in_array($Title,$check_product)){
      echo "
      <script>
      
       alert('Product already added');
      window.location.href='shop.php';
      
      </script>
      ";
   }

   else{
      $_SESSION['fav'][] = array('productID'=>$ID,'productColor'=>$color,'productTitle'=>$Title,
                        'productSize'=>$Size,'productImage'=>$Image,'productPrice'=>$Price,
                        'productDetails'=>$Details,'productQTY'=>$QTY);
                        header("location:favourites.php");
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




?>

