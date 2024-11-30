
<div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">

<button class="btn btn-primary btn-o pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                        Ad New Ret.Teacher</button>

<!-- Large Modal -->
                                        <div class="modal fade bs-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">New Entry</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php include "ex_teacher.php" ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                                            Close
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Large Modal -->

<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
	 <h1>View All Retired Teacher</h1>
     <thead>
    <tr>
    	<th>Id No</th>
        <th>Full Name</th>
        <th>Join Date</th>
        <th>Retired Date</th>
        <th>Phone No.</th>
        <th>Email Address</th>
        <th>Photo</th>
        <th>Edit Member</th>
        <th>Delete Member</th>
    </tr>
    </thead>
    <tbody>
    

   <?php foreach ($this->exp_m->getData_ex_teacher() as $row) { 
        
    ?>

    <tr align="center">
    	<td><?php echo $row->id ?></td>
        <td><?php echo $row->name ?></td>
        <td><?php echo $row->join_date ?></td>
         <td><?php echo $row->ret_date ?></td>
        <td><?php echo $row->phone ?></td>
        <td><?php echo $row->email ?></td>
        <td><img src="<?php echo base_url() .'uploads/ex_teacher/'.$row->photo ?>" width="80" height="80" class="img-circle"></td>
        
        <td><a class="btn btn-primary" href="edit_ex_teacher/<?php echo $row->id ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete_ex_teacher/<?php echo $row->id ?>">Delete</a></td>
    </tr>
<?php } ?>
</tbody>
</table>

<!-- <button class="btn btn-primary pull-right success-message">
                                                        Open Message
                                                    </button>

                                                    <a href="#" onclick="alertfy()"> Click</a>

                                                    <button id="showtoast" class="btn btn-primary btn-wide" type="button">
                                                Show Toast
                                            </button>

                                            <a id='linkButton'>Show Message</a> -->
                                            
<?php 

$success = $this->input->get('success');
$hula = $this->input->get('hula');
//$success = 1;

if($success==1){ echo "$hula";} 

?>



</div></div></div>

       <script>
      /* function alertfy(){
        swal({   title: "Operation Success!",   text: "",   timer: 2000,   showConfirmButton: true });

}*/
       </script>




