
<?php require_once("include/db.php"); ?>
<?php 
// config.php

require_once ("vendor/autoload.php");

$gclient = new Google_Client();

$gclient-> setClientId('792293275453-m8nae7g27efuucdkf33is2c2h7eu9clv.apps.googleusercontent.com');

$gclient->setClientSecret ('pR-nFMwA6y-_4uou_lYD_S8a');

$gclient->setRedirectUri('http://localhost/logoMart-v1/index.php');
$gclient->addScope("email");
$gclient->addScope("profile");
 
global $connection;

?>

<?php 

//facebook configurations
// require_once(__DIR__.'/Facebook/autoload.php');
// define('APP_ID','408533767109654');
// define('APP_SECRET','371a3275aa6c355aef7515f35b0f738f');
// define('API_VERSION','v11.0');
// define('FB_BASE_URL','http://localhost/logoMart-v1/index.php');

// define('BASE_URL', 'YOUR_WEBSITE_URL');

// if(!session_id()){
//     session_start();
// }

// Call Facebook API
// $fb = new Facebook\Facebook([
//     'app_id' => APP_ID,
//     'app_secret' => APP_SECRET,
//     'default_graph_version' => API_VERSION,
//    ]);
   
   
   // Get redirect login helper
//    $fb_helper = $fb->getRedirectLoginHelper();
   
   
//    // Try to get access token
//    try {
//        if(isset($_SESSION['facebook_access_token']))
//            {$accessToken = $_SESSION['facebook_access_token'];}
//        else
//            {$accessToken = $fb_helper->getAccessToken();}
//    } catch(FacebookResponseException $e) {
//         echo 'Facebook API Error: ' . $e->getMessage();
//          exit;
//    } catch(FacebookSDKException $e) {
//        echo 'Facebook SDK Error: ' . $e->getMessage();
//          exit;
//    }
   

?>