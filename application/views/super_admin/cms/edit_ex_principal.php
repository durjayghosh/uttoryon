<?php 
$this->load->helper("form");
echo form_open_multipart("super_admin/update_ex_principal");


?>

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
    <tr>
        <td align="center" class="alert alert-info" colspan="6"> <h1> Update Retired Principal </h1></td>
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
        <td align="right">Join Date:</td>
        <?php $data = array(
            "name" => "join_date",
            "id"=>"position",
            "type"=>"date",
            "value"=>"$r->join_date"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>

      <tr>
        <td align="right">Retired Date:</td>
        <?php $data = array(
            "name" => "ret_date",
            "id"=>"position",
            "type"=>"date",
            "value"=>"$r->ret_date"
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