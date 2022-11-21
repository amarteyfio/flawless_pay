<?php 
//include controller
set_include_path(dirname(__FILE__)."/../");
require 'Classes/user_class.php';


//ADD NEW USER
function add_user_ctr($name,$email,$gender,$pass,$contact){
    $add = new user_class();
    return $add->add_user($name,$email,$gender,$pass,$contact);
}


//DELETE NEW USER 
function delete_user_ctr($id){
    $del = new user_class();
    return $del->delete_user($id);
}



//EDIT USER INFORMATION
function update_user_ctr($id,$name,$email,$contact){
    $update = new user_class();
    return $update->update_user($id,$name,$email,$contact);
}


//SELECT USER BY ID
function sel_user_ctr($id){
    $sel = new user_class();
    return $sel->sel_user($id);
}

//SELECT USER BY EMAIL
function sel_usermail_ctr($email){
    $sel = new user_class();
    return $sel->sel_usermail($email);
}

//--SELECT All--//
function selectAllUsers_ctr(){
    $selectAItem= new user_class();

    return $selectAItem->selectAllUsers_cls();
    
}

?>