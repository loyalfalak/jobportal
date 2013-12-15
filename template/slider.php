<div class="slider">
	<?php
		$query="SELECT `advertise_img_name` from `advertise_image`";
		$_result=mysql_query($query) or die('can not select'.mysql_error());
		while($row=mysql_fetch_array($_result)){
	?>
		<img src="admin/images/<?php echo $row['advertise_img_name'];?>" />
	<?php } ?>							
</div>