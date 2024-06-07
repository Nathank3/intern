<?php
include('session.php');
include('connect.php');
include ('menu.php');
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="css/uikit.min.css" />
 
    <title>dashboard</title>
    <style>
    #container {
        max-width: 1200px;
    }
    .hojlund{max-width: 800px;}

    .form-label{font-weight: 700;}
    label{font-weight: 700;}
    th,td,h1{text-align: center;}
    h4{color: dodgerblue;size: 15px;font-weight: 700;}
</style>
</head>
<body>
    <!-- start -->
 <div id="container" class="container mt-5" class="border border-primary">
        <h4 class="uk-heading-line uk-text-center"><span>Application Status(INTERNSHIP)</span></h4>
        <table class="table table-bordered border-primary">
        <thead>
            <tr style="background-color:teal;">
                <th>No.</th>
                <th>Course Completed</th>
                <th>Academic Level</th>
                <th>Year Completed</th>
                <th>Department Applied</th>
                <th style="font-weight: 600; text-align: center;">Status of My Application</th>
            </tr>
        </thead>

        
    <?php
    $sql = "SELECT * FROM  filesave NATURAL JOIN register WHERE  pid = $pid ";
    $query = $conn->prepare($sql);
    $query->execute();
    $fetch = $query->fetchAll();
    $j=1;

    if ($query->rowCount() > 0) {
        // Records found, loop through and display them
        foreach ($fetch as $key => $value) { ?>
            <tr>
                <td><?php echo $j++; ?></td>
                <td><?php echo $value['Coursename'] ?></td>
                <td><?php echo $value['academics'] ?></td>
                <td><?php echo $value['Yearr'] ?></td>
                <td><?php echo $value['Department'] ?></td>
                <td style="font-weight: 600; text-align: center;">
                    <input type="hidden" value="<?php echo $value['status'] ?>">

                    <?php
                    if ($value['status'] == 0) {
                        print("PROCESSING HAS STARTED");
                    } elseif ($value['status'] == 1) {
                        print("SHORTLISTED");
                    } elseif ($value['status'] == 2) {
                        print(" NOT SHORTLISTED");
                    }
                    ?>

                </td>
            </tr>
        <?php }
    } else {
        // No records found
        ?>
        <tr>
            <td colspan="5" style="text-align: center; font-weight: 600;">No INTERNSHIP records found</td>
        </tr>
    <?php } ?>
    </table>
   <!-- response  for intern-->
<?php 
$sql = "SELECT status FROM filesave NATURAL JOIN register WHERE pid = $pid ";
$query = $conn->prepare($sql);
$query->execute();
$fetch = $query->fetchAll();

// Check if $fetch is not empty and if it contains an element at index 0
if (!empty($fetch) && isset($fetch[0]['status']) && $fetch[0]['status'] == 1) { ?>
<div  style="text-align:center;font-weight: 700; color: white; border-radius: 6px;"class="bg-primary">
You Will Receive A call or an Email or an SMS with Interview instructions.<br>
<strong>Congratulations  &nbsp;<?php echo $fullName ?></strong>
</div>
<?php } ?> 
<!-- end -->
    
</div>
<!-- end -->







<!-- INTERNSHIP APPLICATION TABLE -->
<div id="container" class="container mt-5" class="border border-primary">
    <h4 class="uk-heading-line uk-text-center"><span>ATTACHMENT & VOLUNTEERISM</span></h4>
    <table class="table table-bordered border-primary">
        <thead>
            <tr style="background-color:turquoise;">
                <th>SNo.</th>
                <th>Course Completed</th>
                <th>Institution Name</th>
                <th>Application Type</th>
                <th>Department Applied</th>
                <th style="font-weight: 600; text-align: center;">Status of My Application</th>
            </tr>
        </thead>

         <?php
    $sql = "SELECT * FROM  register NATURAL JOIN volunteerism WHERE  pid = $pid ";
    $query = $conn->prepare($sql);
    $query->execute();
    $fetch = $query->fetchAll();
    $t=1;

    if ($query->rowCount() > 0) {
        // Records found, loop through and display them
        foreach ($fetch as $key => $value) { ?>
            <tr>
                <td><?php echo $t++; ?></td>
                <td><?php echo $value['Coursename'] ?></td>
                <td><?php echo $value['iname'] ?></td>
                <td><?php echo $value['Application_Type'] ?></td>
                <td><?php echo $value['Department'] ?></td>
                <td style="font-weight: 600; text-align: center;">
                    <input type="hidden" value="<?php echo $value['status'] ?>">

                    <?php
                    if ($value['status'] == 0) {
                        print("PROCESSING HAS STARTED");
                    } elseif ($value['status'] == 1) {
                        print("SUCCESSFULL");
                    } elseif ($value['status'] == 2) {
                        print(" NOT SUCCESSFULL");
                    }
                    ?>

                </td>
            </tr>
        <?php }
    } else {
        // No records found
        ?>
        <tr>
            <td colspan="5" style="text-align: center; font-weight: 600;">No records found</td>
        </tr>
    <?php } ?>
    </table>
    <!-- trial -->
    <?php 
$sql = "SELECT status FROM volunteerism NATURAL JOIN register WHERE pid = $pid ";
$query = $conn->prepare($sql);
$query->execute();
$fetch = $query->fetchAll();

// Check if $fetch is not empty and if it contains an element at index 0
if (!empty($fetch) && isset($fetch[0]['status']) && $fetch[0]['status'] == 1) { ?>
<div style="text-align:center;font-weight: 700;color: white; border-radius: 6px;" class="bg-success">
You Will Receive A call or an Email or an SMS with instructions of collecting Cover Letter.<br>
<strong>Success In Your  Attachment/Volunteer Program </strong>
</div>
<?php } ?> 
<!-- end of trial -->
</div>

<!-- end -->


<!-- trial -->


<div class="uk-child-width-1-2@s uk-text-center" uk-grid >
    <div>
        <div class="uk-box-shadow-medium uk-padding"  uk-scrollspy="cls: uk-animation-slide-left; repeat: true" style="height: 100%;">
        
       <h1 class="uk-heading-divider uk-text-center" style="font-weight:700;color:dodgerblue;">Notice</h1>
        <?php
        $sql = "SELECT * FROM deadline WHERE status ='1'";
        $query = $conn->prepare($sql);
        $query->execute();
        $fetch = $query->fetchAll();

        foreach ($fetch as $key => $value) { ?>

        <div class="uk-alert-success" uk-alert>

        <p style="font-weight:700;color:darkcyan;">Deadline Of All Applications is on:</p>
        </div>
        <b style="font-weight:700;color: darkcyan;"><?php echo $value['d_date'];?></b>

        <?php } ?>


    </div>
    </div>

    <div>
        <div class="uk-box-shadow-medium uk-padding" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
            <h1 class="uk-heading-divider uk-text-center" style="font-weight:700;color:dodgerblue;">Application Guidelines</h1>
        <?php
$sql1 = "SELECT d_date FROM deadline WHERE status = 1";
$query1 = $conn->prepare($sql1);
$query1->execute();
$fetch = $query1->fetch();

$today = date('Y-m-d H:i:s');
$d_date = $fetch['d_date'];

$dl_exp = date('Y-m-d H:i:s', strtotime('+1 minute'));

    if ($today >= $d_date) { ?>
     <h3 style="color:darkred; font-weight: 600;">Sorry, there are no internship posts available at the moment</h3>
       <div class="uk-alert-primary" uk-alert>
    <p>Thank You For Staying In Touch.</p>
</div>
     <br>
        <?php } 
        else{
          ?>
     <h3 style="color:darkred; font-weight: 600;">You are Reminded to apply For only one INTERNSHIP position</h3>
       <h3 style="color:darkcyan; font-weight: 600;">Thank You For Staying In Touch</h3>
     <br>
        <?php
        }
        ?></div>
    </div>
</div>

<!-- guidelines -->

<br><br>
<?php include 'footer.php';?>
  <script src="js/uikit.min.js"></script>
   <script src="js/uikit-icons.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
