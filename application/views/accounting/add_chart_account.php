<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-md-12">

<!-- start: FIELDSET -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title"><span class="text-bold">Add Chart Of Accounts</span></h5>
									<p class="margin-bottom-30">
										<?php include 'success_error_message.php'; ?>
									</p>
									<div class="row">
										<div class="col-md-6">
										 <?php echo form_open('accounting/creat_chart_account' , array('roll' => 'form', 'enctype' => 'multipart/form-data'));?>
											<fieldset>
												<legend>
													Add Account
												</legend>
												<div class="form-group">
													<label>
														Chart Of Account Name <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="ca_category" value="" required>
													</div>
													<div class="form-group">
													<label>
														Account Type
													</label>
													<select name="ca_type" class="form-control">
														<option value="Income">Income</option>
														<option value="Expense">Expense</option>

													</select>
													</div>
													
													<button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>																				
											</fieldset>
											 <?php echo form_close();?>
										</div>
										<div class="col-md-6">
											<fieldset>
												<legend>
													List of Chaart of Accounts
												</legend>
												<div class="row">
												<div class="tab-pane box active" id="list">
										                <table  class="table table-bordered datatable" id="table_export">
										                	<thead>
										                		<tr>
										                    		<th><div><?php echo get_phrase('Account Name');?></div></th>
										                    		<th><div><?php echo get_phrase('Account Type');?></div></th>
										                    		
										                    		<th><div><?php echo get_phrase('options');?></div></th>
																</tr>
															</thead>
										                    <tbody>
										                   <?php foreach($this->am->get_chart_account() as $row): ?> 	
										                        <tr>
																	<td><?=$row->ca_category?></td>
																	<td><?=$row->ca_type?></td>
																	
																	<td><a data-toggle="tooltip" data-placement="top" title="Edit" href="<?=base_url()?>accounting/edit_chart_account/<?=$row->ca_id?>"> <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
																	<a data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are You Sure To Delete?')" href="<?=base_url()?>accounting/delete_chart_account/<?=$row->ca_id?>"> <i class="fa fa-trash"></i></a>
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
