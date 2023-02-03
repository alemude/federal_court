<html>
<header>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="searchcase.php" method="post">
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  style="font-size:20" placeholder="Search by case ID" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
</form>
<?php 
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$conn){
		die('Error - '.mysqli_connect_error($conn));
	}
 
$sqs= "SELECT  * FROM cases";
	mysqli_select_db($conn, 'brcourt');
	if($result = mysqli_query($conn, $sqs)){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		while($row = mysqli_fetch_assoc($result)){
		
		echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:white;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Case ID is:&nbsp;".$row['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."Register date:".$row['date']."
	 <br>"." Case type:".$row['c_type']."
     <br>"." Accuser name:".$row['name']."
	 <br>"." Accuser father name:".$row['fname']."
	 <br>"." Accuser Age:".$row['age']."
	 <br>"." Accuser sex:".$row['sex']."
	 <br>"." Accuser ID:".$row['accuserID']."
	 <br>"." Accuser Kebele:".$row['kebele']."
	  <br>"."Accused name:".$row['name1']."
	  <br>"."Accused father name:".$row['fname1']."
	 <br>"." Accused Age:".$row['age1']."
	  <br>"."Accused sex:".$row['sex1']."
	  <br>"."Accused ID:".$row['accusedID']."
	  <br>"."Accused Kebele:".$row['kebele']."
      <br>"."Description paper:".$row['image']."
      <br>"."Advocator:".$row['advocator']."".
      
"</p>".
"</details>"."
</article>"."</form>"."</td><td>";
echo "<button style='height:40px;width:60px;border-radius:20px;background-color:green;border-color:red;color:white'>Asign:</button></td></tr><table>";
}
}
?>  
</body>
</html>
