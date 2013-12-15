<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');
  
if(isset($_SESSION['admin'])){
  # Include Class file	
  include(ADVIEW .'login.php');
}else{
 header('location:index.php');
 exit;
}

?>