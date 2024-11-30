<?php
$student_info	=	$this->crud_model->get_student_info($param2);
foreach($student_info as $row):?>

<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-3">
			
			<a href="#" class="profile-picture">
				<img src="<?php echo $this->crud_model->get_image_url('student' , $row['student_id']);?>" 
                	class="img-responsive img-circle" />
			</a>
			
		</div>
		
		<div class="col-sm-9">
			
			<ul class="profile-info-sections">
				<li style="padding:0px; margin:0px;">
					<div class="profile-name">
							<h3><?php echo $row['name'];?></h3>
					</div>
				</li>
			</ul>
			
		</div>
		
		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="">
            		<br>
                <table class="table table-bordered">
                
                    <?php if($row['class_id'] != ''):?>
                    <tr>
                        <td>Class</td>
                        <td><b><?php echo $this->crud_model->get_class_name($row['class_id']);?></b></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['roll'] != ''):?>
                    <tr>
                        <td>Roll</td>
                        <td><b><?php echo $row['roll'];?></b></td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['stip_id'] != ''):?>
                    <tr>
                        <td>Stipend ID</td>
                        <td><b><?php echo $row['stip_id'];?></b></td>
                    </tr>
                    <?php endif;?>

                    <?php if($row['board_reg'] != ''):?>
                    <tr>
                        <td>Board Reg</td>
                        <td><b><?php echo $row['board_reg'];?></b></td>
                    </tr>
                    <?php endif;?>

                    <?php if($row['board_roll'] != ''):?>
                    <tr>
                        <td>Board Roll</td>
                        <td><b><?php echo $row['board_roll'];?></b></td>
                    </tr>
                    <?php endif;?>

                       <?php if($row['prev_school'] != ''):?>
                    <tr>
                        <td>Previous School</td>
                        <td><b><?php echo $row['prev_school'];?></b></td>
                    </tr>
                    <?php endif;?>

                    <?php if($row['prev_class'] != ''):?>
                    <tr>
                        <td>Previous Class</td>
                        <td><b><?php echo $row['prev_class'];?></b></td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['prev_gpa'] != ''):?>
                    <tr>
                        <td>Previous GPA</td>
                        <td><b><?php echo $row['prev_gpa'];?></b></td>
                    </tr>
                    <?php endif;?>


                
                    <?php if($row['birthday'] != ''):?>
                    <tr>
                        <td>Birthday</td>
                        <td><b><?php echo $row['birthday'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['sex'] != ''):?>
                    <tr>
                        <td>Gender</td>
                        <td><b><?php echo $row['sex'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                
                    <?php if($row['phone'] != ''):?>
                    <tr>
                        <td>Phone</td>
                        <td><b><?php echo $row['phone'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['email'] != ''):?>
                    <tr>
                        <td>Email</td>
                        <td><b><?php echo $row['email'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['address'] != ''):?>
                    <tr>
                        <td>Vill/Area</td>
                        <td><b><?php echo $row['address'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                    <?php if($row['thana'] != ''):?>
                    <tr>
                        <td>Thana/Upazila</td>
                        <td><b><?php echo $row['thana'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['post_office'] != ''):?>
                    <tr>
                        <td>Post</td>
                        <td><b><?php echo $row['post_office'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                    

                     <?php if($row['district'] != ''):?>
                    <tr>
                        <td>District</td>
                        <td><b><?php echo $row['district'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['father_name'] != ''):?>
                    <tr>
                        <td>Father's Name</td>
                        <td><b><?php echo $row['father_name'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['father_nid'] != ''):?>
                    <tr>
                        <td>Father's NID</td>
                        <td><b><?php echo $row['father_nid'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['father_mobile'] != ''):?>
                    <tr>
                        <td>Father's Mobile</td>
                        <td><b><?php echo $row['father_mobile'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['mother_name'] != ''):?>
                    <tr>
                        <td>Mother's Name</td>
                        <td><b><?php echo $row['mother_name'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['mother_nid'] != ''):?>
                    <tr>
                        <td>Mother's NID</td>
                        <td><b><?php echo $row['mother_nid'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>

                     <?php if($row['mother_mobile'] != ''):?>
                    <tr>
                        <td>Mother's Mobile</td>
                        <td><b><?php echo $row['mother_mobile'];?></b>
                        </td>
                    </tr>
                    <?php endif;?>
                    
                </table>
			</div>
		</div>		
	</section>
	
	
	
</div>


<?php endforeach;?>