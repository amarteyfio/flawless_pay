<?php
    include_once("../Settings/core.php");
    include_once("../../Controller/infrastructure_controller.php");
    include_once("../Controller/general_controller.php");
    include_once("../Controller/hostel_controller.php");

    // Check if the user is logged in, if not then redirect him to login page
    //if logged in check if admin, if not redirect to login page 

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["role"] == 1){ 
            //echo "Hello root";
        }

        else{ 
            echo "You are not ROOT.";
            echo '<a href="../login/login.php"">Login</a>';
        }
    }

    else{
        header("location: ../login/login.php");
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>INDEX</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

<link href="../css/bootstrap.min.css" rel="stylesheet">

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
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Flawless Pay(ADMIN)</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../Login/logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hostels.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Hostels
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rooms.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Rooms
            </a>
          </li>
          
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2>Hostels</h2>

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NAME</th>  
            </tr>
          </thead>
          <tbody>

            <?php
                $selectall= select_all_ctr("hostels");
                
                foreach ($selectall as $row) 
                :
            ?>

            <tr>
                <td><?php echo $row['hostel_id']; ?></td>
                <td><?php echo $row['hostel_name']; ?></td>
            </td>
            </tr>

            <?php endforeach;?>
          </tbody>
        </table>

        <br><br>

      <h2>Rooms</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">HOSTEL</th>
              <th scope="col">NAME</th>
              <th scope="col">TYPE</th>
              <th scope="col">Price (GHC)</th>
              <th scope="col">GENDER</th>
              <th scope="col">CAP</th>
              <th scope="col">STATUS</th>
          
            </tr>
          </thead>
          <tbody>

            <?php
                $selectal= select_all_ctr("rooms");
                
                foreach ($selectal as $row) 
                :
                
            ?>
            
            <tr>
                <td>
                    <?php 
                    $hid=$row['hostel_id'];
                    $selecthostel= select_hostel_ctr($hid);
                    echo $selecthostel['hostel_name']; 
                    
                    ?>
                </td>
                <td><?php echo $row['room_name']; ?></td>
                <td><?php echo $row['room_type']; ?></td>
                <td><?php echo $row['room_price']; ?></td>
                <td><?php echo $row['room_gender'];?></td>
                <td><?php echo $row['room_cap']; ?></td>
                <td><?php echo $row['room_status']; ?></td>
                
            
            </tr>

            <?php endforeach;?>
          </tbody>
        </table>

        <br><br>

        <!-- USERS -->
        <h2>Users</h2> 
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NAME</th>
              <th scope="col">CONTACT</th>
              <th scope="col">ROLE</th>
              <th scope="col">HOSTEL</th>        
            </tr>
          </thead>
          <tbody>

            <?php
                $selectall= selectAllUsers_ctr();
                
                foreach ($selectall as $row) 
                :
                
            ?>
            
            <tr>
                <td><?php echo $row['users_name']; ?></td>
                <td><?php echo $row['user_contact']; ?></td>
                <td><?php echo $row['user_role']; ?></td>
                <td>
                    <?php 
                    $hid=$row['hostel_id'];
                    $selecthostel= selectAHostel_ctr($hid);
                    echo $selecthostel['hostel_name']; 
                    
                    ?>
                </td>
            </tr>

            <?php endforeach;?>
          </tbody>
        </table>
        
        
      </div>
    </main>
  </div>
</div>


    <script src="../js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="../js/dashboard.js"></script>
  </body>
</html>
