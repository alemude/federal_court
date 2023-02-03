<html>
<header>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="searchjudge.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:60%;height:60%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:10%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">
Enter judge ID to search</p>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="Write here" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
<?php
require_once 'dbConfig.php';
session_start();
if(isset($_POST['search'])) {
	$k=0;
$search=$_POST['search'];
$sqs= "SELECT  * FROM createaccount WHERE status='civil judge' OR status='criminal judge'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['id']){
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
}
if($k==0)echo "<script type='text/javascript'>
alert('No result found! ');
</script>";
}
 
	
}
?>  
</body>
</html>

