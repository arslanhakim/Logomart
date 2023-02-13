<?php require_once("include/db.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/function.php"); ?>

<?php 
    global $connection;

    if($_POST['type'] == ""){
       
        $viewQuery = "SELECT * FROM categories ORDER BY datetime desc";
        $execute= mysqli_query($connection,$viewQuery);
        $str = "";
        while ($dataRows= mysqli_fetch_assoc($execute)) {
            $str .= "<option value='{$dataRows['id']}'>{$dataRows['name']}</option>";
        }
    }
    else if($_POST['type'] == "subcat"){
        $SubCatQuery = "SELECT * FROM sub_categories WHERE categories_id = {$_POST['id']} ";
        $res = mysqli_query($connection,$SubCatQuery);
        if(mysqli_num_rows($res)>0){
            $str = '';
            while($dataRows = mysqli_fetch_assoc($res)){
                $str .= "<option value='{$dataRows['id']}'>{$dataRows['sub_name']}</option>";
            }
        }
    }
    echo $str;
                                            
?>