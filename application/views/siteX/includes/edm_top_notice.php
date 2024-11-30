    <section id="edm_s4s_top_news" class="hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <div class="notice_title pull-right">
                        <h4>Notice Board:</h4>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php $i = 0; foreach ($this->notice->getData() as $row) { ?>
                            <a href="<?php echo base_url() .'site/notice_single/' .$row->post_id ?>" class="item active">
                                <?php echo substr($row->post_content,0,200);?>
                            </a>
                            <?php if (++$i == 1) break; } ?>
                            <?php foreach ($this->notice->getData() as $row) { ?>
                            <a href="<?php echo base_url() .'site/notice_single/' .$row->post_id ?>" class="item">
                                <?php echo substr($row->post_content,0,200);?>
                            </a>
                            <?php } ?>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm pull-left" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm pull-right" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="edm_s4s_search">
                        <form action="#" method="post" name="search" id="search">
                            <div class="col-sm-10">
                                <input type="text" required="" placeholder="search" class="form-control input-sm" name="search">
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#edm_s4s_top_news-->