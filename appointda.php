<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>የተከሳሽ መመዝገቢያ ቅጽ</title>
</head>

<body>
<?php
require_once'dbconfig.php';
if(isset($_POST['submit'])) {
$caseID=$_POST['caseID'];
$judgeID=$_POST['judgeID'];	
$date=$_POST['date'];
require_once 'dbconfig.php';
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
$A=$row['caseID'];
$B=$row['judgeID'];	
	}}
if($caseID!=$A){
 echo '<script type="text/javascript">alert(" የማይታወቅ የፋይል መለያ አስገብተዋል!!");window.location=\'appoint.php\';</script>';	
}
else if($judgeID!=$B){
 echo '<script type="text/javascript">alert(" የማይታወቅ የዳኛ መለያ አስገብተዋል!!");window.location=\'appoint.php\';</script>';	
}
else if($date<date('Y/m/d')){
 echo '<script type="text/javascript">alert("የተሳሳተ /ያለፈ ቀን አስገብተዋል!!");window.location=\'appoint.php\';</script>';	
}
else{
require_once 'dbconfig.php'; 
$sql="INSERT INTO appointment(judgeID,caseID,date,time,chilot) VALUES('$_POST[judgeID]','$_POST[caseID]','$_POST[date]','$_POST[time]','$_POST[chilot]')";
$retval = mysqli_query($db, $sql);
if($retval ) { 
echo "<script type='text/javascript'>
alert('በትክክል ተሳክቷል');
</script>";
}
if(!$retval ) { 
die('Could not enter data: '. mysqli_error($db));
 }	
}}
?>
</body>
</html>
