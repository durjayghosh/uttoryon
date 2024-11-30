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
													<label for="field-2"><?php echo get_phrase('roll');?></label>
							                        
													
														<input type="text" class="form-control" name="roll" value="" >
													 
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
															<label for="field-2" ><?php echo get_phrase('birthday');?></label>
									                        
															<div>
																<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
															</div> 
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="field-2"><?php echo get_phrase('phone');?></label>
									                        
															<div >
																<input type="text" class="form-control" name="phone" value="" >
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
															<label for="field-2"><?php echo get_phrase('address');?></label>
									                        
															<div >
																<input type="text" class="form-control" name="address" value="" >
															</div> 
														</div>
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
												</div>
											</fieldset>

                <?php echo form_close();?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: FIELDSET -->
