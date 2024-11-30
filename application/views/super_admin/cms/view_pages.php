<?php $page_name = "view_pages" ;?>
<div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">

<!-- <button class="btn btn-primary btn-o pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                        Ad New Page</button> -->

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
                                                        <?php include "page.php" ?>
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
	<h1 >List of Pages</h1>
	<thead>
	<tr>
		<th>Serial#</th><th>Page Name</th><th>Page Title</th><th>Content</th><th>Action</th>
	</tr>
	<thead>
<tbody>

<?php 
$n=1;
foreach ($this->pm->getData_admin() as $row) {
	$content=substr($row->content,0,10);
	echo "<tr>

			<td>$row->id</td>
			<td>$row->page_name</td>
			<td>$row->page_title</td>
			<td><a target='_blank' class='btn btn-wide btn-info' href='".site_url('site/'.$row->page_name)."'>View Page <i class='fa fa-th'></i></a></td>
			<td><a class='btn btn-wide btn-purple' href='".site_url('super_admin/edit_page/'.$row->id)."'>Edit <i class='ti-share'></i></a></td>
		</tr>";
}



?>


</tbody>
</table>

</div></div></div>


<?php //echo "$page_name"; ?>

