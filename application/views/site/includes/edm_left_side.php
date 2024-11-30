            <!--Left Side bar -->
            <aside id="edm_left_side">   
                <div id="edm_page_content" class="clearfix">
                    <h3 class="column-title">Latest Events</h3> 
                    <?php $i = 0; foreach ($this->event->getData() as $row) { ?>
                    <div class="edm_s4s_content">
                        <div data-wow-delay="0ms" data-wow-duration="300ms" class="blog-post blog-large wow fadeInLeft animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <article>
                                <header class="entry-header">
                                    <div class="entry-thumbnail">
                                       <!--  <img alt="" src="<?php echo base_url() .'uploads/event/'.$row->file_name ?>" class="img-responsive"> -->
                                        <span class="post-format post-format-video"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <div class="entry-date"><?php echo date('d-M-Y',$row->create_timestamp) ?></div>
                                    <h2 class="entry-title"><a href="<?php echo base_url() .'site/event_single/' .$row->notice_id ?>"><?php echo $row->notice_title ?></a></h2>
                                </header>
                                <div class="entry-content">
                                    <a href="<?php echo base_url() .'site/event_single/' .$row->notice_id ?>" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php if (++$i == 2) break; } ?>
                </div>
                <div id="edm_page_content" class="clearfix">
                    <h3 class="column-title">Latest Notice</h3>
                    <?php $i = 0; foreach ($this->notice->getData() as $row) { ?>
                    <div class="edm_s4s_content">
                        <div data-wow-delay="0ms" data-wow-duration="300ms" class="blog-post blog-large wow fadeInLeft animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <article>
                                <header class="entry-header">
                                    <div class="entry-thumbnail">
                                        <span class="post-format post-format-video"><i class="fa fa-file-text-o"></i></span>
                                    </div>
                                    <div class="entry-date"><?php echo $row->post_date ?></div>
                                    <h2 class="entry-title"><a href="<?php echo base_url() .'site/notice_single/' .$row->post_id ?>"><?php echo $row->post_title ?></a></h2>
                                </header>
                                <div class="entry-content">
                                    <a href="<?php echo base_url() .'site/notice_single/' .$row->post_id ?>" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php if (++$i == 2) break;  } ?>
                </div>                          
            </aside>
            <!--/Left Side bar -->