
<?php echo $error;?>
	


<div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">

<button class="btn btn-primary btn-o pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                        Ad New Banner</button>

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
                                                        
                                                            <?php 
                                                            $this->load->helper("form");
                                                             echo form_open_multipart('super_admin/do_hb_upload');?>

                                                            <table class="table table-striped table-bordered table-hover" id="angel_data_table">
                                                                <tr>
                                                                    <td align="center" class="alert alert-info" colspan="6"> <h1>Upload Images For Home Banner</h1></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right">Image Title:</td>
                                                                    <td><input type="text" name="image_title" size="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right">Please Select an Image:</td>
                                                                    <td><input type="file" name="userfile" size="20" /></td>
                                                                </tr>

                                                                <tr>
                                                                    
                                                                    <td align="center" colspan="6"><input class="btn btn-success" type="submit" value="upload" /></td>
                                                                </tr>
                                                                    
                                                            </table>


                                                            <br /><br />

                                                            <?php echo form_close();
                                                            ?>
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
	 <h1>View All Images</h1>
     <thead>
    <tr class="alert alert-success">
    	<th>Image No</th>
        <th>Upload Date</th>
        <th>Image Title</th>
        <th>Image View</th>
        <th>Edit Title</th>
        <th>Delete Image</th>
    </tr>
   </thead>
   <tbody> 

   <?php foreach ($this->hbm->getData() as $row) { 
        
    ?>

    <tr align="center">
    	<td><?php echo $row->id ?></td>
        <td><?php echo $row->image_date ?></td>
        <td><?php echo $row->image_title ?></td>
        <td><img src="<?php echo base_url() .'uploads/home_banner/'.$row->file_name ?>" width="80" height="80"  class="img-circle"></td>
        <td><a class="btn btn-success" href="edit_hb_title/<?php echo $row->id ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete_hb_image/<?php echo $row->id ?>">Delete</a></td>
    </tr>
<?php } ?>
</tbody>
</table>

</div></div></div>


