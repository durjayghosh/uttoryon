<?php
$system_name = $this->db->get_where('settings', ['type' => 'system_name'])->row();
$system_title = $this->db->get_where('settings', ['type' => 'system_title'])->row();
$address = $this->db->get_where('settings', ['type' => 'address'])->row();
$phone = $this->db->get_where('settings', ['type' => 'phone'])->row();
$email = $this->db->get_where('settings', ['type' => 'system_email'])->row();
$text_align = $this->db->get_where('settings', ['type' => 'text_align'])->row();
$facebook = $this->db->get_where('settings', ['type' => 'facebook'])->row();
$twitter = $this->db->get_where('settings', ['type' => 'twitter'])->row();

// Use null coalescing operator or ternary to handle nulls
$system_name = $system_name->description ?? 'Default System Name';
$system_title = $system_title->description ?? 'Default System Title';
$address = $address->description ?? 'Default Address';
$phone = $phone->description ?? 'Default Phone';
$email = $email->description ?? 'Default Email';
$text_align = $text_align->description ?? 'left';
$facebook = $facebook->description ?? '';
$twitter = $twitter->description ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$system_name?></title>
	<!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/site/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/site/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/site/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/site/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/site/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/site/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/site/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/site/css/responsive.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/site/js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/site/js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/site/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/site/images/ico/favicon.ico">
</head><!--/head-->
<body id="home" class="homepage">