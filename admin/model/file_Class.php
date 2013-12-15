<?php
class files{
	# Function for add file in file table	
	public function insert_file($files){
		$insert_query = "INSERT INTO `file`(`filename`) values('$files')";
		$result = mysql_query($insert_query);
		if ($result) {
			header('location:view_file.php');
		}
	}
	# Function for select file in file table
	public function select_file() {
		$select_img = "SELECT * FROM `file`";
		$result = mysql_query($select_img);
		if ($result) {
			return $result;
		}
	}
	# Function for select file in file table
	public function select_file1($id) {
		$select_img = "SELECT * FROM `file` WHERE `file_id`= '$id'";
		$result = mysql_query($select_img);
		if ($result) {
			return $result;
		}
	}
	# Function for update file in file table
	public function update_file($id,$files) {
		$update_img = "UPDATE `file` SET `filename`='$files' WHERE `file_id`= '$id'";
		$result = mysql_query($update_img);
		if($result){
			header('location:view_file.php');
		}
	}
	# Function for delete file in file table
	public function delete_file($id) {
		$delete_img = "DELETE FROM `file` WHERE `file_id`='$id'";
		$result = mysql_query($delete_img);
		if($result){
			header('location:view_file.php');
		}
	}
}
?>