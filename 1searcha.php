<html>
<header>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="1searcha.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:60%;height:60%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:10%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">
ምን መፈለግ እንደሚፈልጉ ያስገቡ</p>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="እዚህ ያስገቡ" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="ያስገቡ" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
<?php
require_once 'dbConfiga.php';
session_start();
if(isset($_POST['search'])) {
	$k=0;
	$search=$_POST['search'];
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){	
If($search==$row1['caseID']||$search==$row1['name']||$search==$row1['c_type']||$search==$row1['sex']||$search==$row1['age']||$search==$row1['accuserID']||$search==$row1['kebele']||$search==$row1['name1']||$search==$row1['age1']||$search==$row1['sex1']||$search==$row1['accusedID']||$search==$row1['kebele1']){
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:Silver;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."ፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን እይ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>የመመዝገቢያ ቀን:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> የፋይል አይነት:</p>".$row1['c_type']."
     <br>"."<p style='color:blue'> የከሳሽ ስም:</p>".$row1['name']."&nbsp&nbsp".$row1['fname']."
	 <br>"." <p style='color:blue'>የከሳሽ እድሜ:</p>".$row1['age']."
	 <br>"." <p style='color:blue'>የከሳሽ ፆታ:</p>".$row1['sex']."
	 <br>"."<p style='color:blue'> የከሳሽ መለያ:</p>".$row1['accuserID']."
	 <br>"." <p style='color:blue'>የከሳሽ ቀበሌ:</p>".$row1['kebele']."
 <br>"."<p style='color:blue'> የተከሳሽ ስም:</p>".$row1['name1']."&nbsp&nbsp".$row1['fname1']."
	 <br>"." <p style='color:blue'>የተከሳሽ እድሜ:</p>".$row1['age1']."
	  <br>"."<p style='color:blue'>የተከሳሽ ፆታ:</p>".$row1['sex1']."
	  <br>"."<p style='color:blue'>የተከሳሽ መለያ:</p>".$row1['accusedID']."
	  <br>"."<p style='color:blue'>የተከሳሽ ቀበሌ:</p>".$row1['kebele']."
<br>"."<p style='color:blue'>ችሎት ቁጥር:</p>".$row1['chilot']."
      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የዳኛ መለያ:</p>".$row1['judgeID'].""."
	   <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>የተከፈተ ፋይል</td></tr><table>";
}	
}
}
	$search=$_POST['search'];
$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){	
If($search==$row1['caseID']||$search==$row1['name']||$search==$row1['c_type']||$search==$row1['sex']||$search==$row1['age']||$search==$row1['accuserID']||$search==$row1['kebele']||$search==$row1['name1']||$search==$row1['age1']||$search==$row1['sex1']||$search==$row1['accusedID']||$search==$row1['kebele1']){
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:pink;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን እይ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>የመመዝገቢያ ቀን:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> የፋይል አይነት:</p>".$row1['c_type']."
     <br>"."<p style='color:blue'> የከሳሽ ስም:</p>".$row1['name']."&nbsp&nbsp".$row1['fname']."
	 <br>"." <p style='color:blue'>የከሳሽ እድሜ:</p>".$row1['age']."
	 <br>"." <p style='color:blue'>የከሳሽ ፆታ:</p>".$row1['sex']."
	 <br>"."<p style='color:blue'> የከሳሽ መለያ:</p>".$row1['accuserID']."
	 <br>"." <p style='color:blue'>የከሳሽ ቀበሌ:</p>".$row1['kebele']."
 <br>"."<p style='color:blue'> የተከሳሽ ስም:</p>".$row1['name1']."&nbsp&nbsp".$row1['fname1']."
	 <br>"." <p style='color:blue'>የተከሳሽ እድሜ:</p>".$row1['age1']."
	  <br>"."<p style='color:blue'>የተከሳሽ ፆታ:</p>".$row1['sex1']."
	  <br>"."<p style='color:blue'>የተከሳሽ መለያ:</p>".$row1['accusedID']."
	  <br>"."<p style='color:blue'>የተከሳሽ ቀበሌ:</p>".$row1['kebele']."
<br>"."<p style='color:blue'>የችሎት ቁጥር:</p>".$row1['chilot']."
      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>የተሰየመ ፋይል የለም</td></tr><table>";
}	
}
}	

$search=$_POST['search'];
$sqs= "SELECT  * FROM createaccount";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['id']||$search==$row1['first_name']||$search==$row1['email']||$search==$row1['sex']||$search==$row1['age']||$search==$row1['status']||$search==$row1['p_number']){
	$k=1;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:#ff9999;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የሰራተኛ መለያ:&nbsp;".$row1['id']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን እይ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>የመመዝገቢያ ቀን:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> ሙሉ ስም:</p>".$row1['first_name']."&nbsp;&nbsp;".$row1['last_name']."
	 	 <br>"." <p style='color:blue'>የስራ ሁኔታ:</p>".$row1['status']."
	 <br>"." <p style='color:blue'> እድሜ:</p>".$row1['age']."
	 <br>"." <p style='color:blue'> ፆታ:</p>".$row1['sex']."
	 <br>"."<p style='color:blue'> ኢሜይል:</p>".$row1['email']."
	 <br>"." <p style='color:blue'>ስልክ ቁጥር:</p>".$row1['p_number'].
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>Employee</td></tr><table>";

}	
}
if($k==0)echo "<script type='text/javascript'>
alert('ታዛማጅ ፋይል የለም! ');
</script>";
}
 
	
}
?>  
</body>
</html>

