<script src="../js/redirect/alertRedirect.js"></script>

<?php
include("../Settings/core.php");
include "../Controller/infrastructure_controller.php";

$gethostelID= $_SESSION['id'];


//collecting form data
if(ISSET($_POST['edithostelinfo'])){
    //get user input
    $get_editedhostel= $_POST['editedhostel'];
    $get_editedslogan= $_POST['editedhostelslogan'];
    $get_editeddescription= $_POST['editedhosteldescription'];
    //echo $getbrandID;
    //echo $get_editedbrand;
    //echo "yes";

    //update in db
    if (updateHostel_ctr($get_editedhostel,$get_editedslogan,$get_editeddescription,$gethostelID) != NULL){
        //print("Record Updated.");
        echo 
        '<script type="text/javascript">
        alertRedirect_root("Hostel Updated.","hostels.php");
        </script>';
    }
    else{
        print("Record Not Updated.");
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
     <button type="button" onclick="location.href='../root/hostels.php'">Return to Hostel</button>
</body>
</html>




