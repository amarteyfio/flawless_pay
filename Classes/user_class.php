<?php
set_include_path(dirname(__FILE__)."/../");
require_once("Settings/db_class.php");

/**
 * 
 *@author @amarteyfio
 * 
 */
class user_class extends db_connection{

    //ADD NEW USER
    function add_user($name,$email,$gender,$pass,$contact){
        $sql = "INSERT INTO users (user_name,user_email,user_gender,user_password,user_contact) VALUES ('$name','$email','$gender','$pass','$contact')";
        $this->db_query($sql);
    }


    //DELETE NEW USER 
    function delete_user($id){
        $sql = "DELETE FROM users WHERE user_id = $id";
        $this->db_query($sql);
    }



    //EDIT USER INFORMATION
    function update_user($id,$name,$email,$contact){
        $sql = "UPDATE users SET user_name = '$name',user_email = '$email',user_contact = '$contact' WHERE user_id = $id";
        $this->db_query($sql);
    }


    //SELECT USER BY ID
    function sel_user($id){
        $sql = "SELECT * FROM users WHERE user_id = $id";
        $record = $this->db_fetch_one($sql);
        return $record;
    }

    //SELECT USER BY EMAIL
    function sel_usermail($email){
        $sql = "SELECT * FROM users WHERE user_email = '$email'";
        $record = $this->db_fetch_one($sql);
        return $record;
    }

     //--SELECT All users--//
    public function selectAllUsers_cls(){
        //write query
        
        $selallsql = "SELECT * FROM users";

        //execute 	
        return $this -> db_fetch_all($selallsql);
    }
    


}

?>