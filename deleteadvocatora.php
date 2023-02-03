<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<form>
 <input style="width:7%;height:3%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="መመለስ !" onclick="history.go(-1)">
</form>
<form action="deleteadvocatora.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:60%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:5px;color:black;font-size:30px;font-weight:bold">ጠበቃ  ለማጥፋት  ከታች  ያለውን  ይሙሉ</p>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold" name="id" type="text" placeholder="የጠበቃ መለዮ  ያስገቡ" required/><br><br>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:50%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px" name="submit" type="submit" value="ማጥፋት"/>
</form>
</body>
</html>
<?php
 session_start();
if(isset($_POST['id'])) {
require_once 'dbconfiga.php';
	$id=$_POST['id'];
	$k=0;
    $sqs= "SELECT  * FROM advocators WHERE advo_ID ='$id'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
		$k=1;
If($id==$row['advo_ID']){
	$sql="DELETE FROM advocators WHERE advo_ID='$id'" ;
    
if (mysqli_query($db, $sql)) {
echo "<script type='text/javascript'>
alert('መረጃው  ጠፍቷል ');
</script>";	
} else {
  echo "ችግር  አለው : " . mysqli_error($db);
}
}

else
echo "<script type='text/javascript'>
alert('አልጠፋም የተሳሳተ መለዬ አስገብተዋል');
</script>";	
}
if($k==0)
echo "<script type='text/javascript'>
alert('አልጠፋም።የተሳሳተ መለዬ አስገብተዋል');
</script>";	

	
	}
mysqli_close($db);
}
?> 