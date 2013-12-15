<?php

include('../include/common.php');
include(MODEL .'logo_Class.php');

$objlogo = new logo();

$id = $_REQUEST['id'];
$objlogo ->delete_logo($id);
		
?>