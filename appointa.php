
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<div style="width:30%;height:30%;box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%;height:60%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold">የቀጠሮ ቀን መስጠት</div>

<form action="appointd.php"  method="POST" />

<table style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;background-color:silver;border-radius:10px;color:black;font-weight:bold">
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" name="judgeID" placeholder="የዳኛ መለያ" required></td>
</tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" name="caseID" placeholder="የፋይል መለያ" required></td>
  </tr>
<tr>
<td><input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="date" name="date" placeholder="ቀን" required></td>
</tr><br>

<tr>
<td><input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="time" name="time" placeholder="ሰዐት" required></td>
</tr><br>
<tr>
<td><select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="chilot">
    <option disabled selected value>ችሎት ይምረጡ</option>
  <option value="chilot1">ችሎት1</option>
  <option value="chilot2">ችሎት2</option>
  <option value="chilot3">ችሎት3</option>
  <option value="chilot4">ችሎት4</option>
  <option value="chilot5">ችሎት5</option>
  <option value="chilot6">ችሎት6</option>
  <option value="chilot6">ችሎት7</option>
</select></td>
  </tr>
  <tr>
<td><br><br>
	  <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:70%;height:50%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:30px"type="submit"name="submit"value="ያስገቡ"></td></tr>
</table>
</form>
</body>
</html>
