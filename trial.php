
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/css/uikit.min.css" />
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
  <div class="p-3 mb-2 bg-success text-white container" style="font-weight:700;width:45%;text-align: center;border-radius: 5px;">Apply for Attachment/Volunteerism </div>

  <div id="container" class="container mt-5">
    <div class="progress px-1" style="height: 3px;">
      <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="step-container d-flex justify-content-between">
      <div class="step-circle" onclick="displayStep(1)">1</div>
      <div class="step-circle" onclick="displayStep(2)">2</div>
      <div class="step-circle" onclick="displayStep(3)">3</div>
    </div>

    <form id="multi-step-form"  method="post" action="register.php">
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
            <label for="field3" class="form-label">Application Type:</label>
            <select class="form-control" aria-label="Default select example" name="Application_Type">
              <option value="" disabled hidden selected style="color:darkcyan;font-weight:700;">Select Reason</option>
              <option value="" style="color:black;font-weight:700;">Attachment</option>
              <option value=""style="color:black;font-weight:700;">Volunteerism</option>
            </select>

          </div>
          <div class="col">
            <label for="field3" class="form-label">Academic Level:</label>
            <select class="form-control" aria-label="Default select example" name="Academic_Level">
              <option value="" disabled hidden selected style="color:darkcyan;font-weight:700;">Select Reason</option>
              <option value="" style="color:black;font-weight:700;">Degree</option>
              <option value=""style="color:black;font-weight:700;">Diploma</option>
              <option value=""style="color:black;font-weight:700;">Certificate</option>
            </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">Department Interested</label>
            <select class="form-control" name="Department" aria-label="Default select example" name="Department">
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
           <input class="form-control" type="file" id="formFile" name="application_letter">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">resume or CV:</label>
           <input class="form-control" type="file" id="formFile" name="CV">
          </div>
          <div class="col">
            <label for="field3" class="form-label">Transcripts/Certicate:</label>
            <input class="form-control" type="file" id="formFile" name="Transcripts_or_certificate">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <label for="field3" class="form-label">National/Student ID:</label>
            <input class="form-control" type="file" id="formFile" name="ID">
          </div>
          <div class="col">
            <label for="field3" class="form-label">Insurance letter:</label>
            <input class="form-control" type="file" id="formFile" name="Insurance_letter">
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

