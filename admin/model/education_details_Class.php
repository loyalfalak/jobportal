<?php
class education_details{
	
	# Function for inserting education data in education table	
	public function insert_education_details($data,$uid){
				$course_name   		=  $data['course_name'];
				$study_duration     =  $data['study_duration'];
				$specilizatio       =  $data['specilization'];
				$universit          =  $data['university'];
				$degree_type        =  $data['degree_type'];
				$passing_ye         =  $data['passing_year'];
				$study_typ          =  $data['study_type'];
   	
	   $query = "INSERT INTO `education`(`course_name`, `study_duration`, `specilization`, `university`, `degree_type`, `passing_year`,`study_type`,`uid`)VALUES('$course_name','$study_duration','$specilization',
	   '$university','$degree_type','$passing_year','$study_type',$uid)";
	   $result  = mysql_query($query);
	    if($result){
			header('location:preffered_job.php');
	    }
	    else
	     {
			die('can not insert'.mysql_error());
	     }
	}

	# Function for select education data in education table
	public function select_education_details($id){
    	$query ="SELECT * FROM `education` WHERE `uid`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }

	# Function for update education data in education table
	public function update_education_details($data,$id){
			$course_name      =  $data['course_name'];
			$study_duration   =  $data['study_duration'];
			$specilization    =  $data['specilization'];
			$university       =  $data['university'];
			$degree_type      =  $data['degree_type'];
			$passing_year     =  $data['passing_year'];
			$study_type       =  $data['study_type'];
			$query = "UPDATE `education`
		        				      	SET   
						                    `course_name` = '$course_name', 
						                    `study_duration` = '$study_duration', 
						                    `specilization` ='$specilization', 
						                    `university` = '$university', 
						                    `degree_type` = '$degree_type', 
						                    `passing_year` = '$passing_year', 
						                    `study_type` = '$study_type'
		             					 WHERE 
							              		`uid`='$id'";       
			$result = mysql_query($query);
		    if($result){
					header('location:update_education_profile.php?updatemsg=success');
		    }else{
					die('can not update'.mysql_error());
		     }                                      		
    }
}
 

?>