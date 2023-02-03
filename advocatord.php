<html>
<head>
<style>
.circular_image {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  overflow: hidden;
  background-color: blue;
}
.circular_image img{
  width:100%;
}
</style>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="advocatord.php" method="post">
<h2>Enter Advocator atributes that you want to search</h2>
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

$sqs= "SELECT  * FROM advocators";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['advo_ID']||$search==$row1['fname']||$search==$row1['phone']||$search==$row1['email']||$search==$row1['status']){
	$k=1;
echo '<div class="circular_image"><img src="data:image/png;base64,'.base64_encode($row1['image']). '"></div></center>';
 
echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:30%;height:5%; background-color:white;border-radius:5px;color:black;'><tr><td>";
echo " <article><details><summary>"."<b style= 'font-size:20px;'>".$row1['fname'].'&nbsp;&nbsp;'.$row1['mname'].'&nbsp;&nbsp;'.$row1['lname']."</p><b style= 'font-size:20px;'>See more...</b></summary>
 <br>"." <p style='color:blue'>ID Number:</p>"."<b style= 'font-size:20px;'>".$row1['advo_ID']."</b>
	 <br>"." <p style='color:blue'>Age:</p>"."<b style= 'font-size:20px;'>".$row1['age']."</b>
	 <br>"." <p style='color:blue'>Sex:</p>"."<b style= 'font-size:20px;'>".$row1['sex']."</b>
	 <br>"."<p style='color:blue'> E-mail:</p>"."<b style= 'font-size:20px;'>".$row1['email']."</b>
	 <br>"." <p style='color:blue'>Woreda:</p>"."<b style= 'font-size:20px;'>".$row1['woreda']."</b>
	 <br>"." <p style='color:blue'>City:</p>"."<b style= 'font-size:20px;'>".$row1['city']."</b>
	  <br>"."<p style='color:blue'>Phone Number:</p>"."<b style= 'font-size:20px;'>".$row1['phone']."</b>
	  <br>"."<p style='color:blue'>Qualification:</p>"."<b style= 'font-size:20px;'>".$row1['status']."</b>
	  <br>"."<p style='color:blue'>About:</p>"."<b style= 'font-size:20px;'>".$row1['description']."</b>
</details>"."
</article>"."
</td>
</tr>
</table>";
 }
}	
}
if($k==0)echo "<script type='text/javascript'>
alert('No advocator  found by this ID!!!');
</script>";
}
?>
<?php
require_once 'dbConfig.php';
$k=0;
$sqs= "SELECT  * FROM advocators";
mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$k=1;
echo '<div class="circular_image"><img src="data:image/png;base64,'.base64_encode($row1['image']). '"></div></center>';

echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:30%;height:5%; background-color:white;border-radius:5px;color:black;'><tr><td>";
echo " <article><details><summary>"."<b style= 'font-size:20px;'>".$row1['fname'].'&nbsp;&nbsp;'.$row1['mname'].'&nbsp;&nbsp;'.$row1['lname']."</p><b style= 'font-size:20px;'>See more...</b></summary>
 <br>"." <p style='color:blue'>ID Number:</p>"."<b style= 'font-size:20px;'>".$row1['advo_ID']."</b>
	 <br>"." <p style='color:blue'>Age:</p>"."<b style= 'font-size:20px;'>".$row1['age']."</b>
	 <br>"." <p style='color:blue'>Sex:</p>"."<b style= 'font-size:20px;'>".$row1['sex']."</b>
	 <br>"."<p style='color:blue'> E-mail:</p>"."<b style= 'font-size:20px;'>".$row1['email']."</b>
	 <br>"." <p style='color:blue'>Woreda:</p>"."<b style= 'font-size:20px;'>".$row1['woreda']."</b>
	 <br>"." <p style='color:blue'>City:</p>"."<b style= 'font-size:20px;'>".$row1['city']."</b>
	  <br>"."<p style='color:blue'>Phone Number:</p>"."<b style= 'font-size:20px;'>".$row1['phone']."</b>
	  <br>"."<p style='color:blue'>Qualification:</p>"."<b style= 'font-size:20px;'>".$row1['status']."</b>
	  <br>"."<p style='color:blue'>About:</p>"."<b style= 'font-size:20px;'>".$row1['description']."</b>
</details>"."
</article>"."
</td>
</tr>
</table>";
 }
}
		if($k==0) echo "<center><p style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; background-color:black;border-radius:10px;font-size:30px;font-weight:bold;color:white;'>
		There is no <b style='color:blue'>Advocator</b> yet</p></center>";
		
?> 
	  <br></br>
   </body>
</html> 

