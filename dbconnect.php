<?php

      $connection = mysqli_connect('localhost', 'root', ''); //The Blank string is the password
      mysqli_select_db($connection, 'anzen');

      if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    ?>