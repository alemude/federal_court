<html>
<header>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="casetoadvocator.php" method="post">
<h2>Enter your ID to get assigned cases</h2>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="Write here" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
</form>
</body>
</html>
<?php
if(isset($_POST['search'])){
require_once 'dbConfig.php';
	
	$k=0;
	$search=$_POST['search'];
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['accuser_advo_ID']||$search==$row1['accused_advo_ID']){
echo "<p style='font-size:30px;font-weight:bold'>The cases bellow are assigned to you.</p><br>";	
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:#F5FFFA;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Case ID is:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>Register date:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> Case type:</p>".$row1['c_type']."
     <br>"."<p style='color:blue'> Accuser name:</p>".$row1['name']."&nbsp&nbsp".$row1['fname']."
	 <br>"." <p style='color:blue'>Accuser Age:</p>".$row1['age']."
	 <br>"." <p style='color:blue'>Accuser sex:</p>".$row1['sex']."
	 <br>"."<p style='color:blue'> Accuser ID:</p>".$row1['accuserID']."
	 <br>"." <p style='color:blue'>Accuser Kebele:</p>".$row1['kebele']."
 <br>"."<p style='color:blue'> Accused name:</p>".$row1['name1']."&nbsp&nbsp".$row1['fname1']."
	 <br>"." <p style='color:blue'>Accused Age:</p>".$row1['age1']."
	  <br>"."<p style='color:blue'>Accused sex:</p>".$row1['sex1']."
	  <br>"."<p style='color:blue'>Accused ID:</p>".$row1['accusedID']."
	  <br>"."<p style='color:blue'>Accused Kebele:</p>".$row1['kebele']."
	  	  <br>"."<p style='color:blue'>Judge ID:</p>".$row1['judgeID']."

      <br>"."<p style='color:blue'>Description paper:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'.
    "</p>".
"</details>"."
</article>"."</form>"."</td><td></tr><table>";
	$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['accuser_advo_ID']||$search==$row1['accused_advo_ID']){
echo "<p style='font-size:30px;font-weight:bold'>The cases bellow are assigned to you.</p><br>";	
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:#F5FFFA;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Case ID is:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>Register date:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> Case type:</p>".$row1['c_type']."
     <br>"."<p style='color:blue'> Accuser name:</p>".$row1['name']."&nbsp&nbsp".$row1['fname']."
	 <br>"." <p style='color:blue'>Accuser Age:</p>".$row1['age']."
	 <br>"." <p style='color:blue'>Accuser sex:</p>".$row1['sex']."
	 <br>"."<p style='color:blue'> Accuser ID:</p>".$row1['accuserID']."
	 <br>"." <p style='color:blue'>Accuser Kebele:</p>".$row1['kebele']."
 <br>"."<p style='color:blue'> Accused name:</p>".$row1['name1']."&nbsp&nbsp".$row1['fname1']."
	 <br>"." <p style='color:blue'>Accused Age:</p>".$row1['age1']."
	  <br>"."<p style='color:blue'>Accused sex:</p>".$row1['sex1']."
	  <br>"."<p style='color:blue'>Accused ID:</p>".$row1['accusedID']."
	  <br>"."<p style='color:blue'>Accused Kebele:</p>".$row1['kebele']."

      <br>"."<p style='color:blue'>Description paper:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'.
    "</p>".
"</details>"."
</article>"."</form>"."</td><td></tr><table>";

	}
}		
}}
}}
if($k==0)echo "<script type='text/javascript'>
alert('No result found! ');
</script>";
}

?>  

