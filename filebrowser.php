<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>File Browser - Anzen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">

    

    

<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" fill="blue">
        <svg width="40" height="24" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16">
            <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313ZM13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 5.698ZM14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13V4Zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 8.698Zm0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525Z"/>
        </svg>
        <span class="fs-4">Anzen&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</span>
    </a>
    <hr>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <a href="dashboard.php">
        <button class="btn btn-primary" type="submit">
          <img class="bi pe-none me-2" src="assets/layout.svg">
          Dashboard
        </button>
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
      </ul>
      <a href="index.php">
        <button class="btn btn-danger" type="submit" fill="red">
          <img class="bi pe-none me-2" src="assets/logout.svg">
          Sign Out
        </button>
      </a>
    </div>
  </div>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-1 d-md-block sidebar collapse" style="background-color: #02355e;">
      <div class="position-fixed pt-3 sidebar-sticky">
        <hr>
      </div>
    </nav>
  
      <main class="col-md-9 ms-sm-auto col-lg-11 px-md-4" height="100%">
        <canvas class="my-4 w-100" id="myChart" width="200" height="5"></canvas>
        Current Directory: 
        <?php
          echo getcwd()."\n";
        ?>
        <br><br>
        
        <table style="border: 1px solid black; width: 100;">
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">
                  <div class="input-group mb-3">
                      <a href="#upload">
                      <button class="btn btn-primary" type="submit">
                      <img class="bi pe-none me-2" src="assets/layout.svg">
                      Upload
                      </button>
                      </a>
                  </div>  
                </th>
                <th scope="col">
                  <div class="input-group mb-3">
                    <a href="#newfolder">
                      <div class="input-group-prepend">
                        <button class="btn btn-primary" type="submit">
                          <img class="bi pe-none me-2" src="assets/folder-plus.svg">
                          New Folder
                        </button>
                      </div>
                    </a>
                    <input type="text" class="form-control">
                  </div>
                </th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
              <tr>
                <th scope="col">File Name</th>
                <th scope="col">md5</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                  <a href="#above">One Folder Up</a>
                </td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            <?php
              if ($handle = opendir('.'))
                {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            echo "<tr>";
                            echo "<td>";
                            echo "$entry\n";
                            echo "</td>";
                            echo "<td>";
                            if(is_dir($entry)){
                              echo '<a href="'.chdir($entry).'">Navigate</a>';
                              echo "</td>";
                              echo "<td>";
                              echo "</td>";
                              echo "<td>";
                              echo "</td>";
                              echo "<tr/>";
                            }    
                            else {
                              echo md5($entry);
                              echo "</td>";
                              echo "<td>";
                              echo '<a href="#download"><img class="bi pe-none me-2" src="assets/download-cloud.svg"></a>';
                              echo "</td>";
                              echo "<td>";
                              echo '<img class="bi pe-none me-2" src="assets/trash-2.svg"></a>';
                              echo "</td>";
                              echo "<tr/>";
                            }
                              
                        }
                    }

                    closedir($handle);
                }
            ?>
            </tbody>
          </table>
        </div>
        <canvas class="my-4 w-100" id="myChart" width="300" height="300"></canvas>
      </main>
  </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script> 
  </body>
</html>
