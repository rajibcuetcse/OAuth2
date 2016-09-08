 <?php 
 @session_start();
 require "config.php";
 require "functions.php";
 include "header.php"; 
 include "left.php";
 //http://localhost/ExcelSoftwareServices/v1/customers/getAccessToken.json
 
 if(isset($_POST["api_key"])){
 	$api_key = $_POST["api_key"];
 	$api_secret = $_POST["api_secret"]; 

 	//call server to generate token
 	
 	$result = getAccessToken($api_key,$api_secret);
 	
 	 
 	 
 }?>
 <!-- Content Wrapper. Contains page content -->
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
					<div class="col-md-12">
						<!-- Horizontal Form -->
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Oauth Login</h3>
							</div>
							<!-- /.box-header -->
							<!-- form start -->
                                                        <?php 
											
											
											
											if(!$_SESSION["current_token"]){
                                                        ?>
                                                        <form class="form-horizontal" method="post" action="oauthlogin.php">
								<div class="box-body">
									<div class="row">

										<!-- right column -->
										<div class="col-md-7">
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-info pull-left">Oauth Login</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer"></div>
								<!-- /.box-footer -->
							</form>
                                                        <?php 
                                                        }else{
                                                            ?>
                                                        <form class="form-horizontal" method="post" action="getuserbalance.php">
                                                            <div class="box-body">
                                                                <div class="row">

                                                                        <!-- right column -->
                                                                        <div class="col-md-7">
                                                                                <div class="form-group">
                                                                                        <div class="col-sm-offset-2 col-sm-10">
                                                                                                <button type="submit" class="btn btn-info pull-left">Get User Balance</button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php
                                                        }
                                                        ?>
						</div>
						<!-- /.box -->

					</div>
					<!--/.col (right) -->
				</div>
				<!-- /.row -->

				 
			</section>
			<!-- /.content -->
		</div> 
<?php 
 include "footer.php"; 
 ?>

 