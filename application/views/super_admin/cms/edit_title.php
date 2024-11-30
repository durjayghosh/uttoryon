<?php 
$this->load->helper("form");
//print_r($r);
echo form_open_multipart('super_admin/update_title');?>

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
	<tr>
    	<td align="center" class="alert alert-info" colspan="6"> <h1>Update Image Title</h1></td>
    </tr>
    <tr>
        <td><input type="hidden" name="id" size="30" value="<?php echo $r->id; ?>"></td>
    	<td align="right">Image Title:</td>
        <td><input type="text" name="image_title" size="30" value="<?php echo $r->image_title; ?>"></td>
    </tr>
    <tr>
    	<td><img src="<?php echo base_url() .'uploads/gallary/'.$r->file_name ?>" width="80" height="80"></td>
    </tr>

    <tr>
    	
    	<td align="center" colspan="6"><input class="btn btn-success" type="submit" value="update" /></td>
    </tr>
    	
</table>


<br /><br />

<?php echo form_close();
?>	