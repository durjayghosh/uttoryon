    <div class="section-header">
        <h2 class="section-title text-center wow fadeInDown">SRDL Video Gallery of <span><?=$system_name?></span></h2>
    </div> 
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li class="active">SRDL Video Gallery</li>
    </ol> 

    <style type="text/css">
      .overlayText {
  position: absolute;
  top: 30%;
  left: 0%;
  z-index: 1;
}

#topText {
  color: black;
  font-size: 20px;
  align-self: center;
} 
    </style> 

    <section id="Xedm_gallery" class="Xedm_s4s_content">
        <div class="container">
  
        <div class="Xcontainer-fluid">
            
                <?php foreach ($this->srmv->srdl_video_getData() as $row) { ?>
                    
               
                    <?php echo $row->image_title ?>
                         <?php //echo $row->image_title ?>
                        
                           <!--  [<?php echo $row->image_title ?>] -->
                            <video width="300px" height="300px" controls preload="metadata">
 
  <source  src="<?php echo base_url() .'uploads/srdl_video_gallary/'.$row->file_name ?>" type="video/mp4">
  
</video >
                    
               
                <?php } ?>
           </div>
        
    </section>