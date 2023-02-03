
<?php
$date=$_POST['date'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('አልተገናኘም:'.mysql_error());
}
mysql_select_db("dtcms", $con);
$query_admin = "SELECT * FROM appointment where appointment_date='$date'";
$admin = mysql_query($query_admin, $con) or die(mysql_error());
$row_admin = mysql_fetch_assoc($admin);
$totalRows_admin = mysql_num_rows($admin);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {font-size: 18px; font-weight: bold; color: #6666CC; }
.style7 {
	color: #9933FF;
	font-weight: bold;
	font-size: 18px;
}
.style9 {font-size: 24px}
.style11 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<h1></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Manager Account <br />
<form id="form1" name="form1" method="post" action="">
  <table width="1000" border="1">
    <tr>
	 
     
       <td width="85" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">የፋይል መለዮ </span></td>
      <td width="86" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">የዳኛው መለዮ</span></td>
      <td width="85" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">የምዝገባ ቀን</span></td>
	   <td width="24" bordercolor="#9900CC" bgcolor="#999999"><span class="style7">የቀጠሮ ቀጠሮ</span></td>
	     <td width="24" bordercolor="#9900CC" bgcolor="#999999"><span class="style7">ችሎት </span></td>
      
    </tr>   
     <?php do { ?>
		 <tr>
      
       <td><?php echo $row_admin['case_id']; ?></td>
      <td><?php echo $row_admin['judge_id']; ?></td>
      <td><?php echo $row_admin['register_date']; ?></td>
	    <td><?php echo $row_admin['appointment_date']; ?></td>
		 <td><?php echo $row_admin['chilot']; ?></td>
    </tr>
	<?php } while ($row_admin = mysql_fetch_assoc($admin)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($admin);
?>
