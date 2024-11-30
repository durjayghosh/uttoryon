<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-md-12">

<!-- start: FIELDSET -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title"><span class="text-bold">Admission Form</span></h5>
									<p class="margin-bottom-30">
										
									</p>
									<div class="row">
										<div class="col-md-6">
										 <?php echo form_open('super_admin/student/create/' , array('roll' => 'form', 'enctype' => 'multipart/form-data'));?>
											<fieldset>
												<legend>
													Student Panel Account
												</legend>
												<div class="form-group">
													<label>
														<?php echo get_phrase('email');?> <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="email" value="">
													</div>
													<div class="form-group">
													<label>
														Password
													</label>
													<input type="text" class="form-control" name="password" value="" >
												</div>
											</fieldset>
											<fieldset>
												<legend>
													Class Information
												</legend>
												<div class="form-group">
													<label for="field-1"><?php echo get_phrase('name');?></label>
							                        
													<div class="">
														<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
													</div>
												</div>
												<div class="form-group">
													<label>
														<?php echo get_phrase('class');?>
													</label>
													<select name="class_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
								                              <option value=""><?php echo get_phrase('select');?></option>
								                              <?php 
																		$classes = $this->db->get('class')->result_array();
																		foreach($classes as $row):
																			?>
								                                    		<option value="<?php echo $row['class_id'];?>">
																					<?php echo $row['name'];?>
								                                                    </option>
								                                        <?php
																		endforeach;
																  ?>
								                          </select>
												</div>
												<div class="form-group">
													<label for="field-2"><?php echo get_phrase('class roll');?></label>
							                        
													
														<input type="text" class="form-control" name="roll" value="" >
													 
												</div>
												
											</fieldset>
											<fieldset>
												<legend>
													Other Ids
												</legend>
												<div class="form-group">
													<label>
														<?php echo get_phrase('Stipend ID');?> <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="stip_id" value="">
													</div>
													<div class="form-group">
														<label>
															Board Reg. No.
														</label>
														<input type="text" class="form-control" name="board_reg" value="" >
													</div>
													<div class="form-group">
														<label>
															Board Roll No.
														</label>
														<input type="text" class="form-control" name="board_roll" value="" >
													</div>
											</fieldset>

											<fieldset>
												<legend>
													Student History
												</legend>
												<div class="form-group">
													<label>
														<?php echo get_phrase('Previous School Name');?> 
													</label>
													<input type="text" class="form-control" name="prev_school" value="">
													</div>
													<div class="form-group">
														<label>
															Previous Class
														</label>
														<input type="text" class="form-control" name="prev_class" value="" >
													</div>
													<div class="form-group">
														<label>
															Last GPA
														</label>
														<input type="text" class="form-control" name="prev_gpa" value="" >
													</div>
											</fieldset>


										</div>
										<div class="col-md-6">
											<fieldset>
												<legend>
													Personal Information
												</legend>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="field-2" ><?php echo get_phrase('Date of Birth');?></label>
									                        
															<div>
																<input type="date" class="form-control datepicker" name="birthday" value="" data-start-view="2">
															</div> 
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="field-2"><?php echo get_phrase('vill/area');?></label>
									                        
															<div >
																<input type="text" class="form-control" name="address" value="" >
															</div> 
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="block">
																Gender
															</label>
															<div class="clip-radio radio-primary">
																<input type="radio" id="female" name="sex" value="female">
																<label for="female">
																	Female
																</label>
																<input type="radio" id="male" name="sex" value="male" checked="checked">
																<label for="male">
																	Male
																</label>
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label for="field-2"><?php echo get_phrase('Upazilla/Thana');?></label>
									                        
															<div >
																<input type="text" class="form-control" name="thana" value="" >
															</div> 
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label for="field-2"><?php echo get_phrase('Post');?></label>
									                        
															<div >
																<input type="text" class="form-control" name="post_office" value="" >
															</div> 
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label for="field-2"><?php echo get_phrase('District');?></label>
									                        
															<div >
																<input type="text" class="form-control" name="district" value="" >
															</div> 
														</div>
													</div>


											</fieldset>

											<fieldset>
												<legend>
													Parents Details
												</legend>
												<div class="form-group">
													<label>
														Father's Name <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="father_name" value="">
												</div>

												<div class="form-group">
													<label>
														Father's NID <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="father_nid" value="">
												</div>
												<div class="form-group">
													<label>
														Father's Mobile <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="father_mobile" value="">
												</div>
												<div class="form-group">
													<label>
														Mother's Name <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="mother_name" value="">
												</div>
												<div class="form-group">
													<label>
														Mother's NID <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="mother_nid" value="">
												</div>
												<div class="form-group">
													<label>
														Mother's Mobile <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="mother_mobile" value="">
												</div>
													
											</fieldset>

											<fieldset>
												<legend>
													Photo
												</legend>
												<div class="row">
													<div class="col-md-12">
														<div class="col-sm-5">
																	<div class="fileinput fileinput-new" data-provides="fileinput">
																		<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
																			<img src="http://placehold.it/200x200" alt="...">
																		</div>
																		<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
																		<div>
																			<span class="btn btn-white btn-file">
																				
																				<span class="btn btn-success fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Chose Photo...</span>
																					<input type="file" name="userfile" accept="image/*">

																				</span>
																				<button type="submit" class="btn btn-info"><?php echo get_phrase('add_student');?></button>
																			</span>
																			<div class="form-group">
																				<div >
																					
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>



													</div>
												</fieldset>




												</div>
											



           
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: FIELDSET -->
     <?php echo form_close();?>