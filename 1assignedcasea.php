<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$db){
		die('Error - '.mysqli_connect_error($db));
	}  
$sql="INSERT INTO assigned(caseID,c_type,fname,lname,status,date) VALUES('$_POST[caseID]','$_POST[c_type]','$_POST[fname]','$_POST[lname]','$_POST[status]','$_POST[date]')";
$retval = mysqli_query($db, $sql);
if($retval ) { 
echo "<script type='text/javascript'>
alert('በትክክል ሰይመዋል');
</script>";
}
if(!$retval ) { 
die('Could not enter data: '. mysqli_error($db));
 }
?>
</body>
</html>
