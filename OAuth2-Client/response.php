 <?php 
 @session_start();
 require "config.php";
// require "functions.php";
// include "header.php"; 
// include "left.php";
/* echo strtotime("2016-09-08 20:06:05"); */
/* echo date("Y-m-d h:i:s",1473707892);
exit; */
// oauth2callback/index.php

require('HttpPost.class.php');

/**
 * the OAuth server should have brought us to this page with a $_GET['code']
 */
if(isset($_GET['code'])) {
    // try to get an access token
    $code = $_GET['code'];
    /* $url = 'https://accounts.google.com/o/oauth2/token'; */
    $url = $url_oauth_server.'/oauth/access_token';
    // this will be our POST data to send back to the OAuth server in exchange
	// for an access token
    $params = array(
        "code" => $code,
        "client_id" => $oauth2_client_id,
        "client_secret" => $oauth2_secret,
        "redirect_uri" => $oauth2_redirect,
        "grant_type" => "authorization_code"
    );
 
	// build a new HTTP POST request
    $request = new HttpPost($url);
    $request->setPostData($params);
    $request->send();
	// decode the incoming string as JSON
    $responseObj = json_decode($request->getHttpResponse());
    $_SESSION["current_token"] = $responseObj->access_token;
    header('Location: getuserbalance.php');
//    $myfile = fopen("token.txt", "w") or die("Unable to open file!");
//    fwrite($myfile, $responseObj->access_token);
//    fclose($myfile);
//    header('Location: ' . $url_app.'/myapp/home.php');
	
}



?>
<?php 
 include "footer.php"; 
 ?>