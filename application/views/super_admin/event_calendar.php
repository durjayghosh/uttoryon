<?php include "includes/header_links.php"; ?>
    
<?php include "includes/main_menu.php"; ?>      
<?php include "includes/menu_top_logo.php"; ?>  
<?php include "includes/top_bar.php"; ?>

<div class="row">
	<div class="col-md-12">
    
    	
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo get_phrase('Events_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_event');?>
                    	</a></li>
		</ul>
    	
        
	
		<div class="tab-content">
            
            <div class="tab-pane box active" id="list">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('title');?></div></th>
                    		<th><div><?php echo get_phrase('notice');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($notices as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td> <a target="_blank" href="<?php echo base_url() .'site/event_single/' .$row['notice_id'] ?>">
                            <?php echo $row['notice_title'] ?><?php echo $row['notice_title'];?></a></td>
                            <td class="span5"><?php echo $row['notice'];?></td>
                            <td><?php echo date('d M,Y', $row['create_timestamp']);?></td>
                            <td>
                            <div class="btn-group">
                                <button class="btn btn-primary btn-o " data-toggle="modal" data-target="#<?php echo $row['notice_id'];?>">
                                                        <span>Edit</span>
                                                    </button>
                               
                                <button class="btn btn-danger btn-o " data-toggle="modal" data-target="#<?php echo $row['notice_id'];?>DL">
                                                       Delete
                                                    </button>
                                                 
                                
                            </div>
                            </td>
                        </tr>


                        <div class="modal fade" id="<?php echo $row['notice_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php include "edit_event_calendar.php"; ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                                            Close
                                                        </button>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Small Modal -->
                                        <div class="modal fade" id="<?php echo $row['notice_id'];?>DL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="<?php echo $row['notice_id'];?>DL">Confirmation</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are You Sure to Delete?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                                            No
                                                        </button>
                                                        <a class="btn btn-danger btn-o " href="<?php echo base_url();?>super_admin/noticeboard/delete/<?php echo $row['notice_id'];?>" >
                                                            <i class="entypo-trash"></i>
                                                                <?php echo get_phrase('delete');?>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Small Modal -->



                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            
           
            
			
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('super_admin/noticeboard/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('title');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="notice_title"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('notice');?></label>
                                <div class="col-sm-5">
                                    <div class="box closable-chat-box">
                                        <div class="box-content padded">
                                                <div class="chat-message-box">
                                                <textarea name="notice" id="ttt" rows="5" placeholder="<?php echo get_phrase('add_notice');?>" class="form-control"></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('date');?></label>
                                <div class="col-sm-5">
                                    <input type="date" class="datepicker form-control" name="create_timestamp"/>
                                </div>
                            </div>

                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo get_phrase('add_notice');?></button>
                              </div>
							</div>
                    </form>                
                </div>                
			</div>
			
           
		</div>



<!-- start: CALENDAR -->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="panel-title">
                                        <i class="fa fa-calendar"></i>
                                        <?php echo get_phrase('event_schedule');?>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div id="notice_calendar"></div>
                                </div>
                                <div class="col-sm-3">
                                    <h4 class="space20">List Of Events</h4>
                                    <div id="event-categories">
                                    <?php $count = 1;foreach($notices as $row):?>
                                        <div class="event-category event-to-do" data-class="event-to-do">
                                            <?php echo $row['notice'];?> @ <?php echo date('d M,Y', $row['create_timestamp']);?>
                                        </div>
                                        <?php endforeach;?>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 <!-- end: CALENDAR -->


</div></div>




<?php include "includes/footer.php"; ?>       
            <!-- end: FOOTER -->
<?php include "includes/hidden_sidebar.php"; ?>             
<?php include "includes/settings.php"; ?>               
<?php include "includes/footer_js2.php"; ?>


