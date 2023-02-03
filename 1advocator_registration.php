<html>
<head>
<title>Advocator  Registration</title>
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
if(document.myform.image.value=="")
   { alert("Please upload the image!" );
    document.myform.image.focus() ;
    return false;
   }
   if(document.myform.fname.value=="")
   { alert("Please fill first name!" );
    document.myform.fname.focus() ;
    return false;
   }
   var str=document.myform.fname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.fname.value="";
	          document.myform.fname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for first name.");
		         document.myform.fname.value="";
	             document.myform.fname.focus();
	             return false;
		      }	
if(document.myform.mname.value=="")
   { alert("Please fill middle name!" );
    document.myform.mname.focus() ;
    return false;
   }
   var str=document.myform.mname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  middle name");
	          document.myform.mname.value="";
	          document.myform.mname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for middle name.");
		         document.myform.mname.value="";
	             document.myform.mname.focus();
	             return false;
		      } 

if(document.myform.lname.value=="")
   { alert("Please fill lastname!" );
    document.myform.lname.focus() ;
    return false;
   }
   var str=document.myform.lname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  last name");
	          document.myform.lname.value="";
	          document.myform.lname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for last name.");
		         document.myform.lname.value="";
	             document.myform.lname.focus();
	             return false;
		      }  
if(document.myform.sex.value=="")
   { alert("Please select sex!" );
    document.myform.sex.focus() ;
    return false;
   }
if(document.myform.age.value=="")
   { alert("Please fill the Age!" );
    document.myform.age.focus() ;
    return false;
   }
   

   if(document.myform.phone.value=="")
	{
	alert("please enter phone number");
	document.myform.phone.value="";
	document.myform.phone.focus();
	return false;
	}
	var str=document.myform.phone.value;
	var valid="0123456789+";
	for(i=0;i<str.length;i++)
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please insert phone number only number");
	document.myform.phone.value="";
	document.myform.phone.focus();
	return false;
	}
	}
	if(str.length!=10)
	{
	alert("please enter phone number 10  digit.");
	document.myform.phone.focus();
	return false;
	}
 if (str.charAt(0)!="0")
           {
             alert("phone number should be start with 0");
			 document.myform.phone.focus();
              return false;
			  	   
           }
if (str.charAt(1)!="9")			   
           {
             alert("phone number should be start with 09");
			 document.myform.phone.focus();
              return false;
           }
if(document.myform.status.value=="")
   { alert("Please select the qualification!" );
    document.myform.status.focus() ;
    return false;
   } 

if(document.myform.description.value=="")
   { alert("Please fill the description!" );
    document.myform.description.focus() ;
    return false;
   }	      

if(document.myform.email.value == "" )
   {
    alert("Please fill your 's email!" );
    document.myform.email.focus() ;
    return false;
   }
   var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  document.myform.email.value="";
  return false;
  }
if(document.myform.woreda.value=="")
   { alert("Please fill your woreda!" );
    document.myform.woreda.focus() ;
    return false;
   }
   var str=document.myform.woreda.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ/";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for woreda");
	          document.myform.woreda.value="";
	          document.myform.woreda.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for woreda.");
		         document.myform.woreda.value="";
	             document.myform.woreda.focus();
	             return false;
		      } 
if(document.myform.city.value=="")
   { alert("Please fill your city!" );
    document.myform.city.focus() ;
    return false;
   }
   var str=document.myform.city.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ/ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  city");
	          document.myform.city.value="";
	          document.myform.city.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for city.");
		         document.myform.city.value="";
	             document.myform.city.focus();
	             return false;
		      } 

if(document.myform.kebele.value=="")
   { alert("Please fill your kebele!" );
    document.myform.kebele.focus() ;
    return false;
   }

   
   
   
   var str=document.myform.kebele.value;
		   if(str.length>1 && str.length<12)
		   {
    var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ/ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  kebele");
	          document.myform.kebele.value="";
	          document.myform.kebele.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters your kebele.");
		         document.myform.kebele.value="";
	             document.myform.kebele.focus();
	             return false;
		      } 
if(document.myform.status.value=="")
   { alert("Please select qualification!" );
    document.myform.status.focus() ;
    return false;
if(document.myform.description.value=="")
   { alert("Please write the description!" );
    document.myform.description.focus() ;
    return false;
   }
   }			  
  return (true); 
}

</script> 	
</head>
<body>
   <center>
 <form action="registerAdvocator.php" method="post" name='myform' target="_top" onsubmit='return validate()' id='form1' enctype="multipart/form-data">
<h2>New Advocator Registration Form</h2>
<table id="container" height="40%" style="background-color:Silver" border="0" width="50%">
 <tr>
<td>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="date" id="date" name="date"/></td></tr>
			 <tr><td>
			 
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="file" id="image" name="image" /></td></tr>
<tr>
<td>
<table id="container">
  <tr>
<tr style="vertical-align: top">
                 
                  <td colspan="2" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" placeholder="First Name" name="fname" size="30" />
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="2" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="Middle Name" name="mname" size="30" />
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="2" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="Last Name" name="lname" size="30" />
                    <br />                  </td>
             <tr>
 <td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="sex">
<option disabled selected value>Select Sex  </option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
  </strong></td></tr>
				           <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="age" placeholder="Age" type="number" min="24" max="130"/>
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="Phone Number" name="phone" size="30" />
                    <br />                  </td>
                </tr>
 </table>
 </td>
 <td>
 <table id="container">
  <tr>
<tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="E-Mail" name="email" size="30" />
                    <br />                  </td>
                </tr>
				<tr style="vertical-align: top">
                  
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" placeholder="Woreda" name="woreda" size="30" />
				  
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" placeholder="City" name="city" size="30" />
				  
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                   <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" name="kebele" placeholder="Kebele" size="30" /></td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" name="h_number" placeholder="House Number" size="30" />
                    <br />                  </td>
                </tr>
             <tr>
 <td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:14px;font-weight:bold" name="status">
<option disabled selected value>Select Qualification  </option>
                      <option value="degree">degree</option>
                      <option value="master">master</option>
                      <option value="phd">phd</option>
					    <option value="phd">None</option>
                    </select>
                    <br />                  </td>
                </tr>
				
   </table>


				 <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><textarea style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="description" cols="67" rows="5" placeholder="Write  about Advocator" ></textarea>
				  
                    <br />                  </td>
                </tr>
				  <tr><td> <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:blue;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="submit" type="submit" class="style2" value="Submit" height="24" ></td>
				   </tr>
				 
				  <tr><td>
                   <input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:red;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="reset" type="reset" class="style2" value="Reset">
                    <br />                  </td>
                </tr>
  </table>
</form>
 </body>
</html>