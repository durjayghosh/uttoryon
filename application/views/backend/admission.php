<?php
	$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
	$account_type 	=	$this->session->userdata('login_type');

	?>						
						
						<!-- start: FIRST SECTION -->

    <div class="row">
        <div class="col-md-12">


            <div class="card">
                <div class="card-header">
                    <h2>Admission List</h2>

                    <a href="<?= base_url('super_admin/admission_list_export?export=excel') ?>" class="btn btn-success">Export to Excel</a>

                </div>

                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-success">
                           <h6 style="color: green;"> <?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h6>
                        </div>
                    <?php endif;?>


                <div class="card-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="sample_1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Birth Date</th>
                            <th>Online Registration Number</th>
                            <th>Class</th>
                            <th>Roll</th>
                            <th>Mobile</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; foreach ($admission as $row): ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $row['student_name_bangla']; ?> (<?php echo $row['student_name_english']; ?> )</td>
                                <td><?php echo $row['father_name_bangla']; ?> (<?php echo $row['father_name_english']; ?> )</td>
                                <td><?php echo $row['mother_name_bangla']; ?> (<?php echo $row['mother_name_english']; ?> )</td>
                                <td><?php echo $row['birth_date']; ?></td>
                                <td><?php echo $row['online_birth_registration_no']; ?></td>
                                <td><?php echo $row['class']; ?></td>
                                <td><?php echo $row['roll_id']; ?></td>
                                <td><?php echo $row['mobile_no']; ?></td>
                                <td><?php echo $row['created_date']; ?></td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="<?php
                                        $hashed_id = hash('sha256', $row['id']);


                                        echo base_url('site/view_admission_form/' . $hashed_id);
                                        ?>" target="_blank" class="btn btn-primary">View</a>

                                        <a style="margin-left: 5px;" onclick="return confirm('are you sure?')" href="<?= base_url()?>super_admin/admission_delete/<?= $row['id']?>" class="btn btn-danger">
                                            <i class="bx bxs-trash"></i>Delete
                                        </a>
                                    </div>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
											
						<!-- end: FIRST SECTION -->

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        new DataTable('#example');

    </script>

<?php include 'modal.php';?>