<div class="section-header">
    <h2 class="section-title text-center wow fadeInDown">Contact Info</span></h2>
</div> 
<ol class="breadcrumb">
  <li><a href="<?php echo base_url() ?>">Home</a></li>
  <li class="active">Contact Us</li>
</ol>  
<section id="edm_s4s_contact">
        <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
        <div class="container-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-7">
                        <div class="contact-form">
                            <address>
                              <strong><?=$system_name?></strong><br>
                              <?=$address?><br>
                              <abbr title="Phone">P:</abbr> <?=$phone?><br>
                              <abbr title="Email">E:</abbr> <?=$email?>
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->