<?php
class course_name{
			
		# Function for select university and get university name in university table
		public function get_course_name($id){
			$query = "SELECT `course_name` FROM `education` WHERE `uid`='$id'";
			$result = mysql_query($query);
			if($result){
				$row = mysql_fetch_array($result);
				$ind_id = $row['course_name'];
				$query2 = "SELECT `course_name_data` FROM `course_name` WHERE `course_name_id`='$ind_id'";
				$result2 = mysql_query($query2);
				if($result2){
				$row2 = mysql_fetch_array($result2);
					echo $row2['course_name_data'];
				}else{
					die('can not select'.mysql_error());
				}
			}
		}
}	
?>	
	