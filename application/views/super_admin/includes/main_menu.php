<?php $page_name = $this->router->fetch_method();







$success = $this->input->get('success');

$hula = $this->input->get('hula');

//$success = 1;



if($success==1){echo '<BODY onLoad=alertfy()>'; echo "$hula";} 



?>

<script>

    

function alertfy(){

    $(document).ready(function() {



 //toastr.success('Operation Success');

 swal({   title: "Operation Success!",   text: "",   timer: 2000,   showConfirmButton: true });



});



}

</script>

			<!-- sidebar -->

			<div class="sidebar app-aside" id="sidebar">

				<div class="sidebar-container perfect-scrollbar">

					<nav>

						<!-- start: SEARCH FORM -->

						<div class="search-form">

							<a class="s-open" href="#">

								<i class="ti-search"></i>

							</a>

							<form class="navbar-form" role="search">

								<a class="s-remove" href="#" target=".navbar-form">

									<i class="ti-close"></i>

								</a>

								<div class="form-group">

									<input type="text" class="form-control" placeholder="Search...">

									<button class="btn search-button" type="submit">

										<i class="ti-search"></i>

									</button>

								</div>

							</form>

						</div>

						<!-- end: SEARCH FORM -->

						<!-- start: MAIN NAVIGATION MENU -->

						<div class="navbar-title">

							<span>Main Navigation</span>

							<?php echo "$success";?>

						</div>

						<ul class="main-navigation-menu">

							<li class="<?php if($page_name == 'dashboard')echo 'active open';?>">

								<a href="<?php echo base_url();?>super_admin/dashboard">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-home"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('dashboard');?> </span>

										</div>

									</div>

								</a>

							</li>

							<li class="<?php if($page_name == 'admission_list')echo 'active open';?>">

								<a href="<?php echo base_url();?>super_admin/admission_list">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-home"></i>

										</div>

										<div class="item-inner">

											<span class="title"> Admission List </span>

										</div>

									</div>

								</a>

							</li>

							<!-- accounting menu -->
							<li class="<?php if($page_name == 'add_account' ||
												$page_name == 'edit_account' ||
												$page_name == 'add_chart_account' ||
												$page_name == 'edit_chart_account' ||
												$page_name == 'add_payment_method' ||
												$page_name == 'edit_payment_method' ||
												$page_name == 'add_income' ||
												$page_name == 'edit_income' ||
												$page_name == 'income_expense' ||	
												$page_name == 'income_expense_search' ||
												$page_name == 'income_report' ||	
												$page_name == 'income_report_search' ||	
												$page_name == 'expense_report' ||	
												$page_name == 'expense_report_search' ||
												$page_name == 'balance_check' ||	
												$page_name == 'balance_check_search' ||	




												$page_name == 'add_expense' ||	
												$page_name == 'edit_expense') 	


															echo 'active';?> ">

								<a href="javascript:void(0)">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-calculator"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('Manage Accounting');?> </span><i class="icon-arrow"></i>

										</div>

									</div>

								</a>

									<ul class="sub-menu">

									<nav id="cl-effect-14" class="links cl-effect-14">
									    
									    	<li class="<?php if($page_name == 'add_account')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/add_account">

											<span class="title"> <?php echo get_phrase('Add Account');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'add_chart_account')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/add_chart_account">

											<span class="title"> <?php echo get_phrase('Chart of Accounts');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'add_income')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/add_income">

											<span class="title"> <?php echo get_phrase('Income Process');?> </span>

										</a>

									</li>


									<li class="<?php if($page_name == 'add_expense')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/add_expense">

											<span class="title"> <?php echo get_phrase('Expense Process');?> </span>

										</a>

									</li>

									

									<li class="<?php if($page_name == 'add_payment_method')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/add_payment_method">

											<span class="title"> <?php echo get_phrase('Payment Methods');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'income_expense' || $page_name == 'income_expense_search')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/income_expense">

											<span class="title"> <?php echo get_phrase('Income V/S Expense');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'income_report' || $page_name == 'income_report_search')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/income_report">

											<span class="title"> <?php echo get_phrase('Income Report');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'expense_report' || $page_name == 'expense_report_search')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/expense_report">

											<span class="title"> <?php echo get_phrase('Expense Report');?> </span>

										</a>

									</li>


									<li class="<?php if($page_name == 'balance_check' || $page_name == 'balance_check_search')echo 'active';?>">

										<a href="<?php echo base_url(); ?>accounting/balance_check">

											<span class="title"> <?php echo get_phrase('Balance Check');?> </span>

										</a>

									</li>

									

									</nav>

									</ul>



							</li>
							<!-- end of accounting menu -->



							<li class="<?php  if(
												$page_name=='srdl_photo_gallery' ||
												$page_name=='srdl_video_gallery' ||
												$page_name == 'view_pages' || 
												$page_name=='home_banner' || 
												$page_name=='view_governing_body' || 
												$page_name=='ex_principal' || 
												$page_name=='view_ex_teacher' ||
												$page_name=='view_ex_principal' || 
												$page_name=='employee' || 
												$page_name=='view_employee' ||
												$page_name=='notice' ||
												$page_name=='view_notices' ||
												$page_name=='news' ||
												$page_name=='view_newses' ||
												$page_name=='event_calendar' ||
												$page_name=='gallary_upload' ||
												$page_name=='site_links' ||
												$page_name=='governing_body')echo 'active open';?>">

								<a href="javascript:void(0)">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-settings"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('Front CMS');?>  </span><i class="icon-arrow"></i>

										</div>

									</div>

								</a>

								

								<ul class="sub-menu">

								<nav id="cl-effect-14" class="links cl-effect-14">

									

									<li class="<?php if($page_name == 'srdl_photo_gallery')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/srdl_photo_gallery">

											<span class="title"> <?php echo get_phrase('SRDL Photo Gallery');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'srdl_video_gallery')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/srdl_video_gallery">

											<span class="title"> <?php echo get_phrase('SRDL Video Gallery');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'home_banner')echo 'active';?>">

									

										<a href="<?php echo base_url(); ?>super_admin/home_banner">

											<span class="title"> <?php echo get_phrase('Add/Edit Home Banner');?> </span>

										</a>

									

									</li>

									<li class="<?php if($page_name == 'view_pages')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_pages">

											<span class="title"> <?php echo get_phrase('View Pages');?> </span>

										</a>

									</li>

									
									<li class="<?php if($page_name == 'view_governing_body')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_governing_body">

											<span class="title"> <?php echo get_phrase('View Governing Body');?> </span>

										</a>

									</li>

									

									<li class="<?php if($page_name == 'view_ex_principal')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_ex_principal">

											<span class="title"> <?php echo get_phrase('View Retired Principal');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'view_ex_teacher')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_ex_teacher">

											<span class="title"> <?php echo get_phrase('View Retired Teachers');?> </span>

										</a>

									</li>

									
									<li class="<?php if($page_name == 'view_employee')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_employee">

											<span class="title"> <?php echo get_phrase('View Employee');?> </span>

										</a>

									</li>

									

									<li class="<?php if($page_name == 'view_notices')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_notices">

											<span class="title"> <?php echo get_phrase('View Notices');?> </span>

										</a>

									</li>

									

									<li class="<?php if($page_name == 'view_newses')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_newses">

											<span class="title"> <?php echo get_phrase('View News');?> </span>

										</a>

									</li>

									

									<li class="<?php if($page_name == 'event_calendar')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/event_calendar">

											<span class="title"> <?php echo get_phrase('View Events');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'gallary_upload')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/gallary_upload">

											<span class="title"> <?php echo get_phrase('Add/Edit Gallery');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'site_links')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/site_links">

											<span class="title"> <?php echo get_phrase('Add/Edit Site Links');?> </span>

										</a>

									</li>

								</nav>	

								</ul>



							</li>

							<li class="<?php if($page_name == 'sms_gateway')echo 'active open';?>">

								<a href="<?php echo base_url(); ?>super_admin/sms_gateway">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-layout-grid2"></i>

										</div>

										<div class="item-inner">

										

											<span class="title"> <?php echo get_phrase('SMS SYSTEM');?> </span>

										</div>

									</div>

								</a>

								

							</li>

							<li class="<?php if($page_name == 'student_add' || 

									$page_name == 'student_information' || 

										$page_name == 'student_marksheet')

											echo 'opened active has-sub';?>" >

								<a href="javascript:void(0)">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-user"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('student');?> </span><i class="icon-arrow"></i>

										</div>

									</div>

								</a>

								<ul class="sub-menu">

								<nav id="cl-effect-14" class="links cl-effect-14">

									<li <?php if($page_name == 'student_add')echo 'active';?> >

										<a href="<?php echo base_url();?>super_admin/student_add">

											<span class="title"> <?php echo get_phrase('admit_student');?> </span>

										</a>

									</li>



									<li class="<?php if($page_name == 'student_information')echo 'opened active';?> ">

										<a href="javascript:;">

											<span><i class="entypo-dot"></i> <?php echo get_phrase('student_information');?></span>

										</a>

				                        <ul>

				                        	<?php $classes	=	$this->db->get('class')->result_array();

											foreach ($classes as $row):?>

											<li class="<?php if ($page_name == 'student_information' ) echo 'active';?>">

												<a href="<?php echo base_url();?>super_admin/student_information/<?php echo $row['class_id'];?>">

													<b style="font-size:10px"><?php echo get_phrase('class');?> <?php echo $row['name'];?></b>

												</a>

											</li>

				                            <?php endforeach;?>

				                        </ul>

									</li>

									<!-- STUDENT MARKSHEET -->

										<li class="<?php if($page_name == 'student_marksheet')echo 'opened active';?> ">

											<a href="<?php echo base_url();?>super_admin/student_marksheet/<?php echo $row['class_id'];?>">

												<span><i class="entypo-dot"></i> <?php echo get_phrase('student_marksheet');?></span>

											</a>

					                        <ul>

					                        	<?php $classes	=	$this->db->get('class')->result_array();

												foreach ($classes as $row):?>

												<li class="<?php if ($page_name == 'student_marksheet') echo 'active';?>">

													<a href="<?php echo base_url();?>super_admin/student_marksheet/<?php echo $row['class_id'];?>">

														<b style="font-size:10px"><?php echo get_phrase('class');?> <?php echo $row['name'];?></b>

													</a>

												</li>

					                            <?php endforeach;?>

					                        </ul>

								

										</li>

										</nav>

								</ul>

							</li>

							<li class="<?php if($page_name == 'teacher')echo 'active open';?>">



								<a href="<?php echo base_url();?>super_admin/teacher">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-layers-alt"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('teacher');?> </span>

										</div>

									</div>

								</a>

								

							</li>

							<li class="<?php if($page_name == 'parent')echo 'opened active';?>">

								<a href="javascript:void(0)">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-package"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('parent');?> </span><i class="icon-arrow"></i>

										</div>

									</div>

								</a>

								<ul class="sub-menu">

								<nav id="cl-effect-14" class="links cl-effect-14">

									<li class="<?php if($page_name == 'parent')echo 'active';?> ">

										<a href="<?php echo base_url();?>super_admin/parent">

											<i class="entypo-user"></i>

											<span><?php echo get_phrase('add_parent');?></span>

										</a>

									</li>

									<li class="<?php if($page_name == 'parent')echo 'opened active';?> ">

										<a href="javascript:void(0)">

											<i class="entypo-user"></i>

											<span><?php echo get_phrase('Class Wise');?></span>

										</a>

						                <ul>

											<?php $classes	=	$this->db->get('class')->result_array();

						                    foreach ($classes as $row):?>

						                    <li class="<?php if ($page_name == 'parent') echo 'active';?>">

						                        <a href="<?php echo base_url();?>super_admin/parent/<?php echo $row['class_id'];?>">

						                            <b style="font-size:10px"><?php echo get_phrase('class');?> <?php echo $row['name'];?></b>

						                        </a>

						                    </li>

						                    <?php endforeach;?>

						                </ul>

						           </li>

									</nav>

								</ul>

							</li>

							<li class="<?php if($page_name == 'class')echo 'active';?> " >

								<a href="<?php echo base_url();?>super_admin/classes">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-folder"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('class');?> </span>

										</div>

									</div>

								</a>

							</li>

							<li class="<?php if($page_name == 'subject')echo 'opened active';?> ">

								<a href="javascript:void(0)">

									<div class="item-content">

										<div class="item-media">

											<i class="ti-menu-alt"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('subject');?> </span><i class="icon-arrow"></i>

										</div>

									</div>

								</a>

								<ul class="sub-menu">

								<nav id="cl-effect-14" class="links cl-effect-14">

									<?php $classes	=	$this->db->get('class')->result_array();

					                  foreach ($classes as $row):?>

					                  <li class="<?php if ($page_name == 'subject') echo 'active';?>">

					                      <a href="<?php echo base_url();?>super_admin/subject/<?php echo $row['class_id'];?>">

					                          <span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>

					                      </a>

					                  </li>

					                  <?php endforeach;?>

								</nav>

								</ul>

							</li>

							<li class="<?php if($page_name == 'class_routine')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/class_routine">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-street-view"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('class_routine');?> </span>

										</div>

									</div>

								</a>

							</li>

							<li class="<?php if($page_name == 'manage_attendance')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/manage_attendance/<?php echo date("d/m/Y");?>">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-skyatlas"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('manage_attendance');?> </span>

										</div>

									</div>

								</a>

							</li>



							<li class="<?php if($page_name == 'exam' ||

		   								$page_name == 'grade' ||

												$page_name == 'marks')echo 'opened active';?> ">

								<a href="javascript:void(0)">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-bookmark"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('exam');?> </span> <i class="icon-arrow"></i>

										</div>

									</div>

								</a>

								<ul class="sub-menu">

								<nav id="cl-effect-14" class="links cl-effect-14">

									<li class="<?php if($page_name == 'exam')echo 'active';?> ">

										<a href="<?php echo base_url();?>super_admin/exam">

											<span><i class="entypo-dot"></i> <?php echo get_phrase('exam_list');?></span>

										</a>

									</li>

									<li class="<?php if($page_name == 'grade')echo 'active';?> ">

										<a href="<?php echo base_url();?>super_admin/grade">

											<span><i class="entypo-dot"></i> <?php echo get_phrase('exam_grades');?></span>

										</a>

									</li>

									<li class="<?php if($page_name == 'marks')echo 'active';?> ">

										<a href="<?php echo base_url();?>super_admin/marks">

											<span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks');?></span>

										</a>

									</li>

				                </nav>

				                </ul>

							</li>



							<li class="<?php if($page_name == 'invoice')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/invoice/">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-bank"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('payment');?> </span>

										</div>

									</div>

								</a>

							</li>



							<li class="<?php if($page_name == 'book')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/book/">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-book"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('book');?> </span>

										</div>

									</div>

								</a>

							</li>



							<li class="<?php if($page_name == 'transport')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/transport/">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-automobile"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('transport');?> </span>

										</div>

									</div>

								</a>

							</li>



							<li class="<?php if($page_name == 'dormitory')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/dormitory/">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-bed"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('Manage Hostel');?> </span>

										</div>

									</div>

								</a>

							</li>



							<li class="<?php if($page_name == 'notice')echo 'active';?> ">

								<a href="javascript:void(0)">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-calendar-o"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('Manage Notice');?> </span><i class="icon-arrow"></i>

										</div>

									</div>

								</a>

									<ul class="sub-menu">

									<nav id="cl-effect-14" class="links cl-effect-14">

										<li class="<?php if($page_name == 'notice')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/notice">

											<span class="title"> <?php echo get_phrase('Add Notice');?> </span>

										</a>

									</li>

									<li class="<?php if($page_name == 'view_notices')echo 'active';?>">

										<a href="<?php echo base_url(); ?>super_admin/view_notices">

											<span class="title"> <?php echo get_phrase('View Notices');?> </span>

										</a>

									</li>

									</nav>

									</ul>



							</li>



						</ul>

						<!-- end: MAIN NAVIGATION MENU -->

						<!-- start: CORE FEATURES -->

						<div class="navbar-title">

							<span>Settings</span>

						</div>

						<ul class="folders">

							<li class="<?php if($page_name == 'system_settings')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/system_settings">

									<div class="item-content">

										<div class="item-media">

											<span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('general_settings');?> </span>

										</div>

									</div>

								</a>

							</li>

							<li class="<?php if($page_name == 'manage_language')echo 'active';?> ">

								<a href="<?php echo base_url();?>super_admin/manage_language">

									<div class="item-content">

										<div class="item-media">

											<span class="fa-stack"> <i class="ti-world"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('language_settings');?> </span>

										</div>

									</div>

								</a>

							</li>

							<li class="<?php if($page_name == 'manage_profile')echo 'active';?> ">

								<a href="<?php echo base_url()?>super_admin/manage_profile">

									<div class="item-content">

										<div class="item-media">

											<span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-folder-open-o fa-stack-1x fa-inverse"></i> </span>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('account');?></span>

										</div>

									</div>

								</a>

							</li>

						</ul>

						<!-- end: CORE FEATURES -->

						<!-- start: DOCUMENTATION BUTTON -->

						<div class="wrapper" style="display:none">

							<a href="#" class="button-o">

								<i class="ti-help"></i>

								<span>Documentation</span>

							</a>

						</div>

						<!-- end: DOCUMENTATION BUTTON -->

					</nav>

				</div>

			</div>

			<!-- / sidebar -->