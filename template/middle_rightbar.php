<div class="content_rightbar"> 
	<?php 
		 $select_query = "SELECT * FROM `file`";
		 $result = mysql_query($select_query);
	 ?>
	<div class="content_rightbar_sub_block"> 
		<b>Candidate Time Sheet Download</b>
		 <?php $row=mysql_fetch_array($result); ?>
	 	<div class="content_rightbar_sub_block_img">
	 		<a href="admin/files/<?php echo $row['filename']; ?>"> <img src="images/download-ebook-icon.png" /> </a>
		</div>
	 	<b>Candidate</b>
	 	<div class="content_rightbar_sub_block_img">
			 <a href="user_registration.php"><img src="images/register-now-button-free-7381.jpg" /></a>
	 	</div>
	</div>     
	<div class="content_rightbar_sub_block_news_update"> 
		<p><a href="view_all_news_and_updates.php" style="text-decoration: none;color: #FFFFFF">News Updates</a></p>
	</div>
	<?php 
			$select_query = "SELECT * FROM `news_and_update` WHERE `featured`=1";
			$result = mysql_query($select_query);
	  ?>
	<div class="content_rightbar_block1"> 
		<marquee direction="up" scrollamount="3" height="200">
		<?php  while($row = mysql_fetch_array($result)){?>
		<p>
		<a style="text-decoration: none;" href="show_news_moredetail.php?id=<?php echo $row['nw_id'];?>"><?php echo $row['title'];?></a>
		</p>
		<?php }?>
		</marquee>
	</div>
 
	<div class="content_rightbar_block2"> 
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=292&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:295px; height:250px;" allowTransparency="true"></iframe>
	</div>
	<div class="content_rightbar_block3"> 
	   <img src="images/Linkedin-Logo-large-300x163.jpg" />
	</div>
	<div class="clr"></div>
</div>
	    