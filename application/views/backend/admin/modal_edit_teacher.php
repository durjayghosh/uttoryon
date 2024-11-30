<div class="" id="edit" style="padding: 5px">
                <div class="box-content">
                	<?php foreach($edit_data as $row):?>
                    <?php echo form_open('super_admin/teacher/do_update/'.$row['teacher_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="validate[required]" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>

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







                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker fill-up" name="birthday" value="<?php echo $row['birthday'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('sex');?></label>
                                <div class="col-sm-5">
                                    <select name="sex" class="uniform" style="width:100%;">
                                    	<option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="" name="address" value="<?php echo $row['address'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="" name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="" name="password" value="<?php echo $row['password'];?>"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                                <div class="controls" style="width:210px;">
                                    <input type="file" class="" name="userfile" id="imgInp" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="controls" style="width:210px;">
                                    <img id="blah" src="<?php echo $this->crud_model->get_image_url('teacher',$row['teacher_id']);?>" alt="your image" height="100" />
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('edit_teacher');?></button>
                        </div>
                    </form>
                    <?php endforeach;?>
                </div>
			</div>