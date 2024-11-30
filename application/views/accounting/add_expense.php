<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-md-12">

<!-- start: FIELDSET -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title"><span class="text-bold">Add Expense</span></h5>
									<p class="margin-bottom-30">
										<?php include 'success_error_message.php'; ?>
									</p>
									<div class="row">
										<div class="col-md-6">
										 <?php echo form_open('accounting/creat_expense' , array('roll' => 'form', 'enctype' => 'multipart/form-data'));?>
											<fieldset>
												<legend>
													Add Expense
												</legend>
												<div class="form-group">
													<label>
														Account Name <span class="symbol required"></span> <a href="<?=base_url()?>accounting/add_account"> Add New </a> 
													</label>
													<select name="ac_name" class="form-control" required >
														<option value="">Please Select An Account</option>

														<?php foreach($this->am->get_account() as $ac): ?>
														<option value="<?=$ac->aa_id?>"><?=$ac->ac_name?></option>
													<?php endforeach; ?>
													</select>
													</div>
													<div class="form-group">
													<label>
														Date
													</label>
													<input type="date" class="form-control" name="expense_date" value="<?=date('Y-m-d')?>" required >
													</div>
													<div class="form-group">
													<label>
														Expense Type <a href="<?=base_url()?>accounting/add_chart_account"> Add New </a>
													</label>
													<select name="expense_type" class="form-control" required >
														<option value="">Please Select An Type</option>

														<?php foreach($this->am->get_expense_type() as $it): ?>
														<option value="<?=$it->ca_id?>"><?=$it->ca_category?></option>
													<?php endforeach; ?>
													</select>
													</div>

													<div class="form-group">
													<label>
														Amount
													</label>
													<input type="number" class="form-control" name="expense_amount" value="" required >
													</div>

													<div class="form-group">
													<label>
														Payment Method <a href="<?=base_url()?>accounting/add_payment_method"> Add New </a>
													</label>
													<select name="payment_method" class="form-control" required >
														<option value="">Please Select An Type</option>

														<?php foreach($this->am->get_payment_method() as $pm): ?>
														<option value="<?=$pm->pm_id?>"><?=$pm->payment_method?></option>
													<?php endforeach; ?>
													</select>
													</div>

													<div class="form-group">
													<label>
														Reference No
													</label>
													<input type="text" class="form-control" name="expense_ref" value=""  >
													</div>

													<div class="form-group">
													<label>
														Note
													</label>
													<input type="text" class="form-control" name="expense_note" value=""  >
													</div>


													<button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>																				
											</fieldset>
											 <?php echo form_close();?>
										</div>
										<div class="col-md-6">
											<fieldset>
												<legend>
													List Expense 
												</legend>
												<div class="row">
												<div class="tab-pane box active" id="list">
										                <table  class="table table-bordered datatable" id="table_export">
										                	<thead>
										                		<tr>
										                    		<th><div><?php echo get_phrase('expense From');?></div></th>
										                    		<th><div><?php echo get_phrase('Deposit To');?></div></th>

										                    		<th><div><?php echo get_phrase('Account');?></div></th>
										                    		<th><div><?php echo get_phrase('Amount');?></div></th>
										                    		<th><div><?php echo get_phrase('options');?></div></th>
																</tr>
															</thead>
										                    <tbody>
										                   <?php foreach($this->am->get_expense() as $inc): ?> 	
										                        <tr>
																	<td>
																	<?php $ca_id=$inc->expense_type;
																	        $this->db->where('ca_id',$ca_id);
																	        $query= $this->db->get("chart_accounts");
																	              
																			$charts_ac= $query->result();

																			foreach($charts_ac as $ca){

																				echo $ca->ca_category;
																			}

																			 ?>


																	</td>
																	<td><?php $aa_id=$inc->ac_name;
																	        $this->db->where('aa_id',$aa_id);
																	        $query= $this->db->get("accounting_account");
																	              
																			$accounts= $query->result();

																			foreach($accounts as $ac){

																				echo $ac->ac_name;
																			}

																			 ?>
																	</td>

																	<td><?=$inc->expense_date?></td>
																	<td><?=$inc->expense_amount?></td>
																	<td><a data-toggle="tooltip" data-placement="top" title="Edit" href="<?=base_url()?>accounting/edit_expense/<?=$inc->ae_id?>"> <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
																	<a data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are You Sure To Delete?')" href="<?=base_url()?>accounting/delete_expense/<?=$inc->ae_id?>"> <i class="fa fa-trash"></i></a>
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
