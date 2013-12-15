<?php
class language_profile{
	
	# Function for inserting language data in language table
	public function insert_language_profile($data,$uid){
		$language        = $data['language'];
		$proficiency     = $data['proficiency'];
		$read            = $data['read'];
		$write           = $data['write'];
		$speak           = $data['speak'];
		
		$language1        = $data['language1'];
		$proficiency1     = $data['proficiency1'];
		$read1            = $data['read1'];
		$write1           = $data['write1'];
		$speak1           = $data['speak1'];
		
		$language2        = $data['language2'];
		$proficiency2     = $data['proficiency2'];
		$read2            = $data['read2'];
		$write2           = $data['write2'];
		$speak2           = $data['speak2'];
		
		$language3        = $data['language3'];
		$proficiency3     = $data['proficiency3'];
		$read3            = $data['read3'];
		$write3           = $data['write3'];
		$speak3           = $data['speak3'];
  		
		$query = "INSERT INTO `language`(`uid`, `lname`, `proficency`, `read`, `write`, `speak`, `lname1`, `proficency1`, `read1`, `write1`, `speak1`, `lname2`, `proficency2`, `read2`, `write2`, `speak2`, `lname3`, `proficency3`, `read3`, `write3`, `speak3`)
	 	         VALUES('$uid','$language','$proficiency','$read','$write','$speak','$language1','$proficiency1','$read1','$write1','$speak1','$language2','$proficiency2','$read2','$write2','$speak2','$language3',
	 	         '$proficiency3','$read3','$write3','$speak3')";
	
		$result = mysql_query($query); 	         	
		if($result){
		  	header('location:index.php');
		 }else{
		  	die('can not insert'.mysql_error());
		  }
	}
	
	# Function for select language data in language table
	public function select_language($id){
    	$query ="SELECT * FROM `language` WHERE `uid`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
	
	# Function for update language data in language table  
	public function update_language($data,$id){
		$language    = $data['language'];
		$proficiency = $data['proficiency'];
		$read        = $data['read'];
		$write       = $data['write'];
		$speak       = $data['speak'];
	  	
		$language1        = $data['language1'];
		$proficiency1     = $data['proficiency1'];
		$read1            = $data['read1'];
		$write1           = $data['write1'];
		$speak1           = $data['speak1'];
		
		$language2        = $data['language2'];
		$proficiency2     = $data['proficiency2'];
		$read2            = $data['read2'];
		$write2           = $data['write2'];
		$speak2           = $data['speak2'];
		
		$language3        = $data['language3'];
		$proficiency3     = $data['proficiency3'];
		$read3            = $data['read3'];
		$write3           = $data['write3'];
		$speak3           = $data['speak3'];
  	
    	$query = "UPDATE `language`
	                             SET
                                    `lname`='$language',
	                                `proficency`='$proficiency',
	                                `read`='$read',
                                    `write`='$write',
                                    `speak`='$speak',
                                    `lname1`='$language1',
	                                `proficency1`='$proficiency1',
	                                `read1`='$read1',
                                    `write1`='$write1',
                                    `speak1`='$speak1',
                                    `lname2`='$language2',
	                                `proficency2`='$proficiency2',
	                                `read2`='$read2',
                                    `write2`='$write2',
                                    `speak2`='$speak2',
									`lname3`='$language3',
	                                `proficency3`='$proficiency3',
	                                `read3`='$read3',
                                    `write3`='$write3',
                                    `speak3`='$speak3'
	                             WHERE
			                        `uid`='$id'";
		$result = mysql_query($query); 	         	
		if($result){
		 	header('location:update_language_profile.php');
		}else{
		 	die('can not insert'.mysql_error());
		}
	}
}

?>