<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<span class="dot-badge partition-red"></span> <i class="ti-comment"></i> <span>MESSAGES</span>
								</a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large">
									<li>
										<span class="dropdown-header"> Unread messages</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<ul>
												<li class="unread">
													<a href="javascript:;" class="unread">
														<div class="clearfix">
															<div class="thread-image">
																<!-- <img src="./assets/images/avatar-2.jpg" alt=""> -->
															</div>
															<div class="thread-content">
																<span class="author">Coming Soon</span>
																
															</div>
														</div>
													</a>
												</li>
												
											</ul>
										</div>
									</li>
									<li class="view-all">
										<a href="#">
											See All
										</a>
									</li>
								</ul>
							</li>
							<!-- end: MESSAGES DROPDOWN -->
							<!-- start: ACTIVITIES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<i class="ti-check-box"></i> <span>ACTIVITIES</span>
								</a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large">
									<li>
										<span class="dropdown-header"> You have new notifications</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<div class="list-group no-margin">
												<a class="media list-group-item" href="">
													<!-- <img class="img-circle" alt="..." src="assets/images/avatar-1.jpg"> -->
													<span class="media-body block no-margin"> Coming Soon <small class="block text-grey"></small> </span>
												</a>
												
											</div>
										</div>
									</li>
									<li class="view-all">
										<a href="#">
											
										</a>
									</li>
								</ul>
							</li>
							<!-- end: ACTIVITIES DROPDOWN -->
							<!-- start: LANGUAGE SWITCHER -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<i class="ti-world"></i> English
								</a>
								<ul role="menu" class="dropdown-menu dropdown-light fadeInUpShort">
									<li>
										<a href="#" class="menu-toggler">
											English
										</a>
									</li>
									
								</ul>
							</li>
							<!-- start: LANGUAGE SWITCHER -->
							<!-- start: USER OPTIONS DROPDOWN -->
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<span class="username">Welcome! <?php echo $this->session->userdata('name') ?> <i class="ti-angle-down"></i></i></span>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="<?php echo base_url()?>student/manage_profile">
											Mange Profile
										</a>
									</li>
									
									
									<li>
										<a href="<?php echo base_url();?>site/logout">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
					<a class="dropdown-off-sidebar" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</a>
					<!-- end: NAVBAR COLLAPSE -->
				</header>
				<!-- end: TOP NAVBAR -->
<div class="main-content" >
<div class="wrap-content container" id="container">