<?php
    // Initialize the session
    //session_start();
    include("../Settings/core.php");
    include("../Controller/infrastructure_controller.php");

    // Check if the user is logged in, if not then redirect him to login page
    //if logged in check if admin, if not redirect to login page 

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["role"] == 2){ 
            //echo "Hello ADMIN";
            $role="ADMIN";
            $_SESSION['rid']= $_GET['rid'];
            $getroomID= $_SESSION['rid'];
            $hostelid=$_SESSION['hid'];
        }

        else{ 
            echo "You are not ADMIN.";
            //$role="User";
            //echo '<a href="l../login/login.php"">Login</a>';
        }
    }

    else{
        header("location: ../Login/login.php");
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <h1>EDIT Room <small><?php echo $role ?></small></h1>
    <form action= "../manager_actions/update_room.php" method="POST">

            <!--make Room name text box--> 
            <h5>Room Name</h5>
            <textarea type="text" name="editedroomName" id="adminRoom" cols="40" rows="5" 
            required><?php 
                $selectone=selectARoom_ctr($getroomID); 
                if ($selectone == NULL){
                print ("Doesnt exist.");
                }
                else{
                    print $selectone['room_name'];
                }
            ?>
            </textarea>

            <!--make Room name text box--> 
            <h5>Room Type</h5>
            <textarea type="text" name="editedroomType" id="adminRoomType" cols="40" rows="5"
            required><?php 
                $selectone=selectARoom_ctr($getroomID); 
                if ($selectone == NULL){
                print ("Doesnt exist.");
                }
                else{
                    print $selectone['room_type'];
                }
            ?></textarea>
     

            <!-- dropdown menu of Gender -->
            <h4><label for="editedGender">Choose a Gender:</label></h4>


            <!--  -->
            <select name="editedGender" id="editedroomGender">
            <option selected='selected'>--</option>
            <option value="female">Female</option>
            <option value="male">Male</option> 
            </select>

            <!--make Room name text box--> 
            <h5>Room Cap</h5>
            <textarea type="text" name="editedroomCap" id="adminRoomCap" cols="10" rows="1"
            required><?php 
                $selectone=selectARoom_ctr($getroomID); 
                if ($selectone == NULL){
                print ("Doesnt exist.");
                }
                else{
                    print $selectone['room_cap'];
                }
            ?>
            </textarea>

            <!--make Room name text box--> 
            <h5>Room Price</h5>
            <textarea type="text" name="editedroomPrice" id="adminRoomPrice" cols="10" rows="1"
            required><?php 
                $selectone=selectARoom_ctr($getroomID); 
                if ($selectone == NULL){
                print ("Doesnt exist.");
                }
                else{
                    print $selectone['room_price'];
                }
            ?>
            </textarea>

            <br>
            <br>
            <!--submit button-->
            <input type="submit" name="editroominfo" id="edit_roominfo" value="Edit"> 
        </form>

<br>
<br>
 
</body>
</html>