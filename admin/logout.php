<?php
# Common file to include config, path and starting PHP session	
include('../include/common.php');
if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
header('location:index.php');
exit;
}
		
?>