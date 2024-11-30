            <!--Left Side bar -->
            <aside id="edm_left_side" class="hidden-xs">    
                <nav id="edm_main_menu" class="navbar" role="banner">
                    <h3 class="column-title hidden-xs">Main Navigation</h3>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden-lg hidden-md hidden-sm col-xs-10" href="index.html"><img class="img-responsive" src="<?php echo base_url(); ?>uploads/banner.png" alt="banner"></a>
                    </div>
                    
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="<?php if(base_url()){echo 'active';} ?>"><a class="<?php if(base_url()){echo 'active';} ?>" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i> About Us</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>site/principals_message"><i class="fa fa-angle-right"></i> Principal's Message</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/governing_body"><i class="fa fa-angle-right"></i> Governing Body</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/inst_information"><i class="fa fa-angle-right"></i> Institute Information</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/photo_gallery"><i class="fa fa-angle-right"></i> Photo Gallery</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-users"></i> Students</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>site/routine"><i class="fa fa-angle-right"></i> Class Routine</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/mandatory"><i class="fa fa-angle-right"></i> Mandatory</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/lesson_outline"><i class="fa fa-angle-right"></i> Lesson Outline</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/dress"><i class="fa fa-angle-right"></i> School Dress</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/entertainment"><i class="fa fa-angle-right"></i> Entertainment</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/class_results"><i class="fa fa-angle-right"></i> Class Results</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/scholarship"><i class="fa fa-angle-right"></i> Scholarship</a></li>
                                </ul>                                
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-file-text-o"></i> Admission</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>site/subjects"><i class="fa fa-angle-right"></i> Subjects</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/rules"><i class="fa fa-angle-right"></i> Rules Regulation</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/admis_information"><i class="fa fa-angle-right"></i> Admission Information</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/online_admission"><i class="fa fa-angle-right"></i> Online Admission</a></li>
                                </ul>                                
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-graduation-cap"></i> Results</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>site/inst_resuls"><i class="fa fa-angle-right"></i> Institute Results</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/board_results"><i class="fa fa-angle-right"></i> Board Results</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/best_of_inst"><i class="fa fa-angle-right"></i> Best of Institute</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/best_of_board"><i class="fa fa-angle-right"></i> Best of Board</a></li>
                                </ul> 
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-calendar"></i> Academic</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>site/notice"><i class="fa fa-angle-right"></i> Notice</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/news"><i class="fa fa-angle-right"></i> News</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/event"><i class="fa fa-angle-right"></i> Events</a></li>
                                </ul> 
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-list"></i> Lists</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>site/teach_list"><i class="fa fa-angle-right"></i> Teachers</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/empl_list"><i class="fa fa-angle-right"></i> Employee</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/ret_principals"><i class="fa fa-angle-right"></i> Retired Principals</a></li>
                                </ul> 
                            </li>
                            <li><a href="<?php echo base_url(); ?>site/contact"><i class="fa fa-map-marker"></i> Contact Us</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-external-link"></i> Mpo</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>site/mpo_corner"><i class="fa fa-angle-right"></i> Online Application</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Inventory Management</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> MPO Search</a></li>
                                </ul> 
                            </li> 
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-key"></i> Login</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url()?>site/administrator"><i class="fa fa-angle-right"></i> Administrator</a></li>
                                    <li><a href="<?php echo base_url()?>site/administrator"><i class="fa fa-angle-right"></i> Teachers</a></li>
                                    <li><a href="<?php echo base_url()?>site/administrator"><i class="fa fa-angle-right"></i> Students</a></li>
                                    <li><a href="<?php echo base_url()?>site/administrator"><i class="fa fa-angle-right"></i> Parents</a></li>
                                </ul>                                
                            </li>                     
                        </ul>
                    </div>
                </nav><!--/nav-->         
            </aside>
            <!--/Left Side bar -->