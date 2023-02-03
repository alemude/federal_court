<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>defender registeration form</title>
</head>
<body>
<?php
  require_once 'dbconfig.php'; 
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
 $statusMsg = 'Please select an image file to upload.'; 
} 
}  
?>
<?php
session_start();
  require_once 'dbconfig.php';
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "You have to log in admin_h.php";
    header('location: index.php');
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
require_once'dbconfig.php';
if(isset($_POST['submit'])) {
$caseID=$_POST['caseId'];	
$date=$_POST['rdate'];
require_once 'dbconfig.php';
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
$A=$row['caseID'];	
	}}
if($A!=$caseID){
 echo '<script type="text/javascript">alert(" You entered unknown case ID!!");window.location=\'rec_decision.php\';</script>';	
}
else if($date>date('Y/m/d')){
 echo '<script type="text/javascript">alert("Wrong date!!");window.location=\'rec_decision.php\';</script>';	
}
else if($caseID==$A){
	$sql="INSERT INTO decision(rdate,caseId,casetype,accuser,amname,alname,asex,defender,dmname,dlname,dsex,image,judge,description) VALUES
('$_POST[rdate]','$_POST[caseId]','$_POST[casetype]','$_POST[accuser]','$_POST[amname]','$_POST[alname]','$_POST[asex]','$_POST[defender]','$_POST[dmname]','$_POST[dlname]','$_POST[dsex]','$imgContent','$judge','$_POST[description]')";
if ($db->query($sql) === TRUE) {
	$c=$_POST['caseId'];
		$query = "DELETE FROM `assignedcases` WHERE caseID='$c' ";
if ($db->query($query) === TRUE) { 
 echo '<script type="text/javascript">alert("Success");window.location=\'rec_decision.php\';</script>';
		}}
		else { echo "Error: " . $query . "<br>" . $db->error; 
}
		}
		else {
			echo "Error: " . $sql . "<br>" . $db->error; 
			}						
}
}}?>
  <?php endif ?>
</body>
</html>
