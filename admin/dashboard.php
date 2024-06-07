
    <?php
    include('session.php');
    include('connect.php');
     include('menu.php');
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />
<!-- boostrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>dashboard</title>
</head>


<!-- printing contents -->
<script>
    function printContent(elementId) {
        var printContents = document.getElementById(elementId).innerHTML;
        var originalContents = document.body.innerHTML;
        var printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Print</title></head><body>' + printContents + '</body></html>');
        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
        printWindow.close();
        document.body.innerHTML = originalContents;
    }
</script>


<body>
   <center> <h1 class="uk-heading-bullet" style="font-weight:700;text-decoration: underline;">Internship Info</h1></center>
<div class="uk-child-width-1-4@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: home; ratio: 2"></span> 
        </a>
            </center>
            <br>
               <?php
        $sql = "SELECT register.*, filesave.*, COUNT(*) AS total FROM register

         JOIN filesave ON register.pid = filesave.pid;";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totalCount = $row["total"];
        

    } 
    ?>
            <h2 class="uk-card-title">Applicants:&nbsp; <?php echo $totalCount; ?></h2>
             <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-primary uk-margin-small-right" type="button" uk-toggle="target: #modal" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h1 class="uk-heading-line uk-text-center"><span>Total Applicants</span></h1>
        <table class="table table-success table-striped">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN filesave ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>
      <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('modal')">Print</button>
        </p>
    </div>
</div>

            <!-- end modal -->
            </center>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy-class="uk-animation-slide-top">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: check; ratio: 2"></span> 
        </a>
            </center>
            <br>
             <?php
    $sql = "SELECT COUNT(DISTINCT pid) AS total FROM filesave WHERE status = '1'";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totall = $row["total"];
        

    } 
    ?>
            <h2 class="uk-card-title">Shortlisted:&nbsp; <?php echo $totall; ?></h3>
                <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-success uk-margin-small-right" type="button" uk-toggle="target: #modall" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="modall" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
      

            <h2 class="uk-card-title">Shortlisted:&nbsp; </h2>
             <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN filesave WHERE status =1 ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>

        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('modall')">Print</button>

        </p>
     
    </div>
</div>

            <!-- end modal -->
            </center>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: users; ratio: 2"></span> 
        </a>
            </center>
            <br>
              <?php
    $sql = "SELECT COUNT(DISTINCT pid) AS total FROM filesave WHERE status = '0'";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totall = $row["total"];
        

    } 
    ?>
            <h2 class="uk-card-title">Pending:&nbsp; <?php echo $totall; ?></h3>
            
                 <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-secondary uk-margin-small-right" type="button" uk-toggle="target: #example" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Pending Approval</h2>
              <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN filesave WHERE status =0 ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>

        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('example')">Print</button>
        </p>
    </div>
</div>

            <!-- end modal -->
            </center>
           
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: close; ratio: 2"></span> 
        </a>
            </center>
            <br>
              <?php
    $sql = "SELECT COUNT(DISTINCT pid) AS total FROM filesave WHERE status = '2'";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totall = $row["total"];
        

    } 
    ?>
            <h2 class="uk-card-title">Not Successful:&nbsp; <?php echo $totall; ?></h3>
            
             <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-danger uk-margin-small-right" type="button" uk-toggle="target: #ekxample" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="ekxample" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Not Shortlisted</h2>
              <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN filesave WHERE status =2 ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>

        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('ekxample')">Print</button>
        </p>
    </div>
</div>

            <!-- end modal -->
            </center>
           
        </div>
    </div>
</div>
<!-- dddd -->
<br>
<center> <h1 class="uk-heading-bullet" style="font-weight:700;text-decoration: underline;">Attachment & Volunteers</h1></center>
<br>
<div class="uk-child-width-1-4@m uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: home; ratio: 2"></span> 
        </a>
            </center>
            <?php
        $sql = "SELECT register.*, volunteerism.*, COUNT(*) AS total FROM register

         JOIN volunteerism ON register.pid = volunteerism.pid;";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totalCount = $row["total"];
        

    } 
    ?>
            <h2 class="uk-card-title">Total Applicants: <?php echo $totalCount; ?></h2>
             <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-primary uk-margin-small-right" type="button" uk-toggle="target: #palmer" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="palmer" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">All Volunteers</h2>
       
                 <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN volunteerism  ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>

        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('palmer')">Print</button>
        </p>
    </div>
</div>

            <!-- end modal -->
            </center>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: check; ratio: 2"></span> 
        </a>
            </center>
             <?php
    $sql = "SELECT COUNT(DISTINCT pid) AS total FROM volunteerism WHERE status = '1'";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totalCount = $row["total"];
        

    } 
    ?>

            <h2 class="uk-card-title"> Successful: <?php echo $totalCount; ?></h2>
             <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-success uk-margin-small-right" type="button" uk-toggle="target: #enzo" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="enzo" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Successful Volunteers</h2>
          <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN volunteerism WHERE status ='1' ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>
        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('enzo')">Print</button>
        </p>
    </div>
</div>

            <!-- end modal -->
            </center>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: users; ratio: 2"></span> 
        </a>
            </center>
                <?php
    $sql = "SELECT COUNT(DISTINCT pid) AS total FROM volunteerism WHERE status = '0'";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totalCount = $row["total"];
        

    } 
    ?>

            <h2 class="uk-card-title"> Pending: <?php echo $totalCount; ?></h2>
            
             <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-secondary uk-margin-small-right" type="button" uk-toggle="target: #Gallagher" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="Gallagher" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Pending Approval</h2>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN volunteerism WHERE status ='0' ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>
        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('Gallagher')">Print</button>
        </p>
    </div>
</div>

            <!-- end modal -->
            </center>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
            <center>
            <a  class="btn btn-info btn-lg">
          <span uk-icon="icon: close; ratio: 2"></span> 
        </a>
            </center>
                    <?php
    $sql = "SELECT COUNT(DISTINCT pid) AS total FROM volunteerism WHERE status = '2'";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        // Output data of each row
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $totalCount = $row["total"];
        

    } 
    ?>

            <h2 class="uk-card-title"> Not Successful: <?php echo $totalCount; ?></h2>
            
             <center>
                <!-- modal -->
                <!-- This is a button toggling the modal -->
<button class="btn btn-danger uk-margin-small-right" type="button" uk-toggle="target: #Pochettino" style="border-radius:30%">View List</button>


<!-- This is the modal -->
<div id="Pochettino" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Rejected Applications</h2>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Full Names</th>
      
      <th scope="col">Phone</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
   
  
      
       <?php
                        $sql = "SELECT * FROM register NATURAL JOIN volunteerism WHERE status ='2' ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetchAll();

                        foreach ($fetch as $key => $value) { ?>
                            <tr>
                             
                                <td><?php echo $value['fullName'] ?></td>
                                
                    
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['county'] ?></td>
                                
                            </tr>
                        <?php } ?>
    
  </tbody>
</table>
        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" onclick="printContent('Pochettino')">Print</button>
        </p>
    </div>
</div>

            <!-- end modal -->
            </center>
        </div>
    </div>
</div>
<br>
<!-- table -->
 <center> <h1 class="uk-heading-bullet" style="font-weight:700;text-decoration: underline;color: teal;">Personal Info</h1></center>
<table class="table table-bordered border-primary">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $uname; ?></td>
      <td><?php echo $email; ?></td>
      <td>Active</td>
    </tr>
  </tbody>
</table>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit-icons.min.js"></script>
<!-- boostrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<hr class="uk-divider-icon">


</html>
<?php include('footer.php'); ?>

<!-- end -->


