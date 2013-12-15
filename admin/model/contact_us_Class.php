<?php
# Create Class
class contact_us{

	# Insert Data for insert_contact_us Function 
	public function insert_contact_us($data){
		$_name 		= $data['Name1'];
		$_mobile 	= $data['Mobile'];
		$_mail 		= $data['Email'];
		$_address 	= $data['address'];
		$_comment 	= $data['comment'];
		
		$query = "INSERT INTO `contact_us`(`name`,`mobile`,`mail`,`address`,`comment`)VALUES('$_name','$_mobile','$_mail','$_address','$_comment')"; 
		$result = mysql_query($query);
		if($result){
			  header('location:contact_us.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Select Data for select_contact_us Function 
	public function select_contact_us(){
		$query = "SELECT * FROM `contact_us`";
		$result = mysql_query($query);
		if($result){
			return $result;			 
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Delete Data for delete_contact_us Function 
	public function delete_contact_us($id){
		$query = "DELETE FROM `contact_us` WHERE `contact_us_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_contact_us.php');		 
		}else{
			die('can not delete'.mysql_error());
		}
	}
	
	# Function for update contact content  details in contact_us_details table
	public function update_contact_us_details($contact_us){
 		$_query = "UPDATE `contact_us_details` SET `contact_us_data`= '$contact_us' WHERE `contact_us_details_id`=1";
		$_result = mysql_query($_query);
		if($_result){
			header('location:contact_us_details.php');
		}
 	}
	
	# Function for select contact content  details in contact_us_details table
	public function select_contact_us_details(){
		 $_query = "SELECT * FROM `contact_us_details`";
		 $_result = mysql_query($_query);
			if($_result){
				return $_result;
			}
		}
	
	# Function for select contact image in contact_us_details table
	public function select_contact_us_images(){
	 	$query = "SELECT `contact_us_images` from `contact_us_details` WHERE `contact_us_details_id`=1";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die("Error".mysql_error());
		}
	}
	
	# Function for update contact image in contact_us_details table
	public function update_contact_us_images($image){
	   $query = "UPDATE `contact_us_details` SET `contact_us_images`='$image' WHERE `contact_us_details_id`=1";
	   $result = mysql_query($query);
		if($result){
			header('location:contact_us_details.php');
		}else{
			die("Error".mysql_error());
		}
	}
}
?>