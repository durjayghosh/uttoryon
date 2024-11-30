    <section id="edm_list">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($this->tech_m->getData() as $row) { ?>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url() .'uploads/teacher_image/'.$row->teacher_id.'.jpg' ?>" alt="<?php echo $row->name ?>">
                        </div>
                        <div class="team-info">
                            <h3><?php echo $row->name ?></h3>
                            <span>ID: <?php echo $row->teacher_id ?></span>
                        </div>
                        <p> 
                            <i class="fa fa-mobile"></i> - <?php echo $row->phone ?><br>
                            <i class="fa fa-envelope-o"></i> - <?php echo $row->email ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section><!--/#meet-team-->                                  


