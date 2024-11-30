                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">List Of News</h2>
                </div>
                <ol class="breadcrumb">
                  <li><a href="<?php echo base_url() ?>">Home</a></li>
                  <li class="active">News</li>
                </ol>
                <section id="edm_page_content">
                    <div class="container-fluid">
                        <div class="row">                          
                            <?php foreach ($this->news->getData() as $row) { ?>
                            <div class="edm_s4s_content col-sm-4">
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
                                            <p><?php echo substr($row->post_content,0,200);?></p>
                                            <a href="<?php echo base_url() .'site/news_single/' .$row->post_id ?>" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            </div><!--/.col-sm-4-->
                            <?php } ?>
                        </div>
                    </div>
                </section>