<html>
<head>
<title>Evidence  Registration</title>
<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
	<link rel="stylesheet" href="common/css/all.css">
<script type="text/JavaScript">
function validate()
{ 
     if(document.myform.date.value=="")
   { alert("Please fill the day!" );
    document.myform.date.focus() ;
    return false;
   }
   if(document.myform.caseID.value=="")
   { alert("Please fill the case ID!" );
    document.myform.caseID.focus() ;
    return false;
   }
   if(document.myform.type.value=="")
   { alert("Please fill the case type!" );
    document.myform.type.focus() ;
    return false;
   }
   if(document.myform.pfname.value=="")
   { alert("Please fill plaintiff name!" );
    document.myform.pfname.focus() ;
    return false;
   }
   var str=document.myform.pfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for plaintiff first name");
	          document.myform.pfname.value="";
	          document.myform.pfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for plaintiff first name.");
		         document.myform.pfname.value="";
	             document.myform.pfname.focus();
	             return false;
		      }
			 if(document.myform.pmname.value=="")
   { alert("Please fill plaintiff father name!" );
    document.myform.pmname.focus() ;
    return false;
   }
   var str=document.myform.pmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  plaintiff father name");
	          document.myform.pmname.value="";
	          document.myform.pmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for plaintiff father name.");
		         document.myform.pmname.value="";
	             document.myform.pmname.focus();
	             return false;
		      }
			 if(document.myform.plname.value=="")
   { alert("Please fill plaintiff grand father name!" );
    document.myform.plname.focus() ;
    return false;
   }
   var str=document.myform.plname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  plaintiff grand father name");
	          document.myform.plname.value="";
	          document.myform.plname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for  plaintiff grand father name.");
		         document.myform.plname.value="";
	             document.myform.plname.focus();
	             return false;
		      }
     if(document.myform.psex.value=="")
   { alert("Please select the plaintiff sex!" );
    document.myform.psex.focus() ;
    return false;
   }			  
       if(document.myform.padd.value=="")
   { alert("Please fill the plaintiff Address!" );
    document.myform.padd.focus() ;
    return false;
   }
   if(document.myform.dfname.value=="")
   { alert("Please fill defender name!" );
    document.myform.dfname.focus() ;
    return false;
   }
   var str=document.myform.dfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  defender name");
	          document.myform.dfname.value="";
	          document.myform.dfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for defender name.");
		         document.myform.dfname.value="";
	             document.myform.dfname.focus();
	             return false;
		      }
			 if(document.myform.dmname.value=="")
   { alert("Please fill defender father name!" );
    document.myform.dmname.focus() ;
    return false;
   }
   var str=document.myform.dmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for defender father name");
	          document.myform.dmname.value="";
	          document.myform.dmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for defender father name.");
		         document.myform.dmname.value="";
	             document.myform.dmname.focus();
	             return false;
		      }
			 if(document.myform.dlname.value=="")
   { alert("Please fill defender grand father name!" );
    document.myform.dlname.focus() ;
    return false;
   }
   var str=document.myform.dlname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  defender grand father name");
	          document.myform.dlname.value="";
	          document.myform.dlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for defender grand father name.");
		         document.myform.dlname.value="";
	             document.myform.dlname.focus();
	             return false;
		      }
     if(document.myform.dsex.value=="")
   { alert("Please select the defender sex!" );
    document.myform.dsex.focus() ;
    return false;
   }			  
       if(document.myform.daddress.value=="")
   { alert("Please fill the defender Address!" );
    document.myform.daddress.focus() ;
    return false;
   }
if(document.myform.wfname.value=="")
   { alert("Please fill witness name!" );
    document.myform.wfname.focus() ;
    return false;
   }
   var str=document.myform.wfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  witness name");
	          document.myform.wfname.value="";
	          document.myform.wfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for witness name.");
		         document.myform.wfname.value="";
	             document.myform.wfname.focus();
	             return false;
		      }
			 if(document.myform.wmname.value=="")
   { alert("Please fill witness father name!" );
    document.myform.wmname.focus() ;
    return false;
   }
   var str=document.myform.wmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  witness father name");
	          document.myform.wmname.value="";
	          document.myform.wmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for witness father name.");
		         document.myform.wmname.value="";
	             document.myform.wmname.focus();
	             return false;
		      }
			 if(document.myform.wlname.value=="")
   { alert("Please fill witness grand father name!" );
    document.myform.wlname.focus() ;
    return false;
   }
   var str=document.myform.wlname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  witness grand father name");
	          document.myform.wlname.value="";
	          document.myform.wlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for witness grand father name.");
		         document.myform.wlname.value="";
	             document.myform.wlname.focus();
	             return false;
		      }
     if(document.myform.wsex.value=="")
   { alert("Please select the witness sex!" );
    document.myform.wsex.focus() ;
    return false;
   }			  
       if(document.myform.waddress.value=="")
   { alert("Please fill the witness Address!" );
    document.myform.waddress.focus() ;
    return false;
   }
 if(document.myform.wifname.value=="")
   { alert("Please fill witness name!" );
    document.myform.wifname.focus() ;
    return false;
   }
   var str=document.myform.wifname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  witness name");
	          document.myform.wifname.value="";
	          document.myform.wifname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for witness name.");
		         document.myform.wifname.value="";
	             document.myform.wifname.focus();
	             return false;
		      }
			 if(document.myform.wimname.value=="")
   { alert("Please fill witnes father name!" );
    document.myform.wimname.focus() ;
    return false;
   }
   var str=document.myform.wimname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  witness father name");
	          document.myform.wimname.value="";
	          document.myform.wimname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for witness father name.");
		         document.myform.wimname.value="";
	             document.myform.wimname.focus();
	             return false;
		      }
			 if(document.myform.wilname.value=="")
   { alert("Please fill  witness grand father name!" );
    document.myform.wilname.focus() ;
    return false;
   }
   var str=document.myform.wilname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for   witness grand father  name");
	          document.myform.wilname.value="";
	          document.myform.wilname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for  witness grand father name.");
		         document.myform.wilname.value="";
	             document.myform.wilname.focus();
	             return false;
		      }
     if(document.myform.wisex.value=="")
   { alert("Please select the witness sex!" );
    document.myform.wisex.focus() ;
    return false;
   }			  
       if(document.myform.wiaddress.value=="")
   { alert("Please fill the witness Address!" );
    document.myform.wiaddress.focus() ;
    return false;
   }
   if(document.myform.witfname.value=="")
   { alert("Please fill  witness name!" );
    document.myform.witfname.focus() ;
    return false;
   }
   var str=document.myform.witfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for   witness  name");
	          document.myform.witfname.value="";
	          document.myform.witfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for  witness name.");
		         document.myform.witfname.value="";
	             document.myform.witfname.focus();
	             return false;
		      }
			 if(document.myform.witmname.value=="")
   { alert("Please fill witness father name!" );
    document.myform.witmname.focus() ;
    return false;
   }
   var str=document.myform.witmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  witness father name");
	          document.myform.witmname.value="";
	          document.myform.witmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for  witness father name.");
		         document.myform.witmname.value="";
	             document.myform.witmname.focus();
	             return false;
		      }
			 if(document.myform.witlname.value=="")
   { alert("Please fill witness grand father name!" );
    document.myform.witlname.focus() ;
    return false;
   }
   var str=document.myform.witlname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  witness grand father name");
	          document.myform.witlname.value="";
	          document.myform.witlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for witness grand father name.");
		         document.myform.witlname.value="";
	             document.myform.witlname.focus();
	             return false;
		      }
     if(document.myform.witsex.value=="")
   { alert("Please select the witness sex!" );
    document.myform.witsex.focus() ;
    return false;
   }			  
       if(document.myform.witaddress.value=="")
   { alert("Please fill the witness Address!" );
    document.myform.witaddress.focus() ;
    return false;
   }
  if(document.myform.image.value=="")
   { alert("Please upload the image!" );
    document.myform.image.focus() ;
    return false;
   } 
  if(document.myform.maker.value=="")
   { alert("Please fill your name!" );
    document.myform.maker.focus() ;
    return false;
   }   
  return (true); 
}

</script> 	
</head>
<body>
<center>
<p style="background-color:yellow;width:100%;border-radius:20px;font-size:30px;font-weight:bold"><td colspan="6" align="center"><span>Evidence Registration</span></p>

 <form action="evidenced.php" method="post" name='myform' target="_top" onsubmit='return validate()' id='form1' enctype="multipart/form-data">
<table align="center">
<tr><td colspan="4" align="right"></td><td>Date</td><td>
<input type="date" name="date" id="date"/>
<tr><td>
<input type="text" placeholder="Case ID" name="caseID" /></td></tr><tr><td>
<input type="text" placeholder="Case Type" name="type" /></td></tr>
<tr><td>&nbsp;</td><td>First Name</td><td>Middle Name</td><td>Last Name</td><td>Sex</td><td>Address</td></tr>
<tr><td align="right">Plaintiff </td><td>
<input type="text" name="pfname" /></td><td>
<input type="text" name="pmname" /></td><td>
<input type="text" name="plname" /></td><td><select name="psex">
<option disabled selected value>Select sex  </option>
      <option value="Male">Male</option> 
      <option value="Female">Female</option></select></td><td>
	  <input type"text" name="padd" /></td></tr>
<tr><td align="right">Deffender </td><td>
<input type="text" name="dfname" /></td><td>
<input type="text" name="dmname" /></td><td>
<input type="text" name="dlname" /></td><td><select name="dsex">
<option disabled selected value>Select sex  </option>
      <option value="Male">Male</option> 
      <option value="Female">Female</option></select></td><td>
	  <input type"text" name="daddress" /></td></tr>
<tr><td align="right">Witness 1 </td><td>
<input type="text" name="wfname" /></td><td>
<input type="text" name="wmname" /></td><td>
<input type="text" name="wlname" /></td><td>
<select name="wsex">
 <option disabled selected value>Select sex  </option>
      <option value="Male">Male</option> 
      <option value="Female">Female</option></select></td><td><input type"text" name="waddress" /></td></tr>
	  <tr><td align="right">2</td><td>
	  <input type="text" name="wifname" /></td><td>
	  <input type="text" name="wimname" /></td><td>
	  <input type="text" name="wilname" /></td><td>
	  <select name="wisex">
<option disabled selected value>Select sex  </option>
      <option value="Male">Male</option> 
      <option value="Female">Female</option></select></td><td>
	  <input type= "text" name="wiaddress" /></td></tr>
<tr><td align="right">3 </td><td>
<input type="text" name="witfname" /></td><td>
<input type="text" name="witmname" /></td><td>
<input type="text" name="witlname" /></td><td>
<select name="witsex">
<option disabled selected value>Select sex  </option>
      <option value="Male">Male</option> 
      <option value="Female">Female</option></select></td><td><input type"text" name="witaddress" /></td></tr>	  
<tr><td valign="top" rowspan="4" align="right">Description paper</td><td colspan="4" rowspan="4">
<input type="file" name="image" cols="90" rows="7"/></td><td></td></tr><tr></tr><tr></tr><tr></tr>
		  <tr><td> <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:blue;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="submit" type="submit" class="style2" value="Submit" height="24" ></td>
				   </tr>
				 
				  <tr><td>
                   <input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:red;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="reset" type="reset" class="style2" value="Reset">
                    
                </tr></table></form>
</center>
</body>
</html>