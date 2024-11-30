<?php
    $system_name    =   $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
    $system_title   =   $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
    $address   =   $this->db->get_where('settings' , array('type'=>'address'))->row()->description;
    $phone   =   $this->db->get_where('settings' , array('type'=>'phone'))->row()->description;
    $email   =   $this->db->get_where('settings' , array('type'=>'system_email'))->row()->description;
    $text_align     =   $this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
    $account_type   =   $this->session->userdata('login_type');
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