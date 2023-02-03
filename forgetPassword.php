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

<body>
<form>
 <input style="width:7%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="Back!" onclick="history.go(-1)">
</form>
      <form action="forgetPassword.php" method="post" name='myform' target="_top"onsubmit='return validate()' id='form1' style="width:50%">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:20px;font-weight:bold">Fill the bellow to forget new_new_password</p>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="p_number" type="number" placeholder="Phone number" value=""/><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="password" type="password" placeholder="New password"value=""/><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="re_password" type="password" placeholder="Confirm new password"value=""/><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" name="submit" type="submit" value="Update"/>
</form>
</body>
</html>
 <?php
if(isset($_POST['submit'])) {
require_once 'dbconfig.php';
	$p_number=$_POST['p_number'];
	$password=$_POST['password'];
	$pass=md5($password);
	$k=0;
    $sqs= "SELECT  * FROM createaccount WHERE p_number='$p_number'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
		$k=1;
if($p_number==$row['p_number']){		
$sql="UPDATE createaccount SET password='$pass' WHERE p_number='$p_number'" ;
if (mysqli_query($db, $sql)) {
echo '<script type="text/javascript">alert("Password is changed successfully");window.location=\'forgetPassword.php\';</script>';			
}
 else {
  echo "Error updating record: " . mysqli_error($db);
}
	}
	
else
echo '<script type="text/javascript">alert("not changed! please enter correct phone number");window.location=\'forgetPassword.php\';</script>';			

}
if($k==0)
echo '<script type="text/javascript">alert("not changed! please enter correct phone number");window.location=\'forgetPassword.php\';</script>';			

	}
mysqli_close($db);
}
?> 