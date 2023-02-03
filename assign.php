<?php
session_start();
if(isset($_POST['caseID']) && isset($_POST['judgeID'])&&isset($_POST['date'])&&isset($_POST['status']) &&isset($_POST['c_type'])) {
$caseID=$_POST['caseID'];	
$judgeID=$_POST['judgeID'];
$c_type=$_POST['c_type'];	
$status=$_POST['status'];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$conn){
		die('Error - '.mysqli_connect_error($conn));
	}
	$k=0;
if($status=='criminal judge'&& $c_type=='criminal'|| $status=='civil judge'&&$c_type=='civil'){
	$k=1;
$sql="INSERT INTO assigned(caseID,judgeID,date,status,c_type) VALUES('$_POST[caseID]','$_POST[judgeID]','$_POST[date]','$_POST[status]','$_POST[c_type]')";
$retval = mysqli_query($conn, $sql);
if($retval ) { 
echo "<script type='text/javascript'>
alert('Assigned successfully');
</script>";
}
if(!$retval ) { 
die('Could not enter data: '. mysqli_error($conn));
 }		  
}
if($k==0){
echo "<script type='text/javascript'>
alert('Case type and Judge type are no match!');
</script>";	
}
}
?>
