<script src="../js/redirect/alertRedirect.js"></script>

<?php 
include("../Settings/core.php");
include("../Controller/infrastructure_controller.php");

$getroomID=$_GET['rid'];

// echo $getroomID;

if (deleteRoom_ctr($getroomID)){
    echo '<script type="text/javascript">
    alertRedirect_manager("Room Deleted Successfully.","rooms.php");
    </script>';
}
else{
    echo 'NOT DELETED.';
}
?>