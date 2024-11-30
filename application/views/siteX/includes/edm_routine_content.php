         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Class Rutine</h2>
        </div>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>">Home</a></li>
          <li class="active">Class Rutine</li>
        </ol>       
        <section id="edm_rutine" class="container-fluid">
            <div class="row">
                <div class="col-sm-12"> 
                <!-- routine start -->
                   <div class="tab-content">
                        <div class="tab-pane active" id="list">
                            <div class="panel-group joined" id="accordion-test-2">
                                <?php 
                                $toggle = true;
                                $classes = $this->db->get('class')->result_array();
                                foreach($classes as $row):
                                    ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                <a class="btn btn-primary btn-block" data-toggle="collapse" data-parent="#accordion-test-2" href="#collapse<?php echo $row['class_id'];?>">
                                                    <!-- <i class="icon-nav icon-star"></i> --> Class <?php echo $row['name'];?>
                                                </a>
                                                </h4>
                                            </div>
                                            <div id="collapse<?php echo $row['class_id'];?>" class="panel-collapse collapse <?php if($toggle){echo 'in';$toggle=false;}?>">
                                                <div class="panel-body">
                                                    <table cellpadding="0" cellspacing="0" border="0"  class="table table-bordered">
                                                        <tbody>
                                                            <?php 
                                                            for($d=1;$d<=7;$d++):
                                                            
                                                            if($d==2)$day='sunday';
                                                            else if($d==3)$day='monday';
                                                            else if($d==4)$day='tuesday';
                                                            else if($d==5)$day='wednesday';
                                                            else if($d==6)$day='thursday';
                                                            else if($d==7)$day='friday';
                                                            else if($d==1)$day='saturday';
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td width="100"><?php echo strtoupper($day);?></td>
                                                                <td>
                                                                    <?php
                                                                    $this->db->order_by("time_start", "asc");
                                                                    $this->db->where('day' , $day);
                                                                    $this->db->where('class_id' , $row['class_id']);
                                                                    $routines   =   $this->db->get('class_routine')->result_array();
                                                                    foreach($routines as $row2):
                                                                    ?>
                                                                    <div class="btn-group">
                                                                        <span class="label label-success">
                                                                            <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                                            <?php echo '('.$row2['time_start'].'-'.$row2['time_end'].')';?>
                                                                        </span>  
                                                                    </div>
                                                                    <?php endforeach;?>

                                                                </td>
                                                            </tr>
                                                            <?php endfor;?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                   <!-- routine end -->
                </div>
            </div>
        </section><!--/#Rutine-->