<?php include 'includes/header.php'; 
      
      $select_api = "SELECT * FROM api_details";
      $q= mysqli_query($con,$select_api);
      while ($row=mysqli_fetch_array($q)) {
         $api_code = $row['api_code'];
         $username = $row['username'];
         $password = $row['password'];
         }
 ?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="view_api_details.php" method="post">
              			
                <fieldset>
                  <legend>VIEW/EDIT API DETAILS</legend>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label"> API CODE</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="api_code" name="api_code" value="<?php echo "$api_code"; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">USER NAME</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="username" name="username" value="<?php echo "$username"; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">PASSWORD</label>
                    <div class="col-lg-6">
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo "$password"; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      <span class="help-block">Please Check Your Details Carefully. <div id="charNum"></div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg" name="update_api">UPDATE</button>
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
if (isset($_POST['update_api'])) {
  $api_code_u = $_POST['api_code'];
  $username_u = $_POST['username'];
  $password_u = $_POST['password'];

  $update_query = "UPDATE `api_details` SET `api_code`='$api_code_u',`username`='$username_u',`password`='$password_u'";
      
      $result = mysqli_query($con, $update_query);
      if($result){
        echo "<div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>×</button>
  <center><strong>Well done!</strong> API DETAILS UPDATE SUCCESS<a href='#' class='alert-link'></a>.</center>
</div>";
        header("refresh:2;url=view_api_details.php");
        }
      else{ 
        echo "ERROR";
        }
 //print_r($update_query);
}

?>

