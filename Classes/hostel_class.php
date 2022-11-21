<?php

include_once("../Settings/db_class.php");


class hostel_class extends db_connection{

    //ADD HOSTEL
    function add_hostel($name){
        $sql = "INSERT INTO hostels (hostel_name) VALUES ('$name')";
        $this->db_query($sql);
    }

    //EDIT
    function edit_hostel($name,$id){
        $sql = "UPDATE hostels SET hostel_name = '$name' WHERE hostel_id = $id";
        $this->db_query($sql);
    }

    //DELETE
    function del_hostel($id){
        $sql = "DELETE FROM hostels WHERE hostel_id = $id";
        $this->db_query($sql);
    }

    //SELECT HOSTEL
    function select_hostel($id){
        $sql = "SELECT * FROM hostels WHERE hostel_id = $id";
        $record = $this->db_fetch_one($sql);
        return $record;
    }

    //SELECT HOSTEL BY NAME
    function host_namsel($name){
        $sql = "SELECT * FROM hostels WHERE hostel_name = '$name'";
        $record = $this->db_fetch_one($sql);
        return $record;
    }



}

?>