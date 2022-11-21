<script src="../js/redirect/alertRedirect.js"></script>

<?php
include "../Controller/infrastructure_controller.php";
    
//collecting form data
if(ISSET($_POST['hostelinfo'])){
    
    $get_hostel= $_POST['hostel'];
    $get_hostelslogan= $_POST['hostelslogan'];
    $get_hosteldescription= $_POST['hosteldescription'];

    if(addHostel_ctr($get_hostel,$get_hostelslogan,$get_hosteldescription) != NULL){
        echo '<script>alertRedirect_root("Record Added","hostels.php")</script>';
    }
    else{
        echo("Hostel Not Added.");
    }

}
?>
