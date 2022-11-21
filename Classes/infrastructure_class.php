<?php
//connect to database class
require_once("../Settings/db_class.php");

/**
*General class to handle all infrastructure(hostels and rooms) functions 
*/
/**
 *@author Paa Kwesi Addae
 *
 */

class infrastructure_class extends db_connection{

    //--INSERT HOSTEL--//
	public function addHostel_cls($hostel_name,$hostel_slogan,$hosteldescription){
		//write query
		
		$insertsql = "INSERT INTO hostels(hostel_name,hostel_slogan,hostel_description) VALUES ('$hostel_name','$hostel_slogan','$hosteldescription')";
        
		//execute 	
		return $this -> db_query($insertsql);
	}

	//--SELECT All HOSTELS--//
	public function selectAllHostels_cls(){
		//write query
		
		$selallsql = "SELECT * FROM hostels";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT A HOSTEL--//
	public function selectAHostel_cls($hostelid){
		//write query
		
		$selsql = "SELECT * FROM hostels WHERE hostel_id= '$hostelid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-update HOSTEL--//
	public function updateHostel_cls($hostelname,$hostelslogan,$hosteldescription,$hostelid){
		//write query
		
		$updatesql = " UPDATE hostels SET hostel_name='$hostelname', hostel_slogan='$hostelslogan', hostel_description='$hosteldescription' WHERE hostel_id= '$hostelid' ";
		
		//execute 	
		//print $updatesql;
		return $this -> db_query($updatesql);
	}
	
	//-update HOSTEL name--//
	public function updateHostelName_cls($hostelname,$hostelid){
		//write query
		
		$updatesql = " UPDATE hostels SET hostel_name='$hostelname' WHERE hostel_id= '$hostelid' ";
		
		//execute 	
		//print $updatesql;
		return $this -> db_query($updatesql);
	}	

	//-search HOSTEL--//
	public function searchHostel_cls($search_term){
		//write query
		
		$searchsql = " SELECT * FROM hostels WHERE hostel_name LIKE '%$search_term%' ";
		
		//execute 	
		//print $searchsql;
		return $this -> db_fetch_all($searchsql);
	}	
	
	//**DELETE HOSTEL */
	public function deleteAHostel_cls($hostelid){
		//write query
		
		$delsql = "DELETE FROM hostels WHERE hostel_id= '$hostelid'";

		//execute 	
		return $this -> db_query($delsql);
	}

	/* 
	ROOMS
	*/

	//-INSERT room--//
	public function addRoom_cls($hostelid,$roomname,$roomtype,$roomgender,$roomcap,$roomPrice){
		//write query
		$roomstatus=0;
		$insertsql = "INSERT INTO rooms(hostel_id,room_name,room_type,room_gender,room_cap,room_status,room_price) VALUES ('$hostelid','$roomname','$roomtype','$roomgender','$roomcap','$roomstatus','$roomPrice')";
        
		//execute 	
		//print $insertsql;
		$this -> db_query($insertsql);
		return($this);
	}
	
	//-update ROOM--//
	public function updateRoom_cls($editedname,$editedtype,$editedgender,$editedcap,$editedprice,$roomid){

		//write query
		$updatesql = " UPDATE rooms SET room_name='$editedname',room_type='$editedtype',
		room_gender='$editedgender',
		room_cap='$editedcap', 
		room_price= '$editedprice' WHERE room_id= '$roomid' ";
        
		//execute 	
		//print $updatesql;
		return $this -> db_query($updatesql);
		//var_dump ($this);
	}	

	//--SELECT All--//
	public function selectAllRooms_cls(){
		//write query
		
		$selallsql = "SELECT * FROM rooms";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT--//
	public function selectHostelRooms_cls($hostelid){
		//write query
		
		$selsql = "SELECT * FROM rooms WHERE hostel_id= '$hostelid'";

		//execute 	
		return $this -> db_fetch_all($selsql);
	}

	//--SELECT A ROOM--//
	public function selectARoom_cls($roomid){
		//write query
		
		$selsql = "SELECT * FROM rooms WHERE room_id= '$roomid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//**DELETE ROOM */
	public function deleteARoom_cls($roomid){
		//write query
		
		$delsql = "DELETE FROM rooms WHERE room_id= '$roomid'";

		//execute 	
		return $this -> db_query($delsql);
	}
}
?>