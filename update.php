 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<form>
 <input style="width:7%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="Back!" onclick="history.go(-1)">
</form>
<form action="update.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:2%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">Fill the bellow to update</p>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="id" type="text" placeholder="Enter employee ID"value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="old" type="text" placeholder="Enter to be changed" value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="update" type="text" placeholder="Enter New one" value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" name="submit" type="submit" value="Update"/>
</form>
</body>
</html>
 <?php
 session_start();
if(isset($_POST['id']) && isset($_POST['old'])&& isset($_POST['update'])) {
require_once 'dbconfig.php';
	$id=$_POST['id'];
	$old=$_POST['old'];
	$update=$_POST['update'];
	$k=0;
    $sqs= "SELECT  * FROM createaccount WHERE id='$id'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
		$k=1;
If(($id==$row['id'])&&($old==$row['first_name']||$old==$row['status']||$old==$row['last_name']||$old==$row['user_name']||$old==$row['sex']||$old==$row['age']
||$old==$row['email']||$old==$row['p_number']||$old==$row['age'])){
			
 if($old==$row['first_name'])
	$sql="UPDATE createaccount SET first_name='$update' WHERE id='$id'" ;
    else if($old==$row['status'])
		$sql="UPDATE createaccount SET status='$update' WHERE id='$id'" ;	
    else if($old==$row['last_name'])
		$sql="UPDATE createaccount SET last_name='$update' WHERE id='$id'" ;
	else if($old==$row['user_name'])
		$sql="UPDATE createaccount SET user_name='$update' WHERE id='$id'" ;
	else if($old==$row['sex'])
		$sql="UPDATE createaccount SET sex='$update' WHERE id='$id'" ;
	else if($old==$row['age'])
		$sql="UPDATE createaccount SET age='$update' WHERE id='$id'" ;
	else if($old==$row['email'])
		$sql="UPDATE createaccount SET email='$update' WHERE id='$id'" ;
	else if($old==$row['p_number'])
		$sql="UPDATE createaccount SET p_number='$update' WHERE id='$id'" ;
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
alert('Not Updated! please enter a correct id');
</script>";	

	
	}
mysqli_close($db);
}
?> 