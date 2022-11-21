<script src="../js/redirect/alertRedirect.js"></script>

<?php
include("../Settings/core.php");
include "../Controller/infrastructure_controller.php";

$getroomID= $_SESSION['rid'];


//collecting form data
if(ISSET($_POST['editroominfo'])){
    //get user input
    $get_editedname= $_POST['editedroomName'];
    $get_editedType= $_POST['editedroomType'];
    $get_editedGender= $_POST['editedGender'];
    $get_editedCap= $_POST['editedroomCap'];
    $get_editedPrice= $_POST['editedroomPrice'];
    //echo $getbrandID;
    //echo $get_editedbrand;
    //echo "yes";

    //update in db
    if (updateRoom_ctr($get_editedname,$get_editedType,$get_editedGender,$get_editedCap,$get_editedPrice,$getroomID) != NULL){
        //print("Record Updated.");
        echo 
        '<script type="text/javascript">
        alertRedirect_manager("Room Updated.","rooms.php");
        </script>';
    }
    else{
        echo("Record Not Updated.");
        (updateRoom_ctr($get_editedname,$get_editedType,$get_editedGender,$get_editedCap,$get_editedPrice,$getroomID)); 

    };
    //echo("Here");
    //echo $get_fname;
    //echo $get_tele; 
    //print_r($this);

    // header("Location: login.php");
    // exit();
    
}

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <!--back to index button-->
     <button type="button" onclick="location.href='../manager/rooms.php'">Return to Rooms</button>
</body>
</html>




