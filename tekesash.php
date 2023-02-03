<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>defender registeration form</title>
</head>

<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$db){
		die('Error - '.mysqli_connect_error($db));
	} 
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
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$db){
		die('Error - '.mysqli_connect_error($db));
	} 
$sql="INSERT INTO defenders(caseID,accusedID,fname,lname,sex,age,quality,martial,nation,zone,woreda,city,kebele,h_number,phone,advocator,image) VALUES('$_POST[caseID]','$_POST[accusedID]','$_POST[fname]','$_POST[lname]','$_POST[sex]','$_POST[age]','$_POST[quality]','$_POST[martial]','$_POST[nation]','$_POST[zone]','$_POST[woreda]','$_POST[city]','$_POST[kebele]','$_POST[h_number]','$_POST[phone]','$_POST[advocator]','$imgContent')";
$retval = mysqli_query($db, $sql);
if($retval ) { 
echo "<script type='text/javascript'>
alert('Entered successfully');
</script>";
}
if(!$retval ) { 
die('Could not enter data: '. mysqli_error($db));
 }
?>
</body>
</html>
