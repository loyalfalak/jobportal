<?php
# Create Class
class franchise{
		
	#Insert Data For insert_franchise Function
	public function insert_franchise($data){
			$_name 		= $data['Name1'];
			$_mobile 	= $data['Mobile'];
			$_mail 		= $data['Email'];
			$_address 	= $data['address'];
			$_comment 	= $data['comment'];
		$query = "INSERT INTO `franchise`(`name`,`mobile`,`mail`,`address`,`comment`)VALUES('$_name','$_mobile','$_mail','$_address','$_comment')"; 
		$result = mysql_query($query);
		if($result){
			  header('location:franchise.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Select Data For select_franchise Function
	public function select_franchise(){
		$query = "SELECT * FROM `franchise`";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Delete Data For delete_franchise Function
	public function delete_franchise($id){
		$query = "DELETE FROM `franchise` WHERE `franchise_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_franchise.php');		 
		}else{
			die('can not delete'.mysql_error());
		}
	}
	
	public function Update_franchise_details($franchise,$id){
 		$_query = "UPDATE `franchise_details` SET `franchise_data`= '$franchise' WHERE `franchise_details_id`='$id'";
		$_result = mysql_query($_query);
		if($_result){
			header('location:franchise_details.php');
		}
 	}
	public function select_franchise_details()
	{
	 $_query = "SELECT * FROM `franchise_details`";
	 $_result = mysql_query($_query);
		if($_result){
			return $_result;
		}
	}
	public function select_franchise_images(){
	 	$query = "SELECT `franchise_image` from `franchise_details` WHERE `franchise_details_id`=1";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die("Error".mysql_error());
		}
	}
	public function update_franchise_images($image){
	   $query = "UPDATE `franchise_details` SET `franchise_image`='$image' WHERE `franchise_details_id`=1";
	   $result = mysql_query($query);
		if($result){
			header('location:franchise_details.php');
		}else{
			die("Error".mysql_error());
		}
	}
	
	
}


?>