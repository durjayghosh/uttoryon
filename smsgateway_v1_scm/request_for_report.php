<?php include 'includes/header.php'; ?>



<div class="col-md-3">

</div>

<div class="col-md-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="request_for_report.php" method="post">
              			<?php include 'includes/api_key.php' ?>
              			<input type="hidden" name="page_name" value="report_request">
                <fieldset>
                  <legend>Request For Report</legend>
                  <div class="form-group">
                    
                  </div>

	                  <div class="form-group">
					      <label for="select" class="col-lg-4 control-label">Selects Report Period</label>
					      <div class="col-lg-6">
					        <select class="form-control" name="req_report" id="req_report" data-rel="chosen" value="displaynone">
					        <option value="displaynone">Select Report</option>
					        <option value="<?php echo "$username"; ?>">Last 10 Send SMS Report</option></select>
					        </div>
					        <br>
					        <div class="form-group">
            				
            				<div class="col-lg-12">
				           		 	
				                    <div id="display_report" name="display_report" style="display:none"></div>
								
				            
				            

				             <script type="text/jscript">
										$(document).ready(function(){
											
											$('#req_report').change(function(){
												
												var value=$(this).val();
												
													if(value=="displaynone"){
														//alert(value);
														$('#display_report').hide();
														$('#tl_td').hide();
														}else{
																//alert(value);
																$('#display_report').show();
																$('#tl_td').show();
																$.post('http://technoflicker.com/smsgateway/sms_report.php', {username:value}, function(data){
																	$('#display_report').html(data);
																	
																	});
															
															}
												
												});
											
											});
            
            
            </script>
					      </div></div></div>
                  
                  
                  </div></div>
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

