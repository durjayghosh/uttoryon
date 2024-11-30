          <section class="padding-top-15 padding-bottom-15" id="page-title">

              <div class="row">

                <div class="col-sm-7">

                  <h1 class="mainTitle">Dashboard</h1>

                  <span class="mainDescription"><?php echo get_phrase('system_settings');?></span>

                </div>

                <div class="col-sm-5">

                  <!-- start: MINI STATS WITH SPARKLINE -->

                  <ul class="mini-stats pull-right">

                    <li>

                      <div class="sparkline-1">

                        <span><canvas style="display: inline-block; vertical-align: top; width: 41px; height: 24px;" width="41" height="24"></canvas></span>

                      </div>

                      <div class="values">

                        <strong class="text-dark">7</strong>

                        <p class="text-small no-margin">

                          Total Students
                        </p>

                      </div>

                    </li>

                    <li>

                      <div class="sparkline-2">

                        <span><canvas style="display: inline-block; vertical-align: top; width: 41px; height: 24px;" width="41" height="24"></canvas></span>

                      </div>

                      <div class="values">

                        <strong class="text-dark">5</strong>

                        <p class="text-small no-margin">

                          Total Teachers
                        </p>

                      </div>

                    </li>

                    <li>

                      <div class="sparkline-3">

                        <span><canvas style="display: inline-block; vertical-align: top; width: 41px; height: 24px;" width="41" height="24"></canvas></span>

                      </div>

                      <div class="values">

                        <strong class="text-dark">4</strong>

                        <p class="text-small no-margin">

                          Total Parents
                        </p>

                      </div>

                    </li>

                    

                  </ul>

                  <!-- end: MINI STATS WITH SPARKLINE -->

                </div>

              </div>

            </section>    

<div class="container-fluid container-fullw padding-bottom-10">
    <div class="row">
      <div class="col-sm-12">
        <fieldset>
                
                <div class="panel-body">

                  <!-- File Upload -->
            
              
              <div class="row">

                <div class="col-md-3"style="text-align:right" >
                    <label><?php echo get_phrase('Institute Logo');?></label>
                </div>

                <div class="col-md-7">
                 
                  <form class="form-horizontal form-groups-bordered" id="fileupload" action="index.php" method="POST" enctype="multipart/form-data">
                    <!-- Redirect browsers with JavaScript disabled to the origin page -->

                    <noscript>
                      <input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
                    </noscript>
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row fileupload-buttonbar">
                      <div class="col-lg-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn btn-success fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Update Logo...</span>
                          <input type="file" name="files[]" multiple>
                        </span>
                        
                        <!-- The loading indicator is shown during file processing -->
                        <span class="fileupload-loading"></span>
                      </div>
                      <!-- The global progress information -->
                      <div class="col-lg-5 fileupload-progress fade">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class="progress-extended">
                          &nbsp;
                        </div>
                      </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped">
                      <tbody class="files"></tbody>
                    </table>
                  </form>
                </div>
              </div>
           

             <!-- END of File Uptload -->

                
                    
       <?php echo form_open('super_admin/system_settings/do_update' , 
      array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                 <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_name');?></label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="system_name" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_name'))->row()->description;?>">
                      </div>
                  </div>

                  
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_title');?></label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="system_title" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_title'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="address" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'address'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="phone" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'phone'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('payment_email');?></label>
                      <div class="col-sm-5">
                          <input readonly type="text" class="form-control" name="paypal_email" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'paypal_email'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('currency');?></label>
                      <div class="col-sm-5">
                          <input readonly type="text" class="form-control" name="currency" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'currency'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_email');?></label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="system_email" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_email'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group" style="display:none">
                      <label readonly class="col-sm-3 control-label"><?php echo get_phrase('buyer');?></label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="buyer" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'buyer'))->row()->description;?>" 
                              	data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('purchase_code');?></label>
                      <div class="col-sm-5">
                          <input readonly type="text" class="form-control" name="purchase_code" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'purchase_code'))->row()->description;?>"
                              	data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('language');?></label>
                      <div class="col-sm-5">
                          <select name="language" class="form-control">
                                    <?php
										$fields = $this->db->list_fields('language');
										foreach ($fields as $field)
										{
											if ($field == 'phrase_id' || $field == 'phrase')continue;
											
											$current_default_language	=	$this->db->get_where('settings' , array('type'=>'language'))->row()->description;
											?>
                                    		<option value="<?php echo $field;?>"
                                            	<?php if ($current_default_language == $field)echo 'selected';?>> <?php echo $field;?> </option>
                                            <?php
										}
										?>
                           </select>
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('text_align');?></label>
                      <div class="col-sm-5">
                          <select readonly name="text_align" class="form-control">
                          	  <?php $text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;?>
                              <option value="left-to-right" <?php if ($text_align == 'left-to-right')echo 'selected';?>> left-to-right</option>
                              <option value="right-to-left" <?php if ($text_align == 'right-to-left')echo 'selected';?>> right-to-left</option>
                          </select>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('Facebook');?></label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="facebook" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'facebook'))->row()->description;?>">  
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('Twitter');?></label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="twitter" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'twitter'))->row()->description;?>">  
                      </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo get_phrase('save');?></button>
                    </div>
                  </div>
                    
                </div>
                </form>
              </fieldset>
            </div>
          </div>
        </div>
        
        
				


<script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-upload fade">
      <td>
      <span class="preview"></span>
      </td>
      <td>
      <p class="name">{%=file.name%}</p>
      {% if (file.error) { %}
      <div><span class="label label-danger">Error</span> {%=file.error%}</div>
      {% } %}
      </td>
      <td>
      <p class="size">{%=o.formatFileSize(file.size)%}</p>
      {% if (!o.files.error) { %}
      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
      {% } %}
      </td>
      <td>
      {% if (!o.files.error && !i && !o.options.autoUpload) { %}
      <button class="btn btn-primary start">
      <i class="glyphicon glyphicon-upload"></i>
      <span>Start</span>
      </button>
      {% } %}
      {% if (!i) { %}
      <button class="btn btn-warning cancel">
      <i class="glyphicon glyphicon-ban-circle"></i>
      <span>Cancel</span>
      </button>
      {% } %}
      </td>
      </tr>
      {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-download fade">
      <td>
      <span class="preview">
      {% if (file.thumbnailUrl) { %}
      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
      {% } %}
      </span>
      </td>
      <td>
      <p class="name">
      {% if (file.url) { %}
      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
      {% } else { %}
      <span>{%=file.name%}</span>
      {% } %}
      </p>
      {% if (file.error) { %}
      <div><span class="label label-danger">Error</span> {%=file.error%}</div>
      {% } %}
      </td>
      <td>
      <span class="size">{%=o.formatFileSize(file.size)%}</span>
      </td>
      <td>
      {% if (file.deleteUrl) { %}
      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
      <i class="glyphicon glyphicon-trash"></i>
      <span>Delete</span>
      </button>
      <input type="checkbox" name="delete" value="1" class="toggle">
      {% } else { %}
      <button class="btn btn-warning cancel">
      <i class="glyphicon glyphicon-ban-circle"></i>
      <span>Cancel</span>
      </button>
      {% } %}
      </td>
      </tr>
      {% } %}
    </script>