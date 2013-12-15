<?php
class cover_letter{
	
	# Function for select cover_letter data in cover_letter table
	public function select_cover_letter($id){
    	$query ="SELECT * FROM `cover_letter` WHERE `uid`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
	
	# Function for update cover_letter data in cover_letter table  
	public function update_cover_letter($data,$id){
    	$cover_letter_name 	= $data['cover_letter_name'];
    	$description 		= $data['description'];
	 	$query 		= "UPDATE `cover_letter` SET `cname`='$cover_letter_name',`cdetail`='$description' WHERE `uid`='$id'";
		$result 	= mysql_query($query); 	   
		
		if($result){
			header('location:update_cover_letter.php?updatemsg=success');
		}else{
			die('can not select'.mysql_errno());
		}   
	}
	
	# Function for insert cover_letter data in cover_letter table  
	public function insert_cover_letter($data,$id){
		$cover_letter_name 	= $data['cover_letter_name'];
		$description 		= $data['description'];
		
		$insertquery	= "INSERT INTO `cover_letter`(`uid`, `cname`, `cdetail`) VALUES('$id','$cover_letter_name','$description')";
		$insertresult 	= mysql_query($insertquery);      	
		
		if($insertresult){
			header('location:update_cover_letter.php?insertmsg=success');
		}else{
			die('can not select'.mysql_errno());
		}   
	}

	# Function to check existing user in table
	public function check_user_id($id){
    	$query	= "SELECT * FROM `cover_letter` WHERE `uid`='$id'";
		$result	= mysql_query($query);   
		                       		
		if(mysql_num_rows($result) > 0){
			return 'existing';
		}else{
			return 'new';
		}                          	
    }
}

?>