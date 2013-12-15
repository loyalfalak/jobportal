//java script Document
function contact_validate()
{
	if(document.forms["contact"]["Name1"].value=="")
	{
		alert("Please Enter Username");
		document.contact.Name1.focus();
		return false;
	}
  	
  	if(document.forms["contact"]["Mobile"].value=="")
	{
		alert("Please Enter Mobile no");
		document.contact.Mobile.focus();
		return false;
	}
		var m = document.forms["contact"]["Mobile"].value;
		 if(isNaN(m)||m.indexOf(" ")!=-1)
	       {
	         alert("Enter Numeric Characters")
	         document.contact.Mobile.focus();
	         return false; 
	        }
		 
		 if (m.length > 20)
	        {
	           alert("Enter 20 Characters");
	           document.contact.Mobile.focus();
	           return false;
	        }
	if(document.forms["contact"]["Email"].value=="")
	{
		alert("Please Enter Email Address");
		document.contact.Email.focus();
		return false;
	 }
		    var x=document.forms["contact"]["Email"].value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  		{
	  			alert("Please Enter Valid E-mail Address");
	  			document.contact.Email.focus();
	  			return false;
	  		}
	if(document.forms["contact"]["address"].value=="")
	{
		alert("Please Enter Address");
		document.contact.address.focus();
		return false;
	}
	if(document.forms["contact"]["comment"].value=="")
	{
		alert("Please Enter Comment");
		document.contact.comment.focus();
		return false;
	}
}