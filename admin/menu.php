
<!-- new -->
<?php include('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/uikit.min.css" />
   <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />

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

</head>
<body>
  <!-- start -->
 
<nav class="uk-navbar-container" style="background-color:indigo; " uk-sticky="media: 640" >
    <div class="uk-container">
        <div  uk-navbar>

            <div class="uk-navbar-left">

               <a uk-icon="icon: user; ratio: 2" style="background-color:white;font-weight: 700; border-radius: 6px;"></a>


                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="dashboard.php" style="font-weight:700;color:white;">Dashboard</a></li>
                    <li>
                        <a href="#" style="font-weight:700;color:white;">Manage<span uk-navbar-parent-icon></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                              <li class="uk-nav-divider"> </li>
                      
                                <li class="uk-active"><a href="internship.php">Internships</a></li>
 
                                <li class="uk-nav-divider"> </li>
                                <li class="uk-active"><a href="attachment.php">Attachment</a></li>
                                <li class="uk-nav-divider"></li>
                                <li class="uk-active"><a href="#">Jobs</a></li>
                                <li class="uk-nav-divider"> </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="font-weight:700;color:white;">Settings<span uk-navbar-parent-icon></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                              <li class="uk-nav-divider"> </li>
                      
                                <li class="uk-active"><a href="deadline.php">Deadline</a></li>
 
                                <li class="uk-nav-divider"> </li>
                                <li class="uk-active"><a href="updates.php">Updates</a></li>
                                <li class="uk-nav-divider"></li>
                                <li class="uk-active"><a href="#"></a></li>
                                <li class="uk-nav-divider"> </li>
                            </ul>
                        </div>
                    </li>
                    
                  
                </ul>

            </div>
            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li>
                        <a style="font-weight:700;color:white;">Account <span uk-navbar-parent-icon></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                              <li class="uk-nav-divider"> </li>
                                <li class="uk-active"><a href="profile.php">Profile</a></li>                              
                                <li class="uk-nav-divider"> </li>
                                <li class="uk-active"> <a href="logout.php" >Log Out</a></li>
                                <li class="uk-nav-divider"> </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit-icons.min.js"></script>
</body>
</html>
