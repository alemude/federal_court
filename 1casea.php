<?php 
session_start();
?>
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
        $statusMsg = 'Please select an image file to upload.'; 
    } 
}  
?>
<?php 
 if(isset($_POST['submit'])){
$accuserID=$_POST['accuserID'];
$accusedID=$_POST['accusedID'];
$date=$_POST['date'];	 
require_once 'dbConfiga.php';
$sqs="SELECT accuserID FROM cases ORDER BY accuserID DESC LIMIT 1";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$a=$row1['accuserID']+"1";
	}
	
	}
$sqs="SELECT accusedID FROM cases ORDER BY accusedID DESC LIMIT 1";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$b=$row1['accusedID']+"1";
	}
	}	
 if($accuserID!=$a || $accusedID!=$b){
 echo '<script type="text/javascript">alert("Failed!! entered not allowed accuserID or accusedID.");window.location=\'1case_registera.php\';</script>';	 
 }
 else if($date>date('Y/m/d')){
	 echo '<script type="text/javascript">alert("Failed!! entered invalid date.");window.location=\'1case_registera.php\';</script>'; 
 }
 else{
	 $sql="INSERT INTO
cases(date,c_type,name,fname,age,sex,accuserID,kebele,name1,fname1,age1,sex1,accusedID,kebele1,image,chilot) VALUES('$_POST[date]','$_POST[c_type]','$_POST[name]','$_POST[fname]','$_POST[age]','$_POST[sex]','$_POST[accuserID]','$_POST[kebele]','$_POST[name1]','$_POST[fname1]','$_POST[age1]','$_POST[sex1]','$_POST[accusedID]','$_POST[kebele1]','$imgContent','$_POST[chilot]')";
$retval = mysqli_query($db, $sql);
if($sql){
 echo '<script type="text/javascript">alert(" Register successfully!!");window.location=\'1case_registera.php\';</script>';
}
if(!$retval ) { 
die('Could not enter data: '. mysqli_error($db));
require_once '1case_registera.php'; 
 }
 }
	}                       
 ?>				
 

