<?php 
ob_start();
session_start(); 
if(!isset($_SESSION['user_name']))
{
header("location: login.php");	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SMS Management Sysytem</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php 

	include 'includes/nav_bar.php'; 
	include 'includes/connect.php';
	
?>