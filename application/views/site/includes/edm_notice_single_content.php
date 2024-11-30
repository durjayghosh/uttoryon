                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Notice Details</h2>
                </div>
                <ol class="breadcrumb">
                  <li><a href="<?php echo base_url() ?>">Home</a></li>
                  <li class="active">Notice Details</li>
                </ol>
                <section id="edm_page_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="edm_s4s_content col-sm-12">
                                <div data-wow-delay="0ms" data-wow-duration="300ms" class="blog-post blog-large wow fadeInLeft animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <article>
                                        <header class="entry-header">
                                            <div class="entry-thumbnail">
                                                <!--<img alt="<?php echo $r->post_title ?>" src="<?php echo base_url()?>uploads/notice/<?php echo $r->post_image ?>" class="img-responsive">-->
                                                <a href="<?php echo base_url() ?>uploads/notice/<?php echo $r->post_image ?>" target="_blank">
                                                <span class="post-format post-format-video"><i class="fa fa-file-text-o"></i></span></a>
                                            </div>
                                            <div class="entry-date"><?php echo $r->post_date ?></div>
                                            <h2 class="entry-title"><a href="#"><?php echo $r->post_title ?></a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p><?php echo $r->post_content ?></p>
                                        </div>
                                    </article>
                                </div>
                            </div><!--/.col-sm-12-->
                        </div>
                    </div>
                </section>