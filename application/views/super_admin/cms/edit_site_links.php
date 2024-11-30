<?php 
$this->load->helper("form");
echo form_open("super_admin/update_site_links");?>

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
	<tr>
    	<td align="center" class="alert alert-info" colspan="6"> <h1> Edit Category</h1></td>
        <input type="hidden" name="id" size="30" value="<?php echo $r->id; ?>">
    </tr>
    <tr>
    	<td align="right">Site Name:</td>
        
        <td><input type="text" name="site_name" size="30" value="<?php echo $r->site_name; ?>"></td>
    </tr>
     <tr>
        <td align="right">Site URL:</td>
        <td><input type="text" name="site_url" size="30" value="<?php echo $r->site_url; ?>"></td>
    </tr>

    <tr>
    	<td align="center" colspan="6"><input class="btn btn-success" type="submit" name="site_link_update" value="Update Now"></td>
    </tr>
    	
</table>
<?php echo form_close();
?>