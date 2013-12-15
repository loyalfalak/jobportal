<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
		
 		<!--Start of Header-->
		<?php include(TEMPLATE.'header.php');?> 
	      	 
		<!--Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		    <div class="content1">
	  			<div class="client_login1">
                    <h2 style="color:#006990">Member/Registered User Benefits...</h2>
                        <br>
		                <ul>
		                    <li><span>Register And Enjoy Easy Facility of Enquiring Franchisors in Single Click</span><br>
		                    <span>You can Update your Profile , by clicking on Profile on Top Header Section</span></li>
		                    <li><span>By Registering , you authenticate yourself for easy communication</span><br>
		                    <span>between you and Franchisor.</span></li>
		                    <li><span>Let Recruiters find you the right job</span><br>
		                    <span>Your Registration also helps How2Franchise to keep Track on your needs</span></li>
		                    <li><span>and accordingly informing you about Franchisors</span><br></li>
		                </ul>
                         <br>
                         </br>
                        <a href="user_registration.php" class="btnn" style="padding:8px;border-radius: 6px;margin-left:180px;color:#fff;height: 20px;text-decoration: none;">Create Your Account Now</a>
              	</div>
              	<div class="client_login">
	                <form name="login" action="" method="post" onsubmit="return franchise_valid_login();">
	                    <h2 style="margin-left: 20px;margin-top: 5px;color:#006990;">Job Seeker Login</h2>
	                    <table>
	                        <tr>
	                            <td colspan="2" style="padding-bottom:5px;">
	                        </tr>
	                        <tr>
	                            <td><label for="lbl_username" style="margin-left: 0px;"><b>Email Id :</b></label></td>
	                            <td ><input type="text" name="email" id="username" value=""/></td>
	                        </tr>
	                        <tr>
	                            <td><label for="lbl_username" style="margin-left: 0px;"><b>Password :</b></label></td>
	                            <td ><input type="password" name="password" id="password" value=""/></td>
	                        </tr>
	                        <tr>
	                            <td class="tdr">
	                            </td>
	                            <td >
	                                <input type="submit" value="Sign In" name="login" class="btn7" />
	                            </td>
	                        </tr>
	                        <tr>
	                            <td colspan="2" align="right" style="padding:10px;line-height:25px;">
	                                <a href="forget_jobseeker_pwd.php" style="text-decoration: none">Forget Password</a><br />                                            
	                            </td>
	                        </tr>
	                    </table>
	                </form>
                  </div>
		    </div>
	     <div class="clr">
	     </div>	 
	</div>
	
	 <!-- Start Footer--> 
	  <?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>