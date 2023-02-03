<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Advocators</title>
<style type="text/css">
<!--
.style3 {
	color: #0000FF;
	font-weight: bold;
}
.style19 {color: #9900CC}
.style24 {color: #333333}
-->
</style>
</head>

<body>
<h1>If you want advocator service select below advocator list and you can get acording to list of thier  address</h1>
<form style="background-color:#f4ffe4" action="viewadvocators.php" method="POST" name='viewadvocators' target="myframe" >
<fieldset>
<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('dtcms');
$sql="select * from advocators";
$rdata=mysql_query($sql);

while($res = mysql_fetch_array($rdata)) {
	   ?>
	  <table border="0">
<td width="5"><span class="style24">AdvocatorID</span></td>
	  <td width="233"><span class="style24"><?php echo  $res['AdvocatorID']; ?></span></td></tr>	  
	  <tr><td rowspan="8" width="150" height="150"><?php $imgpath=$res['advocator_photo'];
echo "<img src='$imgpath' height='150' width='120'>"; ?>
</td><td>&nbsp;</td></tr>
	  <tr><td>&nbsp;</td><td colspan="3"><span class="style24"><?php echo  $res['FirstName']; echo "&nbsp;&nbsp;"; echo  $res['MiddleName'];  echo "&nbsp;&nbsp;"; echo  $res['LastName']; ?></span></td>
	  </tr>
	  <tr><td></td><td><span class="style24">Sex</span></td>
	 <td width="129"><span class="style24"><?php echo  $res['Sex']; ?></span></td>
	 <td width="20">&nbsp;</td>
	  <td width="105"><span class="style24">Age</span></td>
	  <td width="233"><span class="style24"><?php echo  $res['Age']; ?></span></td></tr>
	  <tr><td>&nbsp;</td><td><span class="style24">City</span></td>
	  <td width="129"><span class="style24"><?php echo  $res['City']; ?></span></td>
	  <td width="20">&nbsp;</td>
	  <td><span class="style24">Wereda</span></td><td width="233"><span class="style24"><?php echo  $res['Wereda']; ?></span></td></tr>
	  <td><span class="style24">Kebele</span></td><td width="233"><span class="style24"><?php echo  $res['Kebele']; ?></span></td></tr>
	  <tr><td>&nbsp;</td><td width="106"><span class="style24">Status</span></td>
	  <td width="129"><span class="style24"><?php echo  $res['Status']; ?></span></td>
	  <td width="20">&nbsp;</td>
	  <TD><span class="style24">House Number</span></TD><td width="233"><span class="style24"><?php echo  $res['HouseNumber']; ?></span></td>
	  </tr>
	  <tr><td width="20">&nbsp;</td><td><span class="style24">Phone Number</span></td>
	  <td><span class="style24"><?php echo  $res['PhoneNumber']; ?></span></td><td width="20">&nbsp;</td><td><span class="style24">Email</span>
	  <td><span class="style24"><?php echo  $res['Email']; ?></span></td></tr>
	  <tr><td>&nbsp;</td><td><span class="style24">Description</span></td>
	  <td rowspan="3" colspan="4"><span class="style24"><?php echo $res['Description']; ?></span></td></tr>
	
	  
	  <hr/>
	  

	  <?php
	  }
	  ?>
	  <tr><td>&nbsp;</td></tr>
	  </table></fieldset>
</form>

</body>
</html>
