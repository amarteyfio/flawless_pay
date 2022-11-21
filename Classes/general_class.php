<?php
/**
 * @author Amarteyfio
 * @version 1.0
 * This class contains general functions for database operations
 */

//require db_class
include_once("../Settings/db_class.php");

class general_class extends db_connection{
    
    //--SELECT ALL--//
    function select_all($table){
        $sql = "SELECT * FROM $table";
        $records = $this->db_fetch_all($sql);
        return $records;
    }
}

?>