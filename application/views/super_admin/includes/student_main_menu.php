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

								<a href="<?php echo base_url();?>student/dashboard">

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



							

							<li class="<?php if($page_name == 'teacher')echo 'active open';?>">



								<a href="<?php echo base_url();?>student/teacher_list">

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

					                      <a href="<?php echo base_url();?>student/subject/<?php echo $row['class_id'];?>">

					                          <span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>

					                      </a>

					                  </li>

					                  <?php endforeach;?>

								</nav>

								</ul>

							</li>

							<li class="<?php if($page_name == 'class_routine')echo 'active';?> ">

								<a href="<?php echo base_url();?>student/class_routine">

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

							<!-- <li class="<?php if($page_name == 'manage_attendance')echo 'active';?> ">

								<a href="<?php echo base_url();?>student/manage_attendance/<?php echo date("d/m/Y");?>">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-skyatlas"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('manage_attendance');?> </span>

										</div>

									</div>

								</a>

							</li> -->



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

									<!-- <li class="<?php if($page_name == 'exam')echo 'active';?> ">

										<a href="<?php echo base_url();?>student/exam">

											<span><i class="entypo-dot"></i> <?php echo get_phrase('exam_list');?></span>

										</a>

									</li> -->

									<!-- <li class="<?php if($page_name == 'grade')echo 'active';?> ">

										<a href="<?php echo base_url();?>student/grade">

											<span><i class="entypo-dot"></i> <?php echo get_phrase('exam_grades');?></span>

										</a>

									</li> -->

									<li class="<?php if($page_name == 'marks')echo 'active';?> ">

										<a href="<?php echo base_url();?>student/marks">

											<span><i class="entypo-dot"></i> <?php echo get_phrase('view_marks');?></span>

										</a>

									</li>

				                </nav>

				                </ul>

							</li>


							<li class="<?php if($page_name == 'invoice')echo 'active';?> ">

								<a href="<?php echo base_url();?>student/invoice/">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-money"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('Payment');?> </span>

										</div>

									</div>

								</a>

							</li>
							

							<li class="<?php if($page_name == 'book')echo 'active';?> ">

								<a href="<?php echo base_url();?>student/book/">

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

								<a href="<?php echo base_url();?>student/transport/">

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



							



							<li class="<?php if($page_name == 'notice')echo 'active';?> ">

								<a href="<?php echo base_url(); ?>student/view_notices">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-calendar-o"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('View Notices');?> </span>

										</div>

									</div>

								</a>
							</li>

							<li class="<?php if($page_name == 'notice')echo 'active';?> ">

								<a href="<?php echo base_url(); ?>student/view_news">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-newspaper-o"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('View News');?> </span>

										</div>

									</div>

								</a>
							</li>

							<li class="<?php if($page_name == 'notice')echo 'active';?> ">

								<a href="<?php echo base_url(); ?>student/view_events">

									<div class="item-content">

										<div class="item-media">

											<i class="fa fa-bell"></i>

										</div>

										<div class="item-inner">

											<span class="title"> <?php echo get_phrase('View Events');?> </span>

										</div>

									</div>

								</a>
							</li>



						</ul>

						<!-- end: MAIN NAVIGATION MENU -->

						<!-- start: CORE FEATURES -->

						<div class="navbar-title">

							<span>Settings</span>

						</div>

						<ul class="folders">

							

							

							<li class="<?php if($page_name == 'manage_profile')echo 'active';?> ">

								<a href="<?php echo base_url();?>student/manage_profile">

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

							<a href="documentation.html" class="button-o">

								<i class="ti-help"></i>

								<span>Documentation</span>

							</a>

						</div>

						<!-- end: DOCUMENTATION BUTTON -->

					</nav>

				</div>

			</div>

			<!-- / sidebar -->