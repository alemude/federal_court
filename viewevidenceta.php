<html>
<div style="font-size:35px;color:green;font-weight:bold;text-align:center">ከታች ያሉት ፋይሎች የተመዘገቡ የምስክር መረጃ ናቸው</div>
<header>
<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >
</header>
<body>
<form action="viewevidenceta.php" method="post" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:60%;height:20%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:10%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">
ለመፈለግ ያሰቡትን ያስገቡ</p>
<table border="1" style="background-color:black;height:20"><tr>
<td ><input  name="search" style="font-size:20" placeholder="ከዚህ ላይ ይፃፉ" maxLength="50" type="text" required ></td> 
<td>
 <button type ="submit" name="submit" <i style="color:blue;font-size:30" class="fa-solid fa-search"></i> </button></td>
</tr></table>
<html>
<?php
require_once 'dbConfiga.php';
if(isset($_POST['search'])) {
	$k=0;
	$search=$_POST['search'];
$sqs= "SELECT  * FROM evidence";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){	
If($search==$row1['caseID']||$search==$row1['pfname']||$search==$row1['type']||$search==$row1['date']||$search==$row1['dfname']||$search==$row1['maker']){
	$k=1;
				echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:50%;height:5%; background-color:orange;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይሉ መለዮ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉንም እይ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>የምዝገባ ቀን:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> የፋይል አይነት:</p>".$row1['type']."
     <br>"."<p style='color:blue'> የከሳሽ ስም:</p>".$row1['pfname']."&nbsp&nbsp".$row1['pmname']."&nbsp&nbsp".$row1['plname']."
	 <br>"." <p style='color:blue'>ፆታ:</p>".$row1['psex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['padd']."
	 <br>"."<p style='color:blue'>የተከሳሽ ስም:</p>".$row1['dfname']."&nbsp&nbsp".$row1['dmname']."&nbsp&nbsp".$row1['dlname']."
	 	 <br>"." <p style='color:blue'>ፆታ:</p>".$row1['dsex']."
	 <br>"." <p style='color:blue'>Defender አድራሻ:</p>".$row1['daddress']."
	 	 <br>"."<p style='color:blue'>የመጀመሪያ ምስክር:</p>".$row1['wfname']."&nbsp&nbsp".$row1['wmname']."&nbsp&nbsp".$row1['wlname']."
	 	 <br>"." <p style='color:blue'> ፆታ:</p>".$row1['wsex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['waddress']."
	 	 	 <br>"."<p style='color:blue'>ሁለተኛ ምስክር:</p>".$row1['wifname']."&nbsp&nbsp".$row1['wimname']."&nbsp&nbsp".$row1['wilname']."
	 	 <br>"." <p style='color:blue'> ፆታ፣</p>".$row1['wisex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['wiaddress']."
	 	 	 	 <br>"."<p style='color:blue'>ሶስተኛ ምስክር:</p>".$row1['witfname']."&nbsp&nbsp".$row1['witmname']."&nbsp&nbsp".$row1['witlname']."
	 	 <br>"." <p style='color:blue'> ፆታ:</p>".$row1['witsex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['witaddress']."
	  <br>"." <p style='color:blue'>ዳኛ:</p>".$row1['maker']."
      <br>"."<p style='color:blue'>ገላጭ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'.
    "</p>".
"</details>"."
</article>"."</form>"."</td><td><br></td></tr><table>";
}}}
if($k==0){
	echo '<script type="text/javascript">alert("ፋይሉ አልተገኘም!!");</script>';
}
}
?>
<?php
  require_once 'dbconfiga.php';
  $sqs= "SELECT  * FROM evidence ORDER BY date DESC";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
				echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:50%;height:5%; background-color:Silver;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:10px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይሉ መለዮ:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ሁሉንም እይ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>የምዝገባ ቀን:</p>".$row1['date']."
	 <br>"."<p style='color:blue'> የፋይል አይነት:</p>".$row1['type']."
     <br>"."<p style='color:blue'> የከሳሽ ስም:</p>".$row1['pfname']."&nbsp&nbsp".$row1['pmname']."&nbsp&nbsp".$row1['plname']."
	 <br>"." <p style='color:blue'>ፆታ:</p>".$row1['psex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['padd']."
	 <br>"."<p style='color:blue'>የተከሳሽ ስም:</p>".$row1['dfname']."&nbsp&nbsp".$row1['dmname']."&nbsp&nbsp".$row1['dlname']."
	 	 <br>"." <p style='color:blue'>ፆታ:</p>".$row1['dsex']."
	 <br>"." <p style='color:blue'>Defender አድራሻ:</p>".$row1['daddress']."
	 	 <br>"."<p style='color:blue'>የመጀመሪያ ምስክር:</p>".$row1['wfname']."&nbsp&nbsp".$row1['wmname']."&nbsp&nbsp".$row1['wlname']."
	 	 <br>"." <p style='color:blue'> ፆታ:</p>".$row1['wsex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['waddress']."
	 	 	 <br>"."<p style='color:blue'>ሁለተኛ ምስክር:</p>".$row1['wifname']."&nbsp&nbsp".$row1['wimname']."&nbsp&nbsp".$row1['wilname']."
	 	 <br>"." <p style='color:blue'> ፆታ፣</p>".$row1['wisex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['wiaddress']."
	 	 	 	 <br>"."<p style='color:blue'>ሶስተኛ ምስክር:</p>".$row1['witfname']."&nbsp&nbsp".$row1['witmname']."&nbsp&nbsp".$row1['witlname']."
	 	 <br>"." <p style='color:blue'> ፆታ:</p>".$row1['witsex']."
	 <br>"." <p style='color:blue'>አድራሻ:</p>".$row1['witaddress']."
	  <br>"." <p style='color:blue'>ዳኛ:</p>".$row1['maker']."
      <br>"."<p style='color:blue'>ገላጭ ወረቀት:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'.
    "</p>".
"</details>"."
</article>"."</form>"."</td><td><br></td></tr><table>";
	}}
 ?>
 