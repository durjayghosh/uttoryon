                    <section id="edm_page_content">
                        <div class="container-fluid">
                            <div class="section-header">
                                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Welcome to <?=$system_name?></h2>
                            </div>
                            <div class="row">
                                <div class="edm_s4s_content col-md-6 col-sm-12">
                                    <h3 class="column-title">Secretary Message</h3>
                                    <div data-wow-delay="100ms" data-wow-duration="300ms" class="blog-post blog-media wow fadeInRight animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 100ms; animation-name: fadeInRight;">
                                        <article class="media clearfix">
                                            <div class="media-body">
                                                <div class="entry-content">
                                                    <?php foreach ($this->page_model->getData("secretary_message") as $row) { ?>
                                                    <?php echo substr($row->content,0,400);?>
                                                    <?php } ?>
                                                </div>
                                                <a href="<?php  echo  base_url();?>site/secretary_message" class="btn btn-primary btn-sm">Read More</a>
                                            </div>
                                        </article>
                                
                                    </div></div>

                                <div class="edm_s4s_content col-md-6 col-sm-12">
                                    <h3 class="column-title">Principal's Message</h3>
                                    <div data-wow-delay="100ms" data-wow-duration="300ms" class="blog-post blog-media wow fadeInRight animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 100ms; animation-name: fadeInRight;">
                                        <article class="media clearfix">
                                            <div class="media-body">
                                                <div class="entry-content">
                                                    <?php foreach ($this->page_model->getData("principals-message") as $row) { ?>
                                                    <?php echo substr($row->content,0,400);?>
                                                    <?php } ?>
                                                </div>
                                                <a href="<?php  echo  base_url();?>site/principals_message" class="btn btn-primary btn-sm">Read More</a>
                                            </div>
                                        </article>
                                    </div>                                    
                                </div></div>
<div class="row">

                                <div class="edm_s4s_content col-md-6 col-sm-12">
                                    <h3 class="column-title">Sheikh Russel Digital Lab</h3>
                                    <div data-wow-delay="100ms" data-wow-duration="300ms" class="blog-post blog-media wow fadeInRight animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 100ms; animation-name: fadeInRight;">
                                        <article class="media clearfix">
                                            <div class="media-body">
                                                <div class="entry-content">
                                                    <?php foreach ($this->page_model->getData("sheikh_russel_digital_lab") as $row) { ?>
                                                    <?php echo substr($row->content,0,400);?>
                                                    <?php } ?>
                                                </div>
                                                <a href="<?php  echo  base_url();?>site/sheikh_russel_digital_lab" class="btn btn-primary btn-sm">Read More</a>
                                            </div>
                                        </article>
                                    </div>                                    
                                </div>

                                <div class="edm_s4s_content col-md-6 col-sm-12">
                                    <h3 class="column-title">Institute Information</h3>
                                    <div data-wow-delay="100ms" data-wow-duration="300ms" class="blog-post blog-media wow fadeInRight animated" style="visibility: visible; animation-duration: 300ms; animation-delay: 100ms; animation-name: fadeInRight;">
                                        <article class="media clearfix">
                                            <div class="media-body">
                                                <div class="entry-content">
                                                    <?php foreach ($this->page_model->getData("inst_information") as $row) { ?>
                                                    <?php echo substr($row->content,0,400);?>
                                                    <?php } ?>
                                                </div>
                                                <a href="<?php  echo  base_url();?>site/inst_information" class="btn btn-primary btn-sm">Read More</a>
                                            </div>
                                        </article>
                                    </div>                                    
                                </div>

                            </div>
                        </div></section>
                    </section>