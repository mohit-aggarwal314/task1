<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crud Operations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
  <br><br>
  <div class="container">
    <h2>Add New User</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" placeholder="Name" name="user_name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Enter email" name="user_email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="user_password">
      </div>
      <input type="submit" name="insert-btn" class="btn btn-primary" />
    </form>
    <p class="small fw-bold mt-2 pt-1 mb-0">Already a user? <a href="login.php"
                class="link-danger">Login</a></p>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'employee');

    if (isset($_POST['insert-btn'])) {

      $user_name = $_POST['user_name'];
      $user_email = $_POST['user_email'];
      $user_password = $_POST['user_password'];
      

      $insert = "INSERT INTO user(user_name,user_email,user_password) VALUES('$user_name','$user_email','$user_password')";

      $run_insert = mysqli_query($conn, $insert);
      if ($run_insert === true) {
        echo "Data Has Been Inserted";
        
      } else {
        echo "Failed, Ty Again";
      }


    }







    ?>





  </div>

</body>

</html>