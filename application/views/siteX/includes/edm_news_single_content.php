                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">News Details</h2>
                </div>
                <ol class="breadcrumb">
                  <li><a href="<?php echo base_url() ?>">Home</a></li>
                  <li class="active">News Details</li>
                </ol>
                <section id="edm_page_content">
                    <div class="container-fluid">
                        <div class="row">                          
                            <div class="edm_s4s_content col-sm-12">
                                <div data-wow-delay="0ms" data-wow-duration="300ms" class="blog-post blog-large wow fadeInLeft animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <article> 
                                        <header class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img alt="<?php echo $n->post_title ?>" src="<?php echo base_url() ?>uploads/news/<?php echo $n->post_image ?>" class="img-responsive">
                                                <span class="post-format post-format-video"><i class="fa fa-newspaper-o"></i></span>
                                                <div class="entry-date"><?php echo $n->post_date ?></div>
                                            </div>
                                            <h2 class="entry-title"><a href="<?php echo base_url() .'site/news_single/' .$n->post_id ?>"><?php echo $n->post_title ?></a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p><?php echo $n->post_content ?></p>
                                        </div>
                                    </article>
                                </div>
                            </div><!--/.col-sm-12-->
                        </div>
                    </div>
                </section>