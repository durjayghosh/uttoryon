<div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">

<button class="btn btn-primary btn-o pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                        Ad New News</button>

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
                                                        <?php include "news.php" ?>
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
	
    	<h1>View All News</h1>
    <thead>
    <tr class="alert alert-success">
    	<th>News No</th>
        <th>News Date</th>
        <th>News Author</th>
        <th>News Title</th>
        <th>News Attachment</th>
        <th>News Content</th>
        <th>Edit News</th>
        <th>Delete News</th>
    </tr>
    </thead>
    <tbody>

   <?php $i=1; foreach ($this->nm->getData() as $row) { 
        $content=substr($row->post_content,0,10);
    ?>

    <tr align="center">
    	<td><?php echo $i++ ?></td>
        <td><?php echo $row->post_date ?></td>
        <td><?php echo $row->post_author ?></td>
        <td><?php echo $row->post_title ?></td>
         <?php if($row->post_image!=''){ ?>
        <td><a class="btn btn-warning" href="<?php echo base_url() .'uploads/news/'.$row->post_image ?>"> Download </a></td>
        <?php } else { echo "<td>No file available for Download</td>";} ?>
        <td><?php echo $content ?></td>
        <td><a class="btn btn-success" href="edit_news/<?php echo $row->post_id ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete_news/<?php echo $row->post_id ?>">Delete</a></td>
    </tr>
<?php } ?>
</tbody>
</table>

</div></div></div>

