<?php
class specilization{
		
	# Function for inserting specilization in specilization table
	public function insert_specilization($specilization){
		$query = "INSERT INTO `specilization`(`specilization_details`) VALUES('$specilization')"; 
		$result = mysql_query($query);
		if($result){
			  header('location:view_specilization.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Function for select specilization in specilization table
	public function select_specilization(){
		$query = "SELECT * FROM `specilization`";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select specilization with get id in specilization table
	public function select_specilization_id($id){
		$query = "SELECT * FROM `specilization` WHERE `specilization_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for delete specilization in specilization table
	public function delete_specilization($id){
		$query = "DELETE FROM `specilization` WHERE `specilization_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_specilization.php');		 
		}else{
			die('can not delete'.mysql_error());
		}
	}
	
	# Function for update specilization in specilization table
	public function update_specilization($specilization,$id){
 		$_query = "UPDATE `specilization` SET `specilization_details`= '$specilization' WHERE `specilization_id`='$id'";
		$_result = mysql_query($_query);
		if($_result){
			header('location:view_specilization.php');
		}else{
			die('can not insert'.mysql_error());
		}
 	}
	
	# Function for select specialization and get specialization name in specialization table
	public function get_specialization_name($id){
		$query = "SELECT `specilization` FROM `education` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['specilization'];
			$query2 = "SELECT `specilization_details` FROM `specilization` WHERE `specilization_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['specilization_details'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
}


?>