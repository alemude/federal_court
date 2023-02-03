<html>
<header>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="2search.php" method="post">
<h2>Enter what you want to search about cases</h2>
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

$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
If($search==$row['caseID']||$search==$row['name']||$search==$row['c_type']||$search==$row['sex']||
$search==$row['age']||$search==$row['accuserID']||$search==$row['kebele']||$search==$row['name1']||$search==$row['age1']||
$search==$row['sex1']||$search==$row['accusedID']||$search==$row['kebele1']||$search==$row['accuser_advo_ID']||$search==$row['accused_advo_ID'])
{
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:pink;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Case ID is:&nbsp;".$row['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>Register date:</p>".$row['date']."
	 <br>"."<p style='color:blue'> Case type:</p>".$row['c_type']."
     <br>"."<p style='color:blue'> Accuser name:</p>".$row['name']."&nbsp&nbsp".$row['fname']."
	 <br>"." <p style='color:blue'>Accuser Age:</p>".$row['age']."
	 <br>"." <p style='color:blue'>Accuser sex:</p>".$row['sex']."
	 <br>"."<p style='color:blue'> Accuser ID:</p>".$row['accuserID']."
	 <br>"." <p style='color:blue'>Accuser Kebele:</p>".$row['kebele']."
 <br>"."<p style='color:blue'> Accused name:</p>".$row['name1']."&nbsp&nbsp".$row['fname1']."
	 <br>"." <p style='color:blue'>Accused Age:</p>".$row['age1']."
	  <br>"."<p style='color:blue'>Accused sex:</p>".$row['sex1']."
	  <br>"."<p style='color:blue'>Accused ID:</p>".$row['accusedID']."
	  <br>"."<p style='color:blue'>Accused Kebele:</p>".$row['kebele']."
<br>"."<p style='color:blue'>Accuser advocator ID:</p>".$row['accuser_advo_ID']."
<br>"."<p style='color:blue'>Accused advocator ID:</p>".$row['accused_advo_ID']."
      <br>"."<p style='color:blue'>Description paper:</p>".'<img src="data:image/png;base64,'.base64_encode($row['image']). '">'.
    "</p>".
"</details>"."
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

