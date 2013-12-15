<?php
# Create Class
class pages{

	# Select Pages For Function 	
	public function select_pages($id){
		$query = "SELECT * FROM `epages` WHERE `pageid`=$id";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	  
}
?>	