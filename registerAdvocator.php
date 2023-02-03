<?php 
session_start();
?>
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
$date=$_POST['date'];
$A=$_POST['fname'];
$M=$_POST['mname'];
$B=$_POST['lname'];
$C=$_POST['sex'];
$CC=$_POST['age'];
$D=$_POST['email'];
$E=$_POST['phone'];
$K=$_POST['kebele'];
$F=$_POST['woreda'];
$Ci=$_POST['city'];
$G=$_POST['h_number'];
$GG=$_POST['status'];
$datec=date('Y/m/d');
$AA=$_POST['description'];
$date=$_POST['date'];	 
require_once 'dbConfig.php';
 if($date>date('Y/m/d')){
	 echo '<script type="text/javascript">alert("Failed!! entered invalid date.");window.location=\'1advocator_registration.php\';</script>'; 
 }
 else{
 $sql="INSERT INTO advocators(fname,mname,lname,sex,age,email,phone,woreda,city,kebele,date,image,h_number,description,status) VALUES ('$A','$M','$B','$C','$CC','$D','$E','$F','$Ci','$K','$date','$imgContent','$G','$AA','$GG') ORDER BY accusedID DESC LIMIT 1";
$retval = mysqli_query($db, $sql);
if($sql){
 echo '<script type="text/javascript">alert(" Register successfully!!");window.location=\'1advocator_registration.php\';</script>';
}
if(!$retval ) { 
die('Could not enter data: '. mysqli_error($db));
require_once '1advocator_registration.php'; 
 }
 }                      
 ?>				
 

