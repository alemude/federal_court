<html>
<div style="font-size:35px;color:green;font-weight:bold;text-align:center">ከታች ያለው ፋይሎች የተቀተሩት  በእርስዎ  ነው</div>
</html>
<?php
session_start();
  require_once 'dbconfiga.php';
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "You have to log in admin_ha.php";
    header('location: indexa.php');
}
?>
        <?php  if (isset($_SESSION['user_name'])) :
$sn=$_SESSION['user_name'];
    $sqs= "SELECT  * FROM createaccount WHERE user_name='$sn'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
if($row1['user_name']==$_SESSION['user_name']){
	$judgeID=$row1['id'];
  $sqs= "SELECT  * FROM appointment WHERE judgeID='$judgeID'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
?>
 <center>
<?php 
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:50%;height:5%; background-color:Silver;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px;color:blue;background-color:white'>"."Case ID is:&nbsp;".$row1['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."ለበለጠ መረጃ..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."<p style='color:blue'>የዳኛ መለያ:</p>".$row1['judgeID']."
	 <br>"."<p style='color:blue'> የቀጠሮ ቀን ለ:</p>".$row1['date']."at&nbsp;".$row1['time']."</details>"."
</article>"."</form>"."</td><td></td></tr><table>";
 ?>
                <br>
			
	<?php }} }}}?>
	</center>

        <?php endif ?>
