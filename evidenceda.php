<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ምስክር </title>
</head>
<body>
<?php
  require_once 'dbconfiga.php'; 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));		
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
 $statusMsg = 'ፎቶግራፍ  ይጨምሩ.'; 
} 
}  
?>
<?php
session_start();
  require_once 'dbconfiga.php';
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "ገብተዋል admin_ha.php";
    header('location: indexa.php');
}
?>
        <?php  if (isset($_SESSION['user_name'])) :
    $sn=$_SESSION['user_name'];
    $sqs= "SELECT  * FROM createaccount WHERE user_name='$sn'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$judge=$row1['user_name'];
		?>
<?php 
require_once'dbconfiga.php';
if(isset($_POST['submit'])) {
$caseID=$_POST['caseID'];	
$date=$_POST['date'];
require_once 'dbconfiga.php';
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
$A=$row['caseID'];	
	}}
if($A!=$caseID){
 echo '<script type="text/javascript">alert(" የማይታወቅ  መለዬ  ያስገቡት !!");window.location=\'evidencea.php\';</script>';	
}
else if($date>date('Y/m/d')){
 echo '<script type="text/javascript">alert("የተሳሳተ ቀን!!");window.location=\'evidencea.php\';</script>';	
}
else if($caseID==$A){
$sql="INSERT INTO evidence(date,caseID,type,pfname,pmname,plname,psex,dfname,dmname,dlname,dsex,daddress,wfname,wmname,wlname,wsex,waddress,wifname,wimname,wilname,wisex,wiaddress,witfname,witmname,witlname,witsex,witaddress,image,maker)
 VALUES('$_POST[date]','$_POST[caseID]','$_POST[type]','$_POST[pfname]','$_POST[pmname]','$_POST[plname]','$_POST[psex]','$_POST[dfname]','$_POST[dmname]','$_POST[dlname]','$_POST[dsex]','$_POST[daddress]','$_POST[wfname]','$_POST[wmname]','$_POST[wlname]','$_POST[wsex]','$_POST[waddress]','$_POST[wifname]','$_POST[wimname]','$_POST[wilname]','$_POST[wisex]','$_POST[wiaddress]','$_POST[witfname]','$_POST[witmname]','$_POST[witlname]','$_POST[witsex]','$_POST[witaddress]','$imgContent','$judge')";
if ($db->query($sql) === TRUE) {
 echo '<script type="text/javascript">alert("ተሳክቷል ");window.location=\'evidencea.php\';</script>';
		}}
		else {
			echo "Error: " . $sql . "<br>" . $db->error; 
			}						
}
}}?>
  <?php endif ?>