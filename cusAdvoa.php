<html>
 <body>
 <form>
 <input style="width:7%;height:7%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="Back" onclick="history.go(-1)">
</form>
<form action="sel_Advoa.php" method="POST" enctype="multipart/form-data" style='height:50%'>
	<table id="container" height="60%" border="0" width="50%" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:40%; background-color:silver;border-radius:4px;">
<tr>
<td>
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:4px;color:black;font-size:20px;font-weight:bold">ጠበቃ ለመመዝገብ  ከታች  ያለውን  ይሙሉ</p>
</td></tr>
<tr>
<td>
<select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:white;border-radius:4px;color:black;font-size:20px;font-weight:bold" name="user_type">
    <option disabled selected value>የደንበኛውን አይነት ይምረጡ </option>
      <option value="accuser">ከሳሽ</option>
      <option value="accused">ተከሳ</option>
      </select></td></tr>
	  <tr>
<td>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:white;border-radius:4px;color:black;font-size:20px;font-weight:bold" type="number" name="caseID" placeholder=" የፋይል መለዮ">
     </td></tr>   
   <tr>
<td>
 <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:white;border-radius:4px;color:black;font-size:20px;font-weight:bold" type="number" name="advo_ID" placeholder=" የጠበቃ መለዮ">
  </td></tr><tr>
<td>
<input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:blue;border-radius:4px;color:white;font-weight:bold;font-size:20px" type='submit' name="submit" class="style1" value='ጨርስ'/></td></tr>
</table>
 </form>
 </body>
</html>