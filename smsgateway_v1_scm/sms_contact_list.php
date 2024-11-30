<?php include 'includes/header.php'; 
      include 'includes/schoolms_connect.php';
      
       ?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              
              			
                <fieldset>
                  <legend>SMS CONTACT LIST</legend>
                  <div class="form-group">
                    
                    <div class="col-lg-12">
                      <table class="table table-striped table-hover ">
                      <thead>
                        <tr class="info">
                          <th>SERIAL</th>
                          <th>GROUP NAME</th>
                          <th>CONTACT NAME</th>
                          <th>PHONE NO.</th>
                          <th>EMAIL</th>
                          <th>ADDRESS</th>
                          <th>EDIT</th>
                          <th>DELETE</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                     
                                            $n=1;
                                            $select_contact = "SELECT * FROM sms_contact";
                                              $q= mysqli_query($con,$select_contact);
                                              while ($row=mysqli_fetch_array($q)) {
                                                                                                 
                                                 
                              
                    ?>
                         <tr class="success">
                          <td><?php echo $n++; ?></td>
                          <td><?php echo $row['group_name']; ?></td>
                          <td><?php echo $row['contact_name']; ?></td>
                          <td><?php echo $row['phone_no']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['address']; ?></td>
                          <td> <a href="view_contact_details.php?edit=<?php echo $row['id']; ?>">EDIT</a></td>
                          <td><a href="sms_contact_list.php?delete=<?php echo $row['id']; ?>">DELETE</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      </table>
                    </div>
                  </div>
                  
                  
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    
                  
                  
                  </div>
                </fieldset>
              </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>

          <?php include 'includes/footer.php' ?>
    
  
  </body>

</html>

<?php 
if (isset($_GET['delete'])) {
  $contact_id_d = $_GET['delete'];
  

  $delete_query = "DELETE FROM `sms_contact` WHERE id='$contact_id_d'";
      
      $result = mysqli_query($con, $delete_query);
      if($result){
        echo "<div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>×</button>
  <center><strong>Well done!</strong> CONTACT DELETE SUCCESS<a href='#' class='alert-link'></a>.</center>
</div>";
        header("refresh:2;url=sms_contact_list.php");
        }
      else{ 
        echo "ERROR";
        }
 //print_r($update_query);
}

?>

