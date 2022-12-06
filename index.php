<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome - Anzen NAS System</title>

    <style>
        .form{
            background-color: #636363;
            color: white;
        }

        .form-control{
          background-color: #636363;
          color: white;
        }

        .form-control:focus{
          background-color: #636363;
          color: white;
        }

    </style>

    


  </head>
  <body style="background-color: #3c3d3c;">
    
    <!-- vh-100 here-->
    
    <div class="d-flex align-items-center justify-content-center vh-100 text-center">
        <form method="POST" action="">
          <img src="assets/hard-drive.svg" alt="database.svg"><p style="font-size: 30px; color: white;"> Anzen NAS</p>
          <p></p>
        
        
        
          <div class="form-floating mb-3 form-control-md">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              <label for="floatingInput" style="color: white;" id="username">Username</label>
          </div>

          <div class="form-floating mb-3 form-control-md">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <label for="floatingInput" style="color: white;" id="password">Password</label>
          </div>
          <button type="submit" class="btn btn-primary"><img class="bi pe-none me-2" src="assets/login.svg">Sign In</button>
          <hr style="color: white;">
        <a href="newprofile.php">Create New Profile</a><br>
        <a href="#">Reset Password</a>
      </form>
    </div>
    
    <?php

      include "dbconnect.php";
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = "SELECT * FROM user WHERE user_name='$username' and user_password='$password' ";
      $result = mysqli_query($connection, $query);
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      if(isset($data)) 
      {
        header('location: dashboard.php');
      }
      else
      {
          echo "<p style='font-size: 30px; color: red;'> User not found</p>";
      }
    ?>
  </body>

</html>
