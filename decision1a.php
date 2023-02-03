<html>
<div style="font-size:35px;color:green;font-weight:bold;text-align:center">ከታች ያለው   ፋይል የተወሰነው  በእርስዎ  ነው</div>
</html>
<?php
session_start();
  require_once 'dbconfiga.php';
if (!isset($_SESSION['user_name'])) {
	$sn=$_SESSION['user_name'];
    $_SESSION['msg'] = "ገብተዋል admin_ha.php";
    header('location: indexa.php');
}
?>
        <?php  if (isset($_SESSION['user_name'])) :
			$sn=$_SESSION['user_name'];
  $sqs= "SELECT  * FROM decision WHERE judge='$sn'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
	if($row1['judge']==$sn){	
?>
 <center>
<?php 
echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:50%;height:5%; background-color:white;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."የፋይል መለዮ :&nbsp;".$row1['caseId']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ለበለጠ  መረጃ ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
		  
			<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> የተወሰነው ለ :</p>".$row1['rdate']."<br>
			
			<b style= 'font-size:25px;'><br>
			<p style='color:blue'> የፋይል አይነት :</p>".$row1['casetype']."<br>
			<b style= 'font-size:25px;'><br>
			<p style='color:blue'> ከሳሽ :</p>".$row1['accuser']."&nbsp;".$row1['amname']."&nbsp;".$row1['alname']."<br>
			<b style= 'font-size:25px;'><br><p style='color:blue'> የከሳሽ ፆታ  :</p>".$row1['asex']."<br>
			<b style= 'font-size:25px;'><br><p style='color:blue'> ተከሳሽ :</p>".$row1['defender']."&nbsp;".$row1['dmname']."&nbsp;".$row1['dlname']."<br>
		<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> የተከሳሽ ፆታ  :</p>".$row1['dsex']."<br>
			
			<br><p style='color:blue'>ማብራሪያ  ወረቀት :</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
			
			<b style= 'font-size:25px;'><br>"
			."<p style='color:blue'> የዳኛ ስም :</p>".$row1['judge']."<br>
		</details>"."
</article>"."</form>"."</td><td></td></tr><table>";
 ?>
                <br>
			
	<?php }} }?>
	</center>

        <?php endif ?>


