<html>
<body>
<form>
 <input style="width:7%;height:7%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:15px" type="button" value="ተመለስ!" onclick="history.go(-1)">
</form>
 <form method="POST" action="postTexta.php" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:65%; background-color:Silver;border-radius:4px;color:black;font-weight:bold">
 
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:10%; background-color:yellow;border-radius:4px;color:black;font-size:20px;font-weight:bold">
መልቀቅ የፈለጉትን ጽሁፍ ይጻፉ</p>

<textarea <p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:white;border-radius:4px;color:black;font-size:20px;font-weight:bold" placeholder="Typing here" name="text" required></textarea><br><br>
<p><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:10%; background-color:blue;border-radius:4px;color:white;font-size:20px;font-weight:bold" type="submit" name="submit" value="Post">
</form>
</body>
</html>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$db){
		die('Error - '.mysqli_connect_error($db));
	} 
	if(isset($_POST['text'])){
$sql="INSERT INTO informations(text,created) VALUES('$_POST[text]',NOW())";
$retval = mysqli_query($db, $sql);
if($retval ) { 
echo "<script type='text/javascript'>
alert('ተልኳል።');
</script>";
}
else { 
die('አልተላከም: '. mysqli_error($db));
	}}
?>