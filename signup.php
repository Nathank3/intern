<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Signup Page</title>
    <link rel="stylesheet" href="css\styles.css">
</head>

<style>
    select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-weight: 600;
}
</style>
<body>
    <div id="background-slider">
    <img src="images\carousel\Capture.PNG" alt="Background Image 1">
    <img src="images\carousel\download.PNG" alt="Background Image 2">
    <img src="images\carousel\mkn.PNG" alt="Background Image 3">
    <!-- Add more images as needed -->
</div>

<script>
    // Function to rotate images
    function rotateImages() {
        var images = document.getElementById('background-slider').getElementsByTagName('img');
        var currentIndex = 0;
        var maxIndex = images.length - 2;

        // Hide all images
        for (var i = 0; i < images.length; i++) {
            images[i].style.display = 'none';
        }

        // Show the next image
        currentIndex = (currentIndex === maxIndex) ? 0 : currentIndex + 1;
        images[currentIndex].style.display = 'block';
    }

    // Call rotateImages function every 5 seconds
    setInterval(rotateImages, 3000);
</script>


    <div class="container">
        <div class="header">
            <img src="images\logo\logo.png" alt="Logo" class="logo">
            <h2 style="font-weight:600;text-align: center;">Sign Up</h2>
        </div>
        
        <div class="scroll-container">
        <form id="signupForm" onsubmit="return validateForm()"
         action="signup.php" method="POST">
            <label for="fullName">Full Names:</label>
            <input type="text" id="fullName" name="fullName"  required>
           

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone No:</label>
            <input type="tel" id="phone" name="phone" required>

             <label for="subCounty">Gender:</label>
            <select name="Gender">
                <option value="" disabled hidden selected>Select Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
            </select>

            <label for="password">Password:</label>
            <input type="password" id="password" name="passwordd" minlength="8" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" minlength="8" required>

            <label for="county">County:</label>
            <select id="selectCounty" onchange="populateSubCounties()" name="county" required>
                <!-- Options for counties go here -->
                <option value="" disabled hidden selected>Select an option</option>
                <option value=Makueni>Makueni</option>
                <option value=Machakos>Machakos</option>
                <option value=Kitui>Kitui</option>
                <option value=Bomet>Bomet</option>
               <option value=Kericho>Kericho</option>
               <option value=Meru>Meru</option>
               <option value=Bungoma>Bungoma</option>
               <option value=Baringo>Baringo</option>
               <option value=Siaya >Siaya </option>
               <option value=Mombasa >Mombasa </option>
               <option value=Laikipia >Laikipia </option>
               <option value="Kwale">Kwale</option>
               <option value="Kilifi">Kilifi</option>
               <option value="Tana River">Tana River</option>
               <option value="Kisii">Kisii</option>
               <option value="Nyamira">Nyamira</option>
               <option value="Nairobi">Nairobi</option>
               <option value="Migori">Migori</option>
               <option value="Homa Bay">Homa Bay</option>
               <option value="Busia">Busia</option>
               <option value="Kisumu">Kisumu</option>
               <option value="Vihiga">Vihiga</option>
               <option value="Kakamega">Kakamega</option>
               <option value="Kajiado">Kajiado</option>
               <option value="Narok">Narok</option>
               <option value="Nakuru">Nakuru</option>
               <option value="Nandi">Nandi</option>
               <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
               <option value="Uasin Gishu">Uasin Gishu</option>
               <option value="Trans-Nzoia">Trans-Nzoia</option>
               <option value="Samburu">Samburu</option>
               <option value="West Pokot">West Pokot</option>
               <option value="Turkana">Turkana</option>
               <option value="Kiambu">Kiambu</option>
               <option value="Murang'a">Murang'a</option>
               <option value="Kirinyanga">Kirinyanga</option>
               <option value="Nyeri">Nyeri</option>
               <option value="Nyandarua">Nyandarua</option>
               <option value="Isiolo">Isiolo</option>
               <option value="Tharaka Nithi">Tharaka Nithi</option>
               <option value="Marsabit">Marsabit</option>
               <option value="Mandera">Mandera</option>
               <option value="Wajir">Wajir</option>
               <option value="Garissa">Garissa</option>
               <option value="Lamu">Lamu</option>
               <option value="Taita-Taveta">Taita-Taveta</option>
               <option value="Embu">Embu</option>
              </select>
            <br>
            <label for="subCounty">Sub County:</label>
            <select name="subCounty" id="selectSubCounty" onchange="populateWards()">
               <option value="0">Select Sub County</option>
        <!-- Sub counties will be populated dynamically using JavaScript -->
            </select>

            <label for="ward">Ward:</label
>            <select name="ward" id="selectWard">
        <option value="0">-Select Ward-</option>
        <!-- Wards will be populated dynamically using JavaScript -->
        </select>

            <div class="terms">
                <input type="checkbox" id="termsCheckbox" required>
                <label for="termsCheckbox">
                    By clicking Sign Up, you acknowledge that you have read and agreed to the 
                    <a href="#" class="blue-link">Privacy Policy</a> and 
                    <a href="#" class="blue-link">Makueni County Assembly Terms of Use</a>.
                </label>
            </div>

            <button type="submit"  name="add" id="btnSubmit" onclick="submitForm()">
                <span class="icon">&#x1F464;</span> Sign Up
            </button>
        </form>
        </div>

        <div class="login-link">
            Already have an account? <a href="signin.php" class="blue-link">Login</a>
        </div>
    </div>

 
    
<script src="js/javascript.js"></script>
<!-- <script src="javascript/script.js"></script> -->
</body>

<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if email exists
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $sqlCheckEmail = "SELECT * FROM register WHERE email=?";
        $stmtCheckEmail = $conn->prepare($sqlCheckEmail);
        $stmtCheckEmail->execute([$email]);

        if ($stmtCheckEmail->rowCount() > 0) {
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Makueni Assembly Says",
                    text: "This Email Already Exists",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "signup.php";
                });
            </script>';
            exit; // Stop execution if email already exists
        }
    }

    if (isset($_POST['add'])) {
        $fullName = $_POST['fullName'];
        $phone = $_POST['phone'];
        $Gender = $_POST['Gender'];
        $passwordd = $_POST['passwordd']; 
        $confirmPassword = $_POST['confirmPassword'];
        $email = $_POST['email'];
        $county = $_POST['county'];
        $subCounty = $_POST['subCounty'];
        $ward = $_POST['ward'];

        // Check if passwords match
        if ($passwordd !== $confirmPassword) {
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Makueni Assembly Says",
                    text: "Passwords DONT Match",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "signup.php";
                });
            </script>';
            exit;
        }

        
        $hashedPassword = password_hash($passwordd, PASSWORD_BCRYPT);

         $add = $conn->prepare("INSERT INTO register (fullName,email,phone, Gender, passwordd, confirmPassword,  county, subCounty, ward)
        VALUES (?,?,?,?,?,?,?,?,?) ");
    $res = $add->execute(array($fullName, $email, $phone, $Gender, $hashedPassword, $hashedPassword, $county, $subCounty, $ward));

      
        if ($res) {
            // Show success message
            echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Makueni Assembly Says",
                    text: "Account Created! You Can now Login",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "signin.php";
                });
            </script>';
        } else {
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Makueni Assembly Says",
                    text: "Error Creating Account",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "signup.php";
                });
            </script>';
        }
    }
}
?>
</html>

