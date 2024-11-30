<?php
$param2=$row['notice_id']; 
$edit_data		=	$this->db->get_where('noticeboard' , array('notice_id' => $param2) )->result_array();
?>


<div class="row">
                                        <div class="col-md-12">
                                            

        <?php foreach($edit_data as $row):?>
        <?php echo form_open('super_admin/noticeboard/do_update/'.$row['notice_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
            <fieldset>
                                                <legend>
                                                    <?php echo get_phrase('edit_event');?>
                                                </legend>
                                                <div class="form-group">
                                                    <label>
                                                        <?php echo get_phrase('title');?> <span class="symbol required"></span>
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="notice_title" value="<?php echo $row['notice_title'];?>"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>
                                                        <?php echo get_phrase('notice');?> <span class="symbol required"></span>
                                                    </label>
                                                    <div class="form-group">
                                                        <textarea name="notice" id="ttt" rows="5" class="form-control" placeholder="<?php echo get_phrase('add_notice');?>"><?php echo $row['notice'];?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>
                                                        <?php echo get_phrase('date');?> <span class="symbol required"></span>
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="text" readonly class="datepicker form-control" name="" value="<?php echo date('m/d/Y',$row['create_timestamp']);?>"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>
                                                        <?php echo get_phrase('change date');?> <span class="symbol required"></span>
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="date" class="datepicker form-control" name="create_timestamp" value="<?php echo date('m/d/Y',$row['create_timestamp']);?>"/>
                                                    </div>
                                                </div>


                                            </fieldset>
                

            
            <div class="form-group">
              <div class=" col-sm-3">
                  <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_notice');?></button>
              </div>
            </div>
        </form>
        <?php endforeach;?>
    
</fieldset></div></div>

