<?php
include('connect.php');
include('session.php');
include('menu.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/css/uikit.min.css" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>settings</title>
</head>
<style>
    #container {
        max-width: 1200px;
    }
    .hojlund{max-width: 800px;}

    .form-label{font-weight: 700;}
    label{font-weight: 700;}
    th,td,h1{text-align: center;}
    h1{color: dodgerblue;size: 15px}
</style>
<body>
    <div id="container" class="container mt-5" class="border border-primary">
        <h1 class="uk-heading-line uk-text-center"><span>Current Profile</span></h1>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>

                    <th scope="col">No</th>
                    <th scope="col">Content</th>
                    <th scope="col">Date</th>
                    <th scope="col">Last Update</th>
                </tr>
            </thead>
            <tbody>
                <?php $n=1; ?>               
                <tr>
                    <td><?php echo $n++; ?></td>
                    <td><?php echo $uname; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo substr($DateofAdmission, 0, 19); ?></td>  

                </tr>

            </tbody>

        </table><h1 class="uk-heading-line uk-text-center"><span>Update Profile</span></h1>
        <fieldset style="border-color:dodgerblue;border-radius: 5px;size: 6px;">
            
            <form method="POST" action="profile.php" class="hojlund container mt-5">
                <div class="row">
                    <div class="col">
                        <label>New Username</label>
                        <input type="text" class="form-control" placeholder="UserName" aria-label="UserName" name="uname" required>
                    </div>
                    <div class="col">
                        <label>New Email</label>
                        <input type="text" class="form-control" placeholder="Email" aria-label="email" name="email" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>New Password</label>
                        <input type="password" class="form-control" placeholder="New Password" aria-label="First name"
                         name="password" required>
                    </div>
                    <div class="col">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Last name" name="confirmPassword" required>
                    </div>
                </div><br>
                <center><button class="btn btn-success" name="submit"  type="submit">Update</button></center>
            </form>
        </fieldset>
        
    </div>



    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include('footer.php');?>
</body>
</html>
<?php
// Check if the form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if submit button is clicked
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];  
        $adminid = $_SESSION['aid'];
        $DateofAdmission = date('Y-m-d H:i:s'); 

        // Check if passwords match
        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords DONT match');</script>";
            exit();
        } 

        // Hash the password using password_hash (PASSWORD_BCRYPT)
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare SQL statement to update password
        $sql = "UPDATE administrator SET email = :email, uname = :uname, password = :password,
        confirmPassword = :confirmPassword, DateofAdmission = :DateofAdmission WHERE aid = :admin_id";
        $query = $conn->prepare($sql);
        
        // Bind parameters
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':uname', $uname, PDO::PARAM_STR);
        $query->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $query->bindParam(':confirmPassword', $confirmPassword, PDO::PARAM_STR); 
        $query->bindParam(':DateofAdmission', $DateofAdmission, PDO::PARAM_STR); 
        $query->bindParam(':admin_id', $adminid, PDO::PARAM_INT);

        // Execute the query
        if ($query->execute()) {
            echo "<script>alert('Profile updated successfully');</script>";
            exit();
        } else {
            echo "<script>alert('Failed to update password');</script>";
            exit();
        }
    }
}
?>

