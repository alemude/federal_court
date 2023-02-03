<?php
session_start();
//if(!isset($_SESSION['logintype']))
//header("Location:index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Create Account page</title>
</head>
<script type="text/javascript">
	function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert( "only letters are allowed! ")
            return false;
			}}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
		 alert("only number is allwed!")
            return false;
}
         
      }
	 
    function validate() 
   {
    if(document.myform.date.value=="")
   { alert("Please fill the day!" );
    document.myform.date.focus() ;
    return false;
   }
    if(document.myform.user_name.value=="")
   { alert("Please fill the user name!" );
    document.myform.user_name.focus() ;
    return false;
   }    
	if(document.myform.first_name.value=="")
   { alert("Please fill firstname!" );
    document.myform.first_name.focus() ;
    return false;
   }
   var str=document.myform.first_name.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.first_name.value="";
	          document.myform.first_name.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fullname.");
		         document.myform.first_name.value="";
	             document.myform.first_name.focus();
	             return false;
		      } 
			 	
			  if(document.myform.last_name.value=="")
   { alert("Please fill last name!" );
    document.myform.last_name.focus() ;
    return false;
   }
   var str=document.myform.last_name.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for last name");
	          document.myform.last_name.value="";
	          document.myform.last_name.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for last name.");
		         document.myform.last_name.value="";
	             document.myform.last_name.focus();
	             return false;
		      } 
if(document.myform.sex.value=="")
   { alert("Please select list of sex!" );
    document.myform.sex.focus() ;
    return false;
   }
if(document.myform.age.value=='')
			    { 
				alert("Please enter age.");
				 document.myform.age.focus(); 
				 return false;
				  }
    if(document.myform.email.value == "" )
   {
    alert("Please fill your 's email!" );
    document.myform.email.focus() ;
    return false;
   }
   var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  document.myform.email.value="";
  return false;
  } 
  if(document.myform.p_number.value=="")
	{
	alert("please enter phone number");
	document.myform.p_number.value="";
	document.myform.p_number.focus();
	return false;
	}
	var str=document.myform.p_number.value;
	var valid="0123456789+";
	for(i=0;i<str.length;i++)
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please insert phone number only number");
	document.myform.p_number.value="";
	document.myform.p_number.focus();
	return false;
	}
	}
	if(str.length!=10)
	{
	alert("please enter phone number 10  digit.");
	document.myform.p_number.focus();
	return false;
	}
 if (str.charAt(0)!="0")
           {
             alert("phone number should be start with 0");
			 document.myform.p_number.focus();
              return false;
			  	   
           }
if (str.charAt(1)!="9")			   
           {
             alert("phone number should be start with 09");
			 document.myform.p_number.focus();
              return false;
           }
		   if(document.myform.password.value=='')
			    { 
				alert("Please enter password.");
				 document.myform.password.focus(); 
				 return false;
				  }
				   else if(document.myform.password.value.length<8)
				    { 
					alert("Password is too short!! it must contains atlist 8 character"); 
					document.myform.password.focus(); 
					return false;
					 } 
					 if(document.myform.re_password.value=='') 
					 {
					  alert("Please confirm password.");
					   document.myform.re_password.focus();
					    return false; 
						} 
						else if(document.myform.password.value!=document.myform.re_password.value) 
						{ 
						alert("Password does not match."); 
						document.myform.password.focus(); 
						return false;
			}
		  	
}
		    
</script>

</head>

<body onLoad="document.registration.userid.focus();" bgcolor="#f4ffe4">
 <input style="width:7%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="Back!" onclick="history.go(-1)">
</form>
       <form action="creat.php" method="post" name='myform' target="_top"onsubmit='return validate()' id='form1' style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:40%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<legend><strong><p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">Employee regisretation form</p></strong></legend>
      
    <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"
 name="first_name" type="text" id="first_name"placeholder="First name" required><br></br>
      <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="last_name" type="text" id="last_name"placeholder="Last name"><br></br>
    <table style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:52%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><tr><td>
   <input checked type="radio" name="sex" id="sex" value="Female"/>Female
	<input type="radio" name="sex" id="sex" value="Male" />Male
	</td></tr></table><br></br>	
		<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="age" type="number" id="age"placeholder="Age" required min="25" max="100"><br></br>
      <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" type="text" name="email" id='email'placeholder="Email"><br></br>
       <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" type="number" name="p_number" id='p_number'placeholder="Phone number"><br></br>
     <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" id="password"placeholder="Password"><br></br>
     <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="re_password" id="re_password"placeholder="Confirm Password"><br></br>
    <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"  type="text" name="user_name" id="user_name"placeholder="User name" ><br></br>
       <select name="status" id="status" style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" required>
      <option disabled selected value>Select Status  </option>
		 <option value="civil judge">civil judge</option>
		  <option value="criminal judge">Criminal Judge</option>
		  <option value="civil Officer">civil law Officer</option>
		  <option value="Criminal Officer">criminal Law Officer</option>
		  <option value="Admin">Administrator</option>
	      </select><br></br>
		  <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" type="date" name="date" id="date"placeholder="Date"><br></br><br></br>
      <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:50%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" type="submit" name="submit"  value="Create" />
        <br><br> 
            <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:50%; background-color:red;border-radius:5px;color:white;font-weight:bold;font-size:30px" type='reset' value='Reset'  />
	  </form>  
</body>
</html>		
