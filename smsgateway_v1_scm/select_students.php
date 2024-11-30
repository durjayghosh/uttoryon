<?php
include("includes/connect.php");
 
echo $class_id = $_POST['class_id'];
	$student_id = $_POST['student_id'];
	
	
	//echo "<option>Please Select</option>";
 	$select_sme ="SELECT * FROM student where class_id='$class_id'";
	$run_q = mysqli_query($con,$select_sme);
	while($row=mysqli_fetch_array($run_q)){
		
		
	echo "
			
			<option value={$row['phone']}>{$row['name']} Contact No.:- {$row['phone']}</option>"
			;
		}

	
	

?>