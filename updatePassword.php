<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<form action="updatePassword.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:2%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">Fill the bellow to update password</p>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="user_name" type="text" placeholder="Enter user name" value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="password" type="password" placeholder="Enter old password"value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="npassword" type="password" placeholder="Enter new password"value="" required /><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" name="submit" type="submit" value="Update"/>
</form>
</body>
</html>
 <?php
 session_start();
if(isset($_POST['user_name']) && isset($_POST['password'])&& isset($_POST['npassword'])) {
require_once 'dbconfig.php';
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	$npassword=$_POST['npassword'];
	$pass=md5($password);
	$npass=md5($npassword);
	$k=0;
    $sqs= "SELECT  * FROM createaccount WHERE user_name='$user_name'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
		$k=1;
If($user_name==$row['user_name']&&$pass==$row['password']){
	$sql="UPDATE createaccount SET password='$npass' WHERE password='$pass' AND user_name='$user_name'" ;
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
alert('Not Updated! please enter a correct username or password');
</script>";	
}
if($k==0)
echo "<script type='text/javascript'>
alert('Not Updated! please enter a correct username or password');
</script>";	

	
	}
mysqli_close($db);
}
?> 