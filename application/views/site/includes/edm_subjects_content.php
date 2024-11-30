         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Subjects</h2>
        </div>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>">Home</a></li>
          <li class="active">Subjects</li>
        </ol>       
        <section id="edm_rutine" class="container-fluid">
            <div class="row">
                <div class="col-sm-12"> 
                <!-- routine start -->
                        <div class="tab-pane active" id="list">
                            <div class="panel-group joined" id="accordion-test-2">
                                <?php 
                                $toggle = true;
                                $classes = $this->db->get('class')->result_array();
                                foreach($classes as $row):

                                    $class_id=$row['class_id'];
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
                                                           
                                                            <tr class="gradeA">
                                                                <td width="100">Main Subjects</td>
                                                                <td>
                                                                    <?php
                                                                    $this->db->where('class_id' , $class_id);
                                                                   $subjects   =   $this->db->get('subject')->result_array();
                                                                    foreach($subjects as $row2):
                                                                    ?>
                                                                    <div class="btn-group">
                                                                        <span class="label label-success">
                                                                            <?=$row2['name']?>
                                                                        </span>  
                                                                    </div>
                                                                    <?php endforeach;?>

                                                                </td>
                                                            </tr>
                                                          
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
                   <!-- routine end -->
                </div>
            </div>
        </section><!--/#Rutine-->