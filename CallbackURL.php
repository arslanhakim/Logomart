 <?php 

require_once "config.php";
session_start();
// if(isset($_SESSION['access_token']))
//     $gclient->setAccessToken($_SESSION['access_token']);
// else if(isset($_GET['code'])){
//     $token = $gclient->fetchAccessTokenWithAuthCode($_GET["code"]);
//     $_SESSION['access_token'] = $token;
// }
// // else {
// //     redirect_to("signup.php");
// //     exit();
// // }
// $oAuth = new Google_Service_Oauth2($gclient);
// $data = $oAuth->userinfo->get();
//        $_SESSION['FitsName'] = $data['FitsName'];
//        $_SESSION['LastName'] = $data['LastName'];
//        $_SESSION['Email'] = $data['Email'];
//        $_SESSION['Phone'] = $data['Phone'];
//        $_SESSION['Password'] = $data['Password'];
//         //setting date and time
//         date_default_timezone_set("Asia/Karachi");
//         $CurrentTime = time();
//         $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);

//        $SignupQuery= "INSERT INTO signup(firstname,lastname,email,phone,password,datetime) 
//        VALUES('".$data['FitsName']."','".$data['LastName']."','".$data['Email']."','".$data['Phone']."','".$data['Password']."','$DateTime')";
//        $execute= mysqli_query($connection,$SignupQuery);
//        if($execute){
//          header  ("Location:index.php");
//           exit();
//         }
//         else echo "cant execute"
   




if(isset($_GET["code"])){
    $token = $gclient->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token["error"])){
        $gclient->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($gclient);
        $data = $google_service->userinfo->get();
        if(!empty($data['GivenName'])){
            $_SESSION['FitsName'] = $data['GivenName'];
        }
        if(!empty($data['FamilyName'])){
            $_SESSION['LastName'] = $data['FamilyName'];
        }
        if(!empty($data['email'])){
            $_SESSION['Email'] = $data['email'];
        }
        
        //setting date and time
        date_default_timezone_set("Asia/Karachi");
        $CurrentTime = time();
        $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
        
        $SignupQuery= "INSERT INTO signup(firstname,lastname,email,datetime) 
        VALUES('".$data['FitsName']."','".$data['LastName']."','".$data['Email']."','$DateTime')";
        $execute= mysqli_query($connection,$SignupQuery);
        if($execute){
            header  ("Location:index.php");
            exit();
        }
        else echo "cant execute";
    }
    else echo "<script>alert'token error occurred'</script>";
}
else(!isset($_SESSION['access_token'])){
    
    $login_button ='' // '<a href="'.$gclient->createAuth1().'"><img src=""></a>'
  
}


?>