<?php
class industry{
	# Function for insert industry in industry table
	public function insert_industry($industry){
		$query = "INSERT INTO `industry`(`industry`) VALUES('$industry')"; 
		$result = mysql_query($query);
		if($result){
			  header('location:view_industry.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	# Function for select industry in industry table
	public function select_industry(){
		$query = "SELECT * FROM `industry`";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select industry in industry table
	public function select_industry_id($id){
		$query = "SELECT * FROM `industry` WHERE `industry_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for update industry in industry table
	public function update_industry($industry,$id){
 		$_query = "UPDATE `industry` SET `industry`= '$industry' WHERE `industry_id`='$id'";
		$_result = mysql_query($_query);
		if($_result){
			header('location:view_industry.php');
		}else{
			die('can not insert'.mysql_error());
		}
 	}
	# Function for delete industry in industry table
	public function delete_industry($id){
		$query = "DELETE FROM `industry` WHERE `industry_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_industry.php');		 
		}else{
			die('can not delete'.mysql_error());
		}
	}
	# Function for select industry and get industry name in industry table
	public function get_industry($id){
		$query = "SELECT * FROM `industry` WHERE `industry_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['industry'];			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select industry and get industry name in industry table
	public function get_industry_name_from_postjobs($pjid){
		$query = "SELECT `industry` FROM `post_jobs` WHERE `pjid`='$pjid'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			$ind_id = $row['industry'];
			$query2 = "SELECT `industry` FROM `industry` WHERE `industry_id`='$ind_id'";
			$result2 = mysql_query($query2);
			if($result2){
			$row2 = mysql_fetch_array($result2);
					echo $row2['industry'];
			}else{
				die('can not select'.mysql_error());
			}
		}
	}
}
?>