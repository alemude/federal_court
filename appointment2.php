<html>
<head>
<link rel="stylesheet" href="common/css/all.css" >

<title>View Appointment</title>
</head>

<body>
<form action="appointment2.php" method="post">
<h2>Enter case ID to see Appointment date</h2>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="Write here" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
<?php
session_start();
if(isset($_POST['search'])) {
require_once 'dbConfig.php';
	$k=0;
	$search=$_POST['search'];
$sqs= "SELECT  * FROM appointment ORDER BY date DESC";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['caseID']){
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:50%;height:5%; background-color:Silver;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px;color:blue;background-color:white'>"."Case ID is:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>Judge ID:</p>".$row1['judgeID']."
	 <br>"."<p style='color:blue'> Appointed to:</p>".$row1['date']."at&nbsp;".$row1['time']."</details>"."
</article>"."</form>"."</td><td></td></tr><table>";

}
}
if($k==0){
	echo "<script type='text/javascript'>
alert('No result found! ');
</script>";	
}
}}
?>  
</body>
</html>
