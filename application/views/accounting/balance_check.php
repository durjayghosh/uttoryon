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
									<h5 class="over-title"><span class="text-bold">Balance Check </span></h5>
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
													<?php echo form_open('accounting/balance_check_search' , array('roll' => 'form', 'method' => 'get', 'enctype' => 'multipart/form-data'));?>
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
										                    		<th><div><?php echo get_phrase('Account Name');?></div></th>
										                    		<th><div><?php echo get_phrase('Starting Balance');?></div></th>

										                    		<th><div><?php echo get_phrase('Total Income');?></div></th>
										                    		<th><div><?php echo get_phrase('Total Amount');?></div></th>
										                    		
																</tr>
															</thead>
										                    <tbody>
										                   <?php foreach($this->am->get_account() as $ac): ?> 	
										                        <tr>
																	<td><?=$ac->ac_name?></td>
																	<td><?=$ac->starting_balance?></td>

																	<td><?php
																		$aa_id=$ac->aa_id;
																		$this->db->where('ac_name', $aa_id);
																		$query = $this->db->select_sum('income_amount', 'total_income');
																	    $query = $this->db->get('accounting_income');
																	    $result = $query->result();

																	    echo $total_income= $result[0]->total_income;
																	 	?>


																	 </td>
																	<td><?php echo number_format($ac->starting_balance+$total_income,2)?></td>
																	
																	
										                            
										                        </tr>
										                    <?php endforeach; ?>

										                   <tr>
										                    	<td></td>
										                    	<td>Total</td>
										                    	<td><?php echo $this->am->total_income()?></td>
										                    	<td><?php echo number_format($this->am->total_starting_balance()+$this->am->total_income(),2)?></td>
										                    </tr>
										                       
										                    </tbody>
										                </table>
													</div>
													
													
												</div>
												
													
													
											</fieldset>
											

               
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
										                    		<th><div><?php echo get_phrase('Account Name');?></div></th>
										                    		<th><div><?php echo get_phrase('Starting Balance');?></div></th>

										                    		<th><div><?php echo get_phrase('Total Income');?></div></th>
										                    		<th><div><?php echo get_phrase('Total Amount');?></div></th>
										                    		<th><div><?php echo get_phrase('Total Expense');?></div></th>
										                    		<th><div><?php echo get_phrase('Balance');?></div></th>

																</tr>
															</thead>
										                    <tbody>
										                    <?php foreach($this->am->get_account() as $ac): ?> 	
										                        <tr>
																	<td><?=$ac->ac_name?></td>
																	<td><?=number_format($ac->starting_balance,2)?></td>
																	<td><?php echo number_format($total_income,2)?></td>
																	<td><?php echo number_format($total_amount=$ac->starting_balance+$total_income,2)?></td>
																	<td>
																		<?php
																		$aa_id=$ac->aa_id;
																		$this->db->where('ac_name', $aa_id);
																		$query = $this->db->select_sum('expense_amount', 'total_expense');
																	    $query = $this->db->get('accounting_expense');
																	    $result = $query->result();

                                                                        $total_expense = $result[0]->total_expense ?? 0;  // Default to 0 if null
                                                                        echo number_format($total_expense, 2);

                                                                        ?>


																	</td>

																	<td><?php echo number_format($total_amount-$total_expense,2)?></td>
																	
																	
										                            
										                        </tr>
										                    <?php endforeach; ?>

										                     <tr>
										                    	<td></td>
										                    	<td>Total</td>
										                    	<td><?php echo $this->am->total_income()?></td>
										                    	<td><?php echo number_format($total_amount=$this->am->total_starting_balance()+$this->am->total_income(),2)?></td>
										                    	<td><?php echo $this->am->total_expense()?></td>
										                    	<td><?php echo number_format($total_amount-$this->am->total_expense(),2)?></td>

										                    </tr>
										                       
										                    </tbody>
										                </table>
													</div>
													
													
												</div>
												
													
													
											</fieldset>
											

               
										</div>
										
									</div></div></div></div></div></div></div>
						<!-- end: FIELDSET -->
