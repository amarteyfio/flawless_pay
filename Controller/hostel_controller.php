<?php
require_once("../Classes/hostel_class.php");


//ADD HOSTEL
function add_hostel_ctr($name){
    $add = new hostel_class();
    return $add->add_hostel($name);
}

//EDIT
function edit_hostel_ctr($name,$id){
    $edit = new hostel_class();
    return $edit->edit_hostel($name,$id);
}

//DELETE
function del_hostel_ctr($id){
    $del = new hostel_class();
    return $del->del_hostel($id);
}

//SELECT HOSTEL
function select_hostel_ctr($id){
    $sel = new hostel_class();
    return $sel->select_hostel($id);
}

//SELECT BY NAME
function host_selname_ctr($name){
    $selname = new hostel_class();
    return $selname->host_namsel($name);
}
?>