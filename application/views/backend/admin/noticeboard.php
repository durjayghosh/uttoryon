<div class="row">
	<div class="col-md-12">
    
    	
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo get_phrase('noticeboard_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_noticeboard');?>
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
							<td><?php echo $row['notice_title'];?></td>
							<td class="span5"><?php echo $row['notice'];?></td>
							<td><?php echo date('d M,Y', $row['create_timestamp']);?></td>
							<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_notice/<?php echo $row['notice_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>super_admin/noticeboard/delete/<?php echo $row['notice_id'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo get_phrase('delete');?>
                                            </a>
                                                    </li>
                                </ul>
                            </div>
        					</td>
                        </tr>
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


<!-- event schedule -->

<div class="row">
            <!-- CALENDAR-->
            <div class="container-fluid container-fullw bg-white">    
                <div class=" " data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-calendar"></i>
                            <?php echo get_phrase('event_schedule');?>
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

<!-- event schedule end -->



<!-- start: CALENDAR -->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-sm-12 space20">
                                    <a href="#newFullEvent" class="btn btn-primary btn-o add-event"><i class="fa fa-plus"></i> Add New Event</a>
                                </div>
                                <div class="col-sm-9">
                                    <div id='full-calendar'></div>
                                </div>
                                <div class="col-sm-3">
                                    <h4 class="space20">Draggable categories</h4>
                                    <div id="event-categories">
                                        <div class="event-category event-generic" data-class="generic">
                                            Generic
                                        </div>
                                        <div class="event-category event-home" data-class="home">
                                            Home
                                        </div>
                                        <div class="event-category event-job" data-class="job">
                                            Job
                                        </div>
                                        <div class="event-category event-off-site-work" data-class="off-site-work">
                                            Off-site work
                                        </div>
                                        <div class="event-category event-to-do" data-class="to-do">
                                            To Do
                                        </div>
                                        <div class="event-category event-cancelled" data-class="cancelled">
                                            Cancelled
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="grey" id="drop-remove" />
                                                Remove after drop
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: CALENDAR -->




<script>
  $(document).ready(function() {
      
      var calendar = $('#notice_calendar');
                
                $('#notice_calendar').fullCalendar({
                    header: {
                        left: 'title',
                        right: 'today prev,next'
                    },
                    
                    //defaultView: 'basicWeek',
                    
                    editable: false,
                    firstDay: 1,
                    height: 530,
                    droppable: false,
                    
                    events: [
                        <?php 
                        $notices    =   $this->db->get('noticeboard')->result_array();
                        foreach($notices as $row):
                        ?>
                        {
                            title: "<?php echo $row['notice_title'];?>",
                            start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
                            end:    new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
                            className: 'event-to-do',
                            category: 'to-do',
                            allDay: true 
                        },
                        <?php 
                        endforeach
                        ?>
                        
                    ]
                });
    });
  </script>


  <script>

/*$(document).ready(function() {


var Calendar = function() {"use strict";
    var dateToShow, calendar, demoCalendar, eventClass, eventCategory, subViewElement, subViewContent, $eventDetail;
    var defaultRange = new Object;
    defaultRange.start = moment();
    defaultRange.end = moment().add(1, 'days');
    //Calendar
    var setFullCalendarEvents = function() {
        var date = new Date();
        dateToShow = date;
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        demoCalendar = [{
            title: 'Networking',
            start: new Date(y, m, d, 20, 0),
            end: new Date(y, m, d, 21, 0),
            className: 'event-job',
            category: 'job',
            allDay: false,
            content: 'Out to design conference'
        }, {
            title: 'Bootstrap Seminar',
            start: new Date(y, m, d - 5),
            end: new Date(y, m, d - 2),
            className: 'event-off-site-work',
            category: 'off-site-work',
            allDay: true
        }, {
            title: 'Lunch with Nicole',
            start: new Date(y, m, d - 3, 12, 0),
            end: new Date(y, m, d - 3, 12, 30),
            className: 'event-generic',
            category: 'generic',
            allDay: false
        }, {
            title: 'Corporate Website Redesign',
            start: new Date(y, m, d + 5),
            end: new Date(y, m, d + 10),
            className: 'event-to-do',
            category: 'to-do',
            allDay: true
        }];
    };



 });*/
  </script>