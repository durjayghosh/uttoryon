<?php 
	foreach ($results as $row) {
	$page_title = $row->page_title;
	$page_name = $row->page_name;
	$content = $row->content;
} ?>

<?php include "includes/edm_head.php" ?>
<?php include "includes/edm_header.php" ?>
<?php include "includes/edm_top_menu.php" ?>
<?php include "includes/edm_top_notice.php" ?>
<div id="edm_s4s_body" class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<?php include "includes/edm_left_side.php" ?>
		</div>
		<div class="edm_s4s_middle col-sm-7">


            <div class="section-header ">
                <h2 class="section-title text-center wow fadeInDown">উত্তরন উচ্চ বিদ্যালয়</h2>
                <div class="text-center">
                    <p>নারুলী, বগুড়া</p>

                    <p>ভর্তি ফরম পূরণ সংক্রান্ত যে কোন সহযোগিতার জন্য - ০১৭৩৬৭৬০৩২৭ </p>
                    <h5>ভর্তি ফরম / শিক্ষার্থী প্রোফাইল</h5>
                </div>

            </div>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>">Home</a></li>
                <li class="active"><?=$page_name?></li>
            </ol>

            <section id="edm_page_content">
            <div style="margin: 30px;">
                <?php if (isset($errors) && !empty($errors)): ?>
                    <div class="alert alert-danger">
                        <?php echo $errors; ?>
                    </div>
                <?php endif; ?>



                <form class="row" action="<?= base_url();?>site/store_online_admission_form" method="post" enctype="multipart/form-data">
                    <!-- Row for class and roll -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="recent_educational_year">শিক্ষাবর্ষ - </label>
                            <input type="number" class="form-control" id="" name="recent_educational_year" required placeholder="শিক্ষাবর্ষ">

                        </div>
                        <div class="form-group col-md-6" >
                            <label for="image">পাসপোর্ট সাইজের ছবি সাদা ব্যাকগ্রাউন্ডসহ</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                            <div style="margin-top: 10px;">
                                <img id="preview" src="" alt="Image Preview" style="display: none; max-width: 100px; height: 100px; border: 1px solid #ccc; padding: 5px;" />
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="class">শ্রেণি</label>
                            <select name="class" id="class" class="form-control" required>
                                <option value="6">৬ষ্ঠ</option>
                                <option value="7">৭ম</option>
                                <option value="8">৮ম</option>
                                <option value="9">৯ম</option>
                            </select>
                            <?php echo form_error('class', '<div class="text-danger">', '</div>'); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="roll">রোল / আইডি</label>
                            <input type="number" class="form-control" id="roll" name="roll_id">
                        </div>
                    </div>

                    <!-- Name Fields -->
                    <div class="form-group">

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">নাম (জন্ম নিবন্ধন অনুযায়ী)</label>
                                <input type="text" class="form-control" id="nameBangla" name="student_name_bangla" placeholder="বাংলায়" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">নাম (জন্ম নিবন্ধন অনুযায়ী)</label>
                                <input type="text" class="form-control" id="nameEnglish" name="student_name_english" placeholder="ইংরেজিতে" required>
                            </div>
                        </div>
                    </div>

                    <!-- Birthdate and Religion -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="birthDate"> ১লা জানুয়ারি ২০২৫ অনুযায়ী বয়স </label>
                            <input type="date" class="form-control" id="birthDate" name="birth_date" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="online_birth_registration_no">অনলাইন জন্ম নিবন্ধন নম্বর </label>
                            <input type="number" class="form-control" id="online_birth_registration_no" name="online_birth_registration_no" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="religion">ধর্ম</label>
                            <select name="religion" id="religion" class="form-control" required>
                                <option value="ইসলাম">ইসলাম</option>
                                <option value="হিন্দু">হিন্দু</option>
                            </select>
                        </div>
                        <!-- Phone -->
                        <div class="form-group col-md-6">
                            <label for="phone">মোবাইল নং</label>
                            <input type="number" class="form-control" id="phone" name="mobile_no" placeholder="নগদ একাউন্ট সহ" required>

                        </div>
                    </div>




                    <!-- Father's Information -->
                    <h3 class="mt-3">পিতার নাম ও তথ্য</h3>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="father_alive_status">পিতা জীবিত নাকি মৃতঃ</label>
                                <select name="father_alive_status" id="father_alive_status" class="form-control" required>
                                    <option value="জীবিত">জীবিত</option>
                                    <option value="মৃত">মৃত</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fatherName">পিতার নাম</label>
                                <input type="text" class="form-control" id="fatherName" name="father_name_bangla" placeholder="বাংলায়" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="father_name_english">পিতার নাম</label>
                                <input type="text" class="form-control" id="father_name_english" name="father_name_english" placeholder="ইংরেজিতে বড় হাতের অক্ষরে " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="father_occupation">পেশা </label>
                                <input type="text" class="form-control" id="father_occupation" name="father_occupation" placeholder="পেশা" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="father_yealy_income">বাৎসরিক আয়  </label>
                                <input type="number" class="form-control" id="father_yealy_income" name="father_yealy_income" placeholder="বাৎসরিক আয়" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fatherNID">জাতীয় পরিচয়পত্র নং</label>
                                <input type="text" class="form-control" id="fatherNID" name="father_nid" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="fatherPhone">মোবাইল নং</label>
                                <input type="number" class="form-control" id="fatherPhone" name="father_mobile_no" required>
                            </div>
                        </div>


                    <!-- Mother's Information -->
                    <h3>মাতার নাম ও তথ্য</h3>
                    <div class="form-row">


                            <div class="form-group col-md-6">
                                <label for="mother_alive_status">মাতা জীবিত নাকি মৃতঃ</label>
                                <select name="mother_alive_status" id="mother_alive_status" class="form-control" required>
                                    <option value="জীবিত">জীবিত</option>
                                    <option value="মৃত">মৃত</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_name_bangla">মাতার নাম</label>
                                <input type="text" class="form-control" id="mother_name_bangla" name="mother_name_bangla" placeholder="বাংলায়" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_name_english">মাতার নাম</label>
                                <input type="text" class="form-control" id="mother_name_english" name="mother_name_english" placeholder="ইংরেজিতে বড় হাতের অক্ষরে " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_occupation">পেশা </label>
                                <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" placeholder="পেশা" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="motherNID">জাতীয় পরিচয়পত্র নং</label>
                                <input type="text" class="form-control" id="motherNID" name="mother_nid" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="motherPhone">মোবাইল নং</label>
                                <input type="text" class="form-control" id="motherPhone" name="mother_mobile_no" required>
                            </div>

                    </div>


                    <!-- Mother's Information -->
                    <h3>পিতা/ মাতার অবর্তমানে অভিবাবক</h3>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="guardian_name">পিতা/ মাতার অবর্তমানে অভিবাবকের নাম</label>
                            <input type="text" class="form-control" id="guardian_name" name="guardian_name" placeholder="বাংলায়" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="guardian_name_english">পিতা/ মাতার অবর্তমানে অভিবাবকের নাম</label>
                            <input type="text" class="form-control" id="guardian_name_english" name="guardian_name_english" placeholder="ইংরেজিতে বড় হাতের অক্ষরে " >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="guardian_nid">জাতীয় পরিচয়পত্র নং</label>
                            <input type="text" class="form-control" id="motherNID" name="guardian_nid" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="guardian_phone"> মোবাইল নম্বর </label>
                            <input type="text" class="form-control" id="guardian_phone" name="guardian_phone" >
                        </div>

                    </div>

                    <!-- Mother's Information -->

                    <h3>পূর্বে অধ্যয়নরত বিদ্যালয়</h3>
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="previous_school_name">পূর্বে অধ্যয়নরত বিদ্যালয়ের নাম </label>
                            <input type="text" class="form-control" id="previous_school_name" name="previous_school_name" placeholder="ইংরেজিতে বড় হাতের অক্ষরে" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="previous_school_registration_no"> রেজিস্ট্রেশন নম্বর </label>
                            <input type="text" class="form-control" id="previous_school_registration_no" name="previous_school_registration_no" placeholder="রেজিস্ট্রেশন নম্বর" >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="educational_year">শিক্ষাবর্ষ</label>
                            <input type="text" class="form-control" id="educational_year" name="educational_year" placeholder="শিক্ষাবর্ষ">
                        </div>

                    </div>

                    <h3>স্থায়ী ঠিকানা</h3>
                    <div class="row">


                        <div class="form-group col-md-6">
                            <label for="permanent_address_vilage">গ্রাম </label>
                            <input type="text" class="form-control" id="permanent_address_vilage" name="permanent_address_vilage" placeholder="গ্রাম" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="permanent_address_post">পোস্ট  </label>
                            <input type="text" class="form-control" id="permanent_address_post" name="permanent_address_post" placeholder="পোস্ট" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="permanent_address_upozila">উপজেলা  </label>
                            <input type="text" class="form-control" id="permanent_address_upozila" name="permanent_address_upozila" placeholder="উপজেলা" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="permanent_address_city">জেলা  </label>
                            <input type="text" class="form-control" id="permanent_address_city" name="permanent_address_city" placeholder="জেলা" required>
                        </div>
                    </div>


                    <h3>বর্তমান ঠিকানা</h3>
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="present_address_vilage">গ্রাম </label>
                            <input type="text" class="form-control" id="present_address_vilage" name="present_address_vilage" placeholder="গ্রাম" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="present_address_post">পোস্ট  </label>
                            <input type="text" class="form-control" id="present_address_post" name="present_address_post" placeholder="পোস্ট" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="present_address_upozila">উপজেলা  </label>
                            <input type="text" class="form-control" id="present_address_upozila" name="present_address_upozila" placeholder="উপজেলা" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="present_address_city">জেলা  </label>
                            <input type="text" class="form-control" id="motherName" name="present_address_city" placeholder="জেলা" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">ফরম সাবমিট</button>
                </form>

                <script>
                    document.getElementById('image').addEventListener('change', function(event) {
                        const file = event.target.files[0];
                        const preview = document.getElementById('preview');

                        if (file) {
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                preview.src = e.target.result;
                                preview.style.display = 'block';
                            };

                            reader.readAsDataURL(file);
                        } else {
                            preview.src = '';
                            preview.style.display = 'none';
                        }
                    });
                </script>


<!--                <form class="row">-->
<!--               Row for class and roll -->
<!--                    <div class="form-row">-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="class">শ্রেণি</label>-->
<!--                            <select name="class" id="class" class="form-control">-->
<!--                                <option value="6">৬ষ্ঠ</option>-->
<!--                                <option value="7">৭ম</option>-->
<!--                                <option value="8">৮ম</option>-->
<!--                                <option value="9">৯ম</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="roll">রোল / আইডি</label>-->
<!--                            <input type="text" class="form-control" id="roll">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                  Name Fields -->
<!--                    <div class="form-group">-->
<!--                        <label for="name">নাম (জন্ম নিবন্ধন অনুযায়ী)</label>-->
<!--                        <div class="form-row">-->
<!--                            <div class="col-md-6">-->
<!--                                <input type="text" class="form-control" id="nameBangla" placeholder="বাংলায়">-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <input type="text" class="form-control" id="nameEnglish" placeholder="ইংরেজিতে">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                Birthdate and Religion -->
<!--                    <div class="form-row">-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="birthDate">জন্ম তারিখ</label>-->
<!--                            <input type="date" class="form-control" id="birthDate">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="religion">ধর্ম</label>-->
<!--                            <select name="religion" id="religion" class="form-control">-->
<!--                                <option value="1">ইসলাম</option>-->
<!--                                <option value="2">হিন্দু</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                   Phone -->
<!--                    <div class="form-group">-->
<!--                        <label for="phone">মোবাইল নং</label>-->
<!--                        <input type="text" class="form-control" id="phone" placeholder="নগদ একাউন্ট সহ">-->
<!--                    </div>-->
<!---->
<!--                   Father's and Mother's Information -->
<!--                    <h5>পিতার নাম ও তথ্য</h5>-->
<!--                    <div class="form-group">-->
<!--                        <label for="fatherName">পিতার নাম</label>-->
<!--                        <input type="text" class="form-control" id="fatherName" placeholder="বাংলায়">-->
<!--                    </div>-->
<!--                    <div class="form-row">-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="fatherNID">জাতীয় পরিচয়পত্র নং</label>-->
<!--                            <input type="text" class="form-control" id="fatherNID">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="fatherPhone">মোবাইল নং</label>-->
<!--                            <input type="text" class="form-control" id="fatherPhone">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <h5>মাতার নাম ও তথ্য</h5>-->
<!--                    <div class="form-group">-->
<!--                        <label for="motherName">মাতার নাম</label>-->
<!--                        <input type="text" class="form-control" id="motherName" placeholder="বাংলায়">-->
<!--                    </div>-->
<!--                    <div class="form-row">-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="motherNID">জাতীয় পরিচয়পত্র নং</label>-->
<!--                            <input type="text" class="form-control" id="motherNID">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label for="motherPhone">মোবাইল নং</label>-->
<!--                            <input type="text" class="form-control" id="motherPhone">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                     Address -->
<!--                    <div class="form-group">-->
<!--                        <label for="permanentAddress">স্থায়ী ঠিকানা</label>-->
<!--                        <textarea class="form-control" id="permanentAddress" rows="2"></textarea>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="presentAddress">বর্তমান ঠিকানা</label>-->
<!--                        <textarea class="form-control" id="presentAddress" rows="2"></textarea>-->
<!--                    </div>-->
<!---->
<!--                  Submit Button -->
<!--                    <button type="submit" class="btn btn-primary">ফরম সাবমিট</button>-->
<!--                </form>-->
            </div>
            </section>

		</div>
		<div class="col-sm-2">
			<?php include "includes/edm_right_side.php" ?>
		</div>
	</div>
</div>
<?php include "includes/edm_bottom.php" ?>
<?php include "includes/edm_footer.php" ?>
<?php include "includes/edm_foot.php" ?>                                       


