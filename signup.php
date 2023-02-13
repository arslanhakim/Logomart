<?php require_once("include/db.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/function.php"); ?> 
<?php require_once("config.php"); ?> 

<?php 
 if(isset($_GET["code"])){
    $token = $gclient->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token["error"])){
        $gclient->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($gclient);
        $data = $google_service->userinfo->get();
        if(!empty($data['GivenName'])){
            $_SESSION['user_first_name'] = $data['GivenName'];
        }
        if(!empty($data['FamilyName'])){
            $_SESSION['user_last_name'] = $data['FamilyName'];
        }
        if(!empty($data['email'])){
            $_SESSION['user_email_address'] = $data['email'];
        }
        
        //setting date and time
        date_default_timezone_set("Asia/Karachi");
        $CurrentTime = time();
        $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
        global $connection;
        $SignupQuery= "INSERT INTO signup(firstname,lastname,email,datetime) 
        VALUES('".$data['user_first_name']."','".$data['user_last_name']."','".$data['user_email_address']."','$DateTime')";
        $execute= mysqli_query($connection,$SignupQuery);
        if($execute){
            header  ("Location:index.php");
            exit();
        }
        else echo "cant execute";
    }
    else echo "<script>alert'token error occurred'</script>";
}
// else(!isset($_SESSION['access_token'])){
    
//     $login_button = '<a href="'.$gclient->createAuth1().'"><img src=""></a>'

// }


?>

 <?php
/* 
| facebook button Login through external API Code
 */ 
 
// require_once 'config.php';

// $permissions = ['']; //optional

// if (isset($accessToken))
// {
// 	if (!isset($_SESSION['facebook_access_token'])) 
// 	{
// 		//get short-lived access token
// 		$_SESSION['facebook_access_token'] = (string) $accessToken;
		
// 		//OAuth 2.0 client handler
// 		$oAuth2Client = $fb->getOAuth2Client();
		
// 		//Exchanges a short-lived access token for a long-lived one
// 		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
// 		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		
// 		//setting default access token to be used in script
// 		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
// 	} 
// 	else 
// 	{
// 		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
// 	}
	
	
// 	//redirect the user to the index page if it has $_GET['code']
// 	if (isset($_GET['code'])) 
// 	{
// 		header('Location: ./');
// 	}
	
	
// 	try {
// 		$fb_response = $fb->get('/me?fields=FirstName,LastName,Email,');
// 		$fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');
		
// 		$fb_user = $fb_response->getGraphUser();
		
		
// 		$_SESSION['fb_user_id'] = $fb_user->getProperty('id');
// 		$_SESSION['fb_user_name'] = $fb_user->getProperty('FirstName');
// 		$_SESSION['fb_user_email'] = $fb_user->getProperty('Email');
		
		
		
// 	} catch(Facebook\Exceptions\FacebookResponseException $e) {
// 		echo 'Facebook API Error: ' . $e->getMessage();
// 		session_destroy();
// 		// redirecting user back to app login page
// 		header("Location: ./");
// 		exit;
// 	} catch(Facebook\Exceptions\FacebookSDKException $e) {
// 		echo 'Facebook SDK Error: ' . $e->getMessage();
// 		exit;
// 	}
// } 
// else 
// {	
// 	// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used
// 	$fb_login_url = $fb_helper->getLoginUrl('http://localhost/LogoMart-v1/index.php', $permissions);
// }
?>

<?php 

//  Registration / sign up 
$Errors = array('FirstName'=>'','LastName'=>'','Number'=>'','Password'=>'','Email'=>'','login'=>'');

//if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST["Register"])){

    function inputTest($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    
    $FirstName = inputTest($_POST["FirstName"]);
    $LastName = inputTest($_POST["LastName"]);
    $Email = $_POST["Email"];
    $Number = $_POST["Number"];
    $Password = md5($_POST["Password"]);
    $RePassword =md5($_POST["RePassword"]);
    //setting date and time
    date_default_timezone_set("Asia/Karachi");
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
    if(!preg_match("/^[A-Za-z\. ]*$/",$FirstName)){
        $Errors['FirstName']= "Only letters and white spaces allowed";
    }
    if(!preg_match("/^[A-Za-z\. ]*$/",$LastName)){
        $Errors['LastName']= "Only letters and white spaces allowed";
    }
    if(!is_numeric($Number)){
        $Errors['Number'] = "Please enter a valid number";
    }
    if($Password !== $RePassword){
        $Errors['Password'] = "Passwords Doesn't Match";
    }

    global $connection;
    $query = "SELECT * FROM signup where email='$Email'";
    $execute = mysqli_query($connection,$query);
    if($execute->num_rows>0){
        $Errors['Email']="Email is Already Exist.";
    }
    
    else if(preg_match("/^[A-Za-z\. ]*$/",$FirstName) && preg_match("/^[A-Za-z\. ]*$/",$LastName) && $Password === $RePassword ){
   
           
                setcookie($Email, $FirstName, time() + 3600, '/');
                global $connection;
                $SignupQuery= "INSERT INTO signup(firstname,lastname,email,phone,password,datetime) 
                VALUES('$FirstName','$LastName','$Email','$Number','$Password','$DateTime')";
                $execute= mysqli_query($connection,$SignupQuery);
                if($execute){
                    $_SESSION['access_token'][] = array('firstName'=>$FirstName,'lastName'=>$LastName,
                                                'email'=>$Email,);
                    echo "
                        <script>
                            alert('Sign up Successfully');
                            window.location.href='./index.php';
                        </script>
                    ";
                   
                 }
            
         
    }   
}

// <!-- Sigining In or Log In Query -->


if(isset($_POST["Attempt"])){

    
    $logEmail = $_POST["Email"];
    $logPassword =md5( $_POST["Password"]);
        global $connection;
        $logquery = "SELECT * FROM signup where email='$logEmail 'AND password='$logPassword'";  
        $logexecute = mysqli_query($connection,$logquery);
        if($logexecute){ 
            if($logexecute->num_rows>0){
                $result = mysqli_fetch_assoc($logexecute);
                $_SESSION['access_token'] = $result['email'];
                echo"
                <script>
                alert('Login Successfully');
                window.location.href='./index.php';
                </script>
                ";
                
              }
            else{
                echo "
                <script>
                    alert('Email/Password incorrect. Try Again');
                </script>
                ";
                $Errors['login'] = "Email or Password is incorrect.";
            }   
        }
        
    
}

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
<style> 
 .Error{
            color: red;
        }

</style>
<body>
<?php 

    

?> 
    <div class="wrapper">

        <!-- main -->
        <main id="main">
            <section id="account-login">
                <div class="container">
                    <div class="form">

                        <ul class="tab-group">
                            <li class="tab active"><a href="#signup">Sign Up</a></li>
                            <li class="tab"><a href="#login">Log In</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="signup">
                                <h1>Sign Up for Free</h1>

                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

                                    <div class="top-row">
                                        <div class="field-wrap">
                                            <label>
                                                First Name<span class="req">*</span>
                                            </label>
                                            <input type="text" required autocomplete="off" name="FirstName"/>
                                            <span class="Error"> <?php echo $Errors['FirstName']; ?></span>
                                        </div>

                                        <div class="field-wrap">
                                            <label>
                                                Last Name<span class="req">*</span>
                                            </label>
                                            <input type="text" required autocomplete="off" name="LastName"/>
                                            <span class="Error"> <?php echo $Errors['LastName']; ?></span>
                                        </div>
                                    </div>

                                    <div class="field-wrap">
                                        <label>
                                            Email Address<span class="req">*</span>
                                        </label>
                                        <input type="email" required autocomplete="off" name="Email"/>
                                        <span class="Error"> <?php echo $Errors['Email']; ?></span>
                                    </div>

                                    <div class="field-wrap">
                                        <label>
                                            Phone Number<span class="req">*</span>
                                        </label>
                                        <input type="tel" required autocomplete="off" name="Number" />
                                        <span class="Error"> <?php echo $Errors['Number']; ?></span>
                                    </div>

                                    <div class="field-wrap">
                                        <label>
                                            Set A Password<span class="req">*</span>
                                        </label>
                                        <input type="password" required autocomplete="off" name="Password" />
                                    </div>
                                    <div class="field-wrap">
                                        <label>
                                            Re-Enter the Password<span class="req">*</span>
                                        </label>
                                        <input type="password" required autocomplete="off" name="RePassword"/>
                                        <span class="Error"> <?php echo $Errors['Password']; ?></span>
                                    </div>

                                    <input  type="submit" class="button button-block" name= "Register" value ="Get Started">

                                    <p class="divider">or</p>

                                    <div class="social-login-box">
                                        <ul class="social-icon">
                                            <li class="icon-item">
                                                <img src="./images/google.png" value = "log in with Google" class="img-fluid" onclick="window.location='<?php echo $gclient->createAuthUrl(); ?>';">
                                            </li>
                                            <li class="icon-item">
                                                <img src="./images/facebook.png" value = "log in with Google" class="img-fluid"onclick="window.location='<?php echo $fb_login_url ?>';">
                                            </li>
                                        </ul>
                                    </div>

                                </form>

                            </div>

                            <div id="login">
                                <h1>Welcome Back!</h1>

                                <form action="" method="post">

                                    <div class="field-wrap">
                                        <label>
                                            Email Address<span class="req">*</span>
                                        </label>
                                        <input type="email" required autocomplete="off" name="Email" />
                                    </div>

                                    <div class="field-wrap">
                                        <label>
                                            Password<span class="req">*</span>
                                        </label>
                                        <input type="password" required autocomplete="off" name="Password" />
                                        <span class="Error"> <?php echo $Errors['login']; ?></span>
                                    </div>

                                    <p class="forgot"><a href="#" name= "ForgotPassword">Forgot Password?</a></p>

                                    <input  type="submit" class="button button-block" name= "Attempt" value ="Attempt">
                                    <p class="divider">or</p>

                                    <div class="social-login-box">
                                        <ul class="social-icon">
                                            <li class="icon-item">
                                            <img src="./images/google.png" value = "log in with Google" class="img-fluid" onclick="window.location='<?php echo $gclient->createAuthUrl(); ?>';">
                                            </li>
                                            <li class="icon-item">
                                                <img src="./images/facebook.png" alt="" class="img-fluid"onclick="window.location='<?php echo $fb_login_url ?>';">
                                            </li>
                                        </ul>
                                    </div>

                                </form>

                            </div>

                        </div><!-- tab-content -->

                    </div> <!-- /form -->
                </div>
            </section>
        </main>

    </div>

    <script src="./lib/jquery/jquery-3.5.1.min.js"></>

    <script src="./lib/popper/popper.min.js"></>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="./lib/mixitup/mixitup.min.js"></script>

    <script src="./lib/masonry/masonry.pkgd.min.js"></script>

    <script src="./lib/owlcarousel/js/owl.carousel.min.js"></script>

    <script src="./lib/quickview/js/jquery_image_quickview.js"></script>

    <script src="./lib/zoom/jquery.zoom.min.js"></script>

    <script src="./js/main.js"></script>

    <script>
        $(document).ready(function () {
            //Hide Loading Box (Preloader)
            $(window).on('load', function () {
                if ($('.loading_processing').length) {
                    $('.loading_processing').delay(200).fadeOut(1000);
                    $('.order_confirm').delay(1000).fadeIn();
                }
            });
        });
    </script>

    <script>
        function SignupConfirm() {
        alert("Congats! You are Successfully Signed Up");
        }
    </script>
</body>
</html>