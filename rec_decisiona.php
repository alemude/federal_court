<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ውሳኔ መመዝገቢያ</title>

<link rel="stylesheet" href="css/allpages.css" type="text/css" />

<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>

<script type="text/JavaScript">
function validate()
{ 
if(document.myform.rdate.value=="")
   { alert("ቀን ይሙሉ!" );
    document.myform.rdate.focus() ;
    return false;
   }
if(document.myform.caseId.value=="")
   { alert("የፋይል መለዮ ይሙሉ!" );
    document.myform.caseId.focus() ;
    return false;
   }
if(document.myform.casetype.value=="")
   { alert("የፋይል አይነት ይሙሉ!" );
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
	          alert("ፊደል ብቻ ያስገቡ");
	          document.myform.casetype.value="";
	          document.myform.casetype.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ከሶስት ፊደል ያስገቡ.");
		         document.myform.casetype.value="";
	             document.myform.casetype.focus();
	             return false;
		      } 	      
if(document.myform.accuser.value=="")
   { alert("ስሙን ያስገቡ!" );
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
	          alert("ለስሙ ፊደል ብቻ ይሁን");
	          document.myform.accuser.value="";
	          document.myform.accuser.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ከሶስት በላይ ያድገቡ.");
		         document.myform.accuser.value="";
	             document.myform.accuser.focus();
	             return false;
		      } 
			 	if(document.myform.amname.value=="")
   { alert("የአባት ስም አላስገቡም" );
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
	          alert("ፉደል ብቻ ይሁን");
	          document.myform.amname.value="";
	          document.myform.amname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ይሁን.");
		         document.myform.amname.value="";
	             document.myform.amname.focus();
	             return false;
		      } 
			  	if(document.myform.alname.value=="")
   { alert("የአያት ስም አላድገቡም" );
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
	          alert("ፊደል ብቻ ይሁን");
	          document.myform.alname.value="";
	          document.myform.alname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንድ ሁለት ፊደል ይሁን.");
		         document.myform.alname.value="";
	             document.myform.alname.focus();
	             return false;
		      }  
if(document.myform.asex.value=="")
   { alert("ፆታ ይምረጡ" );
    document.myform.asex.focus() ;
    return false;
   }
  if(document.myform.defender.value=="")
   { alert("የተከሳሽ ስም ያስገቡ" );
    document.myform.defender.focus() ;
    return false;
   }
   var str=document.myform.defender.value;
		   if(str.length>1&& str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ፊደል ብቻ ይሁን");
	          document.myform.defender.value="";
	          document.myform.defender.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ስሙ ከአንድ ይብለጥ.");
		         document.myform.defender.value="";
	             document.myform.defender.focus();
	             return false;
		      } 
			 	if(document.myform.dmname.value=="")
   { alert("የአባት ስም ያስገቡ" );
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
	          alert("ፊደል ብቻ ይሁን");
	          document.myform.dmname.value="";
	          document.myform.dmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ፊደሉ ከአንድ ይብለጥ");
		         document.myform.dmname.value="";
	             document.myform.dmname.focus();
	             return false;
		      } 
if(document.myform.dlname.value=="")
   { alert("የአያት ድም!" );
    document.myform.dlname.focus() ;
    return false;
   }
   var str=document.myform.dlname.value;
		   if(str.length>1&& str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ፊደል ብቻ ይሁን");
	          document.myform.dlname.value="";
	          document.myform.dlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ከ አንድ የበለጠ ፊደል ይኑረው.");
		         document.myform.dlname.value="";
	             document.myform.dlname.focus();
	             return false;
		      }  
if(document.myform.dsex.value=="")
   { alert("ጾታ ይምረጡ!" );
    document.myform.dsex.focus() ;
    return false;
   }
if(document.myform.description.value=="")
   { alert("ማብራሪያው ይጻፍ!" );
    document.myform.description.focus() ;
    return false;
   }   
if(document.myform.image.value=="")
   { alert("ፎቶ ይምረጡ!" );
    document.myform.image.focus() ;
    return false;
   }	
if(document.myform.judge.value=="")
   { alert("የዳኛው ስም ይግባ!" );
    document.myform.judge.focus() ;
    return false;
   }  
  return (true); 
}
</script>
</head>

<body>
<center>
   <div style="width:100%;height:10%; background-color:yellow;border-radius:10px;color:black;font-size:30px;font-weight:bold"> ውሳኔ መመዝገቢያ</div>
    
   <form action="decision.php" method="post" name='myform' enctype="multipart/form-data" target="_top"onsubmit='return validate()' id='form1' >
   <table style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:90%;height:80%; background-color:Silver;border-radius:10px;color:black;font-weight:bold">
  <tr>
      <td width="152" height="31" align="right">ቀን</td>
      <td width="191" ><input name="rdate" type="date" /></td>
    </tr>
    <tr>
      <td width="152" height="31" align="right">የፋይል መለያ</td>
      <td width="191" ><input name="caseId" type="text" /></td>
    </tr>
    <tr>
      <td align="right">የክስ አይነት</td>
      <td ><input name="casetype" type="text"/></td>
    </tr>
	<tr><td align="right">የከሳሽ ስም</td>
	<td><input type="text" name="accuser" /></td><td width="79">የአባት ስም</td>
	<td width="144"><input type="text" name="amname" /></td><td width="92">የአያት ስም</td>
	<td width="144"><input type="text" name="alname" /></td>
	<td width="421"><select name="asex">
    <option disabled selected value>ጾታ ይምረጡ</option>
      <option value="Male">ወንድ</option>
      <option value="Female">ሴት</option>
      </select></td></tr>
	<tr><td align="right">የተከሳሽ ስም</td>
	<td> <input type="text" name="defender" /></td><td width="79">የአባት ስም</td>
	<td width="144"><input type="text" name="dmname" /></td><td width="92">የአያት ድም</td>
	<td width="144"><input type="text" name="dlname" /></td><td><select name="dsex">
   <option disabled selected value>ጾታ ይምረጡ  </option>
      <option value="Male">ወንድ</option>
      <option value="Female">ሴት</option>
      </select></td></tr>
  <tr>
      <td valign="top" align="right"> ማብራሪያ ፅሁፍ</td>
      <td colspan="5"><textarea  style="background-color:white;border-radius:5px;color:black;font-size:10px;font-weight:bold"
	  placeholder="Typing here" name="description" cols="65" rows="8"></textarea></td>
    </tr>
	
    <tr>
      <td valign="top" align="right"> ማብራሪያ ወረቀት</td>
      <td colspan="5"><input type="file" name="image" cols="65" rows="8"/></td>
    </tr>
    <center>
	<tr>
      <td><input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:90%; background-color:blue;border-radius:10px;color:white;font-size:25px;font-weight:bold" name="submit" type="submit" class="style1" value="ይመዝገብ"/>
  </td>
      </tr><tr>
	 
      <td>
     <input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:90%; background-color:red;border-radius:10px;color:white;font-size:25px;font-weight:bold" name="submit" type="reset" value="ይጥፋ" /></td>
    </tr>
	</table>
  </form></center>
</body>
</html>
