<?php
//connect to the user account class
include_once("../classes/infrastructure_class.php");

/*
ROOMS 
*/

//--INSERT ROOM ctr--//
function addRoom_ctr($hostelID,$roomName,$roomType,$roomGender,$roomCap,$roomPrice){
    $addItem= new infrastructure_class();

    $addItem->addRoom_cls($hostelID,$roomName,$roomType,$roomGender,$roomCap,$roomPrice);
    return $addItem;
}

//--SELECT ALL ROOMS--//
function selectAllRooms_ctr(){
    $selectAll= new infrastructure_class();

    return $selectAll->selectAllRooms_cls();
    
}

//--SELECT A ROOMS--//
function selectARoom_ctr($roomID){
    $selectAll= new infrastructure_class();

    return $selectAll->selectARoom_cls($roomID);
    
}

//--SELECT--//
function selectHostelRooms_ctr($hostelID){
    $selectAProduct= new infrastructure_class();

    return $selectAProduct->selectHostelRooms_cls($hostelID);
    
}

//--update ROOM ctr--//
function updateRoom_ctr($editedName,$editedType,$editedGender,$editedCap,$editedPrice,$roomID){
    $updateItem= new infrastructure_class();

    return $updateItem->updateRoom_cls($editedName,$editedType,$editedGender,$editedCap,$editedPrice,$roomID);
}

//--delete ROOM ctr--//
function deleteRoom_ctr($roomID){
    $updateItem= new infrastructure_class();

    return $updateItem->deleteARoom_cls($roomID);
}


/*  
HOSTELS
*/

//--INSERT hostel ctr--//
function addHostel_ctr($hostel_Name,$hostel_Slogan,$hostel_Description){
    $addItem= new infrastructure_class();

    return $addItem->addHostel_cls($hostel_Name,$hostel_Slogan,$hostel_Description);
}

//--update hostel ctr--//
function updateHostel_ctr($editedname,$editedslogan,$editedDescription,$hostelID){
    $updateItem= new infrastructure_class();

    return $updateItem->updateHostel_cls($editedname,$editedslogan,$editedDescription,$hostelID);
}

//--update hostel name ctr--//
function updateHostelName_ctr($editedname,$hostelID){
    $updateItem= new infrastructure_class();

    return $updateItem->updateHostelName_cls($editedname,$hostelID);
}

//--SELECT ALL--//
function selectAllHostels_ctr(){
    $selectAll= new infrastructure_class();

    return $selectAll->selectAllHostels_cls();
    
}

//--SELECT--//
function selectAHostel_ctr($hostelid){
    $selectAll= new infrastructure_class();

    return ($selectAll->selectAHostel_cls($hostelid));
    //var_dump($selectAll);
    
}

//--search HOSTEL ctr--//
function searchHostel_ctr($searchostel_term){
    $searchItem= new infrastructure_class();

    return $searchItem->searchHostel_cls($searchostel_term);
}

//--delete Hostel ctr--//
function deleteHostel_ctr($hostelID){
    $updateItem= new infrastructure_class();

    return $updateItem->deleteAHostel_cls($hostelID);
}

?>