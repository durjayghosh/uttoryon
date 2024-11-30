
<table width="1000" border="5" align="center" bgcolor="pink">
	<tr>
    	<td colspan="10" align="center" bgcolor="yellow"> <h1>Add/View Category</h1></td>
    </tr>
    <tr bgcolor="orange">
    	<th>Ctegory ID</th>
        <th>Category Name</th>
        <th>Edit Category</th>
        <th>Delete Category</th>
    </tr>
    
<?php 
foreach ($this->cm->getData() as $row) {
	
?>    
    <tr align="center">
    	<td><?php echo $row->cat_id ?></td>
        <td><?php echo $row->cat_name ?></td>
        <td><a href="edit_cat/<?php echo $row->cat_id ?>">Edit</a></td>
        <td><a href="delete_cat/<?php echo $row->cat_id ?>">Delete</a></td>
    </tr>
<?php }?>
</table>



<?php
$this->load->helper("form");
echo form_open("admin/insert_cat");?>
<table width="600" align="center" border="50" bgcolor="orange">
	<tr>
    	<td align="center" bgcolor="yellow" colspan="6"> <h1>Insert Category</h1></td>
    </tr>
    <tr>
    	<td align="right">Category Name:</td>
        <td><input type="text" name="cat_name" size="30"></td>
    </tr>
    <tr>
    	<td align="center" colspan="6"><input type="submit" name="addcategory" value="Insert Now"></td>
    </tr>
    	
</table>
<?php echo form_close();
?>	
