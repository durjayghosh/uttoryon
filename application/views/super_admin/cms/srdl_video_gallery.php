<html>
<head>
<title>Upload Form</title>
<script src="<?php echo base_url(); ?>assets/admin/dist/js/sb-admin-2.js"></script>
    <link href="<?php echo base_url(); ?>assets/admin/vendor/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/sweetalert/ie9.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/toastr/toastr.min.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url(); ?>assets/super_admin/vendor/sweetalert/sweet-alert.min.js"></script>
<script src="<?php echo base_url(); ?>assets/super_admin/vendor/toastr/toastr.min.js"></script>
</head>
<body>

<?php 
if($error){
    
    $message= strip_tags($error);
    /*echo "<div class='alert alert-danger' role='alert'>$message</div>";*/
    echo "<script>sweetAlert('Oops...', '$message!', 'error');</script>";
} else{echo "";}


?>

<?php 
$this->load->helper("form");
echo form_open_multipart('super_admin/srdl_video_gallery_upload');?>

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
    <tr>
        <td align="center" class="alert alert-info" colspan="6"> <h1>Upload Video For SRDL Gallery</h1></td>
    </tr>
    <tr>
        <td align="right">Video Title:</td>
        <td><input type="text" name="image_title" size="30" required></td>
    </tr>
    <tr>
        <td align="right">Please Select an Video** (MP4 Only-Max.512MB):</td>
        <td align="center" colspan="6"><input type="file" name="userfile" size="20" required /></td>
    </tr>

    <!-- <tr>
        <td align="right">Select Video Thumnail** (JPG Only-Max.1MB):</td>
        <td align="center" colspan="6"><input type="file" name="video_thumbnail" size="20" required /></td>
    </tr> -->

    <tr>
        
        <td align="center" colspan="6"><input class="btn btn-success" type="submit" value="upload" /></td>
    </tr>
        
</table>


<br /><br />

<?php echo form_close();
?>  

<table class="table table-striped table-bordered table-hover" id="angel_data_table">
    <tr>
        <td colspan="10" align="center" class="alert alert-info"> <h1>View All Video</h1></td>
    </tr>
    <tr class="alert alert-success">
        <th>Video No</th>
        <th>Upload Date</th>
        <th>Video Title</th>
        <!--<th>Video View</th>-->
        <th>Edit Title</th>
        <th>Delete Video</th>
    </tr>
    

   <?php $n=1;foreach ($this->srmv->srdl_video_getData() as $row) { 
        
    ?>

    <tr align="center">
        <td><?php echo $n++ ?></td>
        <td><?php echo $row->image_date ?></td>
        <td><?php echo $row->image_title ?></td>
        <!--<td><img src="<?php echo base_url() .'uploads/srdl_video_gallary/'.$row->file_name ?>" width="80" height="80"></td>-->
        <td><a class="btn btn-success" href="edit_srdl_video_gallery/<?php echo $row->id ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete_srdl_video_gallery/<?php echo $row->id ?>/<?=$row->file_name?>">Delete</a></td>
    </tr>
<?php } ?>
</table>

</body>
</html>


