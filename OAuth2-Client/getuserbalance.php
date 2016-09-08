<?php

 @session_start();
 require "config.php";
 require "functions.php";
 include "header.php"; 
 include "left.php";
//echo date("Y-m-d h:i:s",1473708297);exit;
// index.php
//http://localhost/cakephpapi/oauth/authorize?client_id=1&client_secret=test&response_type=code&redirect_uri=test&redir=oauth
require('HttpPost.class.php');
if($_SESSION["current_token"]){
$url = $url_oauth_server.'/biz-user-balance/userbalance?access_token='.$_SESSION["current_token"];

//echo $url;exit;

$request = new HttpPost($url);
$request->send();
    // decode the incoming string as JSON
//print_r($request->getHttpResponse());exit;
$responseObj = json_decode($request->getHttpResponse());
}
?>
<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>REST API</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Login</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">

					<!-- right column -->
                                        <?php if($_SESSION["current_token"]){?>
					<div class="col-md-12">
                                                    <div class="box box-info">
                                                                <div class="box-header with-border">
                                                                        <h3 class="box-title">User Balance: <?php echo $responseObj->biz_user_name;?></h3>
                                                                </div>
                                                        <div class="box-body">
                                                                        <div class="row">

                                                                                <!-- right column -->
                                                                                <div class="col-md-7">
                                                                                    Balance : <?php echo $responseObj->balance;?>
                                                                                </div>
                                                                        </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-md-12">
                                                    <div class="box box-info">
                                                                <div class="box-header with-border">
                                                                        <h3 class="box-title">User Balance</h3>
                                                                </div>
                                                        <div class="box-body">
                                                                        <div class="row">

                                                                                <!-- right column -->
                                                                                <div class="col-md-7">
                                                                                    Balance : You need to <a href="oauthlogin.php">Oauth Login</a>
                                                                                </div>
                                                                        </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <?php } ?>
                        </section>
</div>
<?php
include "footer.php"; 
?>

