<?php include 'includes/header.php';?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="insert_api_details.php" method="post">
              			
                <fieldset>
                  <legend>API DETAILS</legend>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">INSERT API DETAILS</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="api_code" name="api_code" placeholder="Insert Your 16Digit API Code" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">INSERT USER NAME</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Insert Your User Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">INSERT PASSWORD</label>
                    <div class="col-lg-6">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Insert Your Password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      <span class="help-block">Please Check Your Details Carefully. <div id="charNum"></div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg" name="submit_api">SUBMIT</button>
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
if (isset($_POST['submit_api'])) {
  $api_code = $_POST['api_code'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $insert_query = "INSERT INTO `api_details`
                      (`api_code`, `username`, `password`) 
                      VALUES 
                      ('$api_code','$username','$password')";
      
      $result = mysqli_query($con, $insert_query);
      if($result){
        echo "db insert success";
        }
      else{ 
        echo "ERROR";
        }
 print_r($insert_query);
}






?>

<?php 
  if(isset($_POST['login'])){
  
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    
    $sel_c = "select * from admin_user where pass='$password' AND user_name='$user_name'";
    
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