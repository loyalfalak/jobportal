<?php
# Common file to include config, path and starting PHP session
include('include/common.php');
		
session_regenerate_id();  
session_unset();
session_destroy();
header('location:index.php');

?>