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

<?php 
$this->load->helper("form");
echo form_open_multipart("super_admin/update_notice");?>

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
    <tr>
        <td align="center" class="alert alert-info" colspan="6"> <h1> Update Notice </h1></td>
    </tr>
    
        <input type="hidden" name="post_id" size="30" value="<?php echo $r->post_id; ?>">
    
    <tr>
        <td align="right">Notice Title:</td>
        <?php $data = array(
            "name" => "post_title",
            "id"=>"post_title",
            "value"=>"$r->post_title"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Post Author:</td>
        <?php $data = array(
            "name" => "post_author",
            "id"=>"post_author",
            "value"=>"$r->post_author"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    
    <tr>
        <td align="right">Notice Attachment:</td>
        <td><input type="file" name="attachment"></td>
    </tr>
    <tr>
        <td align="right">Notice Content:</td>
        <?php $data = array(
            "name" => "post_content",
            "id"=>"post_content",
            "value"=>"$r->post_content",
            "cols"=>"30",
            "rows"=>"15"
        ); ?>

        <td><?php echo form_textarea($data); ?></td>
    </tr>
    <tr>
        <td align="right">Notice KeyWords:</td>
        <?php $data = array(
            "name" => "post_keywords",
            "id"=>"post_keywords",
            "value"=>"$r->post_keywords"
        ); ?>
        <td><?php echo form_input($data); ?></td>
    </tr>
    <tr>
        <td align="center" colspan="6"><input class="btn btn-success" type="submit" name="update" value="Update Now"></td>
    </tr>

</table>

<?php echo form_close();?>