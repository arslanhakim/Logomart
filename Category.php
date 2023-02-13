<?php require_once("include/db.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/function.php"); ?>

<?php 
$Errors = array('Category'=>'');

if(isset($_POST["Submit"])){
  

    function inputTest($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Category = inputTest($_POST["Category"]);
   
    date_default_timezone_set("Asia/Karachi");
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
    $Admin = "Muhammad Arslan ";
    if(empty($Category)){
        $Errors['Category'] = "This Field Can not be empty.";
    }
    else if(strlen($Category)>100){
      $Errors['Category'] = "Category Name is too long.";
    }
    else{
        global $connection;
        $query = "INSERT INTO categories(datetime,name,creator)
        VALUES('$DateTime','$Category','$Admin')";
        $execute = mysqli_query($connection,$query);
        if($execute){
            $_SESSION["SuccessMessage"]="Category has been created";
            redirect_to("Category.php");
        }else {
            $_SESSION["ErrorMessage"] = "Wooo! Categories Could not been added";
            redirect_to("Category.php");
        }
    }
}
?>
<!doctype >
<html>
    <head>
        <title>Categories</title>
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
    </style>
    <body>
        <div class="container-fluid">
            <div class="row">
              <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <br><h1>Manage Categories</h1> <br>
                 <div><?php  echo ErrorMessage(); echo SuccessMessage(); ?></div>
                   
                   <div><!--starting  Form -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label  for="categoryname"><span class="fieldinfo"> Name </span></label>
                                    <input class="form-control" type="text" name="Category" id="categoryname" placeholder="Category Name" >
                                    <span><?php echo $Errors['Category']; ?></span>
                                   <br> 
                                   <div class="d-grid gap-2">
                                    <input class="btn btn-success" type="submit"  name="Submit" value="Add New Category">
                                    </div>
                                </div>
                              
                            </fieldset> <br>
                        </form>
                   </div>
                   <!-- table for fetching data from database-->
                   <div class="table-responsive">
                        <table class="table table-stripped table-hover">
                          <caption>Existing Categories</caption>
                            <tr>
                                <th>Sr. #</th>
                                <th>Date & Time</th>
                                <th>Name</th>
                                <th>Created by</th>
                            </tr>
                           <?php 
                                global $connection;
                                $viewQuery = "SELECT * FROM categories ORDER BY datetime desc";
                                $execute= mysqli_query($connection,$viewQuery);
                                $Srno = 0;
                                 while ($dataRows= mysqli_fetch_array($execute, MYSQLI_BOTH)) {
                                    $ID = $dataRows['id'];
                                    $TimeDate = $dataRows['datetime'];
                                    $CategoryName = $dataRows['name'];
                                    $CreatedBy = $dataRows['creator'];
                                    $Srno ++;
                            ?>
                              <tr>
                                    <td ><?php echo $Srno; ?></td>
                                    <td ><?php echo$TimeDate;?></td>
                                    <td ><?php echo$CategoryName;?></td>
                                    <td ><?php echo$CreatedBy;?></td>
                              </tr>
                          <?php  } ?>
                           
                        </table><!--Ending table -->
                   </div>
                </div>  <!--End of Main Area-->
               

            </div><!--End of Row-->
        </div><!--End of Container Fluid-->
       
        
    </body>
</html>