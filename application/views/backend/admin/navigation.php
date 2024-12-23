<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="sidebar-menu">
		<header class="logo-env" >
			
            <!-- logo -->
			<div class="logo" style="">
				<a href="<?php echo base_url();?>">
					<img src="<?php echo base_url();?>uploads/logo.png"  style="max-height:60px;"/>
				</a>
			</div>
            
			<!-- logo collapse icon -->
			<div class="sidebar-collapse" style="">
				<a href="#" class="sidebar-collapse-icon with-animation">
                
					<i class="entypo-menu"></i>
				</a>
			</div>
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation">
					<i class="entypo-menu"></i>
				</a>
			</div>
		</header>
		
		<div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div>	
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            
           
           <!-- DASHBOARD -->
           <li class="<?php if($page_name == 'dashboard')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/dashboard">
					<i class="entypo-gauge"></i>
					<span><?php echo get_phrase('dashboard');?></span>
				</a>
           </li>

           <!-- CMS DASHBOARD -->
           <li class="<?php if($page_name == 'dashboard')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/cms_dashboard">
					<i class="fa fa-leanpub"></i>
					<span><?php echo get_phrase('cms_dashboard');?></span>
				</a>

				
           </li>

           <!-- SMS GATEWAY -->
           <li class="<?php if($page_name == 'dashboard')echo 'active';?> ">
				<a href="<?php echo base_url();?>smsgateway_v1_scm">
					<i class="fa fa-users"></i>
					<span><?php echo get_phrase('SMS SYSTEM');?></span>
				</a>
           </li>
           
           <!-- STUDENT -->
			<li class="<?php if($page_name == 'student_add' || 
									$page_name == 'student_information' || 
										$page_name == 'student_marksheet')
											echo 'opened active has-sub';?> ">
				<a href="#">
					<i class="fa fa-group"></i>
					<span><?php echo get_phrase('student');?></span>
				</a>
				<ul>
                	<!-- STUDENT ADMISSION -->
					<li class="<?php if($page_name == 'student_add')echo 'active';?> ">
						<a href="<?php echo base_url();?>admin/student_add">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('admit_student');?></span>
						</a>
					</li>
                  
                  <!-- STUDENT INFORMATION -->
					<li class="<?php if($page_name == 'student_information')echo 'opened active';?> ">
						<a href="#">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('student_information');?></span>
						</a>
                        <ul>
                        	<?php $classes	=	$this->db->get('class')->result_array();
							foreach ($classes as $row):?>
							<li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active';?>">
								<a href="<?php echo base_url();?>admin/student_information/<?php echo $row['class_id'];?>">
									<span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
								</a>
							</li>
                            <?php endforeach;?>
                        </ul>
					</li>
                    
                  <!-- STUDENT MARKSHEET -->
					<li class="<?php if($page_name == 'student_marksheet')echo 'opened active';?> ">
						<a href="<?php echo base_url();?>admin/student_marksheet/<?php echo $row['class_id'];?>">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('student_marksheet');?></span>
						</a>
                        <ul>
                        	<?php $classes	=	$this->db->get('class')->result_array();
							foreach ($classes as $row):?>
							<li class="<?php if ($page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active';?>">
								<a href="<?php echo base_url();?>admin/student_marksheet/<?php echo $row['class_id'];?>">
									<span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
								</a>
							</li>
                            <?php endforeach;?>
                        </ul>
					</li>
				</ul>
			</li>
            
           <!-- TEACHER -->
           <li class="<?php if($page_name == 'teacher' )echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/teacher">
					<i class="entypo-users"></i>
					<span><?php echo get_phrase('teacher');?></span>
				</a>
           </li>
            
           <!-- PARENT -->
           <li class="<?php if($page_name == 'parent')echo 'opened active';?> ">
				<a href="<?php echo base_url();?>admin/parent">
					<i class="entypo-user"></i>
					<span><?php echo get_phrase('parent');?></span>
				</a>
                <ul>
					<?php $classes	=	$this->db->get('class')->result_array();
                    foreach ($classes as $row):?>
                    <li class="<?php if ($page_name == 'parent' && $class_id == $row['class_id']) echo 'active';?>">
                        <a href="<?php echo base_url();?>admin/parent/<?php echo $row['class_id'];?>">
                            <span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
           </li>
            
           <!-- CLASS -->
           <li class="<?php if($page_name == 'class')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/classes">
					<i class="entypo-flow-tree"></i>
					<span><?php echo get_phrase('class');?></span>
				</a>
                
           </li>
            
           <!-- SUBJECT -->
           <li class="<?php if($page_name == 'subject')echo 'opened active';?> ">
				<a href="#">
					<i class="entypo-docs"></i>
					<span><?php echo get_phrase('subject');?></span>
				</a>
              <ul>
                  <?php $classes	=	$this->db->get('class')->result_array();
                  foreach ($classes as $row):?>
                  <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active';?>">
                      <a href="<?php echo base_url();?>admin/subject/<?php echo $row['class_id'];?>">
                          <span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
                      </a>
                  </li>
                  <?php endforeach;?>
              </ul>
           </li>
            
           <!-- CLASS ROUTINE -->
           <li class="<?php if($page_name == 'class_routine')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/class_routine">
					<i class="entypo-target"></i>
					<span><?php echo get_phrase('class_routine');?></span>
				</a>
           </li>
            
           <!-- DAILY ATTENDANCE -->
           <li class="<?php if($page_name == 'manage_attendance')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/manage_attendance/<?php echo date("d/m/Y");?>">
					<i class="entypo-chart-area"></i>
					<span><?php echo get_phrase('daily_attendance');?></span>
				</a>
                
           </li>
            
           <!-- EXAMS -->
           <li class="<?php if($page_name == 'exam' ||
		   								$page_name == 'grade' ||
												$page_name == 'marks')echo 'opened active';?> ">
				<a href="#">
					<i class="entypo-graduation-cap"></i>
					<span><?php echo get_phrase('exam');?></span>
				</a>
                <ul>
					<li class="<?php if($page_name == 'exam')echo 'active';?> ">
						<a href="<?php echo base_url();?>admin/exam">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('exam_list');?></span>
						</a>
					</li>
					<li class="<?php if($page_name == 'grade')echo 'active';?> ">
						<a href="<?php echo base_url();?>admin/grade">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('exam_grades');?></span>
						</a>
					</li>
					<li class="<?php if($page_name == 'marks')echo 'active';?> ">
						<a href="<?php echo base_url();?>admin/marks">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks');?></span>
						</a>
					</li>
                </ul>
           </li>
            
           <!-- PAYMENT -->
           <li class="<?php if($page_name == 'invoice')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/invoice">
					<i class="entypo-credit-card"></i>
					<span><?php echo get_phrase('payment');?></span>
				</a>
           </li>
            
           <!-- LIBRARY -->
           <li class="<?php if($page_name == 'book')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/book">
					<i class="entypo-book"></i>
					<span><?php echo get_phrase('library');?></span>
				</a>
           </li>
            
           <!-- TRANSPORT -->
           <li class="<?php if($page_name == 'transport')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/transport">
					<i class="entypo-location"></i>
					<span><?php echo get_phrase('transport');?></span>
				</a>
           </li>
            
           <!-- DORMITORY -->
           <li class="<?php if($page_name == 'dormitory')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/dormitory">
					<i class="entypo-home"></i>
					<span><?php echo get_phrase('dormitory');?></span>
				</a>
           </li>
            
           <!-- NOTICEBOARD -->
           <li class="<?php if($page_name == 'noticeboard')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/noticeboard">
					<i class="entypo-doc-text-inv"></i>
					<span><?php echo get_phrase('noticeboard');?></span>
				</a>
           </li>
            
           <!-- SETTINGS -->
           <li class="<?php if($page_name == 'system_settings' ||
		   								$page_name == 'manage_language')echo 'opened active';?> ">
				<a href="#">
					<i class="entypo-lifebuoy"></i>
					<span><?php echo get_phrase('settings');?></span>
				</a>
                <ul>
					<li class="<?php if($page_name == 'system_settings')echo 'active';?> ">
						<a href="<?php echo base_url();?>admin/system_settings">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings');?></span>
						</a>
					</li>
					<li class="<?php if($page_name == 'manage_language')echo 'active';?> ">
						<a href="<?php echo base_url();?>admin/manage_language">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings');?></span>
						</a>
					</li>
                </ul>
           </li>
            
           <!-- ACCOUNT -->
           <li class="<?php if($page_name == 'manage_profile')echo 'active';?> ">
				<a href="<?php echo base_url();?>admin/manage_profile">
					<i class="entypo-lock"></i>
					<span><?php echo get_phrase('account');?></span>
				</a>
           </li>
                
           
           
		</ul>
        		
</div>