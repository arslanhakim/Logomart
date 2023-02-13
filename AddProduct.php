<?php require_once("include/db.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/function.php"); ?>

<?php 
$Errors = array('Title'=>'','Category'=>'','Sub_Category'=>'','Details'=>'','Color'=>'','Price'=>'','Image'=>'');
if(isset($_POST["Submit"])){
  
    function inputTest($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
    
        return $data;
    }

    $Title = inputTest($_POST["Title"]);
    $Sub_Category = $_POST["Sub_Category"];
    $Details = inputTest($_POST["Details"]);
    $Color = $_POST["Color"];
    $Price = $_POST["Price"];
    $Post = $_POST["Details"];
    $Image = $_FILES["Image"]["name"];
    $Category = $_POST['parent_id'];
    print_r($Image);
    $Target = "images/Upload/".basename($_FILES['Image']["name"]);
    date_default_timezone_set("Asia/Karachi");
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
    $Admin = "Muhammad Arslan ";


    if(empty($Title)){
       $Errors["Title"]= "Title can't be empty"; 
    }
    else if(strlen($Title)<2){
        $Errors['Title'] = "Title at least have 2 characters";
    }
    if(empty($Category)){
       $Errors["Category"]= "Please Select Category"; 
    }
    if(empty($Sub_Category)){
       $Errors["Sub_Category"]= "Please Select Category"; 
    }
    if(empty($Color)){
       $Errors["Color"]= "Please Select Color"; 
    }
    if(empty($Details)){
       $Errors["Dtails"]= "Please Add Details"; 
    }
    if(empty($Image)){
       $Errors["Image"]= "Please Select an Image "; 
    }
    if(empty($Price)){
       $Errors["Price"]= "Please Add Price of One Item."; 
   }
    if(!empty($Title) && !empty($Category) && !empty($Sub_Category) && !empty($Color) && !empty($Details) && !empty($Image) && !empty($Price) && !empty($Color)){
       
        global $connection;
        $query = "INSERT INTO additems(datetime,title,category,sub_category,author,image,post,price,color)
        VALUES('$DateTime','$Title','$Category','$Sub_Category','$Admin','$Image','$Post','$Price','$Color')";
        $execute = mysqli_query($connection,$query);
        
        move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
        if($execute){
            $_SESSION["SuccessMessage"]="Post has been created";
            redirect_to("AddProduct.php");
        }else {
            $_SESSION["ErrorMessage"] = "Post has not been added";
            redirect_to("AddProduct.php");
        }
    }
}
?>
<!doctype >
<html>
    <head>
        <title>Add New Post</title>
        <link rel="stylesheet" href="scss/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <style>
    li{
    text-decoration: none;
    }
    .fieldinfo{
        font-family: Bitter, georgia, Times, "Times New Roman",serif;
        color: rgb(251,174,44);
        font-size: 1.2em;
    }
    body{
        background-color: #2f4050;
    }
    .col-sm-12{
        background-color: #ffffff;

    } 
    .Error{
            color: red;
        }
    </style>
    <body>
        <div class="container-fluid">
            <div class="row">
              
                
                
                <div class="col-sm-12">
                    <br><h1>Add New Posts</h1> <br>
                    <div> <?php echo ErrorMessage(); echo SuccessMessage();?></div>
                   
                   <div><!--starting  Form -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label  for="title"><span class="fieldinfo"> Title </span></label>
                                    <input class="form-control" type="text" required name="Title" id="title" placeholder="Title" >
                                    <span class="Error"><?php echo $Errors["Title"]; ?></span>
                                   <br> 
                                </div>
                                <!-- selesting Category from database -->
                                <div class="form-group"> 
                                    <label  for="catetoryselect"><span class="fieldinfo"> Select Category </span></label>
                                    
                                    <select class="form-control" name="parent_id" required  id="categories_id" >
                                        <!-- <option value=""> Select Category </option> -->
                                        <!-- <div>
                                            <input type="radio" >
                                        </div> -->
                                    </select> 
                                    <span class="Error"><?php echo $Errors["Category"]; ?></span>
                                </div> <br> 
                                <!-- End of selesting Category from database -->

                                <!-- Selesting Sub_Category from database -->

                                <div class="form-group">
                                    <label  for="catetoryselect"><span class="fieldinfo"> Select Sub_Category </span></label>
                                    <select class="form-control" name="Sub_Category" required id="sub_categories_id">                                    
                                        <option value=""> Select Sub_Category </option>
                                    </select> 
                                    <span class="Error"><?php echo $Errors["Sub_Category"]; ?></span>
                                </div> <br>
                                <div class="form-group">
                                    <label  for="Imageselect"><span class="fieldinfo" > Select Image </span></label>
                                    <input class="form-control" type="file" required name="Image" multiple >
                                    <span class="Error"><?php echo $Errors["Image"]; ?></span>
                                </div> <br>
                                <div class="form-group">
                                    <label  for="Price"><span class="fieldinfo"> Enter Price of Item ($)</span></label>
                                    <input class="form-control" type="number" required name="Price" id="Price"  >
                                    <span class="Error"><?php echo $Errors["Price"]; ?></span>
                                </div> <br>
                                <div class="form-group">
                                    <label  for="postarea"><span class="fieldinfo"> Details Of The Item </span></label>
                                   <textarea name="Details" id="postarea" required class="form-control" ></textarea>
                                   <span class="Error"><?php echo $Errors["Details"]; ?></span>
                                </div> <br>
                                <div class="Colorselect">
                                    <label  for="postarea"><span class="fieldinfo"> Choose Item Color </span></label>
                                   <select name="Color" required>
                                        <option >Select Color</option>
                                        <option value="Black">Black</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Blue" >Blue</option>
                                        <option value="Brown">Brown</option>
                                    </select>
                                    <span class="Error"><?php echo $Errors["Color"]; ?></span>
                                </div> <br>
                                <div class="d-grid gap-2">
                                    <input class="btn btn-success" type="submit" id="submit" name="Submit" value="Add New Category">
                                </div>
                           
                              
                            </fieldset> <br>
                        </form>
                     
                    </div><!--Ending  Form -->
                </div>  <!--End of Main Area / sm-col-10-->
               

            </div><!--End of Row-->
        </div><!--End of Container Fluid-->
       
        <script type="text/javascript" src="lib/jquery/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            function loadData(type, category_id){
                $.ajax({
                    url : "get_sub_cat.php",
                    type : "POST",
                     data : {type : type, id : category_id},
                    success: function(data){
                        if(type == "subcat"){
                            $("#sub_categories_id").html(data);
                        }
                        else{
                            $("#categories_id").append(data);
                        }
                    }
                });
            }
            loadData();
            $("#categories_id").on("change",function(){
               var categories_id = $("#categories_id").val();
               loadData("subcat", categories_id);

	            })
        });
                      
    </script>
      
    </body>
</html>