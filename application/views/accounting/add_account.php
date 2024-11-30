<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-md-12">

<!-- start: FIELDSET -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title"><span class="text-bold">Add Account</span></h5>
									<p class="margin-bottom-30">
										<?php include 'success_error_message.php'; ?>
									</p>
									<div class="row">
										<div class="col-md-6">
										 <?php echo form_open('accounting/creat_account' , array('roll' => 'form', 'enctype' => 'multipart/form-data'));?>
											<fieldset>
												<legend>
													Add Account
												</legend>
												<div class="form-group">
													<label>
														Account Name <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="ac_name" value="" required>
													</div>
													<div class="form-group">
													<label>
														Account Balance
													</label>
													<input type="number" class="form-control" name="ac_balance" value="" required >
													</div>
													<div class="form-group">
													<label>
														Note
													</label>
													<input type="text" class="form-control" name="ac_note" value=""  >
													</div>
													<button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>																				
											</fieldset>
											 <?php echo form_close();?>
										</div>
										<div class="col-md-6">
											<fieldset>
												<legend>
													List of Account
												</legend>
												<div class="row">
												<div class="tab-pane box active" id="list">
										                <table  class="table table-bordered datatable" id="table_export">
										                	<thead>
										                		<tr>
										                    		<th><div><?php echo get_phrase('Account Name');?></div></th>
										                    		<th><div><?php echo get_phrase('Starting Balance');?></div></th>
										                    		<th><div><?php echo get_phrase('AC Note');?></div></th>
										                    		<th><div><?php echo get_phrase('options');?></div></th>
																</tr>
															</thead>
										                    <tbody>
										                   <?php foreach($this->am->getData() as $row): ?> 	
										                        <tr>
																	<td><?=$row->ac_name?></td>
																	<td><?=$row->current_balance?></td>
																	<td><?=$row->ac_note?></td>
																	<td><a data-toggle="tooltip" data-placement="top" title="Edit" href="<?=base_url()?>accounting/edit_account/<?=$row->aa_id?>"> <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
																	<a data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are You Sure To Delete?')" href="<?=base_url()?>accounting/delete_account/<?=$row->aa_id?>"> <i class="fa fa-trash"></i></a>
																	</td>
										                            
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
