<?php
class default_applications{
	
	# Function for add default_applications data in default_applications table  
	public function add_default_applications($data,$id){
    	$title 				= $data['title'];
    	$description		= $data['description'];
		
	 	$query = "INSERT INTO `default_application`(`uid`, `title`, `description`) VALUES('$id','$title','$description')";  
		$result = mysql_query($query); 	         	
		if($result){
			header('location:view_default_applications.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Function for select default_applications data in default_applications table
	public function select_default_applications(){
    	$query ="SELECT * FROM `default_application`";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
	
	# Function for select default_applications data in default_applications table
	public function select_default_applications_id($id){
    	$query ="SELECT * FROM `default_application` WHERE `dapp_id`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
    
	# Function for update default_applications data in default_applications table  
	public function update_default_applications($data,$id){
    	$title 				= $data['title'];
    	$description		= $data['description'];
			
	 	$query = "UPDATE `default_application` SET `title`='$title',`description`='$description' WHERE `dapp_id`='$id'";  
		$result = mysql_query($query); 	         	
		if($result){
			header('location:view_default_applications.php');
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Function for delete default_applications data in default_applications table
	public function delete_default_applications($id){
    	$query ="DELETE FROM `default_application` WHERE `dapp_id`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			header('location:view_default_applications.php');
		}else{
			die('can not delete'.mysql_errno());
		}                          	
    }

}

?>