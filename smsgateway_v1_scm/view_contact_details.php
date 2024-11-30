<?php include 'includes/header.php'; 
      include 'includes/schoolms_connect.php';
      if (isset($_GET['edit'])) {
       
   echo   $contact_id = $_GET['edit'];
                    
      $select_contact = "SELECT * FROM sms_contact WHERE id='$contact_id'";
      $q= mysqli_query($con,$select_contact);
      while ($row=mysqli_fetch_array($q)) {
     echo   $contact_name=$row['contact_name'];
            $phone_no=$row['phone_no'];
            $email=$row['email'];
            $address=$row['address'];
            
         
         }
 ?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="view_contact_details.php?update_id=<?php echo "$contact_id"; ?>" method="post">
                    
                <fieldset>
                  <legend>INSERT SMS CONTACT</legend>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">SELECT GROUP NAME</label>
                    <div class="col-lg-6">
                  <select class="form-control" name="group_name" id="group_name" data-rel="chosen" value="displaynone">
                  <option value="Default">Select A Group</option>
                  <?php 

                        $select_group = "SELECT * FROM sms_group";
                        $qc= mysqli_query($con,$select_group);
                        while ($r=mysqli_fetch_array($qc)) {
                        $group_id = $r['group_id'];
                        $group_name = $r['group_name'];
            ?>
                    <option value="<?php echo "$group_name"; ?>"><?php echo "{$group_name}"; ?></option>
                    <?php }?>
                  </select></div>
                  <br>

                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Contact Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Insert Contact Person/Company Name" required value="<?php echo $contact_name; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Phone No</label>
                    <div class="col-lg-6">
                      <input type="tel" class="form-control" id="phone_no" name="phone_no" placeholder="Insert Phone No." required value="<?php echo $phone_no; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Email Address</label>
                    <div class="col-lg-6">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Insert Email Address (If Any)" value="<?php echo $email; ?>" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputMobile" class="col-lg-4 control-label">Address</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="address" name="address" placeholder="Insert Address (Optional)" value="<?php echo $address; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      <span class="help-block">Please Check Your Details Carefully. <div id="charNum"></div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg" name="update_contact">UPDATE</button>
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
if (isset($_POST['update_contact'])) {
    $contact_id_u = $_GET['update_id'];
    $group_name_u = $_POST['group_name'];
    $contact_name_u = $_POST['contact_name'];
    $phone_no_u = $_POST['phone_no'];
    $email_u = $_POST['email'];
    $address_u = $_POST['address'];
    
   
  

  $update_query = "UPDATE `sms_contact` SET `group_name`='$group_name_u', 
                                            `contact_name`='$contact_name_u',
                                            `phone_no`='$phone_no_u',
                                            `email`='$email_u',
                                            `address`='$address_u' 
                                            WHERE id='$contact_id_u'";
      
      $result = mysqli_query($con, $update_query);
      if($result){
        echo "<div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>×</button>
  <center><strong>Well done!</strong> CONTACT DETAILS UPDATE SUCCESS<a href='#' class='alert-link'></a>.</center>
</div>";
        header("refresh:2;url=sms_contact_list.php");
        }
      else{ 
        echo "ERROR";
        }
 //print_r($update_query);
}

?>

