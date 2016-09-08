<?php
error_reporting(0);

if($_SERVER['SERVER_NAME'] == "localhost"){
    $oauth2_client_id = 'NTdhZjBlNTIxN2M1OTVl';
    $oauth2_secret = 'c76501906f293f4154b938c2e35137ba0ff65137';
    $url_host = "http://localhost";    
    $url_app = $url_host.'/oauthapp';
    $url_oauth_server = $url_host.'/oauthserver';
    $oauth2_redirect = $url_app.'/response.php';
}elseif($_SERVER['SERVER_NAME'] == "cloud-height.com"){
	$oauth2_client_id = 'NTdiMWRlZWUyNTI1ZTBm';
    $oauth2_secret = 'e03fdeffaed9c394729ea7e8ebdb430cd1d89d72';
    $url_host = "http://cloud-height.com";
    $url_app = $url_host.'/OAuth2/OAuth2-Client';
    $url_oauth_server = $url_host.'/OAuth2/OAuth2-Server';
    $url_app = 'http://cloud-height.com/OAuth2/OAuth2-Client';
    $oauth2_redirect = $url_app.'/response.php';
}else{
    $oauth2_client_id = 'NTdhZjljMjY1YzVlYmYw';
    $oauth2_secret = 'db0dad89adfcc7ca6f7a090f083b7a31235a4bf6';

    $url_host = 'http://cb462851.ngrok.io';
    $url_app = $url_host.'/oauthapp';
    $url_oauth_server = $url_host.'/oauthserver';
    $oauth2_redirect = $url_app.'/response.php';
    
}
?>