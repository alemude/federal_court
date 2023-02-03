<html>
<head>
<link rel="stylesheet" href="common/css/all.css" >

<title>ዉሳኔ ማያ</title>
</head>

<body>
<form action="viewdecisionda.php" method="post">
<h2>መፈለጊያውን ያስገቡ</h2>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="Write here" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
<?php
session_start();
if(isset($_POST['search'])) {
require_once 'dbConfiga.php';
	$k=0;
	$search=$_POST['search'];
$sqs= "SELECT  * FROM decision";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
	If($search==$row1['caseId']||$search==$row1['rdate']||$search==$row1['casetype']||$search==$row1['accuser']||
	$search==$row1['defender']||$search==$row1['judge']){
	$k=1;
echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:50%;height:5%; background-color:orange;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Case ID is:&nbsp;".$row1['caseId']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን እይ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
		  
			<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> የውሳኔ ቀን :</p>".$row1['rdate']."<br>
			
			<b style= 'font-size:25px;'><br>
			<p style='color:blue'> የፋይል መለዮ :</p>".$row1['casetype']."<br>
			<b style= 'font-size:25px;'><br>
			<p style='color:blue'> ከሳሽ:</p>".$row1['accuser']."&nbsp;".$row1['amname']."&nbsp;".$row1['alname']."<br>
			<b style= 'font-size:25px;'><br><p style='color:blue'> ጾታ :</p>".$row1['asex']."<br>
			<b style= 'font-size:25px;'><br><p style='color:blue'> ተከሳሽ :</p>".$row1['defender']."&nbsp;".$row1['dmname']."&nbsp;".$row1['dlname']."<br>
		<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> ጾታ :</p>".$row1['dsex']."<br>
			
			<br><p style='color:blue'>ገላጭ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
			
			<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> ዳኛ :</p>".$row1['judge']."<br>
		</details>"."
</article>"."</form>"."</td><td></td></tr><table>";

}
}	
}
if($k==0)
	{echo "<script type='text/javascript'>
alert('ይህ ዉሳኔ የለም ');
</script>";
}
}
?>  
</body>
</html>
