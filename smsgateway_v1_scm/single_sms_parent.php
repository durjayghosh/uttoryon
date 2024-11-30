<?php include 'includes/header.php'; ?>



<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="http://technoflicker.com/smsgateway/check_api.php" method="post">
              			<?php include 'includes/api_key.php' ?>
              			<input type="hidden" name="page_name" value="single">
                <fieldset>
                  <legend>Send Single SMS To Parent</legend>
                  <div class="form-group">
                    
                  </div>

	                  <div class="form-group">
					      <label for="select" class="col-lg-4 control-label">Selects Class</label>
					      <div class="col-lg-6">
					        <select class="form-control" name="select_class" id="select_class" data-rel="chosen" value="displaynone">
					        <option value="displaynone">Select A Class</option>
					        <?php 

                  			$select_class = "SELECT * FROM class";
							$q= mysqli_query($con,$select_class);
							while ($row=mysqli_fetch_array($q)) {
								 $class_name = $row['name'];
								 $class_id = $row['class_id'];
						?>
					          <option value="<?php echo "$class_id"; ?>"><?php echo "$class_name"; ?></option>
					          <?php }?>
					        </select></div>
					        <br>
					        <div class="form-group">
            				<label for="select_student" class="col-lg-4 control-label">Selects Parent Mobile No.</label>
            				<div class="col-lg-6">
				           		 	
				                    <td><select class="form-control" id="select_student" name="select_student" style="display:none">
										<select>
									</td>

									<td><select class="form-control" id="parent_name" name="mobile_no" style="display:none">
										<select>
									</td>
				            
				            

				             <script type="text/jscript">
										$(document).ready(function(){
											
											$('#select_class').change(function(){
												
												var value=$(this).val();
												
													if(value=="displaynone"){
														//alert(value);
														$('#select_student').hide();
														$('#tl_td').hide();
														}else{
																//alert(value);
																$('#select_student').show();
																$('#tl_td').show();
																$.post('select_uplink.php', {class_id:value}, function(data){
																	$('#select_student').html(data);
																	
																	});
															
															}
												
												});
											
											});
            
            
            </script>

             <script type="text/jscript">
										$(document).ready(function(){
											
											$('#select_student').change(function(){
												
												var value=$(this).val();
												
													if(value=="displaynone"){
														//alert(value);
														$('#parent_name').hide();
														$('#tl_td').hide();
														}else{
																//alert(value);
																$('#top_link').show();
																$('#parent_name').show();
																$.post('select_uplink.php', {student_id:value}, function(data){
																	$('#parent_name').html(data);
																	
																	});
															
															}
												
												});
											
											});
            
            
            </script>
					      </div></div>
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

