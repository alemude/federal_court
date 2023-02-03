<html>
<div style="font-size:35px;color:green;font-weight:bold;text-align:center">ከታች ያሉት ፋይሎች በርስዎ የተመዘገቡ የምስክር መረጃ ናቸው</div>
</html>
<?php
session_start();
  require_once 'dbconfig.php';
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "You have to log in admin_h.php";
    header('location: index.php');
}
?>
        <?php  if (isset($_SESSION['user_name'])) :
$sn=$_SESSION['user_name'];
    $sqs= "SELECT  * FROM createaccount WHERE user_name='$sn'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
if($row1['user_name']==$_SESSION['user_name']){
	$judge=$row1['user_name'];
  $sqs= "SELECT  * FROM evidence WHERE maker='$judge'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
?>
 <center>
<?php 
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
 ?>
                <br>
			
	<?php }} }}}?>
	</center>

        <?php endif ?>