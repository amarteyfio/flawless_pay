<?php 
//check if user is logged in and an administrator
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Login/login.php");
    exit;
}
 include "../Controller/room_controller.php";

 if(isset($_POST['submit'])){
        $name = $_POST['rname'];
        $hostel = $_POST['hostel'];
        $type = $_POST['rtype'];
        $gender = $_POST['rgender'];
        $price = $_POST['price'];

        $cap = 0;

        if($type == "4-in-a-Room"){
                $cap = 4;
        }
        elseif($type == "3-in-a-Room"){
                $cap = 3;
        }
        elseif($type == "2-in-a-Room"){
                $cap = 2;
        }
        elseif($type == "1-in-a-Room"){
                $cap = 1;
        }


        add_room_ctr($name,$hostel,$type,$gender,$price,$cap);
                header("Location: ../Admin/rooms.php");
        
 }


?>