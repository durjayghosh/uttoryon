
<?php include 'includes/header.php';
      include 'functions/csvtoarray.php'; 

      ?>


<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              
              			
              			
                <fieldset>
                  <legend>Send Bulk SMS From CSV File</legend>
                  <div class="form-group">
                    
                  </div>

                  <div class="form-group">
                          <label for="select" class="col-lg-4 control-label">Selects CSV File</label>
                          <div class="col-lg-6">
                <form action="bulk_sms_csv.php" method="post" enctype="multipart/form-data" autocomplete="on">

                          <input type="file" name="csv_file">
                          <span class="help-block">Upload a CSV File. Example of CSV File please <a href="uploads/csv/csvfile.csv">DOWNLOAD</a>  </span>
                          <input class="btn btn-success btn-lg" type="submit" name="upload_csv" value="UPLOAD CSV">
                </form>
                </div>
                  </div>

                <?php 

if(isset($_POST['upload_csv']))
{
                  $csv_file = $_FILES['csv_file']['name'];
                  $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
                            if(in_array($_FILES['csv_file']['type'],$mimes)){
                             $csv_tmp = $_FILES['csv_file']['tmp_name'];
                              move_uploaded_file($csv_tmp,"uploads/csv/$csv_file"); ?>

                              <form class="form-horizontal" action="check_api.php" method="post">
                              <?php include 'includes/api_key.php' ?>
                              <input type="hidden" name="http://technoflicker.com/smsgateway/check_api.php" value="bulk_sms">
                    <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Selects Multiple Numbers [USE 'Ctrl' Key]</label>
                            <div class="col-lg-6">
                  
                      <select multiple="multiple" class="form-control" name="mobile_no[]" id="select_class" data-rel="chosen" value="displaynone">
                      <?php
                      $csvtoarray= csv_to_array('uploads/csv/'.$csv_file);

                      foreach($csvtoarray as $value){ 
                          
                      ?>              
                      <option value="<?php echo "{$value['number']}"; ?>"><?php echo " ContactNo. {$value['number']}"; ?></option>
                      <?php }?>
                      </select></div>
                  <br>

                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label">SMS Content</label>
                    <div class="col-lg-6">
                      <textarea class="form-control" rows="3" id="field" onkeyup="countChar(this)" name="message" placeholder="Enter Your Message" ></textarea>
                      <span class="help-block">One Sms 260 Character. <div id="charNum">Character Left:</div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg">Send SMS</button>
                    </div>
                  </div>
                </fieldset>
              </form>

                            
                           <?php } 


                            else {
                              die("Sorry, mime type not allowed! Only CSV File Allowed");
                            }
                  
                                      
                                    
}


                ?>
                          


                    
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>

          <?php include 'includes/footer.php' ?>
    <script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 260) {
          val.value = val.value.substring(0, 260);
        } else {
          $('#charNum').text(260 - len);
        }
      };
    </script>
  
  </body>

</html>

