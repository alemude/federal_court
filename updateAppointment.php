<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<form>
 <input style="width:7%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="Back!" onclick="history.go(-1)">
</form>
<form action="updateAppointment.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:2%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:20px;font-weight:bold">Fill the bellow to update Appointment</p>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="appoID" type="number" placeholder="Appointment ID" value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="caseID" type="number" placeholder="cade ID"value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="date" type="date" placeholder="Date"value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="time" type="time" placeholder="Time"value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" name="submit" type="submit" value="Update"/>
</form>
</body>
</html>
 <?php
 session_start();
if(isset($_POST['submit'])) {
require_once 'dbconfig.php';
	$appoID=$_POST['appoID'];
	$caseID=$_POST['caseID'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$k=0;
    $sqs= "SELECT  * FROM appointment WHERE appoID='$appoID'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
		$k=1;
If($appoID==$row['appoID']&&$caseID==$row['caseID']){
	$sql="UPDATE appointment SET date='$date',time='$time' WHERE appoID='$appoID' AND caseID='$caseID'" ;
if (mysqli_query($db, $sql)) {
echo "<script type='text/javascript'>
alert('Record updated successfully');
</script>";	
}
 else {
  echo "Error updating record: " . mysqli_error($db);
}
}
else
echo "<script type='text/javascript'>
alert('Not Updated! please enter a correct case ID or appointment ID');
</script>";	
}
if($k==0)
echo "<script type='text/javascript'>
alert('Not Updated! please enter a correct case ID or appointment ID');
</script>";	

	
	}
mysqli_close($db);
}
?> 