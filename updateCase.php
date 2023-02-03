
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<form>
 <input style="width:7%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="Back!" onclick="history.go(-1)">
</form>
<form action="updateCase.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:2%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">Fill the bellow to update</p>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="caseID" type="text" placeholder="Enter caseID"value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="old" type="text" placeholder="Enter to be changed" value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="update" type="text" placeholder="Enter New one" value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" name="submit" type="submit" value="Update"/>
</form>
</body>
</html>
 <?php
 session_start();
if(isset($_POST['caseID']) && isset($_POST['old'])&& isset($_POST['update'])) {
require_once 'dbconfig.php';
	$caseID=$_POST['caseID'];
	$old=$_POST['old'];
	$update=$_POST['update'];
	$k=0;
    $sqs= "SELECT  * FROM cases WHERE caseID='$caseID'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
		$k=1;
If(($caseID==$row['caseID'])&&($old==$row['c_type']||$old==$row['name']||$old==$row['fname']||$old==$row['age']||$old==$row['sex']||$old==$row['accuserID']
||$old==$row['kebele']||$old==$row['name1']||$old==$row['age1']||$old==$row['sex1']||$old==$row['accusedID']||$old==$row['kebele1']||$old==$row['accuser_advo_ID']||$old==$row['accused_advo_ID'])){		
 if($old==$row['c_type'])
	$sql="UPDATE cases SET c_type='$update' WHERE caseID='$caseID'" ;
    else if($old==$row['name'])
		$sql="UPDATE cases SET name='$update' WHERE caseID='$caseID'" ;	
    else if($old==$row['fname'])
		$sql="UPDATE cases SET fname='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['age'])
		$sql="UPDATE cases SET age='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['sex'])
		$sql="UPDATE cases SET age='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['accuserID'])
		$sql="UPDATE cases SET accuserID='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['kebele'])
		$sql="UPDATE cases SET kebele='$update' WHERE caseID='$caseID'" ;
		
  else if($old==$row['name1'])
		$sql="UPDATE cases SET name1='$update' WHERE caseID='$caseID'" ;	
    else if($old==$row['fname1'])
		$sql="UPDATE cases SET fname1='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['age1'])
		$sql="UPDATE cases SET age1='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['chilot'])
		$sql="UPDATE cases SET chilot='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['sex1'])
		$sql="UPDATE cases SET sex1='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['accusedID'])
		$sql="UPDATE cases SET accusedID='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['kebele'])
		$sql="UPDATE cases SET kebele='$update' WHERE caseID='$caseID'" ;		
		
		else if($old==$row['accused_advo_ID'])
		$sql="UPDATE cases SET accuser_advo_ID='$update' WHERE caseID='$caseID'" ;
	else if($old==$row['accuser_advo_ID'])
		$sql="UPDATE cases SET accused_advo_ID='$update' WHERE caseID='$caseID'" ;		
		
		
if (mysqli_query($db, $sql)) {
echo "<script type='text/javascript'>
alert('Record updated successfully');
</script>";	
} else {
  echo "Error updating record: " . mysqli_error($db);
}
}

else
echo "<script type='text/javascript'>
alert('Not Updated! please enter correctlly');
</script>";	
}
if($k==0)
echo "<script type='text/javascript'>
alert('Not Updated! please enter a correct caseID');
</script>";	

	
	}
mysqli_close($db);
}
?> 