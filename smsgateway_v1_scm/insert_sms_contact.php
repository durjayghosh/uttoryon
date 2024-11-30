<?php include 'includes/header.php';?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="insert_sms_contact.php" method="post">
              			
                <fieldset>
                  <legend>INSERT SMS CONTACT</legend>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">SELECT GROUP NAME</label>
                    <div class="col-lg-6">
                  <select class="form-control" name="group_name" id="group_name" data-rel="chosen" value="displaynone">
                  <option value="Default">Select A Group</option>
                  <?php 

                        $select_group = "SELECT * FROM sms_group";
              $q= mysqli_query($con,$select_group);
              while ($row=mysqli_fetch_array($q)) {
                 $group_id = $row['group_id'];
                 $group_name = $row['group_name'];
            ?>
                    <option value="<?php echo "$group_name"; ?>"><?php echo "{$group_name}"; ?></option>
                    <?php }?>
                  </select></div>
                  <br>

                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Contact Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Insert Contact Person/Company Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Phone No</label>
                    <div class="col-lg-6">
                      <input type="tel" class="form-control" id="phone_no" name="phone_no" placeholder="Insert Phone No." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Email Address</label>
                    <div class="col-lg-6">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Insert Email Address (If Any)" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Address</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="address" name="address" placeholder="Insert Address (Optional)" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      <span class="help-block">Please Check Your Details Carefully. <div id="charNum"></div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg" name="submit_contact">SUBMIT</button>
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
if (isset($_POST['submit_contact'])) {
  $group_name = $_POST['group_name'];
  $contact_name = $_POST['contact_name'];
  $phone_no = $_POST['phone_no'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  

  $insert_query = "INSERT INTO `sms_contact`
                      (`group_name`,`contact_name`,`phone_no`,`email`,`address`) 
                      VALUES 
                      ('$group_name','$contact_name','$phone_no','$email','$address')";
      
      $result = mysqli_query($con, $insert_query);
      if($result){
        echo "<div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>×</button>
  <center><strong>Well done!</strong> CONTACT ADDED SUCCESS<a href='#' class='alert-link'></a>.</center>
</div>";
        header("refresh:2;url=sms_contact_list.php");
        }
      else{ 
        echo "ERROR";
        }
 print_r($insert_query);
}






?>

