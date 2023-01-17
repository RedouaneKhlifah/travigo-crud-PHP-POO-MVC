<?php 
include_once "../controller/delete-class.php";
include_once "../controller/add-tour_class.php";

$tour = new tour;
$tour->session();

$delete  = new delete;
$delete->getId($_GET);

?>