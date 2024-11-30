<?php include 'includes/header.php'; ?>

<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="http://technoflicker.com/smsgateway/check_api.php" method="post">
              			<?php include 'includes/api_key.php' ?>
              			<input type="hidden" name="page_name" value="bulk_sms">
                <fieldset>
                  <legend>Send Single/Bulk SMS To Contact Address</legend>
                  <div class="form-group">
                    
                  </div>

	                  <div class="form-group">
					      <label for="select" class="col-lg-4 control-label">Selects Single/Multiple Contact/s [USE 'Ctrl' Key]</label>
					      <div class="col-lg-6">
					        <select multiple="multiple" class="form-control" name="mobile_no[]" id="select_class" data-rel="chosen" value="displaynone">
					        
					        <?php 

                  			$select_contact = "SELECT * FROM sms_contact";
							         $q= mysqli_query($con,$select_contact);
							         while ($row=mysqli_fetch_array($q)) {
								      $contact_name = $row['contact_name'];
								      $phone_no = $row['phone_no'];
						?>
					          <option value="<?php echo "$phone_no"; ?>"><?php echo "{$contact_name} ContactNo. {$phone_no}"; ?></option>
					          <?php }?>
					        </select></div>
					        <br>

					        
                  <div class="form-group">
                    <label for="textArea" class="col-lg-4 control-label">SMS Content</label>
                    <div class="col-lg-6">
                      <textarea class="form-control" rows="3" id="field" onkeyup="countChar(this)" name="message" placeholder="Enter Your Message" required></textarea>
                      <span class="help-block">One Sms 260 Character. <div id="charNum">Character Left:</div></span>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                      <button type="submit" class="btn btn-primary btn-lg">Send SMS</button>
                    </div>
                  </div>
                </fieldset>
              </form>
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

