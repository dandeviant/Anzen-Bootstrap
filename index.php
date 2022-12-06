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
    <?php 
      $servername = "localhost";

    ?>
    
    <div class="d-flex align-items-center justify-content-center vh-100 text-center">
        <form href="dashboard.php">
        <img src="assets/hard-drive.svg" alt="database.svg"><p style="font-size: 30px; color: white;"> Anzen NAS</p>
        <p></p>
        
        
        
        <div class="form-floating mb-3 form-control-md">
            <input type="email" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput" style="color: white;">Username</label>
        </div>

        <div class="form-floating mb-3 form-control-md">
            <input type="email" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput" style="color: white;">Password</label>
        </div>
        <a href="dashboard.php" class="btn btn-primary">
          <img class="bi pe-none me-2" src="assets/login.svg">
          Sign In</a>
        <hr style="color: white;">
        <a href="newprofile.php">Create New Profile</a><br>
        <a href="#">Reset Password</a>
      </form>
    </div>
  </body>

</html>
