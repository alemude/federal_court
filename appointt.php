
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
<script>
function isDateSelected(){ 
      var today =new Date();
      var inputDate = new Date(document.form1.date.value);
      if (inputDate.value == " "){
          return false;
      } else if ( today >inputDate ) {
          return false;
      } else {
          return true;
      }
	   var allowBlank = true;
    var minYear = now();
    var maxYear = (new Date()).getFullYear();

    var errorMsg = "";

    // regular expression to match required date format
    re = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;

    if(field.value != '') {
      if(regs = field.value.match(re)) {
        if(regs[1] < 1 || regs[1] > 31) {
          errorMsg = "Invalid value for day: " + regs[1];
        } else if(regs[2] < 1 || regs[2] > 12) {
          errorMsg = "Invalid value for month: " + regs[2];
        } else if(regs[3] < minYear || regs[3] > maxYear) {
          errorMsg = "Invalid value for year: " + regs[3] + " - must be between " + minYear + " and " + maxYear;
        }
      } else {
        errorMsg = "Invalid date format: " + field.value;
      }
    } else if(!allowBlank) {
      errorMsg = "Empty date not allowed!";
    }

    if(errorMsg != "") {
      alert(errorMsg);
      field.focus();
      return false;
    }

    return true;
  }
  </script>
</head>


<body>
<form action="appoint2.php"name="form1" method="POST"/>
<strong><h2>Give Appointment Date Page</h2></strong>
<table height="75" id="container">


     <tr>
     <td align="left">Case id</td>
      <td>
 <?php
// Load field data into List box
$con=mysqli_connect("localhost","root","") or die("Note: " . mysqli_error());
$res=mysqli_select_db("brcourt",$con) or die("Note: " . mysqli_error());
 $res=mysqli_query("select  * from assignedcases where c_type='civil' order by caseID desc;") or die("Note: " . mysqli_error());
?>

<select name="caseID" size=1<select name="caseID" size=1  required="required"class="basetxt" tabindex="11" data-helper="Make sure you can remember it!"><p class="errmsg">Please add some more characters</p>
<?php
while($ri = mysqli_fetch_array($res))
{
echo "<option value=" .$ri['caseID'] . ">" . $ri['caseID'] . "</option>";
}
echo "</select> "
?>	</td></tr>

<tr style="vertical-align: middle">
                  <td height="60" nowrap="nowrap" class="LabelColor" style="text-align: left" ><label>judge id:</label>      </td>
<td><select name="used_id">
  <option value="civJ(17)">civJ(17)</option>
</select></td>
  </tr><br>
<tr style="vertical-align: middle">
                  <td height="60" nowrap="nowrap" class="LabelColor" style="text-align: left"><label>Chilot number:</label>      </td>
<td><select name="chilot">
  <option value="chilot1">chilot1</option>
  <option value="chilot2">chilot2</option>
  <option value="chilot3">chilot3</option>
  <option value="chilot4">chilot4</option>
  <option value="chilot5">chilot5</option>
  <option value="chilot6">chilot6</option>
  <option value="chilot6">chilot7</option>
</select></td>
  </tr>
<tr style="vertical-align: middle">
                  <td height="60" nowrap="nowrap" class="LabelColor" style="text-align: left"><label>Appointment Date:</label>      </td>
                  <td colspan="3" class="TitleColor"><input type="date"  id="date" name="date" size="30"/>

                    <br />                  </td>
    </tr>

<tr>
      <td>      </td><td><input type="submit"name="submit1"value="Submit"></td><td><input type="reset"name="submit2"value="reset"></td></tr>
</table>
</form>
</body>
</html>
