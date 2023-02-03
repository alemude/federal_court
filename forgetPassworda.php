<?php
session_start();
//if(!isset($_SESSION['logintype']))
//header("Location:indexa.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>የሚስጥር  ቃል ማስታወሻ </title>
</head>
<script type="text/javascript">
	function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert( "ሆሄ ብቻ! ")
            return false;
			}}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
		 alert("ቁጥር  ብቻ!")
            return false;
}
         
      }
	 
    function validate() 
   {
  if(document.myform.p_number.value=="")
	{
	alert("ስልክ ቁጥር ያስገቡ");
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
	alert("ስልክ ቁጥር ብቻ ያስገቡ");
	document.myform.p_number.value="";
	document.myform.p_number.focus();
	return false;
	}
	}
	if(str.length!=10)
	{
	alert("10 ዲጂት ያስገቡ.");
	document.myform.p_number.focus();
	return false;
	}
 if (str.charAt(0)!="0")
           {
             alert("በ 0 ይጀምራል ");
			 document.myform.p_number.focus();
              return false;
			  	   
           }
if (str.charAt(1)!="9")			   
           {
             alert("በ 09 ይጀምራል");
			 document.myform.p_number.focus();
              return false;
           }
		   if(document.myform.password.value=='')
			    { 
				alert("የሚስጥር ቃል ያስገቡ.");
				 document.myform.password.focus(); 
				 return false;
				  }
				   else if(document.myform.password.value.length<8)
				    { 
					alert("የሚስጥር ቃል ቢያንስ  8"); 
					document.myform.password.focus(); 
					return false;
					 } 
					 if(document.myform.re_password.value=='') 
					 {
					  alert("የሚስጥር ቃል ያረጋግጡ.");
					   document.myform.re_password.focus();
					    return false; 
						} 
						else if(document.myform.password.value!=document.myform.re_password.value) 
						{ 
						alert("የሚስጥር ቃል ይለያያል ."); 
						document.myform.password.focus(); 
						return false;
			}
		  	
}
		    
</script>

</head>

<body>
<form>
 <input style="width:7%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="መመለስ !" onclick="history.go(-1)">
</form>
      <form action="forgetPassworda.php" method="post" name='myform' target="_top"onsubmit='return validate()' id='form1' style="width:50%">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:20px;font-weight:bold">የሚስጥር ቃል ከረሱ  የሚከተለውን  ይሙሉ</p>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="p_number" type="number" placeholder="ስልክ ቁጥር" value=""/><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="password" type="password" placeholder="የሚስጥር ቃል"value=""/><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="re_password" type="password" placeholder="የሚስጥር ቃል ያረጋግጡ"value=""/><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" name="submit" type="submit" value="ማሻሻል "/>
</form>
</body>
</html>
 <?php
if(isset($_POST['submit'])) {
require_once 'dbconfiga.php';
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
echo '<script type="text/javascript">alert("ተቀይሯል ");window.location=\'forgetPassworda.php\';</script>';			
}
 else {
  echo "ችግር  አለ : " . mysqli_error($db);
}
	}
	
else
echo '<script type="text/javascript">alert("አልተቀየረም ");window.location=\'forgetPassworda.php\';</script>';			

}
if($k==0)
echo '<script type="text/javascript">alert("አልተቀየረም ትክክለኛ  ስልክ ቁጥር ያስገቡ");window.location=\'forgetPassworda.php\';</script>';			

	}
mysqli_close($db);
}
?> 