<script src="../js/redirect/alertRedirect.js"></script>

<?php
include_once "../Controller/infrastructure_controller.php";
include_once("../Settings/core.php");
    
//collecting form data
if(ISSET($_POST['roominfo'])){
    $get_roomname=$_POST['roomName'];
    $get_roomtype=$_POST['roomType'];
    $get_roomgender=$_POST['roomGender'];
    $get_roomCap=$_POST['roomCap'];
    $get_roomPrice= $_POST['roomPrice'];
    $get_hostelID= $_SESSION['hid'];
    

    // echo $get_roomname;
    // echo "<br>";
    // echo $get_roomtype;
    // echo "<br>";
    // echo $get_roomCap;
    // echo "<br>";
    // echo "LAST:";
    // echo $get_hostelID;
    // echo "<br>";
    // echo "Room Price:";
    // echo $get_roomPrice;

    // addRoom_ctr($get_hostelID,$get_roomname,$get_roomtype,$get_roomgender,$get_roomCap,$get_roomPrice);

    if(addRoom_ctr($get_hostelID,$get_roomname,$get_roomtype,$get_roomgender,$get_roomCap,$get_roomPrice) != NULL){
        echo '<script>alertRedirect_manager("Record Added","rooms.php")</script>';
    }
    else{
        echo("Room Not Added.");
    }

}
?>
