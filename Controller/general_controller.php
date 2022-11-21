<?php
/**
 * @author Philip Amarteyfio
 * 
 * @version 1.0
 * 
 */


//require the general class
require('../Classes/general_class.php');


//--SELECT ALL CONTROLLER--//
function select_all_ctr($table){
    $recs = new general_class();
    return $recs->select_all($table);
}
?>