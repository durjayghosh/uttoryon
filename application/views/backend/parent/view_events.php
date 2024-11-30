<div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">



<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
	<h1>View All Events</h1>
  <thead>
    <tr class="alert alert-success">
    	<th>Event No</th>
        <th>Event Date</th>
          <th>Event Title</th>
        <th>Event Content</th>
        
        
        
    </tr>
   </thead>
   <tbody> 

   <?php foreach ($this->em->getData() as $row) { 
        $content=substr($row->notice,0,200);
    ?>

    <tr align="center">
    	<td><?php echo $row->notice_id ?></td>
        <td><?php echo date('l d-M-Y ',$row->create_timestamp) ?></td>
        
        <td><a target="_blank" href="<?php echo base_url() .'site/event_single/' .$row->notice_id ?>" title="menu item"><?php echo $row->notice_title ?></a></td>
     
        <td><?php echo $content ?></td>
        
        
    </tr>
<?php } ?>
</tbody>
</table>

</div></div></div>

