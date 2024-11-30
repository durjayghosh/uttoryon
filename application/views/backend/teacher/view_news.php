<div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">



<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
	
    	<h1>View All News</h1>
    <thead>
    <tr class="alert alert-success">
    	<th>News No</th>
        <th>News Date</th>
        <th>News Author</th>
        <th>News Title</th>
        <th>News Attachment</th>
     
        
    </tr>
    </thead>
    <tbody>

   <?php foreach ($this->nm->getData() as $row) { 
        $content=substr($row->post_content,0,10);
    ?>

    <tr align="center">
    	<td><?php echo $row->post_id ?></td>
        <td><?php echo $row->post_date ?></td>
        <td><?php echo $row->post_author ?></td>
        <td><a target="_blank" href="<?php echo base_url() .'site/news_single/' .$row->post_id ?>" title="<?php echo $row->post_date ?>"><?php echo $row->post_title ?></a></td>
         <?php if($row->post_image!=''){ ?>
        <td><a class="btn btn-warning" href="<?php echo base_url() .'uploads/news/'.$row->post_image ?>"> Download </a></td>
        <?php } else { echo "<td>No file available for Download</td>";} ?>
        
    
    </tr>
<?php } ?>
</tbody>
</table>

</div></div></div>

