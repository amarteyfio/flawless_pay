<?php
/**
 * @author Amarteyfio
 * @version 1.0
 * This class contains general functions for database operations
 */

//require db_class
include_once("../Settings/db_class.php");

class room_class extends db_connection{
    
    //--ADD ROOM--//
    function add_room($name,$hid,$type,$gender,$price,$cap){
        $sql = "INSERT INTO rooms (hostel_id,room_name,room_type,room_gender,room_price,room_cap) VALUES ('$hid','$name','$type','$gender','$price','$cap')";
        $this->db_query($sql);
    }



    //--SELECT ONE ROOM--//
    function select_room($id){
        $sql = "SELECT * FROM rooms WHERE room_id = $id";
        $record = $this->db_fetch_one($sql);
        return $record;
    }



    //--DELETE ROOM--//



    //SELECT AVAILABLE ROOMS
    function selrooms($id,$gender){
        $sql = "SELECT * FROM rooms WHERE hostel_id = '$id' AND room_gender = '$gender' AND  room_status = 0";
        $records = $this->db_fetch_all($sql);
        return $records;
    }


    //DELETE CLASS
    function delete_room($id){
        $sql = "DELETE FROM rooms WHERE room_id = $id";
        return $this->db_query($sql);
    }
    

    //BOOK ROOM
    function book($id,$hid,$rid){
        $sql = "UPDATE users SET hostel_id = $hid,room_id = $rid WHERE user_id = $id";
        return $this->db_query($sql);
    }

    //increase room quantity
    function inc($id,$num){
        $sql = "UPDATE rooms SET room_num = $num WHERE room_id = $id";
        return $this->db_query($sql);

    }

    //order
    function add_order($cid,$invoice,$date){
        $sql = "INSERT INTO orders (user_id,invoice_no,order_date) VALUES ('$cid','$invoice','$date')";
        return $this->db_query($sql);
    }

    //set room status
    function roomstat($id,$int){
        $sql = "UPDATE rooms SET room_status = $int WHERE room_id = $id";
        return $this->db_query($sql);
    }

    //new pay
    function pay($amt,$cid, $orderid,$orderdate){
        $sql = "INSERT INTO payment (amount,user_id,order_id,payment_date) VALUES ('$amt','$cid','$orderid','$orderdate')";
        return $this->db_query($sql);
    }

    function sel_order(){
        $sql = "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1";
            
        return $this -> db_fetch_one($sql);
    }

    
}
?>