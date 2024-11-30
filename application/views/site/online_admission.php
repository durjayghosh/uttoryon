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
			<?php include "includes/edm_breadcrumbs.php" ?>

            <section id="edm_page_content">
            <div style="margin: 30px;">
                <div class="text-center mb-4">
                    <h3>উত্তরন উচ্চ বিদ্যালয়</h3>
                    <p>নাকশী, বগুড়া</p>
                    <p>(ফরজপুর সংঘের পরিচালনায়)</p>
                    <h5>ভর্তি ফরম / শিক্ষার্থী প্রোফাইল</h5>
                </div>
                <form class="row" action="<?= base_url();?>site/store_online_admission_form" method="post" enctype="multipart/form-data">
                    <!-- Row for class and roll -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="class">শ্রেণি</label>
                            <select name="class" id="class" class="form-control">
                                <option value="6">৬ষ্ঠ</option>
                                <option value="7">৭ম</option>
                                <option value="8">৮ম</option>
                                <option value="9">৯ম</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="roll">রোল / আইডি</label>
                            <input type="number" class="form-control" id="roll" name="roll_id">
                        </div>
                    </div>

                    <!-- Name Fields -->
                    <div class="form-group">
                        <label for="name">নাম (জন্ম নিবন্ধন অনুযায়ী)</label>
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameBangla" name="student_name_bangla" placeholder="বাংলায়">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameEnglish" name="student_name_english" placeholder="ইংরেজিতে">
                            </div>
                        </div>
                    </div>

                    <!-- Birthdate and Religion -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="birthDate">জন্ম তারিখ</label>
                            <input type="date" class="form-control" id="birthDate" name="birth_date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="religion">ধর্ম</label>
                            <select name="religion" id="religion" class="form-control">
                                <option value="1">ইসলাম</option>
                                <option value="2">হিন্দু</option>
                            </select>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone">মোবাইল নং</label>
                        <input type="text" class="form-control" id="phone" name="mobile_no" placeholder="নগদ একাউন্ট সহ">
                    </div>

                    <!-- Father's Information -->
                    <h5>পিতার নাম ও তথ্য</h5>
                    <div class="form-group">
                        <label for="fatherName">পিতার নাম</label>
                        <input type="text" class="form-control" id="fatherName" name="father_name_bangla" placeholder="বাংলায়">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fatherNID">জাতীয় পরিচয়পত্র নং</label>
                            <input type="text" class="form-control" id="fatherNID" name="father_nid">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fatherPhone">মোবাইল নং</label>
                            <input type="text" class="form-control" id="fatherPhone" name="father_mobile_no">
                        </div>
                    </div>

                    <!-- Mother's Information -->
                    <h5>মাতার নাম ও তথ্য</h5>
                    <div class="form-group">
                        <label for="motherName">মাতার নাম</label>
                        <input type="text" class="form-control" id="motherName" name="mother_name_bangla" placeholder="বাংলায়">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="motherNID">জাতীয় পরিচয়পত্র নং</label>
                            <input type="text" class="form-control" id="motherNID" name="mother_nid">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="motherPhone">মোবাইল নং</label>
                            <input type="text" class="form-control" id="motherPhone" name="mother_mobile_no">
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="permanentAddress">স্থায়ী ঠিকানা</label>
                        <textarea class="form-control" id="permanentAddress" name="permanent_address" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="presentAddress">বর্তমান ঠিকানা</label>
                        <textarea class="form-control" id="presentAddress" name="present_address" rows="2"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">ফরম সাবমিট</button>
                </form>

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


