<?php
# Create Class
class adminpage{
	
	# Update Data For update_adminpage_content Function
	public function update_adminpage_content($data){
		
		$upid 			= $data['upid'];
		$pagename 		= $data['pagename'];
		$pagecontent 	= $data['pagecontent'];
		
		$_query = "UPDATE `epages` SET `pagename`= '$pagename',`pagecontent`='$pagecontent' WHERE `pageid`='$upid'";
		$_result = mysql_query($_query);
		if($_result){
			header("location:adminpage.php?id=$upid");
		}
	}
	
	# Select Data For select_adminpage_content Function
	public function select_adminpage_content($id){
		$_query = "SELECT * FROM `epages` WHERE `pageid`= '$id'";
		$_result = mysql_query($_query);
		if($_result){
			return $_result;
		}
	}
	
	# Select Image For select_adminpage_imagesFunction
	public function select_adminpage_images($id){
		$query = "SELECT `pageimage` From `epages` WHERE `pageid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die("Error".mysql_error());
		}
	}
	
	# Update Image For update_adminpage_images Function
	public function update_adminpage_images($image,$id){
		$query = "UPDATE `epages` SET `pageimage`='$image' WHERE `pageid`='$id'";
		$result = mysql_query($query);
		if($result){
			header("location:adminpage.php?id=$id");
		}else{
			die("Error".mysql_error());
		}
	}
}
?>