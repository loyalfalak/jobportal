<?php
class advertise{
		
	# Function for inserting image in advertise_image table	
	public function insert_advertise($image){
		$insert_query = "INSERT INTO `advertise_image`(`advertise_img_name`) values('$image')";
		$result = mysql_query($insert_query);
		if ($result) {
			header('location:view_advertise.php');
		}
	}
	
	# Function for select image in advertise_image table
	public function select_advertise() {
		$select_img = "SELECT * FROM `advertise_image`";
		$result = mysql_query($select_img);
		if ($result) {
			return $result;
		}
	}
	
	# Function for update image in advertise_image table
	public function update_advertise($id,$image) {
		$update_img = "UPDATE `advertise_image` SET `advertise_img_name`='$image' WHERE `advertise_image_id`='$id'";
		$result = mysql_query($update_img);
		if ($result) {
			header('location:view_advertise.php');
		}
	}
	
	# Function for delete image in advertise_image table
	public function delete_advertise($id) {
		$delete_img = "DELETE FROM `advertise_image` WHERE `advertise_image_id`='$id'";
		$result = mysql_query($delete_img);
		if ($result) {
			header('location:view_advertise.php');
		}
	}
}
?>