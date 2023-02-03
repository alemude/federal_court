<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update account</title>
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
$updatequery="update advocators set AdvocatorID='$_POST[AdvocatorID]',FirstName='$_POST[FirstName]',MiddleName='$_POST[MiddleName]', LastName='$_POST[LastName]',Sex='$_POST[Sex]',Age='$_POST[Age]',Email='$_POST[Email]',Wereda='$_POST[Wereda]',City='$_POST[City]',Kebele='$_POST[Kebele]',HouseNumber='$_POST[HouseNumber]', PhoneNumber='$_POST[PhoneNumber]', Status='$_POST[Status]', Description='$_POST[Description]' WHERE AdvocatorID='$_POST[AdvocatorID]'";
mysql_query($updatequery,$con);
}
if(isset($_POST['delete'])){
$deletequery="delete FROM advocators WHERE AdvocatorID='$_POST[AdvocatorID]'";
mysql_query($deletequery,$con);
}
$sql="select * FROM advocators WHERE AdvocatorID='$_POST[AdvocatorID]'";
$mydata=mysql_query($sql,$con);
echo "<table border=1>
<tr>
<th>Advocator_id </th>
<th>first_name</th>
<th>middle_name</th>
<th>last_name</th>
<th>sex</th>
<th>Age</th>
<th>e_mail</th>
<th>wereda</th>
<th>city</th>
<th>kebele</th>
<th>house_number</th>
<th>phone</th>
<th>status</th>
<th>description</th>
</tr>";
while($record=mysql_fetch_array($mydata)){
echo "<form action=updateaccount.php method=post>";
echo "<tr>";
echo "<td>" .   "<input type= text name=AdvocatorID value=" . $record['AdvocatorID']  .  " </td>";
echo "<td>" .   "<input type= text name=FirstName value=" . $record['FirstName']  .  " </td>";
echo "<td>" .   "<input type= text name=MiddleName value=" . $record['MiddleName']  .  " </td>";
echo "<td>" .   "<input type= text name=LastName value=" . $record['LastName']  .  " </td>";
echo "<td>" .   "<input type= text name=Sex value=" . $record['Sex']  .  " </td>";
echo "<td>" .   "<input type= text name=Age value=" . $record['Age']  .  " </td>";
echo "<td>" .   "<input type= text name=Email value=" . $record['Email']  .  " </td>";
echo "<td>" . "<input type= text name=Wereda value=" . $record['Wereda'] .  " </td>";
echo "<td>" . "<input type= text name=City value=" . $record['City'] .  " </td>";
echo "<td>" .   "<input type= text name=Kebele value=" . $record['Kebele']  .  " </td>";
echo "<td>" . "<input type= text name=HouseNumber value=" . $record['HouseNumber'] .  " </td>";
echo "<td>" .   "<input type= text name=PhoneNumber value=" . $record['PhoneNumber']  .  " </td>";
echo "<td>" .   "<input type= text name=Status value=" . $record['Status']  .  " </td>";
echo "<td>" .   "<textarea name=Description cols=15 rows=1 value=>" . $record['Description']  . "</textarea>" . " </td>";
echo "<td>" . "<input type= submit name=update value=  update" . " </td>";
echo "<td>" . "<input type=submit name=delete value=  delete" .  " </td>";
echo "</tr>";
echo "</form>";
 }
 echo"</table>";
  echo"</table>";
mysql_close($con);
?>
</body>
</html>

 