<?php 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Login/login.php");
    exit;

    

}

include "../Controller/room_controller.php";
//ADD ORDER
$date = date("Y-m-d");
$amt = $_GET['amt'];
$oid = $_GET['order'];
$cid = $_SESSION['id'];

$ord = add_order_ctr($cid,$oid,$date);

$order_id = sel_order_ctr();
$od = $order_id['order_id'];

if($ord){
  pay_ctr($amt,$cid,$od,$date);
}
else{
  echo "Something Went Wrong";
}

$rid = $_GET['rid'];//$_SESSION['rid'];
$hostel = $_GET['hid'];//$_SESSION['rid']
//select room
$room = select_room_ctr($rid);

//check if room is free
if($room['room_num'] != $room['room_cap']){
    $num = intval($room['room_num']);
    $num = $num + 1;

    book_ctr($_SESSION['id'],$hostel,$rid);
    inc_ctr($rid,$num);
    $_SESSION['booked'] = true;

    //check if full again
    $room = select_room_ctr($rid);
    if($room['room_num'] == $room['room_cap']){
        roomstat_ctr($rid,1);
    }

    header("Location: ../view/payment_success.php");
}
else{
    header("Location: ../Error/room_full.php");
}


?>

