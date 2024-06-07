<?php include('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/uikit.min.css" />
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</head>
<style>
.uk-active:hover{
background-color: dodgerblue;
height: 50%; 
border-radius: 6px;

}
.uk-navbar-nav > li > a:hover {
background-color: #555;
height: 50%; 
border-radius: 6px;/* Change to desired hover background color */
}
</style>
<body>
<!-- start -->
<nav class="uk-navbar-container" style="background-color:darkcyan;" uk-sticky="media: 640" >
<div class="uk-container">
<div  uk-navbar>

<div class="uk-navbar-left">

<a uk-icon="home" style="background-color:white;font-weight: 700;" ></a>


<ul class="uk-navbar-nav">
<li class="uk-active"><a href="dashboard.php" style="font-weight:700;color:white;">Dashboard</a></li>
<li>
<a href="#" style="font-weight:700;color:white;">Applications<span uk-navbar-parent-icon></span></a>
<div class="uk-navbar-dropdown">
<ul class="uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-divider"> </li>
<!-- hide if past deadline -->

<?php 

// Query to get the deadline date from the deadline table
$sql2 = "SELECT d_date FROM deadline WHERE status = 1";
$query2 = $conn->prepare($sql2);
$query2->execute();
$result2 = $query2->fetch();

$today = date('Y-m-d H:i:s');
$d_date = $result2['d_date'];

// Comparing dates and status
if ($today <= $d_date) {
if ($today <= $d_date) { 
echo '<li class="uk-active"><a href="applicants.php">Internship</a></li>';
}
}
else {

echo "No Posts Now";

}
?>



<li class="uk-nav-divider"> </li>
<li class="uk-active"><a href="attachment.php">Attachment/Volunteer</a></li>
<li class="uk-nav-divider"></li>
<li class="uk-active"><a href="#">Jobs</a></li>
<li class="uk-nav-divider"> </li>
</ul>
</div>
</li>
<li><a href="announcements.php" style="font-weight:700;color:white;">Alerts</a></li>
</ul>

</div>
<div class="uk-navbar-right">

<ul class="uk-navbar-nav">
<li>
<a style="font-weight:700;color:white;">Profile <span uk-navbar-parent-icon></span></a>
<div class="uk-navbar-dropdown">
<ul class="uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-divider"> </li>
<li class="uk-active"><a href="profile.php">Profile</a></li>
<li class="uk-nav-divider"> </li>
<li class="uk-active"><a href="manage.php">Settings</a></li>

<li class="uk-nav-divider"> </li>
<li class="uk-active"><a href="logout.php">End Session</a></li>
<li class="uk-nav-divider"> </li>
</ul>
</div>
</li>
</ul>
</div>

</div>
</div>
</nav>


</body>
</html>

