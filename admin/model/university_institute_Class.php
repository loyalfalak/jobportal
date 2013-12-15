<?php
class university_institute{
	# Function for inserting university_institude in university_institude table	
	public function insert_university_institute($university_institute){
		$query = "INSERT INTO `university_institude`(`university_institude_details`) VALUES('$university_institute')"; 
		$result = mysql_query($query);
		if($result){
			  header('location:view_university_institute.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	# Function for select university_institude in university_institude table
	public function select_university_institute(){
		$query = "SELECT * FROM `university_institude`";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select university_institude in university_institude table
	public function select_university_institute_id($id){
		$query = "SELECT * FROM `university_institude` WHERE `university_institude_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for delete university_institude in university_institude table
	public function delete_university_institute($id){
		$query = "DELETE FROM `university_institude` WHERE `university_institude_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_university_institute.php');		 
		}else{
			die('can not delete'.mysql_error());
		}
	}
	
	# Function for update university_institude in university_institude table
	public function update_university_institute($university_institute,$id){
 		$_query = "UPDATE `university_institude` SET `university_institude_details`= '$university_institute' WHERE `university_institude_id`='$id'";
		$_result = mysql_query($_query);
		if($_result){
			header('location:view_university_institute.php');
		}else{
			die('can not insert'.mysql_error());
		}
 	}
 	
 	# Function for select university and get university name in university table
	public function get_university_name($id){
		$query = "SELECT `university` FROM `education` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['university'];
			$query2 = "SELECT `university_institude_details` FROM `university_institude` WHERE `university_institude_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['university_institude_details'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
}
?>