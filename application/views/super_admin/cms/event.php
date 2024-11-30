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
echo form_open_multipart("super_admin/insert_event");?>
<table class="table table-striped table-bordered table-hover" id="angel_data_table">
    <tr>
        <td align="center" class="alert alert-info" colspan="6"> <h1> Insert New Event </h1></td>
    </tr>
    <tr>
        <td align="right">Event Title:</td>
        <?php $data = array(
            "name" => "post_title",
            "id"=>"post_title",
            "value"=>set_value("post_title")
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Event Author:</td>
        <?php $data = array(
            "name" => "post_author",
            "id"=>"post_author",
            "value"=>set_value("post_author")
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Event Attachment:</td>
        <td><input type="file" name="attachment"></td>
    </tr>
    <tr>
        <td align="right">Event Content:</td>
        <?php $data = array(
            "name" => "post_content",
            "id"=>"post_content",
            "value"=>set_value("post_content"),
            "cols"=>"30",
            "rows"=>"15"
        ); ?>

        <td><?php echo form_textarea($data); ?></td>
    </tr>
    <tr>
        <td align="right">Event KeyWords:</td>
        <?php $data = array(
            "name" => "post_keywords",
            "id"=>"post_keywords",
            "value"=>set_value("post_keywords")
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    <tr>
        <td align="center" colspan="6"><input class="btn btn-success" type="submit" name="submit" value="Publish Now"></td>
    </tr>

</table>
<?php echo form_close();
?>
