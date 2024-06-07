
<!-- NEW -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js" defer></script>
    <link rel="icon" href="images/logo/logo.png" >
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/css/uikit.min.css" />



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <header class="header-container">
        <nav>
            <div class="logo">
                <img src="images/logo/logo.png" alt="Logo" class="logo-img">
            </div>
            <ul class="menu">
                <button style='margin-right:16px' class="btn btn-info btn-lg" ><a href="signup.php">Register</a></button>
                <button style='margin-right:16px' class="btn btn-info btn-lg" ><a href="signin.php">Login</a></button>
                 
            </ul>
        </nav>
    </header>
  </head>
  <body>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner"style="border-radius:10px;">
    <div class="carousel-item active">
      <img src="images/carousel/mkn.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/carousel/capture.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/carousel/blue.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end of slider -->
<div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
            <h3 class="uk-card-title">Internships</h3>
            <style>#more {display: none;}</style>
            <p style="text-align:justify-all;">
1. All first time users of the Online Recruitment and Selection system are required to register by providing Full Names, current Email address and a password to access the system.<br>
2. To apply for any advertised job or internship opportunities, log into the system using the
<span id="dots">...</span><span id="more"> 

email and the Password created in (1) above.<br>
3. Applicant MUST ensure that information pertaining to personal details, academic qualifications, and any other relevant information is provided before submitting the application. Incomplete applications will not be considered.<br>
4. The Online Recruitment and Selection system allows applicants to amend/revisit their application(s) at any time BEFORE the Advert Closure Date.<br>
<b>Please Note</b><br>
i) The online recruitment and selection system allows applicants to amend/revisit their application(s) at any time before the advert closure date.<br>
ii) Section 100(4) of the Public Service Commission Act 2017 provides that a person who gives false or misleading information to the Commission is, on conviction, liable to a fine not exceeding Kshs. 200,000 or to imprisonment for a term not exceeding two years or to both such fine and imprisonment.<br>
<b>Inquiries</b>
Send an email to:<br> info@makueniassembly.go.ke </p>

<button class="btn btn-info" onclick="myFunction()" id="myBtn">Read more</button> 
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
            <h2>Attachment</h2>
            <p>On going students and recent Graduates are encouraged to apply for Attachments/Volunteer any time of the year and truck their status in their portals</p>
            <br><b><a href="manual/manual.pdf" target="_blank" download>Download User Manual</a></b>
        </div>
    </div>
</div>
<!-- end -->
<div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true" style="text-align:center;">
    
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <b>About Us</b>
            <p style="font-weight:600;color:darkcyan;">Engaging all stakeholders in resolving<br> to make Makueni the County of promise.<br>www.must.ac.ke</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy-class="uk-animation-slide-top">
           <b>Contacts Us</b>
            <p style="font-weight:600;color:darkcyan;">For any queries, <br>contact us at <br><a href="info@makueniassembly.go.ke" style="color: green;">0746750740/0735660505</a></br></p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <b>Postal Address</b>
            <p style="font-weight:600;color:darkcyan;"> Assembly Buildings<br>
             P.O. Box 572 – 90300<br>
              Wote, Makueni</p>
        </div>
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/js/uikit-icons.min.js"></script>
    
  </body>
</html>
<center><?php include 'footer.php';?></center>
