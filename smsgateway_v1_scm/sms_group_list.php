<?php include 'includes/header.php'; 
      
      
      $select_group = "SELECT * FROM sms_group";
      $q= mysqli_query($con,$select_group);
      while ($row=mysqli_fetch_array($q)) {
         $group_id = $row['group_id'];
         $group_name = $row['group_name'];
         
         }
 ?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              
              			
                <fieldset>
                  <legend>SMS GROUP LIST</legend>
                  <div class="form-group">
                    
                    <div class="col-lg-12">
                      <table class="table table-striped table-hover ">
                      <thead>
                        <tr class="info">
                          <th>SERIAL</th>
                          <th>GROUP NAME</th>
                          <th>EDIT</th>
                          <th>DELETE</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                     
                                            $n=1;
                                            $select_group = "SELECT * FROM sms_group";
                                              $q= mysqli_query($con,$select_group);
                                              while ($row=mysqli_fetch_array($q)) {
                                                 $group_id = $row['group_id'];
                                                 $group_name = $row['group_name'];
                                                 
                                                 
                              
                    ?>
                         <tr class="success">
                          <td><?php echo $n++; ?></td>
                          <td><?php echo "$group_name"; ?></td>
                          <td> <a href="view_group_details.php?edit=<?php echo "$group_id"; ?>">EDIT</a></td>
                          <td><a href="sms_group_list.php?delete=<?php echo "$group_id"; ?>">DELETE</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      </table>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label"></label>
                    <div class="col-lg-6">
                      
                      
                  
                  <div class="form-group">
                    
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
if (isset($_GET['delete'])) {
  $group_id_d = $_GET['delete'];
  

  $delete_query = "DELETE FROM `sms_group` WHERE group_id='$group_id_d'";
      
      $result = mysqli_query($con, $delete_query);
      if($result){
        echo "<div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>×</button>
  <center><strong>Well done!</strong> GROUP DELETE SUCCESS<a href='#' class='alert-link'></a>.</center>
</div>";
        header("refresh:2;url=sms_group_list.php");
        }
      else{ 
        echo "ERROR";
        }
 //print_r($update_query);
}

?>

