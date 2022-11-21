<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Login/login.php");
    exit;
}


if(isset($_SESSION['booked'])){
//Call controller to select all rooms in dufie
include "../Controller/user_controller.php";
include "../Controller/room_controller.php";
include "../Controller/hostel_controller.php";

//select user
$user = sel_user_ctr($_SESSION['id']);

$room = select_room_ctr($user['room_id']);

$h = select_hostel_ctr($room['hostel_id']);

$message;

if($room['hostel_id'] == 1 ){
    $message = "Hosanna is located 4km away from campus. Opposite Dufie.Closest Restaurants are Dzidels, Chopbox, Aunty Caro Special";
}
elseif($room['hostel_id'] == 2 ){
    $message = "Dufie is located 4km away from campus. Opposite Hosanna. Closest Restaurants are Dzidels, Chopbox, Aunty Caro Special" ;
}
elseif($room['hostel_id'] == 3 ){
    $message = "Charlotte is located 10000km away from campus. Opposite Queenstar.Closest Restaurants are La Belle, Chopbox, Nektar";
}
elseif($room['hostel_id'] == 4 ){
    $message = "Masere is located 15km away from campus. Opposite Chopbox";
}
elseif($room['hostel_id'] == 5 ){
    $message = "Tanko is located 4km away from campus.Closest Restaurants are Dzidels, Chopbox, Aunty Caro Special";
}




echo'

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Jumbotron example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">

    

    

<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        background-color: rgb(255, 255, 255);
      }

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

    
  </head>
  <body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
        
        <span class="fs-4">FlawlessPay</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Hostel:'.$h["hostel_name"].' </h1>
        <p class="col-md-8 fs-4">'.$message.'</p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>Room:'.$room["room_name"].'</h2>
          <p>Please Be Respectful to your Roomates</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Occupancy</h2>
          <p>The room currently has '.$room["room_num"].' Occupants</p>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2022
    </footer>
  </div>
</main>


    
  </body>
</html>

';
}
else{
    echo "You have not booked a room!";
}
?>