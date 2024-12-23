<?php 
$edit_data		=	$this->db->get_where('student' , array('student_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_student');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open('super_admin/student/'.$row['class_id'].'/do_update/'.$row['student_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="<?php echo $this->crud_model->get_image_url('student' , $row['student_id']);?>" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['name'];?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
										$classes = $this->db->get('class')->result_array();
										foreach($classes as $row2):
											?>
                                    		<option value="<?php echo $row2['class_id'];?>"
                                            	<?php if($row['class_id'] == $row2['class_id'])echo 'selected';?>>
														<?php echo $row2['name'];?>
                                                    </option>
                                        <?php
										endforeach;
								  ?>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('roll');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="roll" value="<?php echo $row['roll'];?>" >
						</div> 
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Stipend ID');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['stip_id'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Board Reg');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['board_reg'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Board Roll');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['board_roll'];?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="<?php echo $row['birthday'];?>" data-start-view="2">
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                              <option value="female"<?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Vill/Area');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>" >
						</div> 
					</div>
					
					                    
					

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Thana/Upazila');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['thana'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Post Office');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['post_office'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Distric');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['district'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Previous School');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['prev_school'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Previous Class');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['prev_class'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Previous GPA');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['prev_gpa'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Father name');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['father_name'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Father NID');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['father_nid'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Father Mobile');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['father_mobile'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Mother name');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['mother_name'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Mother NID');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['mother_nid'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Mother Mobile');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="<?php echo $row['mother_mobile'];?>">
						</div>
					</div>

					


                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('update_student');?></button>
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