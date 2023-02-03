<html>
<body>
<form  style="box-shadow:rgba(0,0,0,1) 0px 0px 10px; background-color:white;border-radius:10px;color:black;">
<table align="center">
<?php 
require_once 'dbConfig.php';
$sqs= "SELECT  * FROM informations ORDER BY id DESC";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row = mysqli_fetch_assoc($result)){
		
echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:35%;height:5%; background-color:Silver;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."From Admin:";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
		   <b style= 'font-size:25px;'><br>"
			."<p style='color:blue'></p>".$row['text']."<br><p style='color:black'>
		   <b style= 'font-size:25px;'><br><p style='color:blue'> On:</p>".$row['created']."<br></details>"."
</article>"."</form>"."</td><td></td></tr><table>";					
echo '<img  style=
"border-radius:20px" src="data:image/png;base64,'.base64_encode($row['image']). '">'.$row['created'];	}	
}
?>
</form>
</body>
</html>