<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle">Dashboard</h1>
									<span class="mainDescription">overview &amp; stats </span>
								</div>
								<div class="col-sm-5">
									<!-- start: MINI STATS WITH SPARKLINE -->
									<ul class="mini-stats pull-right">
										<li>
											<div class="sparkline-1">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->db->count_all('student');?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('total_student');?>
												</p>
											</div>
										</li>
										<li>
											<div class="sparkline-2">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->db->count_all('teacher');?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('total_teacher');?>
												</p>
											</div>
										</li>
										<li>
											<div class="sparkline-3">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->db->count_all('parent');?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('total_parent');?>
												</p>
											</div>
										</li>
										
									</ul>
									<!-- end: MINI STATS WITH SPARKLINE -->
								</div>
							</div>
						</section>
						<!-- end: DASHBOARD TITLE -->