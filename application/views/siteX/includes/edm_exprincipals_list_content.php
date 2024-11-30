    <section id="edm_list">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($this->exp_m->getData() as $row) { ?>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url() .'uploads/ex_principal/'.$row->photo ?>" alt="<?php echo $row->name ?>">
                        </div>
                        <div class="team-info">
                            <h3><?php echo $row->name ?></h3>
                            <span><strong>RET. Date: </strong> <?php echo $row->ret_date ?></span><br>
                            <span><strong><i class="fa fa-mobile"> </i> </strong> <?php echo $row->phone ?></span><br>
                            <span><strong><i class="fa fa-envelope-o"> </i> </strong> <?php echo $row->email ?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section><!--/#meet-team-->                                  


