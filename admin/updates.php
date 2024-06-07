<?php
include('session.php');
include('connect.php');
include('menu.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ui-kit -->
     <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <title>updates</title>
    <style>
        body {
            background: #F0F0F0;
        }

        h2 {
            margin-left: 55px;
            text-align: center; /* Center the heading text */
        }

        form {
            text-align: center; /* Center the form content */
        }

        textarea {
            margin-top: 10px;
            width: 500px;
            height: 200px; /* Adjust the height as needed */
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
            border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
            border-image: none;
            border-radius: 6px 6px 6px 6px;
            border-style: none solid solid none;
            border-width: medium 1px 1px medium;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
            color: #555555;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 1em;
            line-height: 1.4em;
            padding: 5px 8px;
            transition: background-color 0.2s ease 0s;
        }

        textarea:focus {
            background: none repeat scroll 0 0 #FFFFFF;
            outline-width: 0;
        }

        .btn-submit {
            margin-top: 10px;
        }
    </style>
  </head>
  <body>
    <h1 class="uk-heading-line uk-text-center"><span style="font-weight:700;color: darkcyan;">Create Alert Now</span></h1>
     <form action="Updates.php" method="POST">
        <textarea placeholder="Type your Updates, announcements, or posts here" rows="20" name="posts" id="comment_text" cols="40" class="ui-autocomplete-input" required role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>
        <br>
        <button type="submit" class="btn btn-success btn-submit">SUBMIT ALERT</button>
    </form>
    
<br>
    <!-- table -->
    <table class="table table-bordered" style="border-color:teal;">
        <tr style="font-weight:700;text-align: center;">
                    <th>No</th>
                    <th>Date Posted</th>
                    <th>Posts</th>
                    <th>Action</th>
        </tr>

         <tbody style="text-align:center;">
                <?php
                $sql = "SELECT * FROM updates ORDER BY DATE DESC";
                $query = $conn->prepare($sql);
                $query->execute();
                $fetch = $query->fetchAll();
                $j=1;

                foreach ($fetch as $key => $value) { ?>
                    <tr>
                        <td><?php echo $j++ ?></td>
                        <td><?php echo $value['Date'] ?></td>
                        <td><?php echo $value['posts'] ?></td>
                        
                        <td>
                            <form action="delete_post.php" method="post">
                        <input type="hidden" name="delete_post" value="<?php echo $value['uid']; ?>">
                        <button type="submit"class="btn btn-danger">Delete Post</button>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

   </table>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <?php include 'footer.php'; ?>
  </body>
</html>
<!-- end -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the entered post from the form
    $posts = $_POST['posts'];

    $stmt = $conn->prepare("INSERT INTO updates (posts) VALUES (?)");
    $stmt->bindParam(1, $posts);
    
    if ($stmt->execute()) {
        echo '<script>
                Swal.fire({
                    title: "Congratulations!",
                    text: " Post Updated.",
                    icon: "success",
                    confirmButtonText: "OK"
                });
              </script>';
    } else {
        echo '<script>
                Swal.fire({
                    title: "Error!",
                    text: "Error in Posting.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
              </script>';
    }
}

 ?>