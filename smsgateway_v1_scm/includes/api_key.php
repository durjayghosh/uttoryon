

<?php include 'includes/connect.php';

$select_api = "SELECT * FROM api_details";
$q= mysqli_query($con,$select_api);
while ($row=mysqli_fetch_array($q)) {
	 $api_code = $row['api_code'];
	 $username = $row['username'];
	 $password = $row['password'];
	 }

?>

						<input type="hidden" name="api_code" value="<?php echo "$api_code"; ?>">
						<input type="hidden" name="username" value="<?php echo "$username"; ?>">
						<input type="hidden" name="password" value="<?php echo "$password"; ?>">