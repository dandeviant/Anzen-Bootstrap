<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.104.2">
      <title>Profile - Anzen</title>
  </head>
    
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.000rem;
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
    <link href="css/sidebars.css" rel="stylesheet">
  </head>
  <body>  

<main class="d-flex flex-nowrap">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 200px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <img src="assets/hard-drive.svg" alt="database.svg">
      <span class="fs-4">&nbsp;&nbsp;Anzen </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="filebrowser.php">
          <button class="btn btn-secondary" type="submit">
            <img class="bi pe-none me-2" src="assets/home.svg">
            File Browser
          </button>
        </a>
      </li>
      <hr>
      <li>
        <a href="dashboard.php" class="nav-link text-white">
          <img class="bi pe-none me-2" src="assets/layout.svg">
          Dashboard
        </a>
      </li>
      <li>
        <a href="profile.php" class="nav-link active">
          <img class="bi pe-none me-2" src="assets/user.svg">
          Profile 
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="bi pe-none me-2" src="assets/user.svg">
        <strong>Daniel</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li>
          <a class="dropdown-item" href="index.php">
            <img class="bi pe-none me-2" src="assets/logout.svg">
            Sign out
          </a>
        </li>
      </ul>
    </div>
  </div>

  
</main>


    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="js/sidebars.js"></script>
  </body>
</html>
