<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-md-12">

<!-- start: FIELDSET -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">

							<!-- count bar -->
							<div class="col-md-12">
									<!-- start: MINI STATS WITH SPARKLINE -->
									<ul class="mini-stats pull-right">
										<li>
											<div class="sparkline-1">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->am->total_income()?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('total_Deposit');?>
												</p>
											</div>
										</li>
										<li>
											<div class="sparkline-2">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->am->total_expense()?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('total_Expense');?>
												</p>
											</div>
										</li>
										
										
									</ul>
									<!-- end: MINI STATS WITH SPARKLINE -->
								</div>

							<!-- end of count bar -->
								<div class="col-md-12">
									<h5 class="over-title"><span class="text-bold">Income Reports </span></h5>
									<p class="margin-bottom-30">
										<?php include 'success_error_message.php'; ?>
									</p>
									<div class="row">

									<!-- Search Box -->
									<div class="col-md-12">
											<fieldset>
												<legend>
													Date Range
												</legend>
												<div class="row">
													<div class="tab-pane box active" id="list">
													<?php echo form_open('accounting/income_report_search' , array('roll' => 'form', 'method' => 'get', 'enctype' => 'multipart/form-data'));?>
													<div class="form-group col-md-5">
													<label>
														Start Date
													</label>
													<input type="date" class="form-control" name="start_date" value="<?=date('Y-m-d')?>" required >

													</div>

													<div class="form-group col-md-5">
													<label>
														End Date
													</label>
													<input type="date" class="form-control" name="end_date" value="<?=date('Y-m-d')?>" required >
													
													</div>

													<div class="form-group col-md-2">
													<label>
														
													</label>
													<input type="submit" class="form-control" value="Search"  >
													
													</div>

													</form>
													</div>
												</div>
									</fieldset>
									</div>
									<!-- End of search box -->
										<div class="col-md-12">
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
										                    		<th><div><?php echo get_phrase('Payment Method');?></div></th>
										                    		<th><div><?php echo get_phrase('Referance');?></div></th>
										                    		<th><div><?php echo get_phrase('Note');?></div></th>


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
																	<td><?php $pm_id=$inc->payment_method;
																	        $this->db->where('pm_id',$pm_id);
																	        $query= $this->db->get("payment_methods");
																	              
																			$p_methods= $query->result();

																			foreach($p_methods as $pm){

																				echo $pm->payment_method;
																			}

																			 ?>
																	</td>

																	<td><?=$inc->income_ref?></td>
																	<td><?=$inc->income_note?></td>

																	<td><a data-toggle="tooltip" data-placement="top" title="Edit" href="<?=base_url()?>accounting/edit_income/<?=$inc->ai_id?>"> <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
																	<a data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are You Sure To Delete?')" href="<?=base_url()?>accounting/delete_income/<?=$inc->ai_id?>"> <i class="fa fa-trash"></i></a>
																	</td>
										                            
										                        </tr>
										                    <?php endforeach; ?>

										                    <tr>
										                    	<td></td><td></td>
										                    	<td>Total</td>
										                    	<td><?php echo $this->am->total_income()?></td>
										                    </tr>
										                       
										                    </tbody>
										                </table>
													</div>
													
													
												</div>
												
													
													
											</fieldset>
											

               
										</div>

										
										
									</div></div></div></div></div></div></div>
						<!-- end: FIELDSET -->
