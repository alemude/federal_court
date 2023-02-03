<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advocator Registration Form</title>
<style type="text/css">

form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:740px;
height:500px;
font-family: ;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: ;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #99779;
border: inset 0px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
</style>
</head>
</head>
<body ><p align="center">
 

<table width="1003" border="0">
  
<tr>
<!--<td width="100" height="300">&nbsp;</td>-->
    <td width="1000"><form action="registerAdvocator.php" method='post' name='myForm' target="_top"onsubmit='return validateForm()' id='form1'style="box-shadow:rgba(0,0,0,0.3) 0px 0px 10px; border-radius:0px;color:#jjlldd; text-shadow:0px 0px 10px #99ccff;">
	<h1>WEL COME TO KOMBOLCHA COURT INFORMATION MANAGMENT SYSTEM</h1>
      <h3 align='left'> 
	   &nbsp;&nbsp;<label for='fname' >AdvocatorID:</label>
  <input type="text" name="advocatorID"> 
 <BR><br>
 <label for='fname' >First Name:</label> 
<input type='text' name='fname' id='name' maxlength="50"required />
  &nbsp;&nbsp;<label for='mname' >Middle Name:</label> 
<input type='text' name='mname' id='mname' maxlength="50" required/>
    &nbsp;&nbsp;&nbsp;&nbsp;<label for='lname' >Last Name:</label> 
<input type='text' name='lname' id='lname' maxlength="50" required/><BR><br>
    &nbsp;&nbsp;<label for='age' >Sex:</label> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select  name="sex"required >
     <option value="Female">Female</option>
     <option value="Male">Male</option>
  </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for='age' >Age:</label>
<input type='number' name='age' id='age' maxlength="50" required/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for='email' >E_mail:</label>
<input type='text' name='email' id='email' maxlength="250" /><BR><br>
  
<label for='wereda' >Wereda:</label>
  <input type="text" name="wereda"required>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for='city' >City:</label>
  <input type="text" name="city"maxlegth="50"required>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for='kebele' >Kebele:</label>
  <input type="text" name="kebele"maxlegth="50"required><BR><br>
<label for='h_number' >House_No:</label>
  <input type="text" name="h_number"maxlegth="50"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for='phone' >Phone_No:</label>
  <input type="text" name="phone"maxlegth="50"required/>
&nbsp;&nbsp;&nbsp;&nbsp;<label for="assign"> Status: </label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="select_status" >
     <option value="degree">degree</option>
     <option value="master">master</option>
     <option value="phd">phd</option>
  </select>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><label for='type' >Advocator full Information:</label>
     <textarea name="description" cols="67" rows="5" maxlegth="50" required="required"></textarea>
     <pre>      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value="save" /><input type='reset' value='Reset' /></pre>
    </form></td>
  </tr>
</table>
</body>
</html>

