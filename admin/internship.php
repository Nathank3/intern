<?php
include('session.php');
include('connect.php');
include('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/uikit.min.css" />
   <script src="js/uikit.min.js"></script>
   <script src="js/uikit-icons.min.js"></script>
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Internships</title>
</head>
<body>
     <center> <h1 class="uk-heading-bullet" style="font-weight:700;text-decoration: underline;color: darkcyan;">All Internship Applications</h1></center>

     <table class="table">
  <thead class="table-dark">
    <tr>
     <th>Full Names</th>
    <th>Email</th>
    <th>Phone</th>
    <th>County</th>
    <th>SubCounty</th>
    <th>Ward</th>
    <th>Date Of Application</th>
    <!-- Documents -->
    <th >KCSE</th>
    <th>Application Letter </th>
    <th style="text-align: center;">CV</th>
    <th>Degree/Diloma</th>
    <th>National Id</th>
    <th>Professional Attachments</th>
    <th colspan="2" style="text-align:center;">Action</th>
    </tr>
  </thead>
  <tbody>
      <!-- fetching applicants data and display in table -->
  <?php
                    
                    $sql = "SELECT * FROM register
                     JOIN filesave ON register.pid = filesave.pid
                      WHERE filesave.status = 0
                     ORDER BY register.DateofAdmission ASC";
                    $query = $conn->prepare($sql);
                    $query->execute();
                    $fetch = $query->fetchAll();

                    foreach ($fetch as $key => $value) { ?>
  <tr>
    
    <td><?php echo $value['fullName'] ?></td>
    <td><?php echo $value['email'] ?></td>
     <td><?php echo $value['phone'] ?></td>
    <td><?php echo $value['county'] ?></td>
    <td><?php echo $value['subCounty'] ?></td>
    <td><?php echo $value['ward'] ?></td>
    <td><?php echo $value['DateofAdmission'] ?></td>
    <!-- documents -->
    

    <!-- national ID -->
   <td><a href="../download.php?file=<?php echo urlencode($value['nid']); ?>" target="_blank">National ID</a></td>
   <!-- KCSE -->
    <td><a href="../download.php?file=<?php echo urlencode($value['KCSE']); ?>" target="_blank">KCSE</a></td>
    <!-- application letter -->
    <td><a href="../download.php?file=<?php echo urlencode($value['letter']); ?>" target="_blank">Application Letter</a></td>
    <!-- letter -->
    <td><a href="../download.php?file=<?php echo urlencode($value['CV']); ?>" target="_blank">CV</a></td>
   <!-- Transcripts -->
    <td><a href="../download.php?file=<?php echo urlencode($value['Attachments']); ?>" target="_blank">Certificate</a></td>
    <!-- Certificates -->
   <td><a href="../download.php?file=<?php echo urlencode($value['Certificate']); ?>" target="_blank">Professional Letter</a></td>
    <!-- validate -->
    <td> <button type="button" class="btn btn-success"  onclick="confirmAccept('<?php echo $value['pid']; ?>')">Approve</button>
       <form id="AcceptForm_<?php echo $value['pid']; ?>" method="post" action="">
        <input type="hidden" name="accept" value="1">
        <input type="hidden" name="pid" value="<?php echo $value['pid']; ?>">
    </form>

    </td>
    <!-- <td> <button type="button" name="reject" class="btn btn-danger">REJECT</button></td> -->
    <td>
    <button type="button" class="btn btn-danger" onclick="confirmReject('<?php echo $value['pid']; ?>')">REJECT</button>
    <!-- Add a hidden form for each reject button -->
    <form id="rejectForm_<?php echo $value['pid']; ?>" method="post" action="">
        <input type="hidden" name="reject" value="1">
        <input type="hidden" name="pid" value="<?php echo $value['pid']; ?>">
    </form>
</td>

  </tr>
   
  <?php } ?>
   
   
  </tbody>
</table>
<!-- inviting for interview -->
  <?php
    if (isset($_POST['accept'])) {
    $pid = $_POST['pid'];

  
    $query = $conn->prepare("UPDATE filesave SET status = 1 WHERE pid = ?");
    $query->execute(array($pid));
    
    
   }
   ?>

     <script>
        function confirmAccept(pid) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action will Shortlist Applicant!',
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Shortlist!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user clicks 'Yes', submit the form with the reject action
                    document.getElementById('AcceptForm_' + pid).submit();
                }
            });
        }
    </script>

<!-- dis-approving applicants -->
    
   <?php
    if (isset($_POST['reject'])) {
    $pid = $_POST['pid'];

    // Your reject logic goes here
    $query = $conn->prepare("UPDATE filesave SET status = 2 WHERE pid = ?");
    $query->execute(array($pid));

    // Redirect or display a success message as needed
    
    
   }
   ?>

     <script>
        function confirmReject(pid) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action will reject the applicant!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, reject it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user clicks 'Yes', submit the form with the reject action
                    document.getElementById('rejectForm_' + pid).submit();
                }
            });
        }
    </script>



    

     <?php include('footer.php');?>
</body>
</html>
<!-- end -->



