<?php 
if(isset($_POST['submit'])) {
	$A=0;
	$B=0;
	$id_present=false;
	$judge_present=false;
$caseID=$_POST['caseID'];	
$judgeID=$_POST['judgeID'];
$date=$_POST['date'];
require_once 'dbconfiga.php';
$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
$A=$row['caseID'];	
	if($caseID==$A)
		$id_present=true;
	}}
	$sqs= "SELECT  * FROM createaccount";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$B=$row1['id'];
if($judgeID==$B)
$judge_present=true;	
}}
if(!$id_present){
 echo '<script type="text/javascript">alert(" የማይታወቅ  የፋይል መለዮ  አስገብተዋል !!");window.location=\'1assigna.php\';</script>';	
}
else if(!$judge_present){
 echo '<script type="text/javascript">alert(" የማይታወቅ የዳኛ መለዮ አስገብተዋል!");window.location=\'1assigna.php\';</script>';	
}
else{
require_once 'dbconfiga.php';
$sql="INSERT INTO assignedcases (caseID,c_type,date,name,fname,age,sex,accuserID,kebele,name1,fname1,age1,sex1,
accusedID,kebele1,accuser_advo_ID,accused_advo_ID,image)
SELECT caseID,c_type,date,name,fname,age,sex,accuserID,kebele,name1,fname1,age1,sex1,accusedID,kebele1,accuser_advo_ID,accused_advo_ID,image FROM cases
WHERE caseID = $caseID";
if ($db->query($sql) === TRUE) {
		$query = "DELETE FROM `cases` WHERE caseID='$caseID' ";
		if ($db->query($query) === TRUE) { 
	$query="UPDATE assignedcases
SET date= '$date', judgeID= '$judgeID'
WHERE caseID='$caseID'";
if ($db->query($query) === TRUE) {
		$message = "ተሳክቷል !"; 
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo"<script>document.location='PADMINa.php';</script>"; 
		}}
		else { echo "Error: " . $query . "<br>" . $db->error; 
}

		}
		else {
			echo "Error: " . $sql . "<br>" . $db->error; 
			}
							
}}
?>