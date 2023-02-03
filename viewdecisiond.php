<html>
<head>
<link rel="stylesheet" href="common/css/all.css" >

<title>View Appointment</title>
</head>

<body>
<form action="viewdecisiond.php" method="post">
<h2>Enter case ID to see Decision</h2>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="Write here" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
<?php
if(isset($_POST['search'])){
require_once 'dbConfig.php';
	
	$k=0;
	$search=$_POST['search'];
$sqs= "SELECT  * FROM decision";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['caseId']){
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:pink;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Case ID is:&nbsp;".$row1['caseId']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
		  
			<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> Decided on :</p>".$row1['rdate']."<br>
			
			<b style= 'font-size:25px;'><br>
			<p style='color:blue'> Case type :</p>".$row1['casetype']."<br>
			<b style= 'font-size:25px;'><br>
			<p style='color:blue'> Accuser :</p>".$row1['accuser']."&nbsp;".$row1['amname']."&nbsp;".$row1['alname']."<br>
			<b style= 'font-size:25px;'><br><p style='color:blue'> Accuser sex :</p>".$row1['asex']."<br>
			<b style= 'font-size:25px;'><br><p style='color:blue'> Defender :</p>".$row1['defender']."&nbsp;".$row1['dmname']."&nbsp;".$row1['dlname']."<br>
		<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> Defender sex :</p>".$row1['dsex']."<br>
			
			<br><p style='color:blue'>Description paper:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
			
			<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> Judge name :</p>".$row1['judge']."<br>
		</details>"."
</article>"."</form>"."</td><td></td></tr><table>";

}
}	
}
if($k==0)echo "<script type='text/javascript'>
alert('No result found! ');
</script>";
}
?>  
</body>
</html>
