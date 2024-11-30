<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-md-12">

<!-- start: FIELDSET -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title"><span class="text-bold">Edit Payment Method</span></h5>
									<p class="margin-bottom-30">
									<?php include 'success_error_message.php'; ?>	
									</p>
									<div class="row">
										<div class="col-md-6">
										<?php foreach($this->am->edit_payment_method() as $ea): ?> 
										 <?php echo form_open('accounting/update_payment_method' , array('roll' => 'form', 'enctype' => 'multipart/form-data'));?>
											
										 	<input type="hidden" class="form-control" name="pm_id" value="<?=$ea->pm_id?>" required>
											<fieldset>
												<legend>
													Payment Method
												</legend>

													<div class="form-group">
													<label>
														Payment Method Name <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="payment_method" value="<?=$ea->payment_method?>" required>
													</div>
													
													
													<button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>
													<a href="<?=base_url()?>accounting/add_payment_method" class="btn btn-danger"><?php echo get_phrase('Cancel');?></a>																				
											</fieldset>
											 <?php echo form_close();?>
											<?php endforeach; ?>
										</div>
										<div class="col-md-6">
											<fieldset>
												<legend>
													List of Payment Methods
												</legend>
												<div class="row">
												<div class="tab-pane box active" id="list">
										                <table  class="table table-bordered datatable" id="table_export">
										                	<thead>
										                		<tr>
										                    		<th><div><?php echo get_phrase('Payment Method Name');?></div></th>
										                       		<th><div><?php echo get_phrase('options');?></div></th>
																</tr>
															</thead>
										                    <tbody>
										                   <?php foreach($this->am->get_payment_method() as $row): ?> 	
										                        <tr>
																	<td><?=$row->payment_method?></td>
																	
																	<td><a onclick="return confirm('Are You Sure To Delete?')" href="<?=base_url()?>accounting/delete_payment_method/<?=$row->pm_id?>"> Delete</a></td>
										                            
										                        </tr>
										                    <?php endforeach; ?>
										                       
										                    </tbody>
										                </table>
													</div>
													
													
												</div>
												
													
													
											</fieldset>
											

               
										</div>
									</div></div></div></div></div></div></div>
						<!-- end: FIELDSET -->