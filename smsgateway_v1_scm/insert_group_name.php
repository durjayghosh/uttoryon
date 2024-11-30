<?php include 'includes/header.php';?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="insert_group_name.php" method="post">
              			
                <fieldset>
                  <legend>INSERT GROUP NAME</legend>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">INSERT GROUP NAME</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Insert Group Name" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      <span class="help-block">Please Check Your Details Carefully. <div id="charNum"></div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg" name="submit_group">SUBMIT</button>
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
if (isset($_POST['submit_group'])) {
  $group_name = $_POST['group_name'];
  

  $insert_query = "INSERT INTO `sms_group`
                      (`group_name`) 
                      VALUES 
                      ('$group_name')";
      
      $result = mysqli_query($con, $insert_query);
      if($result){
        echo "<div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>×</button>
  <center><strong>Well done!</strong> GROUP DETAILS UPDATE SUCCESS<a href='#' class='alert-link'></a>.</center>
</div>";
        header("refresh:2;url=sms_group_list.php");
        }
      else{ 
        echo "ERROR";
        }
 //print_r($insert_query);
}






?>

