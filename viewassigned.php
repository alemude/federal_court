
<?php
session_start();
if(!isset($_SESSION['logintype']))
header("Location:index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Assigned  Case</title>

<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
</head>

<body>
<form action="delete.php" method="POST" name="viewassigned">
<table width="37%" height="60%" align="center">
<tr><td height="31" colspan="6"><center> 
  <h2 class="style2">View Assigned Case</h2>
</center></td></tr>
<tr>
                  <td align="center"><label>assigned date:</label>      </td>
      <td>
 <?php
// Load field data into List box
$con=mysql_connect("localhost","root","") or die("Note: " . mysql_error());
$res=mysql_select_db("dtcms",$con) or die("Note: " . mysql_error());
 $res=mysql_query("select appointment_date from appointment;") or die("Note: " . mysql_error());
?>
<select name="date" size=1<select name="date" size=1  required="required"class="basetxt" tabindex="11" data-helper="Make sure you can remember it!"><p class="errmsg">Please add some more characters</p>
<?php
while($ri = mysql_fetch_array($res))
{
echo "<option value=" .$ri['appointment_date'] . ">" . $ri['appointment_date'] . "</option>";
}
echo "</select> "
?>	</td></tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="show" value="Show" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset" /></td>
</tr>
</table>
</form>
</body>
</html>
