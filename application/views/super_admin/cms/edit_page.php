
<?php 
$this->load->helper("form");
echo form_open("super_admin/update_page");?>

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
	<tr align="center"><td colspan="6">Edit Page</td></tr>
	<td><input type="hidden" name="id" value="<?php echo $r->id; ?>"></td>
	<tr>
		<td>Page Title</td>
		<td>:</td>
		<td><input type="text" name="page_title" value="<?php echo $r->page_title; ?>"></td>
	</tr>
	<tr>
		<td>Page Name</td>
		<td>:</td>
		<td><input type="text" name="page_name" value="<?php echo $r->page_name; ?>" disabled></td>
	</tr>
	<tr>
		<td>Page Content</td>
		<td>:</td>
		<td><textarea name="content" style="width:100%"><?php echo $r->content; ?></textarea></td>
	</tr>
	<tr align="center">
		
		<td colspan="6"><input type="submit" name="edit" value="UPDATE"></td>
	</tr>
</table>


<?php echo form_close();
?>