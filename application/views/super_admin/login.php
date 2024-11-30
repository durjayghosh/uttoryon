<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<!-- start: HEAD -->
	<head>
		<title>SEBL SOFT4SCHOOL</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/super_admin/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/super_admin/vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/super_admin/vendor/themify-icons/themify-icons.min.css">
		<link href="<?php echo base_url(); ?>assets/super_admin/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url(); ?>assets/super_admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url(); ?>assets/super_admin/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/super_admin/assets/css/styles.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/super_admin/assets/css/plugins.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/super_admin/assets/css/themes/theme-1.css" id="skin_color" />

		<link href="<?php echo base_url(); ?>assets/super_admin/vendor/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url(); ?>assets/super_admin/vendor/sweetalert/ie9.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url(); ?>assets/super_admin/vendor/toastr/toastr.min.css" rel="stylesheet" media="screen">
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<!-- start: LOGIN -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
					
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.
							</p>
							<?php 
					          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
					          echo form_open("site/ajax_login", $attributes);?>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="email" placeholder="Username[registered email address]">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									<a class="forgot" href="login_forgot.html">
										I forgot my password
									</a> </span>
							</div>
							<div class="form-actions">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="remember" value="1">
									<label for="remember">
										Keep me signed in
									</label>
								</div>
								<button class="btn btn-primary pull-right">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
								</form>
							</div>
							<div class="new-account">
								Contact Your School Administartion for a new account
								<a href="login_registration.html">
									
								</a>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						&copy; <span class="current-year"></span><strong> School Management System</strong>. 
    Developed by 
	<a href="http://www.seoexpate.com" 
    	target="_blank">SEO Expate Bangladesh Ltd.</a>
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
			</div>
		</div>
		<!-- end: LOGIN -->
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/modernizr/modernizr.js"></script>
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/jquery-validation/jquery.validate.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="<?php echo base_url(); ?>assets/super_admin/assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="<?php echo base_url(); ?>assets/super_admin/assets/js/login.js"></script>
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/super_admin/vendor/toastr/toastr.min.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>

		<script>
			jQuery(document).ready(function() {
				Main.init();
				UINotifications.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
	<!-- end: BODY -->
</html>