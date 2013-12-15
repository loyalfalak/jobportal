<?php
class functionn{
	# Function for insert function in function table
	public function insert_function($function){
		$query = "INSERT INTO `function`(`function`) VALUES('$function')"; 
		$result = mysql_query($query);
		if($result){
			  header('location:view_function.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Function for select function in function table
	public function select_function(){
		$query = "SELECT * FROM `function`";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select function in function table
	public function select_function_id($id){
		$query = "SELECT * FROM `function` WHERE `function_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update function in function table
	public function update_function($function,$id){
 		$_query = "UPDATE `function` SET `function`= '$function' WHERE `function_id`='$id'";
		$_result = mysql_query($_query);
		if($_result){
			header('location:view_function.php');
		}else{
			die('can not insert'.mysql_error());
		}
 	}
	
	# Function for delete function in function table
	public function delete_function($id){
		$query = "DELETE FROM `function` WHERE `function_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_function.php');		 
		}else{
			die('can not delete'.mysql_error());
		}
	}
	
	# Function for select function and get function name in function table
	public function get_function($id){
		$query = "SELECT * FROM `function` WHERE `function_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['function'];			 
		}else{
			die('can not select'.mysql_error());
		}
	}

	# Function for select industry and get industry name in industry table
	public function get_function_name_from_postjobs($pjid){
		$query = "SELECT `function` FROM `post_jobs` WHERE `pjid`='$pjid'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['function'];
			$query2 = "SELECT `function` FROM `function` WHERE `function_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['function'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
}
?>