<?php include "includes/header_links.php"; ?>

	

<?php include "includes/main_menu.php"; ?>		

<?php include "includes/menu_top_logo.php"; ?>	

<?php include "includes/top_bar.php"; ?>			

<?php include "includes/count_bar.php"; ?>	

<?php include "includes/featured_box.php"; ?>						

						

						<!-- start: FIRST SECTION -->

						<div class="container-fluid container-fullw padding-bottom-10">

							<div class="row">

								<div class="col-sm-12">

									<div class="row">

										<div class="col-md-7 col-lg-8">

											<!-- Class Routine -->

											<?php include "class_routine.php" ?>

											<!-- END Class Routine -->



										</div>

										<div class="col-md-5 col-lg-4">

											<!-- notice -->

											<div class="panel panel-white no-radius">

										<div class="panel-heading border-bottom">

											<h4 class="panel-title">Latest Notice</h4>

										</div>

										<div class="panel-body">

											<ul class="arrow-list">



				                            <?php $i = 0; foreach ($this->nm->getData() as $row) { ?>

				                                <li><a target="_blank" href="<?php echo base_url(). 'site/notice_single/'. $row->post_id ?>"><?php echo $row->post_title ?></a></li>

				                                <?php  if (++$i == 5) break; } ?>

				                            </ul>

										</div>

										<div class="panel-footer">

											<div class="clearfix padding-5 space5">

												<div class="col-xs-4 text-center no-padding">

													<div class="border-right border-dark">

														<span class="text-bold block text-extra-large"><?php echo $this->db->count_all('posts');?></span>

														<span class="text-light">Total Notice</span>

													</div>

												</div>

												<div class="col-xs-4 text-center no-padding">

													<div class="border-right border-dark"> 

														<span class="text-bold block text-extra-large">&nbsp</span>

														<span class="text-light">&nbsp</span>

													</div>

												</div>

												<div class="col-xs-4 text-center no-padding">

													<span class="text-bold block text-extra-large">&nbsp</span>

													<span class="text-light"><a href="view_notices">View Total</a></span>

												</div>

											</div>

										</div>

									</div>



											<!-- notice end -->

											<!-- notice -->

											<div class="panel panel-white no-radius">

										<div class="panel-heading border-bottom">

											<h4 class="panel-title">Latest Events</h4>

										</div>

										<div class="panel-body">

											<ul class="arrow-list">

				                            <?php $i = 0; foreach ($this->em->getData() as $row) { ?>

				                                <li><a target="_blank" href="<?php echo base_url() .'site/event_single/' .$row->notice_id ?>"><?php echo $row->notice_title ?> @ <?php echo date('l d-M-Y ',$row->create_timestamp) ?></a></li>

				                                <?php if (++$i == 5) break;  } ?>

				                            </ul>

										</div>

										<div class="panel-footer">

											<div class="clearfix padding-5 space5">

												<div class="col-xs-4 text-center no-padding">

													<div class="border-right border-dark">

														<span class="text-bold block text-extra-large"><?php echo $this->db->count_all('noticeboard');?></span>

														<span class="text-light">Total Events</span>

													</div>

												</div>

												<div class="col-xs-4 text-center no-padding">

													<div class="border-right border-dark"> 

														<span class="text-bold block text-extra-large">&nbsp</span>

														<span class="text-light">&nbsp</span>

													</div>

												</div>

												<div class="col-xs-4 text-center no-padding">

													<span class="text-bold block text-extra-large">&nbsp</span>

													<span class="text-light"><a href="event_calendar">Ad/Edit Events</a></span>

												</div>

											</div>

										</div>

									</div>



											<!-- notice end -->



											<!-- News -->

											<div class="panel panel-white no-radius">

										<div class="panel-heading border-bottom">

											<h4 class="panel-title">Latest News</h4>

										</div>

										<div class="panel-body">

											<ul class="arrow-list">

				                            <?php $i = 0; foreach ($this->news->getData() as $row) { ?>

				                                <li><a target="_blank" href="<?php echo base_url() .'site/news_single/' .$row->post_id ?>"><?php echo $row->post_title ?></a></li>

				                                <?php if (++$i == 5) break;  } ?>

				                            </ul>

										</div>

										<div class="panel-footer">

											<div class="clearfix padding-5 space5">

												<div class="col-xs-4 text-center no-padding">

													<div class="border-right border-dark">

														<span class="text-bold block text-extra-large"><?php echo $this->db->count_all('news');?></span>

														<span class="text-light">Total News</span>

													</div>

												</div>

												<div class="col-xs-4 text-center no-padding">

													<div class="border-right border-dark"> 

														<span class="text-bold block text-extra-large">&nbsp</span>

														<span class="text-light">&nbsp</span>

													</div>

												</div>

												<div class="col-xs-4 text-center no-padding">

													<span class="text-bold block text-extra-large">&nbsp</span>

													<span class="text-light"><a href="view_newses">Ad/Edit News</a></span>

												</div>

											</div>

										</div>

									</div>



											<!-- News end -->





										</div>

									</div>

								</div>

							</div>



						</div>

						<!-- end: FIRST SECTION -->

						

						

					

<?php include "includes/footer.php"; ?>		

			<!-- end: FOOTER -->

<?php include "includes/hidden_sidebar.php"; ?>				

<?php include "includes/settings.php"; ?>				

<?php include "includes/footer_js.php"; ?>		



