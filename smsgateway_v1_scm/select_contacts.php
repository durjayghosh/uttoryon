

<?php
include("includes/connect.php");
 
 echo	$group_name = $_POST['select_group'];
	
	
	
	//echo "<option>Please Select</option>";
 	$select_sme ="SELECT * FROM sms_contact where group_name='$group_name'";
	$run_q = mysqli_query($con,$select_sme);
	while($row=mysqli_fetch_array($run_q)){
		
		
	echo "
			
			<option value={$row['phone_no']}>{$row['contact_name']} Contact No.:- {$row['phone_no']}</option>"
			;
		}

	
	

?>