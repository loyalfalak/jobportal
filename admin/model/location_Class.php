<?php
Class location{
	# Function for insert location data in location table	
	public function insert_location($country,$location){
 		$query = "INSERT INTO `location`(`country_id`,`location_name`) value('$country','$location')";
		$result = mysql_query($query);
		if($result){
			header('location:view_location.php');
		}else{
			die('can not insert'. mysql_error());
		}
	 }

	# Function for select location data in location table
	public function select_location(){
		$query = "SELECT * from `location`";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'. mysql_error());
		}
	 }
	
	# Function for select location data in location table
	public function select_location1($id){
		$query = "SELECT * from `location` WHERE `location_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'. mysql_error());
		}
	 }

	# Function for select country name in country table
	public function get_country_name($id){
		$query = "SELECT * from `country` WHERE `country_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
	  		echo  $row['country_name'];
		}else{
			die('can not select'. mysql_error());
		}
	  }
 	
	# Function for select country name in country table
	public function select_country1($id){
		$query = "SELECT * from `country` where country_id='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'. mysql_error());
		}
	 }	

	# Function for select country 
	public function select_country(){
		$query = "SELECT * from `country`";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'. mysql_error());
		}
	 }

	# Function for update location  in location table
	public function update_location($id,$country,$location){
 		$query = "UPDATE `location` SET `country_id`='$country',`location_name`='$location' WHERE `location_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_location.php');
		}else{
			die('can not update'. mysql_error());
		}
	 }

	# Function for delete location in location table
	public function delete_location($id){
		$query = "DELETE FROM `location` WHERE `location_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_location.php');
		}else{
			die('can not delete'. mysql_error());
		}
 	}
	
	# Function for select country name in country table
	public function get_location_name($id){
		$query = "SELECT * from `location` WHERE `location_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
	  		echo  $row['location_name'];
		}else{
			die('can not select'. mysql_error());
		}
	  }
	
	# Function for select location and get location name in location table
	public function get_location_name_from_postjobs($pjid){
		$query = "SELECT `location` FROM `post_jobs` WHERE `pjid`='$pjid'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['location'];
			$query2 = "SELECT `location_name` FROM `location` WHERE `location_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['location_name'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}

	# Function for select location and get location name in location table
	public function get_employe_location($id){
		$query = "SELECT `location` FROM `company_details` WHERE `company_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['location'];
			$query2 = "SELECT `location_name` FROM `location` WHERE `location_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['location_name'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
	
	# Function for select location and get location name in location table
	public function get_location_name_from_user($id){
		$query = "SELECT `location` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['location'];
			$query2 = "SELECT `location_name` FROM `location` WHERE `location_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['location_name'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
}

?>