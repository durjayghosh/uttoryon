<?php 
$this->load->helper("form");
echo form_open("?admin/update_cat");?>

<table width="600" align="center" border="50" bgcolor="orange">
	<tr>
    	<td align="center" bgcolor="yellow" colspan="6"> <h1> Edit Category</h1></td>
    </tr>
    <tr>
    	<td align="right">Category Name:</td>
        <td><input type="hidden" name="cat_id" size="30" value="<?php echo $r->cat_id; ?>"></td>
        <td><input type="text" name="cat_name" size="30" value="<?php echo $r->cat_name; ?>"></td>
    </tr>
    <tr>
    	<td align="center" colspan="6"><input type="submit" name="catupdate" value="Update Now"></td>
    </tr>
    	
</table>
<?php echo form_close();
?>