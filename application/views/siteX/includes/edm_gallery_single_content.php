    <div class="section-header">
        <h2 class="section-title text-center wow fadeInDown">Photo Gallery of <span><?=$system_name?></span></h2>
    </div> 
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li class="active">Photo Gallery</li>
    </ol>  
    <section id="edm_gallery">
        <div class="container-fluid">
            <div class="portfolio-items isotope" style="position: relative; overflow: hidden; height: 408px;">
                <?php foreach ($this->gm->getData() as $row) { ?>
                <div class="portfolio-item creative isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                    <div class="portfolio-item-inner">
                        <img title="<?php echo $row->image_title ?>" alt="<?php echo $row->image_title ?>" src="<?php echo base_url() .'uploads/gallary/'.$row->file_name ?>" class="img-responsive">
                        <div class="portfolio-info">
                            <h3><?php echo $row->image_title ?></h3>
                            <a rel="prettyPhoto" href="<?php echo base_url() .'uploads/gallary/'.$row->file_name ?>" class="preview"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <?php } ?>
            </div>
        </div><!--/.container-->
    </section>