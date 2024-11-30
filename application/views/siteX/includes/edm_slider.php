            <section id="edm_slider">
                <div class="owl-carousel">
                    <?php foreach ($this->hbm->getData() as $row) { ?>
                    <div class="item active" style="background-image: url(<?php echo base_url() .'uploads/home_banner/'.$row->file_name ?>);">
                        <div class="slider-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="carousel-content">
                                            <h2><?php echo $row->image_title ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.item-->
                    <?php } ?>
                </div><!--/.owl-carousel-->
            </section><!--/#main-slider-->