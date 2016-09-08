 <?php 
 @session_start();
 require "config.php";
 require "functions.php";
 include "header.php"; 
 include "left.php";
 
 $api_token = "";
 if(isset($_SESSION["current_token"])){
 	$api_token = $_SESSION["current_token"];
 }
 
  
 //http://localhost/ExcelSoftwareServices/v1/customers/getAccessToken.json
 
 if(isset($_POST["api_key"])){
 	$api_key = $_POST["api_key"];
 	$api_token = $_POST["api_token"]; 

 	//call server to generate token
 	
 	$result = getProducts($api_key,$api_token);
 	 
 	 
 }

 ?>
 <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>REST API</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Get Products</li>
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
								<h3 class="box-title">Get Client Balance</h3>
							</div>
							<!-- /.box-header -->
							<!-- form start -->
							<form class="form-horizontal" method="post" action="">
								<div class="box-body">
									<div class="row">

										<!-- right column -->
										<div class="col-md-7">
											<div class="form-group">
												<label for="api_key" class="col-sm-2 control-label">API
													Key</label>

												<div class="col-sm-10">
													<input type="text" name="api_key" class="form-control"
														id="api_key" placeholder="API Key" value="<?php echo API_KEY;?>">
												</div>
											</div>
											<div class="form-group">
												<label for="api_secret" class="col-sm-2 control-label">API
													Token</label>

												<div class="col-sm-10">
													<input type="text" name="api_token" class="form-control"
														id="api_token" placeholder="API Token" value="<?php echo $api_token;?>">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-info pull-left">Get Client Balance</button>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer"></div>
								<!-- /.box-footer -->
							</form>
						</div>
						<!-- /.box -->

					</div>
					<!--/.col (right) -->
                                        <?php  
					if(!empty($result)){
                                            ?>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                                <p>
                                                        <strong>Balance :</strong> <?php echo $result['balance']; ?>
                                                </p>
                                        </div>
                                </div>
                                <?php
					
					} ?>

				</div>
				<!-- /.row --> 
				
				 
			</section>
			<!-- /.content -->
		</div> 
<?php 
 include "footer.php"; 
 ?>