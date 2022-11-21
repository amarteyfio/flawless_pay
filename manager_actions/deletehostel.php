<script src="../js/redirect/alertRedirect.js"></script>

<?php 
include("../Settings/core.php");
include("../Controller/infrastructure_controller.php");

$gethostelID=$_GET['id'];

//echo $gethostelID;

if (deleteHostel_ctr($gethostelID)){
    echo '<script type="text/javascript">
    alertRedirect_root("Hostel Deleted Successfully.","hostels.php");
    </script>';
}
else{
    echo 'NOT DELETED.';
}
?>