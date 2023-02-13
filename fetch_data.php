<?php require_once("include/db.php"); ?>


<?php 
 if(isset($_POST['action'])){
     $sql = "SELECT * FROM additems where sub_category !=''";
     if(isset($_POST['color'])){
         $Color = implode("','", $_POST['color']);
         $sql .= "AND color IN('".$Color."')";
     }
     if(isset($_POST['name'])){
         $Name = implode("','", $_POST['name']);
         $sql .= "AND sub_category IN('".$Name."')";
     }
     $result = $connection->query($sql);
     $output='';

    if ($result->num_rows>0){
         while($row=$result->fetch_assoc()){
             $output .='<div class="shop-product-container" id="result">            
                     <div class="card">
                         <img src="images/Upload/'. $row["image"].'" class="card-img img-fluid" alt="...">
                         <div class="card-img-overlay">
                             <ul class="">
                                 <li class="">
                                     <a href="product-detail.php?id='.  $row["id"].'">                                     
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
                             <h5 class="card-title">'.  $row["title"].'</h5>
                             <p class="price">'.  $row["price"].'</p>
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
                     </div>';
        }
    }
    else{
        $output="<h3>No Products Found!<h3>";
    }
    echo $output;
 }
?>



<?php 
//fetch_data.php

// if(isset($_POST["action"])){
//     $query = "SELECT * FROM additems order by decs id";
//     if (isset ( $_POST["minimum_price"],  $_POST["maximum_price"]) && !empty($_POST["color"]) && !empty($post["name"])){
//         $query .= "AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
//     }
//     if(isset($_POST["name"])){
//         $name_filter = implode("','", $_POST["name"]);
//         $query.=" 
//         AND name IN('".name_filter"')
//         ";
//     }

    // $statement = $connect ->prepare($query);
    // $statement->execute();
    // $result = $statement->fetchAll(); 
    // $total_row = $statement->rowCount();
    // $output = '';
    // if($total_row > 0 ){
    //     foreach ( $result as $row){
    //         $output . ='
            // <div class="shop-product-container">
            //         <div class="card">
            //             <img src="images/Upload/'.$row['image'].'" class="card-img img-fluid" alt="...">
            //             <div class="card-img-overlay">
            //                 <ul class="">
            //                     <li class="">
            //                         <a href="product-detail.php?id=<?php echo $productId;?>">
                                    
            <!-- //                             <img src="./images/icon/zoom.png" alt="">
            //                         </a> </li>
            //                     <li class="">
            //                         <img src="./images/icon/cart_black.png" alt="">
            //                     </li>
            //                     <li class="">
            //                         <img src="./images/icon/wishlist_black.png" alt="">
            //                     </li>
            //                 </ul>
            //             </div> -->
                        <!-- <div class="card-body">
                            <h5 class="card-title"><?php echo $Title?></h5>
                            <p class="price">'.$row['price'].' </p> -->
                            <!-- <ul class="rating">
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
                                </li> -->
                                <!-- <li>
                                    <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid" alt="">
                                </li>
                            </ul>
                        </div>
                    </div> -->
           
          
            
        <!-- </div>
            '
        }
    }
} -->



<!-- ?>  -->