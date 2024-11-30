<?php include "connect.php" ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="<?php echo "$base_url"; ?>super_admin/dashboard">DASHBOARD</a> -->
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Single SMS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li ><a href="single_sms.php">Single SMS <span class="sr-only">(current)</span></a></li>
             <li class="divider"></li>
            <li><a href="single_sms_parent.php">Send To Parents</a></li>
            <li><a href="single_sms_teachers.php">Send To Teachers</a></li>
            <li><a href="sms_to_students.php">Send To Students</a></li>
            
            <li class="divider"></li>
            <li><a href="send_to_contacts.php">Send To Contact</a></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bulk/Multiple SMS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="bulk_sms_parents.php">Send Bulk SMS[Parents]</a></li>
            <li><a href="bulk_sms_teachers.php">Send Bulk SMS[Teachers]</a></li>
            <li><a href="sms_to_students.php">Send Bulk SMS[Students]</a></li>
             <li class="divider"></li>
            <li><a href="bulk_sms_csv.php">Send Bulk SMS[CSV]</a></li>
            
            <li class="divider"></li>
            <li><a href="sms_to_group_contacts.php">Send To Groups</a></li>
            <li><a href="send_to_contacts.php">Send To Contacts</a></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact Book <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="insert_group_name.php">Add New Group</a></li>
            <li><a href="sms_group_list.php">View/Update Group</a></li>
             <li class="divider"></li>
            <li><a href="insert_sms_contact.php">Add New Contact</a></li>
            <li><a href="sms_contact_list.php">View/Update Contact</a></li>
            
            <li class="divider"></li>
            <li><a href="sms_to_group_contacts.php">Send To Groups</a></li>
            <li><a href="send_to_contacts.php">Send To Contacts</a></li>
            
          </ul>
        </li>

        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="insert_api_details.php">Insert API Details</a></li>
            <li><a href="view_api_details.php">View API Details</a></li>
            
            <li class="divider"></li>
            <li><a href="request_for_report.php">Request A Report</a></li>
            <li class="divider"></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout&nbsp</a></li>
      </ul>
    </div>
  </div>
</nav>