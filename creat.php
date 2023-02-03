<html>
<head>
<title>Create Account</title>
</head>
<body>
<?php
require_once 'dbConfig.php';
$sqs= "SELECT  * FROM createaccount";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
   $un=$row1['user_name'];
	}}
$A=$_POST['first_name'];
$B=$_POST['last_name'];
$C=$_POST['sex'];
$CC=$_POST['age'];
$D=$_POST['email'];
$E=$_POST['p_number'];
$passw=$_POST['password'];
$G=md5($passw);
$rpassw=$_POST['re_password'];
$H=md5($rpassw);
$F=$_POST['user_name'];
$GG=$_POST['status'];
$date=$_POST['date'];

if(empty($A) || empty($B) || empty($C) || empty($CC) || empty($D) || empty($E)  || empty($G) || empty($H) || empty($F)  || empty($GG))
{
echo 'fill forms please';
exit();
}
$datec=date('Y/m/d');
if($date>$datec){
 echo '<script type="text/javascript">alert(" You entered Future date! which is logically wrong!!");window.location=\'createaccount.php\';</script>';	
}
if($un==$F){
echo '<script type="text/javascript">alert(" The user name is already used.please change and try again!!");window.location=\'createaccount.php\';</script>';			
}
else{
 $sql="INSERT INTO createaccount(first_name,last_name,sex,age,email,p_number,password,user_name,status,date) VALUES ('$A','$B','$C','$CC','$D','$E','$G','$F','$GG','$date')";
$retval = mysqli_query($db, $sql);
if($retval ){ 
echo "<script type='text/javascript'>
alert('Entered successfully');
</script>";
}
if(!$retval ) { 
die('Could not enter data: '. mysqli_error($db));
 }
 require_once 'admin_h.php'; 
}
?>
</body>
</html>