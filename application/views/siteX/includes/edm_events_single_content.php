                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Event Details</h2>
                </div>
                <ol class="breadcrumb">
                  <li><a href="<?php echo base_url() ?>">Home</a></li>
                  <li class="active">Event Details</li>
                </ol>
                <section id="edm_page_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="edm_s4s_content col-sm-12">
                                <div data-wow-delay="0ms" data-wow-duration="300ms" class="blog-post blog-large wow fadeInLeft animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <article>
                                        <header class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img alt="" src="<?php echo base_url() .'uploads/event/'.$row->file_name ?>" class="img-responsive">
                                                <span class="post-format post-format-video"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <div class="entry-date"><?php echo date('l d-M-Y ',$e->create_timestamp) ?></div>
                                            <h2 class="entry-title"><a href="#"><?php echo $e->notice_title ?></a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p><?php echo $e->notice ?></p>
                                        </div>
                                    </article>
                                </div>
                            </div><!--/.col-sm-12-->
                        </div>
                    </div>
                </section>