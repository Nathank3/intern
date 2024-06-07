<?php
include('session.php');
include('connect.php');
include 'menu.php';
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Alerts</title>
</head>
<body>
<h4 class="uk-heading-line uk-text-center"><span style="color:dodgerblue;">Latest Alerts to all Applicants</span></h4>
<table class="table table-bordered border-primary">
<thead>
<tr>
<th scope="col">No.</th>
<th scope="col">Announcement</th>
<th scope="col">Date Posted</th>

</tr>
</thead>
<tbody>
<tr>
<?php

$sql = "SELECT * FROM updates ORDER BY DATE DESC";

$query = $conn->prepare($sql);
$query->execute();
$fetch = $query->fetchAll();
$i=1;
foreach ($fetch as $key => $value) { ?>
<td><?php echo $i++ ?></td>
<td><?php echo $value ['posts']?></td>
<td><?php echo $value ['Date']?></td>

</tr>
<?php } ?>
</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit-icons.min.js"></script>

<h1 class="uk-heading-divider"></h1>
</body>
</html>
<?php include 'footer.php'; ?>