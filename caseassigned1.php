<html>
<div style="font-size:35px;color:green;font-weight:bold;text-align:center">The bellow cases are assigned to you</div>
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
if(($row1['status']=='civil judge'||$row1['status']=='criminal judge')&&$row1['user_name']==$_SESSION['user_name']){
	$judgeID=$row1['id'];
  $sqs= "SELECT  * FROM assignedcases WHERE judgeID='$judgeID'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){

	
		?>
 <center>
<?php 
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

      <br>"."<p style='color:blue'>Description paper:</p>".'<img src="data:image/png;base64,'.base64_encode($row1['image']). '">'."
     <br>"."<p style='color:blue'>Accuser Advocator ID:</p>".$row1['accuser_advo_ID'].""."
	  <br>"."<p style='color:blue'>Accused Advocator ID:</p>".$row1['accused_advo_ID']."".
    "</p>".
"</details>"."
</article>"."</form>"."</td><td></tr><table>";
 ?>
                <br>
			
	<?php echo $row1['status'];}} }}}?>
	</center>

        <?php endif ?>


