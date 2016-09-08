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
 	
 	 
 	 
 }

 ?>
 <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>REST API</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Get Access Token</li>
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
								<h3 class="box-title">Get Access Token</h3>
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
													Secret</label>

												<div class="col-sm-10">
													<input type="text" name="api_secret" class="form-control"
														id="api_secret" placeholder="API Secret" value="<?php echo API_SECRET;?>">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-info pull-left">Generate
														Token</button>
												</div>
											</div>
											<?php 
											
											
											
											if(!empty($result)){
												if($result[API_STATUS_STR] == API_SUCCESS_CODE)	{	

													$_SESSION["current_token"] = $result[API_DATA_STR];
												
												?>
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<p>
														<strong>Generated Access Token :</strong> <?php echo $result[API_DATA_STR]; ?>
													</p>
												</div>
											</div>
											<?php } else { ?>
											
											
											
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<p>
														<strong>Error Description :</strong> <?php echo $result[API_DATA_STR]; ?>
													</p>
												</div>
											</div>
											
											
											
											<?php  }
											
											} ?>
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
				</div>
				<!-- /.row -->

				 
			</section>
			<!-- /.content -->
		</div> 
<?php 
 include "footer.php"; 
 ?>