<?php include 'includes/header.php'; 
      include 'includes/schoolms_connect.php';
      
      if (isset($_GET['edit'])) {
       
      $group_id = $_GET['edit'];
      $select_group = "SELECT * FROM sms_group WHERE group_id='$group_id'";
      $q= mysqli_query($con,$select_group);
      while ($row=mysqli_fetch_array($q)) {
         $group_name = $row['group_name'];
         
         }
 ?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="view_group_details.php?update_id=<?php echo "$group_id"; ?>" method="post">
              			
                <fieldset>
                  <legend>EDIT GROUP</legend>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label"> Group Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="group_name" name="group_name" value="<?php echo "$group_name"; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      <span class="help-block">Please Check Your Details Carefully. <div id="charNum"></div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg" name="update_group">UPDATE</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>

          <?php include 'includes/footer.php' ?>
  <?php } ?>  
  
  </body>

</html>

<?php 
if (isset($_POST['update_group'])) {
  $group_name_u = $_POST['group_name'];
   $group_id_u = $_GET['update_id'];
  

  $update_query = "UPDATE `sms_group` SET `group_name`='$group_name_u' WHERE group_id='$group_id_u'";
      
      $result = mysqli_query($con, $update_query);
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
 //print_r($update_query);
}

?>

