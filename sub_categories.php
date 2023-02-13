<?php require_once("include/db.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/function.php"); ?>

<?php 
$Errors = array('sub_Category'=>'');

if(isset($_POST["Submit"])){
  
    function inputTest($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Sub_Category = inputTest($_POST["sub_Category"]);
   $parent_id = $_POST['parent_id'];
    date_default_timezone_set("Asia/Karachi");
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
    $Admin = "Muhammad Arslan ";
    if(empty($Sub_Category)){
        $Errors["sub_Category"] = "Please Fill this Field.";
    }
    else if(strlen($Sub_Category)>100){
      $Errors["sub_Category"] = "sub Category Name is too long.";
    }
    else{
        global $connection;
        $query = "INSERT INTO sub_categories(categories_id,name,CreatedAt,creator)
        VALUES('$parent_id','$Sub_Category','$DateTime','$Admin')";
        $execute = mysqli_query($connection,$query);
        if($execute){
            $_SESSION["SuccessMessage"]="Category has been created";
            redirect_to("sub_categories.php");
        }else {
            $_SESSION["ErrorMessage"] = "Wooo! Categories Could not been added";
            redirect_to("sub_categories.php");
        }
    }
}
?>
<!doctype >
<html>
    <head>
        <title>Sub Categories</title>
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
    .col-sm-10{
        background-color: #ffffff;

    }
    .Error{
            color: red;
        }   
    </style>
    <body>
        <div class="container-fluid">
            <div class="row">
              <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <br><h1>Manage Sub Categories</h1> <br>
                 <div><?php  echo ErrorMessage(); echo SuccessMessage(); ?></div>
                   
                   <div><!--starting  Form -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label  for="categoryname"><span class="fieldinfo"> Select Parent Category </span></label>
                                    <select class="form-control" name="parent_id" placeholder="Select Category">
                                   <?php 
                                        global $Connection; 
                                        $catQuery = "SELECT * FROM categories";
                                        $catExe = mysqli_query($connection,$catQuery);
                                        while($data=mysqli_fetch_array($catExe,MYSQLI_BOTH)){
                                            $catId = $data['id'];
                                            $category = $data['name'];
                                    ?>
                                          <option value="<?php echo $catId; ?>"> <?php echo $category; ?></option>
                                    <?php  } ?>
                                   ?>
                                   
                                   </select ><br>
                                   <label  for="sub_category"><span class="fieldinfo"> Enter Sub Category </span></label>
                                    <input class="form-control" type="text" name="sub_Category" id="sub_categoryname"  >
                                    <span class="Error"><?php echo $Errors["sub_Category"]; ?></span>
                                   <br> 
                                   <div class="d-grid gap-2">
                                    <input class="btn btn-success" type="submit"  name="Submit" value="Add New Category">
                                    </div>
                                </div>
                              
                            </fieldset> <br>
                        </form>
                   </div>
                   <!-- table for fetching data from database-->
                 
                </div>  <!--End of Main Area-->
               

            </div><!--End of Row-->
        </div><!--End of Container Fluid-->
       
        
    </body>
</html>