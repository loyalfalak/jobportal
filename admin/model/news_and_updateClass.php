<?php
 class news_updates{
 	
	# Function for inserting news_and_update in news_and_update table	
	public function insert_news_updates($title,$description){
		$insert_query = "INSERT INTO `news_and_update`(`title`, `description`) VALUES('$title','$description')";
		$result = mysql_query($insert_query) or die('no data fount'.mysql_error());
		if($result){
			header('location:view_news_and_update.php');
		}
	}
	# Function for select news_and_update in news_and_update table
	public function select_news_updates(){
		$query = "SELECT * FROM `news_and_update`";
		$result =  mysql_query($query)  or die('no data fount'.mysql_error());
		if($result){
			return $result;
		}
	}
	# Function for select news_and_update in news_and_update table
	public function select_news($id){
		$query = "SELECT * FROM `news_and_update` WHERE `nw_id`='$id'";
		$result =  mysql_query($query)  or die('no data fount'.mysql_error());
		if($result){
			return $result;
		}
	}
	# Function for update news_and_update in news_and_update table
	public function news_update($id,$title,$new){
		$query = "UPDATE `news_and_update` SET `title`='$title',`description`='$new' WHERE `nw_id`='$id'";
		$result =  mysql_query($query)  or die('no data fount'.mysql_error());
		if($result){
			header('location:view_news_and_update.php');
		}
	}
	# Function for delete news_and_update in news_and_update table
	public function news_delete($id){
		$query = "DELETE FROM `news_and_update` WHERE `nw_id`='$id'";
		$result =  mysql_query($query)  or die('no data fount'.mysql_error());
		if($result){
			header('location:view_news_and_update.php');
		}
	}
 	# Function for update news_and_update feature in news_and_update table
    public function _createFeatured($_id){
        $_query = "update `news_and_update` SET featured = 1 where `nw_id` = $_id";
        $_result = mysql_query($_query);
        if($_result){
            header("location:view_news_and_update.php");
        }else{
            die("Error" .mysql_error());
        }
    }
	# Function for update news_and_update feature in news_and_update table
    public function _removeFeatured($_id){
        $_query = "update `news_and_update` set featured = 0 where `nw_id` = $_id";
        $_result = mysql_query($_query);
        if($_result){
            header("location:view_news_and_update.php");
        }else{
            die("Error" . mysql_error());
        }
    }
}
?>