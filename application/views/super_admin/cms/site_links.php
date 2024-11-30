<table class="table table-striped table-bordered table-hover" id="angel_data_table">
	<tr>
    	<td colspan="10" align="center" class="alert alert-info"> <h1>Add/View Site Links</h1></td>
    </tr>
    <tr class="alert alert-success">
    	<th>Ctegory ID</th>
        <th>Site Name</th>
        <th>Site URL</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    
<?php 
foreach ($this->site_links->getData() as $row) {
	
?>    
    <tr align="center">
    	<td><?php echo $row->id ?></td>
        <td><?php echo $row->site_name ?></td>
        <td><?php echo $row->site_url ?></td>
        <td><a class="btn btn-success" href="edit_site_links/<?php echo $row->id ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete_site_links/<?php echo $row->id ?>">Delete</a></td>
    </tr>
<?php }?>
</table>



<?php
$this->load->helper("form");
echo form_open("super_admin/insert_site_links");?>
<table class="table table-striped table-bordered table-hover" id="angel_data_table">
	<tr>
    	<td align="center" class="alert alert-info" colspan="6"> <h1>Insert Site Links</h1></td>
    </tr>
    <tr>
    	<td align="right">Site Name:</td>
        <td><input type="text" name="site_name" size="30"></td>
    </tr>
    <tr>
        <td align="right">Site URL:</td>
        <td><input type="text" name="site_url" size="30"></td>
    </tr>
    <tr>
    	<td align="center" colspan="6"><input class="btn btn-success" type="submit" name="addcategory" value="Insert Now"></td>
    </tr>
    	
</table>
<?php echo form_close();
?>	
