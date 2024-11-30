<!--Right Side bar --> 
<aside id="edm_right_side" class="edm_s4s_content clearfix">
    <h3 class="column-title">Importent Links</h3>
    <ul>
    	<?php foreach ($this->site_links->getData() as $row) { ?>
        <li><a class="btn btn-primary btn-sm" target="_blank" href="http://<?php  echo $row->site_url ?>"><?php echo $row->site_name ?></a></li>
        <?php } ?>
    </ul>                                            
</aside>
<!--/right Side bar -->