<?php
include('menu.php');
include('session.php');
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/css/uikit.min.css" />
<title>Internships</title>
</head>

<style>
  #container {
    max-width: 550px;  
  }

  .step-container {
    position: relative;
    text-align: center;
    transform: translateY(-43%);
  }

  .step-circle {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #fff;
    border: 2px solid #007bff;
    line-height: 30px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    cursor: pointer; /* Added cursor pointer */
  }

  .step-line {
    position: absolute;
    top: 16px;
    left: 50px;
    width: calc(100% - 100px);
    height: 2px;
    background-color: #007bff;
    z-index: -1;
  }

  #multi-step-form{
    overflow-x: hidden;
  }
  label{font-weight: 700;}
  h3{ font-weight:700; color:dodgerblue;text-align:center;text-decoration:underline; }
</style>
<body>
 
   <h3 style="color:teal;">Apply for Internship </h3>
  <div id="container" class="container mt-5">
    <div class="progress px-1" style="height: 3px;">
      <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="step-container d-flex justify-content-between">
      <div class="step-circle" onclick="displayStep(1)">1</div>
      <div class="step-circle" onclick="displayStep(2)">2</div>
      <div class="step-circle" onclick="displayStep(3)">3</div>
    </div>

    <form id="multi-step-form"  method="POST" action="applicants.php" enctype="multipart/form-data">
      <div class="step step-1">
        <!-- Step 1 form fields here -->
        <h3>Academic background</h3>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">Institution Name:</label>
            <input type="text" class="form-control" placeholder="e.g Nairobi University" name="iname" aria-label="First">
          </div>
          <div class="col">
            <label for="field3" class="form-label">Course undertaking:</label>
            <input type="text" class="form-control" placeholder="e.g BSc. IT" aria-label="Coursename" name="Coursename">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">Year Graduated</label>
            <select class="form-control"  name="Yearr" required>
              <option value="" disabled hidden selected style="color:darkcyan;font-weight:700;">Select Year</option>   
              <option value="2023" style="color:black;font-weight:700;">2023</option>
              <option value="2022" style="color:black;font-weight:700;">2022</option>
              <option value="2021" style="color:black;font-weight:700;">2021</option>
              <option value="2020" style="color:black;font-weight:700;">2020</option>
              <option value="2019" style="color:black;font-weight:700;">2019</option>
              <option value="2018" style="color:black;font-weight:700;">2018</option>
              <option value="2017" style="color:black;font-weight:700;">2017</option>
            </select>

          </div>
          <div class="col">
            <label for="field3" class="form-label">Academic Level:</label>
            <select class="form-control"  name="academics" required>
              <option value="" disabled hidden selected style="color:darkcyan;font-weight:700;">Select Level</option>
              <option value="Degree" style="color:black;font-weight:700;">Degree</option>
              <option value="Diploma"style="color:black;font-weight:700;">Diploma</option>
              <option value="Certificate"style="color:black;font-weight:700;">Certificate</option>
            </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">Department Interested</label>
            <select class="form-control" name="Department"  name="Department" required>
              <option value="" disabled hidden selected style="color:darkcyan;font-weight:700;">Select Department</option>  
              <option value="Department of ICT">Department of ICT</option>
              <option value="HR">Department of HR</option>
              <option value="Department of Finance">Department of Finance</option>
              <option value="Department of Procurement">Department of Procurement</option>
              <option value="Department of Legal Services of ICT">Department of Legal Services</option>
              <option value="Department of Internal Audit">Department of Internal Audit</option>          
            </select>
          </div>          
        </div>     
        <br>
        <center>
          <button type="button" class="btn btn-primary next-step">Next</button>       
        </center>
      </div>

      <div class="step step-2">
        <!-- Step 2 form fields here -->
        <h3>Files & Documents</h3>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">KCSE Result Slip:</label>
            <input class="form-control" type="file" id="formFile" name="KCSE">
          </div>
          <div class="col">
            <label for="field3" class="form-label">Cover Letter:</label>
           <input class="form-control" type="file" id="formFile" name="letter">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">resume or CV:</label>
           <input class="form-control" type="file" id="formFile" name="CV">
          </div>
          <div class="col">
            <label for="field3" class="form-label">Degree/Diploma:</label>
            <input class="form-control" type="file" id="formFile" name="Certificate">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">Nationa ID:</label>
            <input class="form-control" type="file" id="formFile" name="nid">
          </div>
          <div class="col">
            <label for="field3" class="form-label">Professional Attachments:</label>
            <input class="form-control" type="file" id="formFile" name="Attachments">
          </div>
        </div>        
        <br>
        <center>
          <button type="button" class="btn btn-primary prev-step">Previous</button>
          <button type="button" class="btn btn-primary next-step">Next</button>
        </center>
      </div>
      
      <div class="step step-3">
        <!-- Step 3 form fields here -->
        <h3>Confirm Details</h3>
        <div class="mb-3">
         <p style="font-weight:700;color:darkcyan;">
               <span style="background-color:black; border-radius: 50%; color:white;" uk-icon="icon: check; ratio: 1.2"></span>&#160;By proceeding, I certify that, to the best of my knowledge, the provided
              information is true and accurate.             
          </p>
        </div>
        <br>
        <center>
          <button type="button" class="btn btn-primary prev-step">Previous</button>
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </center>
      </div>
    </form>
  </div>

</body>
<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/js/uikit-icons.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
<script >
  var currentStep = 1;
  var updateProgressBar;

  function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 3) {
      $(".step-" + currentStep).hide();
      $(".step-" + stepNumber).show();
      currentStep = stepNumber;
      updateProgressBar();
    }
  }

  $(document).ready(function() {
    $('#multi-step-form').find('.step').slice(1).hide();

    $(".next-step").click(function() {
      if (currentStep < 3) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep++;
        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
          updateProgressBar();
        }, 500);
      }
    });

    $(".prev-step").click(function() {
      if (currentStep > 1) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
        currentStep--;
        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
          updateProgressBar();
        }, 500);
      }
    });

    updateProgressBar = function() {
      var progressPercentage = ((currentStep - 1) / 2) * 100;
      $(".progress-bar").css("width", progressPercentage + "%");
    }
  });
</script>
</html>
  <?php include('footer.php');?>

<!-- new -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_SESSION['pid'];

    // Query to check the status in filesave table
    $sql1 = "SELECT * FROM filesave WHERE pid = ?";
    $query1 = $conn->prepare($sql1);
    $query1->execute(array($userid));
    $result1 = $query1->fetch(PDO::FETCH_ASSOC);

    if ($result1) {
        echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Can Only Apply for ONE post.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                  </script>';
        exit(); // Stop further execution
    }

    // Your other form data
  // Your other form data
$iname = isset($_POST['iname']) ? $_POST['iname'] : null;
$Coursename = isset($_POST['Coursename']) ? $_POST['Coursename'] : null;
$Yearr = isset($_POST['Yearr']) ? $_POST['Yearr'] : null;
$academics = isset($_POST['academics']) ? $_POST['academics'] : null;
$Department = isset($_POST['Department']) ? $_POST['Department'] : null;
$userid = $_SESSION['pid']; 

// Check if any required field is empty
if (empty($iname) || empty($Coursename) || empty($Yearr) || empty($academics) || empty($Department)) {
    // Handle the case where any required field is empty
    echo '<script>
            Swal.fire({
                title: "Error!",
                text: "Please fill missing required fields.",
                icon: "error",
                confirmButtonText: "OK"
            });
          </script>';
    exit;
}


    // Target directory for file uploads
    $uploadDir = "uploads/";

    // Array to store file paths
    $filepaths = [];

    // Function to handle file upload
    function uploadFile($file, $targetDir)
    {
        global $filepaths;

        $fileName = basename($file['name']);
        $targetFile = $targetDir . $fileName;

        // Attempt to move uploaded file
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $filepaths[] = $targetFile; // Store file path if upload is successful
            return $targetFile; // Return the file path
        } else {
            return false; // Return false if upload fails
        }
    }

    // Handle file uploads
    $KCSE = uploadFile($_FILES["KCSE"], $uploadDir);
    $letter = uploadFile($_FILES["letter"], $uploadDir);
    $CV = uploadFile($_FILES["CV"], $uploadDir);
    $Certificate = uploadFile($_FILES["Certificate"], $uploadDir);
    $nid = uploadFile($_FILES["nid"], $uploadDir);
    $Attachments = uploadFile($_FILES["Attachments"], $uploadDir);

    // Check if any file upload failed
    if (!$KCSE || !$letter || !$CV || !$Certificate || !$nid || !$Attachments) {
        echo "<script>alert('Upload Missing Files.');</script>";
        exit();
    }

    
    // Database Insert
    $stmt = $conn->prepare("INSERT INTO filesave (iname, Coursename, Yearr, academics, Department, KCSE, letter, CV, Attachments, Certificate, nid, pid)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bindParam(1, $iname);
    $stmt->bindParam(2, $Coursename);
    $stmt->bindParam(3, $Yearr);
    $stmt->bindParam(4, $academics);
    $stmt->bindParam(5, $Department);
    $stmt->bindParam(6, $KCSE);
    $stmt->bindParam(7, $letter);
    $stmt->bindParam(8, $CV);
    $stmt->bindParam(9, $Attachments);
    $stmt->bindParam(10, $Certificate);
    $stmt->bindParam(11, $nid);
    $stmt->bindParam(12, $pid);

    if ($stmt->execute()) {
        echo '<script>
          Swal.fire({
            title: "Congratulations!",
            text: "Application was successful.",
            icon: "success",
            confirmButtonText: "OK"
            }).then(function() {
              window.location.href = "dashboard.php";
              });
              </script>';
        exit();
    } else {
        echo '<script>
              Swal.fire({
                title: "Error!",
                text: "Failed. Try Again.",
                icon: "error",
                confirmButtonText: "OK"
                });
                </script>';
        exit();
    }
}
?>


