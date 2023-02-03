<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>manage account</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con){
die("con not connect:" .  mysql_error());
}
echo"<tabie border='1'width='203'height='23'>";

mysql_select_db("dtcms",$con);

 if(isset($_POST['update'])){
$updatequery="update newcase set register_date='$_POST[register_date]',case_type = '$_POST[case_type]', first_name='$_POST[first_name]', middle_name ='$_POST[middle_name]' ,last_name='$_POST[last_name]', sex='$_POST[sex]', Age='$_POST[Age]', e_mail= '$_POST[e_mail]', country= '$_POST[country]',region= '$_POST[region]',zone= '$_POST[zone]', wereda='$_POST[wereda]', city= '$_POST[city]', ' kebele=$_POST[kebele]', house_number= '$_POST[house_number]',  phone_number='$_POST[phone_number]',court_fee= '$_POST[court_fee]', case_description='$_POST[case_description]',judge_id= '$_POST[judge_id]',advocator= '$_POST[advocator]' WHERE case_id='$_POST[case_id]'";
mysql_query($updatequery,$con);
}
if(isset($_POST['delete'])){
$deletequery="delete FROM newcase WHERE case_id='$_POST[case_id]'";
mysql_query($deletequery,$con);
}
$sql="select * FROM newcase WHERE case_id='$_POST[case_id]'";
$mydata=mysql_query($sql,$con);
echo "<table border=1>
<tr>
<th>register_date</th>
<th>case_id</th>
<th>case_type</th>
<th>first_name</th>
<th>middle_name</th>
<th>last_name</th>
<th>sex</th>
<th>Age</th>
<th>e_mail</th>
<th>country</th>
<th>region</th>
<th>zone</th>
<th>wereda</th>
<th>city</th>
<th>kebele</th>
<th>house_number</th>
<th>phone_number</th>
<th>court fee</th>
<th>case_description</th>
<th>judge_id</th>
<th>advocator</th>
</tr>";
while($row=mysql_fetch_array($mydata)){
echo "<form action=updatenewcase.php method=post>";
echo "<tr>";
echo "<td>" .  "<input type=date name=register_date value=". $row['register_date'] . " </td>";
echo "<td>" .  "<input type= text name=case_id value=" . $row['case_id'] . " </td>";
echo "<td>".   "<input type= text name=case_type value=" . $row['case_type'] . " </td>";
echo "<td>" .  "<input type= text name=first_name value=" . $row['first_name'] . " </td>";
echo "<td>" .  "<input type= text name=middle_name value=" . $row['middle_name'] . " </td>";
echo "<td>" .  "<input type= text name=last_name value=" . $row['last_name'] . " </td>";
echo "<td>" .  "<input type= text name=sex value=" . $row['sex']  .  " </td>";
echo "<td>" .   "<input type= text name=Age value=" . $row['Age'] . " </td>";	
echo "<td>" .   "<input type= text name=e_mail value=" . $row['e_mail'] . " </td>";
echo "<td>".    "<input type= text name=country value=" . $row['country'] . " </td>";
echo "<td>" .   "<input type= text name=region value=" . $row['region'] . " </td>";
echo "<td>"  .  "<input type= text name=zone value=" . $row['zone'] . " </td>";
echo "<td>"  .  "<input type= text name=wereda value=" . $row['wereda'] . " </td>";
echo "<td>"  .  "<input type= text name=city value=" . $row['city'] . " </td>";
echo "<td>" .   "<input type= text name=kebele value="  . $row['kebele'] . " </td>";
echo "<td>" .   "<input type= text name=house_number value=" . $row['house_number'] . " </td>";
echo "<td>" .  "<input type= text name=phone_number value=" . $row['phone_number'] . " </td>";
echo "<td>" .  "<input type= text name=court_fee value=" . $row['court_fee'] . " </td>";
echo "<td>".   "<input type= text name=case_description value=" . $row['case_description'] . " </td>";
echo "<td>" .  "<input type= text name=judge_id value=" . $row['judge_id'] . " </td>";
echo "<td>" .   "<input type= text name=advocator value=" . $row['advocator'] . " </td>";
echo "<td>" .   "<input type= submit name=update value=  update" . " </td>";
echo "<td>" .   "<input type=submit name=delete value=  delete" .  " </td>";
	echo "</tr>";
	echo "</form>";	
 }
 echo"</table>";
  echo"</table>";
mysql_close($con);
?>
<p><center><a href="create.php">create new account</a></center></p>
</body>
</html>
