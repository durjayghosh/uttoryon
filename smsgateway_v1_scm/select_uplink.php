<?php
include("includes/connect.php");
 
echo $class_id = $_POST['class_id'];
	$student_id = $_POST['student_id'];
	
	
	echo "<option>Please Select</option>";
 	$select_sme ="SELECT * FROM student where class_id='$class_id'";
	$run_q = mysqli_query($con,$select_sme);
	while($row=mysqli_fetch_array($run_q)){
		
		
	echo "
			
			<option value=".$row['student_id'].">".$row['name']."</option>"
			;
		}

	$select_parent ="SELECT * FROM parent where student_id='$student_id'";
	$run_qp = mysqli_query($con,$select_parent);
	while($row_p=mysqli_fetch_array($run_qp)){
		
	echo "<option value='{$row_p['phone']}'>{$row_p['name']} contact No. {$row_p['phone']}</option>";
		}
	

?>