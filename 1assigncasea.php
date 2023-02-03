	
	<html><head><link rel="stylesheet" href="common/css/all.css" >
	<head>
	<body>
<form>
 <input style="width:7%;height:7%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="ይመለሱ" onclick="history.go(-1)">
</form>	
<?php 
$count=0;
require_once 'dbConfiga.php';
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db,$sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$count++;
	}}

$k=0;
$m="";	
$sqs= "SELECT  * FROM createaccount";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$m=$row1['id'];
 if($row1['status']=='civil judge'||$row1['status']=='criminal judge'){	
 
 
 $sqsa= "SELECT  * FROM assignedcases where judgeID='$m'";
	mysqli_select_db($db, 'brcourt');
	if($resulta = mysqli_query($db,$sqsa)){
	while( mysqli_fetch_assoc($resulta)){
		$k++;
	}
	
	}
	echo 
	  "<table style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:60%;height:20%; background-color:white;border-radius:10px;color:black;'><tr><td>
	  <p style='font-size:20px;background-color:Silver;color:black;font-weight:bold' >Full Name:".$row1['first_name']."&nbsp;&nbsp;".
	  $row1['last_name']."<br>Judge Type:".$row1['status']."<br>Employee ID is:&nbsp;".$row1['id']."<br></P></td><td>
	  
	  <a href='1assignedcasea.php'>
	  
	  <form action='1assigna.php' method='post'>
	  <input type='submit' value='Select'	  style='height:40px;width:70%;border-radius:font-weight:bold;20px;background-color:green;
	  border-radius:10px;font-size:20px;font-weight:bold;color:white'/>
	  </a></td><td><div style='color:red;font-size:20px'>".$k."</div><i style='color:blue;font-size:25px'class='fa-solid fa-shopping-bag'></i><br>active cases</td></tr></table>";

$k=0;	
}	

}
	
	}
?>  
</body>
</html>