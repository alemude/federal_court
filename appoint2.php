<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>insert to user table</title>
</head>

<body>
<?php
$case=$_POST['caseID'];
$judge=$_POST['usedID'];

$date=date('y-m-d');
$appoint=$_POST['date'];
$chilot=$_POST['chilot'];
 $con=mysqli_connect("localhost","root",""); 
if(!$con)
{
die('connection not established'. mysqli_error());
}
else

if(mysqli_select_db("brcourt",$con)){
$sql=mysqli_query("select date from appointment where case_id='$case' ");
if($appoint<$date){
echo"error";
}
else
{
$sql=mysqli_query("insert into appointment( case_id, judge_id ,register_date, appointment_date, chilot ) 
values('$case', '$judge','$date','$appoint', '$chilot')");
	if($sql){
	$sq="select count(*) as appointment_date from appointment where appointment_date='$appoint' && judge_id='$judge'";
	$result=mysqli_query($sq,$con);
	while($row = mysqli_fetch_array($result)){
	echo " Register successfully!!";
	echo"total appointment is"."&nbsp;&nbsp;&nbsp;".$row['appointment_date']."&nbsp;&nbsp;&nbsp;";
  echo 'When The Appointment Date is : ' .$_POST['date'].'<br />'; 
  }
}else{
    DIE('There is not insert data with the system.'.mysqli_error() );
}
}
}   
mysqli_close($con);
?>
</body>
</html>

