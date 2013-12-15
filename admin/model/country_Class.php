<?php
Class Country{
	
	# Function for inserting country data in country table	
	public function insert_country($country){
		$query = "INSERT INTO `country`(`country_name`) value('$country')";
		$result = mysql_query($query);
		if($result){
			header('location:view_country.php');
		}else{
			die('can not insert'. mysql_error());
		}
	 }

	# Function for select country data in country table
	public function select_country(){
		$query = "SELECT * from `country`";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'. mysql_error());
		}
	 }

	# Function for select country data in country table
	public function select_country1($id){
		$query = "SELECT * from `country` WHERE `country_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'. mysql_error());
		}
	 }

	# Function for update country data in country table
	 public function update_country($id,$country){
 		$query = "UPDATE `country` SET `country_name`='$country' WHERE `country_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_country.php');
		}else{
			die('can not update'. mysql_error());
		}
	 }

	# Function for delete country data in country table
 	public function delete_country($id){
		$query = "DELETE From `country` WHERE `country_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_country.php');
		}else{
			die('can not delete'. mysql_error());
		}
	 }

	# Function for select country name in country table
	public function get_country_name($id){
		$query = "SELECT * from `country` WHERE `country_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['country_name']; 
		}else{
			die('can not select'. mysql_error());
		}
	 }
	
	# Function for select country and get country name in country table
	public function get_country_name_from_postjobs($pjid){
		$query = "SELECT `country` FROM `post_jobs` WHERE `pjid`='$pjid'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['country'];
			$query2 = "SELECT `country_name` FROM `country` WHERE `country_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['country_name'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
	
	# Function for select country and get country name in country table
	public function get_country_name_from_user($id){
		$query = "SELECT `country` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['country'];
			$query2 = "SELECT `country_name` FROM `country` WHERE `country_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['country_name'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
}

?>