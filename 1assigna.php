<html>
 <body>
 <form>
 <input style="width:7%;height:7%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="ይመለሱ" onclick="history.go(-1)">
</form>
<form action="insertdelete2a.php" method="POST" enctype="multipart/form-data" style="height:50%">
	<table id="container" height="60%" border="0" width="50%" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:40%; background-color:Gray;border-radius:4px;">
<tr>
<td>
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:50%; background-color:yellow;border-radius:4px;color:black;font-size:30px;font-weight:bold">ፋይሉን ለመሰየም የሚከተሉትን ይሙሉ</p>
</td></tr
<tr>
<td>
<input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:yelow;border-radius:4px;color:green;font-weight:bold" type="number" placeholder="የፋይል መለያ" name="caseID" required></td></tr>
<tr><td>
<legend color="red"><strong><h2></h2></strong></legend>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:yelow;border-radius:4px;color:green;font-weight:bold" type="text" placeholder="የዳኛ መለያ" name="judgeID" required></td></tr>
<tr><td>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:yelow;border-radius:4px;color:green;font-weight:bold" type="date" placeholder="ቀን" name="date" required></td></tr>
<tr><td>
<input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:blue;border-radius:4px;color:white;font-weight:bold;font-size:20px" type='submit' name="submit" class="style1" value='Finish'/></td></tr>
</table>
 </form>
 </body>
</html>