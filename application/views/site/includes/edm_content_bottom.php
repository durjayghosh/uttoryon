                <section id="edm_page_content">
                    <div class="container-fluid">
                        <div class="row">                          
                            <h3 class="column-title bottom_con">Latest News</h3>
                            <?php $i = 0; foreach ($this->news->getData() as $row) { ?>
                            <div class="edm_s4s_content col-sm-6">
                                <div data-wow-delay="0ms" data-wow-duration="300ms" class="blog-post blog-large wow fadeInLeft animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <article> 
                                        <header class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img alt="<?php echo $row->post_title ?>" src="<?php echo base_url() ?>uploads/news/<?php echo $row->post_image ?>" class="img-responsive">
                                                <span class="post-format post-format-video"><i class="fa fa-newspaper-o"></i></span>
                                                <div class="entry-date"><?php echo $row->post_date ?></div>
                                            </div>
                                            <h2 class="entry-title"><a href="<?php echo base_url() .'site/news_single/' .$row->post_id ?>"><?php echo $row->post_title ?></a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p><?php echo substr($row->post_content,0,40);?></p>
                                            <a href="<?php echo base_url() .'site/news_single/' .$row->post_id ?>" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            </div><!--/.col-sm-6-->
                            <?php if (++$i == 2) break;  } ?>
                        </div>
                    </div>
                </section>