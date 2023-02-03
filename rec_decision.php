<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Record Decision</title>

<link rel="stylesheet" href="css/allpages.css" type="text/css" />

<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>

<script type="text/JavaScript">
function validate()
{ 
if(document.myform.rdate.value=="")
   { alert("Please fill the day!" );
    document.myform.rdate.focus() ;
    return false;
   }
if(document.myform.caseId.value=="")
   { alert("Please fill the case id!" );
    document.myform.caseId.focus() ;
    return false;
   }
if(document.myform.casetype.value=="")
   { alert("Please fill your case type!" );
    document.myform.casetype.focus() ;
    return false;
   }
   var str=document.myform.casetype.value;
		   if(str.length>3 && str.length<12)
		   {
	       var valid="./-_[]!'abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  case type");
	          document.myform.casetype.value="";
	          document.myform.casetype.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters your case type.");
		         document.myform.casetype.value="";
	             document.myform.casetype.focus();
	             return false;
		      } 	      
if(document.myform.accuser.value=="")
   { alert("Please fill firstname!" );
    document.myform.accuser.focus() ;
    return false;
   }
   var str=document.myform.accuser.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.accuser.value="";
	          document.myform.accuser.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fullname.");
		         document.myform.accuser.value="";
	             document.myform.accuser.focus();
	             return false;
		      } 
			 	if(document.myform.amname.value=="")
   { alert("Please fill middlename!" );
    document.myform.amname.focus() ;
    return false;
   }
   var str=document.myform.amname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.amname.value="";
	          document.myform.amname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fullname.");
		         document.myform.amname.value="";
	             document.myform.amname.focus();
	             return false;
		      } 
			  	if(document.myform.alname.value=="")
   { alert("Please fill lastname!" );
    document.myform.alname.focus() ;
    return false;
   }
   var str=document.myform.alname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.alname.value="";
	          document.myform.alname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fullname.");
		         document.myform.alname.value="";
	             document.myform.alname.focus();
	             return false;
		      }  
if(document.myform.asex.value=="")
   { alert("Please select list of sex!" );
    document.myform.asex.focus() ;
    return false;
   }
  if(document.myform.defender.value=="")
   { alert("Please fill firstname!" );
    document.myform.defender.focus() ;
    return false;
   }
   var str=document.myform.defender.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.defender.value="";
	          document.myform.defender.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fullname.");
		         document.myform.defender.value="";
	             document.myform.defender.focus();
	             return false;
		      } 
			 	if(document.myform.dmname.value=="")
   { alert("Please fill middlename!" );
    document.myform.dmname.focus() ;
    return false;
   }
   var str=document.myform.dmname.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.dmname.value="";
	          document.myform.dmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fullname.");
		         document.myform.dmname.value="";
	             document.myform.dmname.focus();
	             return false;
		      } 
if(document.myform.dlname.value=="")
   { alert("Please fill lastname!" );
    document.myform.dlname.focus() ;
    return false;
   }
   var str=document.myform.dlname.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.dlname.value="";
	          document.myform.dlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fullname.");
		         document.myform.dlname.value="";
	             document.myform.dlname.focus();
	             return false;
		      }  
if(document.myform.dsex.value=="")
   { alert("Please select list of sex!" );
    document.myform.dsex.focus() ;
    return false;
   }
if(document.myform.description.value=="")
   { alert("Please fill description!" );
    document.myform.description.focus() ;
    return false;
   }   
if(document.myform.image.value=="")
   { alert("Please upload the description image!" );
    document.myform.image.focus() ;
    return false;
   }	
if(document.myform.judge.value=="")
   { alert("Please fill judge user name!" );
    document.myform.judge.focus() ;
    return false;
   }  
  return (true); 
}
</script>
</head>

<body>
<center>
   <div style="width:100%;height:10%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold"> RECORD DECISION FORM</div>
    
   <form action="decision.php" method="post" name='myform' enctype="multipart/form-data" target="_top"onsubmit='return validate()' id='form1' >
   <table style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:90%;height:80%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
  <tr>
      <td width="152" height="31" align="right">decision date</td>
      <td width="191" ><input name="rdate" type="date" /></td>
    </tr>
    <tr>
      <td width="152" height="31" align="right">Case ID</td>
      <td width="191" ><input name="caseId" type="text" /></td>
    </tr>
    <tr>
      <td align="right">Case Type</td>
      <td ><input name="casetype" type="text"/></td>
    </tr>
	<tr><td align="right">Accuser Name</td>
	<td><input type="text" name="accuser" /></td><td width="79">Middle Name</td>
	<td width="144"><input type="text" name="amname" /></td><td width="92">Last Name</td>
	<td width="144"><input type="text" name="alname" /></td>
	<td width="421"><select name="asex">
    <option disabled selected value>Select Sex  </option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select></td></tr>
	<tr><td align="right">Deffender Name</td>
	<td> <input type="text" name="defender" /></td><td width="79">Middle Name</td>
	<td width="144"><input type="text" name="dmname" /></td><td width="92">Last Name</td>
	<td width="144"><input type="text" name="dlname" /></td><td><select name="dsex">
   <option disabled selected value>Select Sex  </option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select></td></tr>
  <tr>
      <td valign="top" align="right"> Decision text</td>
      <td colspan="5"><textarea  style="background-color:white;border-radius:5px;color:black;font-size:10px;font-weight:bold"
	  placeholder="Typing here" name="description" cols="65" rows="8"></textarea></td>
    </tr>
	
    <tr>
      <td valign="top" align="right"> Decision paper</td>
      <td colspan="5"><input type="file" name="image" cols="65" rows="8"/></td>
    </tr>
    <center>
	<tr>
      <td><input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:90%; background-color:blue;border-radius:10px;color:white;font-size:25px;font-weight:bold" name="submit" type="submit" class="style1" value="Save"/>
  </td>
      </tr><tr>
	 
      <td>
     <input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:90%; background-color:red;border-radius:10px;color:white;font-size:25px;font-weight:bold" name="submit" type="reset" value="Clear" /></td>
    </tr>
	</table>
  </form></center>
</body>
</html>
