<?php
//check if user is logged in and an administrator
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION['role'] != 1){
    header("location: ../Login/login.php");
    exit;
}


//include controller
include_once "../Controller/general_controller.php";
include "../Controller/hostel_controller.php";


$hostels = select_all_ctr("hostels");
$rooms = select_all_ctr("rooms");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>ROOMS</title>

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Flawless Pay</a>
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
            <a class="nav-link" aria-current="page" href="index.php">
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
            <a class="nav-link active" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Rooms
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Orders
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <div>
      <h2>Add Room</h2>
        <form method="POST" action="../Actions/add_room.php">
            <label>Room Name</label>
            <br>
            <input type="text" id="rname" name="rname" placeholder="Room name">
            <br>
            <br>
            <label>Hostel</label>
            <br>
            <select name="hostel" id="hostel">
                <?php foreach($hostels as $hostel):?>
                <option value="<?php echo $hostel['hostel_id']?>"><?php echo $hostel['hostel_name'];?></option>
                <?php endforeach;?>
            </select>
            <br>
            <br>
            <label>Room Type</label>
            <br>
            <select name="rtype" id="rtype">
                <option value="4-in-a-Room">4 in a Room</option>
                <option value="3-in-a-Room">3 in a Room</option>
                <option value="2-in-a-Room">2 in a Room</option>
                <option value="1-in-a-Room">1 in a Room</option>
            </select>
            <br>
            <br>
            <label>Room Gender</label>
            <br>
            <select name="rgender" id="rgender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>
            <br>
            <label>Price</label>
            <br>
            <input type="number" placeholder="Price" name="price" id="price">
            <br>
            <br>
            <button type="submit" name="submit" id="submit"> Add Room </button>
        </form>
      </div>
      <br>

      <h2>Rooms</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Room Name</th>
              <th scope="col">Hostel</th>
              <th scope="col">Type</th>
              <th scope="col">Room Gender</th>
              <th scope="col">Price</th>
              <th scope="col">Occupants</th>
              <th scope="col">Room Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($rooms as $room):?>
            <tr>
              <td><?php echo $room['room_id'];?></td>
              <td><?php echo $room['room_name'];?></td>
              <td><?php $room_h = select_hostel_ctr($room['hostel_id']); echo $room_h['hostel_name'];?></td>
              <td><?php echo $room['room_type'];?></td>
              <td><?php echo $room['room_gender'];?></td>
              <td><?php echo $room['room_price'];?></td>
              <td><?php echo $room['room_num'];?></td>
              <td><?php if($room['room_num'] == 0){echo "Available";}else{echo "Occupied";};?></td>
              <td><a href="?id=<?php echo $room['room_id']?>"><button>Edit</button></a></td>
              <td><a href="../Actions/delete_room.php?id=<?php echo $room['room_id']?>" onclick="return confirm('Are you sure you want to Delete? This action is irreversible')"><button>Delete</button></a></td>
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
