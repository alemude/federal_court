<html>
<head><a href="viewdecision.php"alin center >back</a>
	 
	

<body style="background-image:url(images/bg.jpg)">

   <style>
th {
	font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: url(images/bg_header.jpg) no-repeat;
}

th.nobg {
	border-top: 0;
	border-left: 0;
	border-right: 1px solid #C1DAD7;
	background: none;
}
td {
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	background: #fff;
	padding: 6px 6px 6px 12px;
	color:black;
}


td.alt {
	background: #F5FAFA;
	color: #B4AA9D;
}
</style> 
<body>
<!--<td width="100" height="300">&nbsp;</td>-->

<?php


	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("dtcms", $con);
	if(isset($_POST['case_id'])){
	$searchword=$_POST['case_id'];
	
	//if($searchword!="" && $searchword!=0){
	
$result=mysql_query("select* from decisioncriminalcase WHERE decision_date='$searchword'||case_id='$searchword'") or die(mysql_error());
echo "<p><font size = '15'>decision cases</font></p>";
		echo "<table >
<th>decision_date</th>
<th>registered_date</th>
<th>case_id</th>
<th>case_type</th>
<th>Accuser name</th>
<th>sex</th>
<th>age</th>
<th>accuserID</th>
<th>accused name</th>
<th>nation</th>

<th>zone</th>
<th>wereda</th>

<th>kebele</th>

<th>phone_number</th>
<th>'judge_id'</th>
<th>Advocatorid</th>
<th>e_mail</th>
<th>case description</th>
<th>accuseridea</th>
<th>accuserwitness</th>
<th>accusedidea</th>
<th>accusedwitness</th>
<th>decision</th>
</tr>";
		
		if(mysql_num_rows($result) == 0) {
			echo "<script> alert('No case Record Found');
			;</script>";
		}
		
		else {
			while($row = mysql_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['decision_date'] . "</td>";
echo "<td>" . $row['registered_date'] . "</td>";
echo "<td>" . $row['case_id'] . "</td>";
echo "<td>" . $row['case_type'] . "</td>";
echo "<td width=200>". $row['accuser name'] ."&nbsp; &nbsp;&nbsp;".  $row['accuser fname']."</td>";
echo "<td>" . $row['sex'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['accuserID'] . "</td>";	

echo "<td width=200>". $row['accused name'] ."&nbsp; &nbsp;&nbsp;".  $row['accused fname']."</td>";
echo "<td>" . $row['nation'] . "</td>";	

echo "<td>" . $row['zone'] . "</td>";
echo "<td>" . $row['wereda'] . "</td>";

echo "<td>" . $row['kebele'] . "</td>";

echo "<td>" . $row['phone_number'] . "</td>";
echo "<td>" . $row['judge_id'] . "</td>";
echo "<td>" . $row['advocator'] . "</td>";
echo "<td>" . $row['e_mail'] . "</td>";
echo "<td>" . $row['case desecription'] . "</td>";
echo "<td>" . $row['accuseridea'] . "</td>";
echo "<td>" . $row['accuserwitness'] . "</td>";
echo "<td>" . $row['accusedidea'] . "</td>";
echo "<td>" . $row['accusedwitness'] . "</td>";
echo "<td>" . $row['decition'] . "</td>";
echo "</tr>";
			
	}
}
echo "<script> alert('your search is successfull');
		</script>";
		}
	else {
	}
?>
</body>
</html>