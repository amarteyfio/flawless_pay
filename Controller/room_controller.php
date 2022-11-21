<?php
include "../Classes/room_class.php";

//ADD ROOM
function add_room_ctr($name,$hid,$type,$gender,$price,$cap){
    $add = new room_class();
    return $add->add_room($name,$hid,$type,$gender,$price,$cap);
}

//SELECT ROOM IN SPECIFIC HOSTEL
function selrooms_ctr($id,$gender){
    $sel = new room_class();
    return $sel->selrooms($id,$gender);
}

//SELECT ONE ROOM 
function select_room_ctr($id){
    $room = new room_class();
    return $room->select_room($id);
}

//DELTE ROOM
function delete_room_ctr($id){
    $del = new room_class();
    return $del->delete_room($id);
}

//
function book_ctr($id,$hid,$rid){
    $book = new room_class();
    return $book->book($id,$hid,$rid);
}

function inc_ctr($id,$qty){
    $inc = new room_class();
    return $inc->inc($id,$qty);
}

function roomstat_ctr($id,$int){
    $stat = new room_class();
    return $stat->roomstat($id,$int);
}


//new order
function add_order_ctr($cid,$invoice,$date){
    $ord = new room_class();
    return $ord->add_order($cid,$invoice,$date);
}

//new pay
function pay_ctr($amt,$cid, $orderid,$orderdate){
    $pay = new room_class();
    return $pay->pay($amt,$cid, $orderid,$orderdate);
}

function sel_order_ctr(){
    $order_id = new room_class();

    return $order_id -> sel_order();
}
?>