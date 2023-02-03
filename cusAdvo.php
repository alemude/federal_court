<html>
 <body>
 <form>
 <input style="width:7%;height:7%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="Back" onclick="history.go(-1)">
</form>
<form action="sel_Advo.php" method="POST" enctype="multipart/form-data" style='height:50%'>
	<table id="container" height="60%" border="0" width="50%" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:40%; background-color:silver;border-radius:4px;">
<tr>
<td>
<p style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%;height:60%; background-color:yellow;border-radius:4px;color:black;font-size:20px;font-weight:bold">Fill the below to register advocator</p>
</td></tr>
<tr>
<td>
<select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:white;border-radius:4px;color:black;font-size:20px;font-weight:bold" name="user_type" required>
    <option disabled selected value>select user type </option>
      <option value="accuser">Accuser</option>
      <option value="accused">Accused</option>
      </select></td></tr>
	  <tr>
<td>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:white;border-radius:4px;color:black;font-size:20px;font-weight:bold" type="number" name="caseID" placeholder=" case ID" required>
     </td></tr>   
   <tr>
<td>
 <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:white;border-radius:4px;color:black;font-size:20px;font-weight:bold" type="number" name="advo_ID" placeholder=" Advocator ID" required>
  </td></tr><tr>
<td>
<input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:40%;height:60%; background-color:blue;border-radius:4px;color:white;font-weight:bold;font-size:20px" type='submit' name="submit" class="style1" value='Finish'/></td></tr>
</table>
 </form>
 </body>
</html>