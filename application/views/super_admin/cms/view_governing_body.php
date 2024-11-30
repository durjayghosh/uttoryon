<?php $page_name = "view_governing_body" ;?>
<div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">

<button class="btn btn-primary btn-o pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                        Ad New Governing Body</button>

<!-- Large Modal -->
                                        <div class="modal fade bs-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">New Governing Body</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php include "governing_body.php" ?>
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
	
    	 <h1>View All Members</h1>
    <thead>
    <tr>
    	<th>Id No</th>
        <th>Full Name</th>
        <th>Position</th>
        <th>Phone No.</th>
        <th>Email Address</th>
        <th>Photo</th>
        <th>Edit Member</th>
        <th>Delete Member</th>
    </tr>
    
</thead>
<tbody>
   <?php foreach ($this->gbm->getData() as $row) { 
        
    ?>

    <tr align="center">
    	<td><?php echo $row->id ?></td>
        <td><?php echo $row->name ?></td>
        <td><?php echo $row->position ?></td>
        <td><?php echo $row->phone ?></td>
        <td><?php echo $row->email ?></td>
        <td><img src="<?php echo base_url() .'uploads/governing_body/'.$row->photo ?>" width="80" height="80" class="img-circle"></td>
        
        <td><a class="btn btn-primary" href="edit_governing_body/<?php echo $row->id ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete_governing_body/<?php echo $row->id ?>">Delete</a></td>
    </tr>
<?php } ?>

</tbody>
</table>


</div></div></div>

                                        
