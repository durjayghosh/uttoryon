<?php 
$this->load->helper("form");
echo form_open_multipart("super_admin/update_governing_body");


?>

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
    <tr>
        <td align="center" class="alert alert-info" colspan="6"> <h1> Update Member </h1></td>
        <td><input type="hidden" name="id" size="30" value="<?php echo $r->id; ?>"></td>
    </tr>
    <tr>
        <td align="right">Full Name:</td>
        <?php $data = array(
            "name" => "name",
            "id"=>"name",
            "value"=>"$r->name"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Position:</td>
        <?php $data = array(
            "name" => "position",
            "id"=>"position",
            "value"=>"$r->position"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Photo:</td>
        <td><input type="file" name="image"></td>
    </tr>
    <tr>
        <td align="right">Phone No.:</td>
        <?php $data = array(
            "name" => "phone",
            "id"=>"phone",
            "value"=>"$r->phone"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    <tr>
        <td align="right">Email Address:</td>
        <?php $data = array(
            "name" => "email",
            "id"=>"email",
            "value"=>"$r->email"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    <tr>
        <td align="center" colspan="6"><input type="submit" name="update" value="Update Information"></td>
    </tr>

</table>

<?php echo form_close();?>