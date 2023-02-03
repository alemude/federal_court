<?php
require_once 'dbConfig.php';
$k=0;
$sqs= "SELECT  * FROM createaccount";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
if($row1['status']=='criminal judge'){
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:pink;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Employee ID is:&nbsp;".$row1['id']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>Register date:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> Full Name:</p>".$row1['first_name']."&nbsp;&nbsp;".$row1['last_name']."
	 	 <br>"." <p style='color:blue'> Status:</p>".$row1['status']."
	 <br>"." <p style='color:blue'> Age:</p>".$row1['age']."
	 <br>"." <p style='color:blue'> sex:</p>".$row1['sex']."
	 <br>"."<p style='color:blue'> Email:</p>".$row1['email']."
	 <br>"." <p style='color:blue'>Phone number:</p>".$row1['p_number'].
    "</p>".
"</details>"."
</article>"."</form>"."</td><td></td></tr><table>";

}
	}}
		if($k==0) echo "<center><p style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; background-color:black;border-radius:10px;font-size:30px;font-weight:bold;color:white;'>
		There is no <b style='color:blue'>Criminal judge</b> yet</p></center>";
?>  


