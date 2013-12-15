<?php
class preffered_location{
	
	public function insert_preffered_location($preffered_location){
		$query = "INSERT INTO `course_name`(`course_name_data`) VALUES('$preffered_location')"; 
		$result = mysql_query($query);
		if($result){
			  header('location:view_course_name.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	public function select_preffered_location(){
		$query = "SELECT * FROM `course_name`";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	public function select_preffered_location_id($id){
		$query = "SELECT * FROM `course_name` WHERE `course_name_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	public function delete_preffered_location($id){
		$query = "DELETE FROM `course_name` WHERE `course_name_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_course_name.php');		 
		}else{
			die('can not delete'.mysql_error());
		}
	}
	
	public function update_preffered_location($preffered_location,$id){
 		$_query = "UPDATE `course_name` SET `course_name_data`= '$preffered_location' WHERE `course_name_id`='$id'";
		$_result = mysql_query($_query);
		if($_result){
			header('location:view_course_name.php');
		}else{
			die('can not update'.mysql_error());
		}
 	}
}
?>