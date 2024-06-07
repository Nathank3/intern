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
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- ui-kit -->
     <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  <title></title>
</head>
<body>
<div class="uk-column-1-2 uk-column-divider">
    <?php include('calendar.php');?>
<!-- form -->
<center>
<h1 class="uk-heading-line uk-text-center"><span style="font-weight:700;color: darkcyan;">Set Deadline of All Applications</span></h1>
  <form method="post" action="set_deadline.php">
    <?php 
          $sql1 = "SELECT * FROM deadline ORDER BY id DESC LIMIT 1";
          $query1 = $conn->prepare($sql1);
          $query1->execute();
          $fetch = $query1->fetch();

          if  ($fetch['status'] == 0){
        ?>
<input type="date" name="deadline" id="d_date">
<?php 
            }else{
              ?>

              <h3 class="uk-heading-line uk-text-center"><a href="reset_dl.php" class="reset_dl">Click here to reset deadline</a></h3>
              <?php }
              ?>
<button type="submit" class="btn btn-primary">SET</button>

</form>
</center>
<br>
<center>
   <?php
                                        $sql = "SELECT * FROM deadline WHERE status ='1'";
                                        $query = $conn->prepare($sql);
                                        $query->execute();
                                        $fetch = $query->fetchAll();

                                        foreach ($fetch as $key => $value) { ?>
  <h1 class="uk-heading-line uk-text-center"><span>Current Deadline:
    <br><?php echo $value['d_date'];?></span></h1>
  <?php } ?>
</center>

   <!-- end of form -->
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <?php include('footer.php');?>
</body>
</html>
<!-- end -->