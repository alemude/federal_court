<?php 
if(isset($_POST['submit'])) {
	$A=0;
	$B=0;
	$id_present=false;
	$judge_present=false;
$caseID=$_POST['caseID'];	
$advo_ID=$_POST['advo_ID'];
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
	$sqs= "SELECT  * FROM advocators";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$B=$row1['advo_ID'];
if($advo_ID==$B)
$judge_present=true;	
}}
echo $A."<br>";
echo $B;
if(!$id_present){
 echo '<script type="text/javascript">alert(" የማይታዎቅ የፋይል መለዮ!!");window.location=\'cusAdvoa.php\';</script>';	
}
else if(!$judge_present){
 echo '<script type="text/javascript">alert("  የማይታዎቅ የጠበቃ መለዮ!!");window.location=\'cusAdvoa.php\';</script>';	
}
else{	
    $user =$_POST['user_type'];
    $caseID =$_POST['caseID'];
  $advo_ID = $_POST['advo_ID'];

    $sqs= "SELECT  * FROM cases WHERE caseID='$caseID'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
	if($caseID==$row['caseID']){
		$k=1;
	if($user=='accuser'&&$caseID==$row['caseID'])
	$sql="UPDATE cases SET accuser_advo_ID ='$advo_ID' WHERE caseID='$caseID'" ;
	else if($user=='accused'&&$caseID==$row['caseID'])
	$sql="UPDATE cases SET accused_advo_ID ='$advo_ID' WHERE caseID='$caseID'" ;
	$result2=mysqli_query($db, $sql);
  if ($result2) {
           echo '<script type="text/javascript">alert(" በትክክል ተመዝግቧል!!");window.location=\'cusAdvoa.php\';</script>';
}
}}
}						
}
}
?>
