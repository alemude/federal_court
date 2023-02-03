<?php 
if(isset($_POST['caseID']) && isset($_POST['judgeID'])&&isset($_POST['date'])&&isset($_POST['status']) &&isset($_POST['c_type'])) {
$caseID=$_POST['caseID'];	
$judgeID=$_POST['judgeID'];
$c_type=$_POST['c_type'];	
$status=$_POST['status'];
$date=$_POST['date'];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$conn){
		die('Error - '.mysqli_connect_error($conn));
	}
	$k=0;
	$sqs= "SELECT  * FROM cases";
	mysqli_select_db($conn, 'brcourt');
	if($result = mysqli_query($conn, $sqs)){
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	while($row = mysqli_fetch_assoc($result)){
		if ($row > 0)
{
while($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$name=$row1["name"];
	$fname=$row1["fname"];
	$age=$row1["age"];
	$sex=$row1["sex"];
	$accuserID=$row1["accuserID"];
	$kebele=$row1["kebele"];
	$name1=$row1["name1"];
	$fname1=$row1["fname1"];
	$age1=$row1["age1"];
	$sex1=$row1["sex1"];
	$accusedID=$row1["accusedID"];
	$kebele1=$row1["kebele1"];
	$image=$row1["image"];
	$advocator=$row1["advocator"];
	echo "Register date:".$row1["date"];
	if($status=='criminal judge'&& $c_type=='criminal'|| $status=='civil judge'&&$c_type=='civil'){
		$k=1;
$sql = " INSERT INTO `assignedcases`(judgeID,caseID,c_type,status,date,name,fname,age,sex,accuserID,kebele,name1,fname1,age1,sex1,accusedID,kebele1,image,advocator) VALUES('$_POST[judgeID]','$_POST[caseID]','$_POST[c_type]','$_POST[status]','$_POST[date]','$name','$fname','$age','$sex','$accuserID','$kebele','$name1','$fname1','$age1','$sex1','$accusedID','$kebele1','$image','$advocator')";
	if ($conn->query($sql) === TRUE) {
		$query = "DELETE FROM `cases` WHERE caseID='$caseID' ";
		if ($conn->query($query) === TRUE) { 
		$message = "Success!"; 
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo"<script>document.location='1officer_home.php';</script>"; 
		}
		else { echo "Error: " . $query . "<br>" . $conn->error; 
		} }
		else {
			echo "Error: " . $sql . "<br>" . $conn->error; 
			}
}
if($k==0){
echo "<script type='text/javascript'>
alert('Case type and Judge type are not match!');
</script>";	
}						
}
}}
 }
}
?>