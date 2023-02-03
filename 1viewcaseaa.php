<html>
<header>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="1viewcaseaa.php" method="post">
<h2>የሚፈልጉትን ለመፈለግ መለያ ያስገቡ</h2>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="ከዚህ ላይ ይጻፉ" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
</form>
</body>
</html>
<?php
if(isset($_POST['search'])){
require_once 'dbConfiga.php';
	
	$k=0;
	$search=$_POST['search'];

$sqs= "SELECT  * FROM cases ORDER BY caseID DESC";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['caseID']){
	$k=1;
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<10){
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:orange;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";

echo "
</td><td><p style='color:green;font-size:20px;font-weight:bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ገና ነው($value&nbsp;ቀን)</p></td></tr><table>";
}
else if($value>=10 && $value<=15){
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:orange;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";

echo "
</td><td><p style='color:orange;font-size:20px;font-weight:bold'>መታየት አለበት($value&nbsp;ቀን)</p></td></tr><table>";
}
else if($value>15){
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:orange;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";

echo "
</td><td><p style='color:red;font-size:20px;font-weight:bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ማስጠንቀቂያ($value&nbsp;ቀን)</p></td></tr><table>";

	}
else{
echo "NO case yet";
}}}
}	
}
  
if(isset($_POST['search'])){
require_once 'dbConfiga.php';
	
	$a=0;
	$search=$_POST['search'];

$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
If($search==$row1['caseID']){
	$a=1;
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:orange;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";
echo "
</td><td><p style='color:green;font-size:20px;font-weight:bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ተከፍቷል($value&nbsp;ቀን)</p></td></tr><table>";
}
}}
if($k==0 && $a==0)echo "<script type='text/javascript'>
alert('የለም! ');
</script>";
}
	?> 
<?php 
require_once 'dbConfiga.php';
$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
	
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<10){
echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:white;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";

echo "
</td><td><p style='color:green;font-size:20px;font-weight:bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ገና ነው($value&nbsp;ቀን)</p></td></tr><table>";
}
else if($value>=10 && $value<=15){
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:white;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";

echo "
</td><td><p style='color:orange;font-size:20px;font-weight:bold'>መታየት አለበት($value&nbsp;ቀን)</p></td></tr><table>";
}
else if($value>15){
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:white;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";

echo "
</td><td><p style='color:red;font-size:20px;font-weight:bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ማስጠንቀቂያ($value&nbsp;ቀን)</p></td></tr><table>";

	}
else{
echo "NO case yet";
	}}}
?> 
<?php 
require_once 'dbConfiga.php';
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
	
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:75%;height:5%; background-color:white;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለያ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉን ይዩ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>መመዝገቢያ ቀን:</p>".$row1['date']."
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

      <br>"."<p style='color:blue'>የማብራሪያ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
      <br>"."<p style='color:blue'>የከሳሽ ጠበቃ መለያ:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>የተከሳሽ ጠበቃ መለያ:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td>";
echo "
</td><td><p style='color:green;font-size:20px;font-weight:bold'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ተከፍቷል($value&nbsp;ቀን)</p></td></tr><table>";
}
}	
?>

