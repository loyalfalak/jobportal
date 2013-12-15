<?php
# This is a common file which we will call in every file

# Starting PHP session
session_start();

# Inclding configuration file for Database connection
include("configuration.php");

# Path file to creating PATH constnat.
include("path.php");
?>