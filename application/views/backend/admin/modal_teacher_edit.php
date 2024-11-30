<?php 
$edit_data		=	$this->db->get_where('teacher' , array('teacher_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div  data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_teacher');?>
            	</div>
            </div>
			<div >
                    <?php echo form_open('super_admin/teacher/do_update/'.$row['teacher_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
                                <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                                
                                <div class="col-sm-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                            <img src="<?php echo $this->crud_model->get_image_url('teacher' , $row['teacher_id']);?>" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                        <div>
                                            <!-- <span class="btn btn-white btn-file"> -->
                                               <!--  <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span> -->
                                                <input type="file" name="userfile" accept="image/*">
                                            </span>
                                            <!-- <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>

                            <!-- extra field add -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Index No.');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="validate[required]" name="index_no" value="<?php echo $row['index_no'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('NID No.');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nid_no" value="<?php echo $row['nid_no'];?>" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Designation');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="designation" value="<?php echo $row['designation'];?>" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Joining Date');?></label>
                        
                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="join_date" value="<?php echo $row['join_date'];?>" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Teaching Subject');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="teach_subject" value="<?php echo $row['teach_subject'];?>" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
                        </div>
                    </div>


                    
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Educational Qualification');?></label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="education" value="<?php echo $row['education'];?>" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Father's Name</label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="father_name" value="<?php echo $row['father_name'];?>" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Mother's Name</label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="mother_name" value="<?php echo $row['mother_name'];?>" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
                        </div>
                    </div>

                            <!-- End of extra field  -->






                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="birthday" value="<?php echo $row['birthday'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('sex');?></label>
                                <div class="col-sm-5">
                                    <select name="sex" class="form-control">
                                    	<option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="password" value="<?php echo $row['password'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('MPO Status');?></label>
                        
                        <div class="col-sm-5">
                            <select name="mpo_status" class="form-control">
                                <option <?php if($row['mpo_status']=="Yes"){echo "selected";} ?> value="Yes">Yes</option>
                                <option <?php if($row['mpo_status']=="No"){echo "selected";} ?> value="No">No</option>

                            </select>
                        </div> 
                    </div>
                            
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_teacher');?></button>
                            </div>
                        </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>