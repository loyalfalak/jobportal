<div class="loginheader">
			<div class="loginheader_makemid">
				<div class="loginheader_admin">
					<a href="#">Job Portal Admin</a>
				</div>
				<!--
				<div class="loginheader_search">
					<form action="" method="post">
						<input type="text" name="text" value="Search" class="loginheader_search_textbox" />
						<input type="submit" name="submit" value="Go" class="admin_button" />
					</form>
				</div>
				-->
				<div class="loginheader_dropdowns">
					<ul>
						<?php
							if(isset($_SESSION['admin'])){
								
							$query="SELECT `username` from `admin_login`";
							$_result=mysql_query($query);
							if($_result){
							    
								$row=mysql_fetch_array($_result);
								 
							}else{
								die('can not select'.mysql_error());
							}
						}	
						?>
						
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
			</div>		
		</div>
		