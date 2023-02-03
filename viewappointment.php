<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php	
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("dtcms", $con);
$sql="select * FROM appointment WHERE case_id='$_POST[case_id]' || judge_id='$_POST[judge_id]' && appointment_date='$_POST[date]' ";
echo "<table width='100%'border=1>
<tr>
<th>Case ID</th>
<th>Judge ID</th>
<th>Registered Date</th>
<th>Appointment Date</th>
<th>Chilot</th>
</tr>";
$mydata=mysql_query($sql,$con);

while($record=mysql_fetch_array($mydata)){
echo "<form action=viewapp.php method=post>";
echo "<tr>";
echo "<td width='100'>" .   $record['case_id']  .  " </td>";
echo "<td width='100'>" .    $record['judge_id']  .  " </td>";
echo "<td width='100'>" .    $record['register_date']  . "</td>";
echo "<td width='100'>" .    $record['appointment_date']  . "</td>";
echo "<td width='100'>" .   $record['chilot']  .  "</td>";
echo "</tr>";
echo "</form>";
 }
 echo "</table>";
mysql_close($con);

?>

</body>
</html>
