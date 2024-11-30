    <section id="edm_list">
        <div class="container-fluid">
            <div class="row">
                <h1 style="color:#45aed6">MPO</h1><br><br>
                <?php foreach ($this->tech_m->getData_mpo() as $row) { ?>
                <div class="col-sm-4">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url() .'uploads/teacher_image/'.$row->teacher_id.'.jpg' ?>" alt="<?php echo $row->name ?>">
                        </div>
                        <div class="team-info">
                            <h3><?php echo $row->name ?></h3>
                            <span>POSITION: <?php echo $row->designation ?></span>
                        </div>
                        <p> 
                            <i class="fa fa-mobile"></i> - <?php echo $row->phone ?><br>
                            <i class="fa fa-envelope-o"></i> - <?php echo $row->email ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>


            <div class="row">
                
                <?php foreach ($this->emp_m->getData_mpo() as $r) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url() .'uploads/employee/'.$r->photo ?>" alt="<?php echo $r->name ?>">
                        </div>
                        <div class="team-info">
                            <h3><?php echo $r->name ?></h3>
                            <span><?php echo $r->position ?></span>
                        </div>
                        <p> 
                            <i class="fa fa-mobile"></i> - <?php echo $r->phone ?><br>
                            <i class="fa fa-envelope-o"></i> - <?php echo $r->email ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>


            <div class="row">
                <h1 style="color:#45aed6">NON-MPO LIST</h1><br><br>
                <?php foreach ($this->tech_m->getData_non_mpo() as $row) { ?>
                <div class="col-sm-4">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url() .'uploads/teacher_image/'.$row->teacher_id.'.jpg' ?>" alt="<?php echo $row->name ?>">
                        </div>
                        <div class="team-info">
                            <h3><?php echo $row->name ?></h3>
                            <span>POSITION: <?php echo $row->designation ?></span>
                        </div>
                        <p> 
                            <i class="fa fa-mobile"></i> - <?php echo $row->phone ?><br>
                            <i class="fa fa-envelope-o"></i> - <?php echo $row->email ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>


            <div class="row">
                
                <?php foreach ($this->emp_m->getData_non_mpo() as $r) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url() .'uploads/employee/'.$r->photo ?>" alt="<?php echo $r->name ?>">
                        </div>
                        <div class="team-info">
                            <h3><?php echo $r->name ?></h3>
                            <span><?php echo $r->position ?></span>
                        </div>
                        <p> 
                            <i class="fa fa-mobile"></i> - <?php echo $r->phone ?><br>
                            <i class="fa fa-envelope-o"></i> - <?php echo $r->email ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>




        </div>
    </section><!--/#meet-team-->                                  


