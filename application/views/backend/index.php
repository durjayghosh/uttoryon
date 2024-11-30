<?php
	$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
	$account_type 	=	$this->session->userdata('login_type');

	?>						
						
						<!-- start: FIRST SECTION -->
						
										<?php include $account_type.'/'.$page_name.'.php';?>
											
						<!-- end: FIRST SECTION -->
						
	

<?php include 'modal.php';?>