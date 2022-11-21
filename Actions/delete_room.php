<?php 
//check if user is logged in and an administrator
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION['role'] != 1){
    header("location: ../Login/login.php");
    exit;
}
include("../Controller/room_controller.php");

//get id
$id = $_GET['id'];

//delete
delete_room_ctr($id);

header("Location: ../Admin/rooms.php");
?>