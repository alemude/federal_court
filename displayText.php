<html>
<body>
<form  style="box-shadow:rgba(0,0,0,1) 0px 0px 10px; background-color:white;border-radius:10px;color:black;">
<table align="center">
<?php 
require_once 'dbConfig.php';
$sqs= "SELECT  text,image FROM images ";
	mysqli_select_db($db, 'brcourt');
if($result = mysqli_query($db, $sqs)){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		while($row = mysqli_fetch_assoc($result)){
		echo "<h3>".$row['text']."</h3>";
echo '<img src="data:image/png;base64,'.base64_encode($row['image']). '">';		
}
}
?>
</form>
</body>
</html>