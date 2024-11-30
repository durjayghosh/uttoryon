<?php foreach($this->am->edit_income() as $income): ?>

<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-md-12">

<!-- start: FIELDSET -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title"><span class="text-bold">Edit Income</span></h5>
									<p class="margin-bottom-30">
										<?php include 'success_error_message.php'; ?>
									</p>
									<div class="row">
										<div class="col-md-6">
										 <?php echo form_open('accounting/update_income' , array('roll' => 'form', 'enctype' => 'multipart/form-data'));?>
											<input type="hidden" name="ai_id" value="<?=$income->ai_id?>">

											<fieldset>
												<legend>
													Edit Income
												</legend>
												<div class="form-group">
													<label>
														Account Name <span class="symbol required"></span>
													</label>
													<select name="ac_name" class="form-control" required >
														<option value="">Please Select An Account</option>

														<?php foreach($this->am->get_account() as $ac): ?>
														<option <?php if($income->ac_name==$ac->aa_id){ echo "selected";} ?> value="<?=$ac->aa_id?>"><?=$ac->ac_name?></option>
													<?php endforeach; ?>
													</select>
													</div>
													<div class="form-group">
													<label>
														Date
													</label>
													<input type="date" class="form-control" name="income_date" value="<?=$income->income_date?>" required >
													</div>
													<div class="form-group">
													<label>
														Income Type
													</label>
													<select name="income_type" class="form-control" required >
														<option value="">Please Select An Type</option>

														<?php foreach($this->am->get_income_type() as $it): ?>
														<option <?php if($income->income_type==$it->ca_id){ echo "selected";} ?> value="<?=$it->ca_id?>"><?=$it->ca_category?></option>
													<?php endforeach; ?>
													</select>
													</div>

													<div class="form-group">
													<label>
														Amount
													</label>
													<input type="number" class="form-control" name="income_amount" value="<?=$income->income_amount?>" required >
													</div>

													<div class="form-group">
													<label>
														Payment Method
													</label>
													<select name="payment_method" class="form-control" required >
														<option value="">Please Select An Type</option>

														<?php foreach($this->am->get_payment_method() as $pm): ?>
														<option <?php if($income->payment_method==$pm->pm_id){ echo "selected";} ?> value="<?=$pm->pm_id?>"><?=$pm->payment_method?></option>
													<?php endforeach; ?>
													</select>
													</div>

													<div class="form-group">
													<label>
														Reference No
													</label>
													<input type="text" class="form-control" name="income_ref" value="<?=$income->income_ref?>" required >
													</div>

													<div class="form-group">
													<label>
														Note
													</label>
													<input type="text" class="form-control" name="income_note" value="<?=$income->income_ref?>"  >
													</div>


													<button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>
													<a href="<?=base_url()?>accounting/add_income" class="btn btn-danger"><?php echo get_phrase('Cancel');?></a>																					
											</fieldset>
											 <?php echo form_close();?>
										</div>
										<div class="col-md-6">
											<fieldset>
												<legend>
													List Deposit 
												</legend>
												<div class="row">
												<div class="tab-pane box active" id="list">
										                <table  class="table table-bordered datatable" id="table_export">
										                	<thead>
										                		<tr>
										                    		<th><div><?php echo get_phrase('Income From');?></div></th>
										                    		<th><div><?php echo get_phrase('Deposit To');?></div></th>

										                    		<th><div><?php echo get_phrase('Deposit Date');?></div></th>
										                    		<th><div><?php echo get_phrase('Amount');?></div></th>
										                    		<th><div><?php echo get_phrase('options');?></div></th>
																</tr>
															</thead>
										                    <tbody>
										                   <?php foreach($this->am->get_income() as $inc): ?> 	
										                        <tr>
																	<td>
																	<?php $ca_id=$inc->income_type;
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

																	<td><?=$inc->income_date?></td>
																	<td><?=$inc->income_amount?></td>
																	<td><a data-toggle="tooltip" data-placement="top" title="Edit" href="<?=base_url()?>accounting/edit_income/<?=$inc->ai_id?>"> <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
																	<a data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are You Sure To Delete?')" href="<?=base_url()?>accounting/delete_income/<?=$inc->ai_id?>"> <i class="fa fa-trash"></i></a>
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
<?php endforeach; ?>