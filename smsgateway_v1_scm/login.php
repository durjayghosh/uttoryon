<?php  ob_start();
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>SMS MANAGEMENT SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
<?php //include 'includes/nav_bar.php';
      include 'includes/connect.php';
 ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <CENTER><a class="navbar-brand" href="<?php echo $base_url;?>admin/dashboard">DASHBOARD</a></CENTER>
    </div>

    
    </div>
  </div>
</nav>
<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="login.php" method="post" autocomplete="off">
              <input style="display:none;" type="text" name="autocomplete_off1" />
              <input style="display:none;" type="password" name="autocomplete_off2" />
              			
                <fieldset>
                  <legend>Login</legend>
                  
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">INSERT USER NAME</label>
                    <div class="col-lg-6">
                      <input type="text" autocomplete="off" class="form-control" id="username" name="username" placeholder="Insert Your User Name" required="required" value=""  />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">INSERT PASSWORD</label>
                    <div class="col-lg-6">
                      <input type="password" autocomplete="off" class="form-control" id="password" name="password" placeholder="Insert Your Password" required="required" value="" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      <span class="help-block">Please Check Your Details Carefully. <div id="charNum"></div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg" name="login">LOGIN</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>

          <?php include 'includes/footer.php' ?>
    
  
  </body>

</html>

<?php 
  if(isset($_POST['login'])){
  
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    
    $sel_c = "select * from api_details where password='$password' AND username='$user_name'";
    
    $run_c = mysqli_query($con, $sel_c);
    
    $check_admin = mysqli_num_rows($run_c); 
    
    if($check_admin==0){
    
    echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
    exit();
    }
    
    else {
    $_SESSION['user_name']=$user_name; 
    
    echo "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>×</button>
                    <strong>Well done $user_name!</strong> You logged in successfully, Thanks!.
                </div>";
        header( "refresh:2;url=index.php" );
    
    
    
    }
  }
  
  
  ?>