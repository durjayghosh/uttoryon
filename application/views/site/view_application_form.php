<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        .watermark {
            position: fixed; /* Ensures the watermark is fixed across all pages */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40%; /* Adjust size as needed */
            height: auto; /* Maintain aspect ratio */
            opacity: 0.2;
            z-index: -1; /* Ensure it appears behind the text */
            pointer-events: none; /* Prevent interactions */
        }
        .form-container {
            position: relative; /* For content positioning */
            width: 100%;
            border: 1px solid #000;
            padding: 20px;
        }
    </style>




</head>
<body style="font-family: Arial, sans-serif; margin: 50px; line-height: 1.5;">
<div class="form-container" style="width: 100%; border: 1px solid #000; padding: 20px;" id="admission-form">
    <img src="<?php echo base_url('uploads/logo.png'); ?>" class="watermark" alt="">
    <div style="text-align: center; margin-bottom: 20px;">
        <img src="<?php echo base_url('uploads/banner.png'); ?>" alt="" style="opacity: 30; width: 50%;">
        <h2 style="margin: 0;">Admission Form</h2>
        <p style="margin: 5px 0;">Class: <?php echo $row->class; ?></p>
    </div>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Roll ID</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->roll_id; ?></td>
            <td rowspan="7" style="border: 1px solid #000; text-align: center">
                <img src="<?php echo base_url().'uploads/application_form/'.$row->image; ?>" alt="Student Image" style="width: 250px; height: 250px;">
            </td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Student Name (Bengali)</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->student_name_bangla; ?></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Student Name (English)</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->student_name_english; ?></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Date of Birth</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->birth_date; ?></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Birth Registration No</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->online_birth_registration_no; ?></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Religion</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->religion; ?></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Mobile Number</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->mobile_no; ?></td>
        </tr>
    </table>

    <h3 style="margin-bottom: 10px;">Parent Information</h3>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <!-- Header Row: Questions -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Father's Alive Status</td>
            <td style="padding: 10px; border: 1px solid #000;">Father's Name</td>
            <td style="padding: 10px; border: 1px solid #000;">Father's Occupation</td>
            <td style="padding: 10px; border: 1px solid #000;">Father's NID</td>
            <td style="padding: 10px; border: 1px solid #000;">Father's Mobile</td>
            <td style="padding: 10px; border: 1px solid #000;">Father's Yearly Income</td>
        </tr>
        <!-- Answer Row: Data -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->father_alive_status; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->father_name_bangla; ?> (<?php echo $row->father_name_english; ?>)</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->father_occupation; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->father_nid; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->father_mobile_no; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->father_yealy_income; ?></td>
        </tr>
    </table>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <!-- Header Row: Questions -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Mother's Alive Status</td>
            <td style="padding: 10px; border: 1px solid #000;">Mother's Name</td>
            <td style="padding: 10px; border: 1px solid #000;">Mother's Nid</td>
            <td style="padding: 10px; border: 1px solid #000;">Mother's Mobile</td>
            <td style="padding: 10px; border: 1px solid #000;">Mother's Occupation</td>
        </tr>
        <!-- Answer Row: Data -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->mother_alive_status; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->mother_name_bangla; ?> (<?php echo $row->mother_name_english; ?>)</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->mother_nid; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->mother_mobile_no; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->mother_occupation; ?></td>
        </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <!-- Header Row: Questions -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Guardian Name</td>
            <td style="padding: 10px; border: 1px solid #000;">Guardian Phone</td>
            <td style="padding: 10px; border: 1px solid #000;">Guardian Nid</td>
        </tr>
        <!-- Answer Row: Data -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->guardian_name; ?> (<?php echo $row->guardian_name_english; ?>)</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->guardian_phone; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->guardian_nid; ?></td>
        </tr>
    </table>
    <h3 style="margin-bottom: 10px;">Previous School Information</h3>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <!-- Header Row: Questions -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Name</td>
            <td style="padding: 10px; border: 1px solid #000;">Registration No</td>
            <td style="padding: 10px; border: 1px solid #000;">Year</td>
        </tr>
        <!-- Answer Row: Data -->
        <tr>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->previous_school_name; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->previous_school_registration_no; ?></td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->educational_year; ?></td>
        </tr>
    </table>



    <h3 style="margin: 20px 0 10px;">Address Information</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Permanent Address</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->permanent_address_vilage; ?>, <?php echo $row->permanent_address_post; ?>, <?php echo $row->permanent_address_upozila; ?>, <?php echo $row->permanent_address_city; ?></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #000;">Present Address</td>
            <td style="padding: 10px; border: 1px solid #000;"><?php echo $row->present_address_vilage; ?>, <?php echo $row->present_address_post; ?>, <?php echo $row->present_address_upozila; ?>, <?php echo $row->present_address_city; ?></td>
        </tr>
    </table>
</div>
<style>
    /* Hide buttons during printing */
    @media print {
        .no-print {
            display: none;
        }
    }
</style>

<div style="margin-top: 20px; text-align: center;" class="no-print">
    <button onclick="window.print()" style="  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  font-size: 16px;
  margin-right: 10px;">Print</button>


    <a href="<?php echo base_url('site/online_admission'); ?>" style="  background-color: darkslategray; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  font-size: 16px;
  margin-right: 10px;">Back</a>


    <br>
    <span style="color: red;">For Download This file Please Click Print Button and Select Save As PDF</span>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


</body>
</html>
