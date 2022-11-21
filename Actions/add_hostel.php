<script src="../js/redirect/alertRedirect.js"></script>

<?php 
//check if user is logged in and an administrator
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION['role'] != 1){
    header("location: ../Login/login.php");
    exit;
}

require_once("../Controller/hostel_controller.php");

//get name
$name = $_POST['hostel'];
//echo $name;

//check if name already exists
$check = host_selname_ctr($name);
//echo $check;

if(empty($check)){
    //add hostel exists
    if(add_hostel_ctr($name) != NULL){
        header("../Admin/");
    }
}
else{
    echo "Already Exists";
}


?>