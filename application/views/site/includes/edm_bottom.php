    <section id="edm_s4s_bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="column-title">School Address</h3>
                    <div class="edm_s4s_content">
                        <h4><?=$system_name?></h4>
                        <p><?=$address?></p>
                        <p><i class="fa fa-mobile"></i> <?=$phone?></p>
                        <p><i class="fa fa-envelope-o"></i> <?=$email?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3 class="column-title">Quick Contact</h3>
                    <div class="edm_s4s_content">
                        <form action="#" method="post" name="quick-contact" id="quick-contact">
                            <div class="form-group">
                                <input type="text" required="" placeholder="Name" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" required="" placeholder="Email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <textarea required="" placeholder="Message" rows="2" class="form-control" name="message"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
<!--                <div class="col-sm-3">-->
<!--                    <h3 class="column-title">Visitor Counter</h3>-->
<!--                    <div class="edm_s4s_content">-->
<!--                    -->
<!--                        --><?php //
//                              $hm = "D:/wamp/www/schoolms/assets";
//                              $hm2 = "http://localhost/schoolms/assets";
//                              include "$hm/ov/hiox-uo.php";
//                            ?>
<!--                            Total Visitor: --><?php //include "counter.php" ?><!-- <br>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-sm-6">
                    <h3 class="column-title">Photo Gallery</h3>
                    <div id="edm_gallery">
                        <div class="portfolio-items isotope" style="position: relative; overflow: hidden; height: 408px;">
                            <?php $this->load->model("gallary_model","gm"); ?>
                            <?php $i = 0; foreach ($this->gm->getData() as $row) { ?>
                            <div class="portfolio-item creative isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                                <div class="portfolio-item-inner">
                                    <a rel="prettyPhoto" href="<?php echo base_url();?>uploads/gallary/<?php echo $row->file_name ?>" class="preview"><img alt="" src="<?php echo base_url();?>uploads/gallary/<?php echo $row->file_name ?>" class="img-responsive"></a>
                                </div>
                            </div><!--/.portfolio-item-->
                            <?php  if (++$i == 12) break; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#edm_s4s_bottom-->