<html>
<body>
<form>
 <input style="width:7%;height:5%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:15px" type="button" value="ተመለስ!" onclick="history.go(-1)">
</form>
<form action="postImagea.php" method="post" enctype="multipart/form-data" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:55%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
   <p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:10%; background-color:yellow;border-radius:5px;color:black;font-size:20px;font-weight:bold">
መልቀቅ የሚፈልጉትን ፎቶ ይምረጡ</p>
    <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%;height:10%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" type="file" name="image" required><br><br>
    <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:15%; background-color:blue;border-radius:5px;color:white;font-size:20px;font-weight:bold" type="submit" name="submit" value="Upload">
</form>
</body>
</html>
<?php 
// Include the database configuration file  
require_once 'dbConfiga.php'; 
 
// If file upload form is submitted 
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
         
            // Insert image content into database 
            $insert = $db->query("INSERT into informations (image, created) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'ተሳክቷል'; 
                $statusMsg = "ፎቶው በሚገባ ተልኳል."; 
				echo '<script type="text/javascript">alert("ተልኳል.");</script>';
            }else{ 
                $statusMsg = "አልተላከም።አባክዎ እንደገና ይሞክሩ."; 
            }  
        }else{ 
            $statusMsg = 'ይቅርታ, የሚፈቀደው JPG, JPEG, PNG ብቻ ነው.'; 
        } 
    }else{ 
        $statusMsg = 'አባክዎን ፎቶውን ይምረጡ.'; 
    } 
} 
?>