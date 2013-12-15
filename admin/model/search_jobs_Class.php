<?php
class search_jobs{
		
	# Function for search post_jobs 		
	public function select_jobs(){
		$query = "SELECT * FROM `post_jobs`";
        $_result = mysql_query($query);
        if($_result){
            return $_result;
        }else{
        	die('can not select'.mysql_errno());
        }
    }
	
	# Function for search key_words_search post_jobs 		
	public function select_key_words_jobs(){
		$query = "SELECT * FROM `post_jobs`";
        $_result = mysql_query($query);
        if($_result){
            return $_result;
        }else{
        	die('can not select'.mysql_errno());
        }
    }
	
	# Function for Search key_words_search post_jobs
	public function select_search_jobs($data){
		$keyWord			= ($data['keywords'] != '')?$data['keywords']:'';
		$country			= (isset($data['country']) && $data['country'] > 0)?$data['country']:0;
		$location			= (isset($data['location']) && $data['location'] > 0)?$data['location']:0;
		$industry			= (isset($data['industry']) && $data['industry'] > 0)?$data['industry']:0;
		$functional_area 	= (isset($data['functional_area']) && $data['functional_area'] > 0)?$data['functional_area']:0;
		//$experience			= (isset($data['experience']) && $data['experience'] > 0)?$data['experience']:0;
		
		# Building the search query
		$_query  = "SELECT * FROM `post_jobs` WHERE `keywords` LIKE '%$keyWord%'";
		$_query .= ($country > 0)?" AND `country` = $country":'';
		$_query .= ($location > 0)?" AND `location` = $location":'';
		$_query .= ($industry > 0)?" AND `industry` = $industry":'';
		$_query .= ($functional_area > 0)?" AND `function` = $functional_area":'';
		
		# Fire the search query
		$_result = mysql_query($_query);
		if($_result){	
			return $_result;
		}else{
			die('can not select'.mysql_error());
		}
	}

	# Function for Search key_words_search post_jobs
	public function select_key_words_search_jobs($data){
		$keyWord			= ($data['keywords'] != '')?$data['keywords']:'';
		$country			= (isset($data['country']) && $data['country'] > 0)?$data['country']:0;
		$location			= (isset($data['location']) && $data['location'] > 0)?$data['location']:0;
		$industry			= (isset($data['industry']) && $data['industry'] > 0)?$data['industry']:0;
		$functional_area 	= (isset($data['functional_area']) && $data['functional_area'] > 0)?$data['functional_area']:0;
		//$experience			= (isset($data['experience']) && $data['experience'] > 0)?$data['experience']:0;
		
		# Building the search query
		$_query  = "SELECT * FROM `post_jobs` WHERE `keywords` LIKE '%$keyWord%'";
		$_query .= ($country > 0)?" AND `country` = $country":'';
		$_query .= ($location > 0)?" AND `location` = $location":'';
		$_query .= ($industry > 0)?" AND `industry` = $industry":'';
		$_query .= ($functional_area > 0)?" AND `function` = $functional_area":'';
		
		# Fire the search query
		$_result = mysql_query($_query);
		if($_result){	
			return $_result;
		}else{
			die('can not select'.mysql_error());
		}
	}
}
?>