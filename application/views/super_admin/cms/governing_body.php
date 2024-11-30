
<?php $page_name = "governing_body" ;?>

<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>


<?php echo validation_errors(); 

?>
<?php
$this->load->helper("form");
echo form_open_multipart("super_admin/insert_governing_body");?>
<table class="table table-striped table-bordered table-hover" id="angel_data_table">
    <tr>
        <td align="center" class="alert alert-info" colspan="6"> <h1> New Governing Body </h1></td>
    </tr>
    <tr>
        <td align="right">Full Name:</td>
        <?php $data = array(
            "name" => "name",
            "id"=>"name",
            "size" =>"38",
            "value"=>set_value("name")
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Position:</td>
        <?php $data = array(
            "name" => "position",
            "id"=>"position",
            "size" =>"38",
            "value"=>set_value("position")
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Photo:</td>
        <td><input class="btn btn-info" type="file" name="image"></td>
    </tr>
    <tr>
        <td align="right" >Phone No.:</td>
        <?php $data = array(
            "name" => "phone",
            "id"=>"phonr",
            "value"=>set_value("phonr"),
            "size" =>"38"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    <tr>
        <td align="right">Email Address:</td>
        <?php $data = array(
            "name" => "email",
            "id"=>"email",
            "size" =>"38",
            "value"=>set_value("email")
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    <tr>
    <td></td>
        <td align="left" ><input class="btn btn-success" type="submit" name="submit" value="Submit"></td>
        
    </tr>

</table>
<?php echo form_close();
?>
