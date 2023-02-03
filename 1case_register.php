<html>
<head>
<title>Case  Registration</title>
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
     if(document.myform.chilot.value=="")
   { alert("Please select the chilot!" );
    document.myform.chilot.focus() ;
    return false;
   }
        if(document.myform.image.value=="")
   { alert("Please fill the image!" );
    document.myform.image.focus() ;
    return false;
   }
       if(document.myform.sex.value=="")
   { alert("Please fill the sex!" );
    document.myform.sex.focus() ;
    return false;
   }
       if(document.myform.sex1.value=="")
   { alert("Please fill the sex!" );
    document.myform.sex1.focus() ;
    return false;
   }
			
	if(document.myform.c_type.value=="")
   { alert("Please fill your case type!" );
    document.myform.c_type.focus() ;
    return false;
   }      
	if(document.myform.name.value=="")
   { alert("Please fill first name!" );
    document.myform.name.focus() ;
    return false;
   }
   var str=document.myform.name.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.name.value="";
	          document.myform.name.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for first name.");
		         document.myform.name.value="";
	             document.myform.name.focus();
	             return false;
		      } 
			 if(document.myform.name1.value=="")
   { alert("Please fill first name!" );
    document.myform.name1.focus() ;
    return false;
   }
   var str=document.myform.name1.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  first name");
	          document.myform.name1.value="";
	          document.myform.name1.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for first name.");
		         document.myform.name1.value="";
	             document.myform.name1.focus();
	             return false;
		      }  
			  
			  
			  
			 	if(document.myform.fname.value=="")
   { alert("Please fill father name!" );
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
	          alert("please insert alphabet characters for  father name");
	          document.myform.fname.value="";
	          document.myform.fname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for father name.");
		         document.myform.fname.value="";
	             document.myform.fname.focus();
	             return false;
		      }   
if(document.myform.fname1.value=="")
   { alert("Please fill father name!" );
    document.myform.fname1.focus() ;
    return false;
   }
   var str=document.myform.fname1.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  father name");
	          document.myform.fname1.value="";
	          document.myform.fname1.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for father name.");
		         document.myform.fname1.value="";
	             document.myform.fname1.focus();
	             return false;
		      } 
if(document.myform.kebele.value=="")
   { alert("Please fill kebele!" );
    document.myform.kebele.focus() ;
    return false;
   }
   var str=document.myform.kebele.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
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
		         alert("please enter at least two alphabet characters for kebele.");
		         document.myform.kebele.value="";
	             document.myform.kebele.focus();
	             return false;
		      }   
if(document.myform.kebele1.value=="")
   { alert("Please fill kebele!" );
    document.myform.kebele1.focus() ;
    return false;
   }
   var str=document.myform.kebele1.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  kebele");
	          document.myform.kebele1.value="";
	          document.myform.kebele1.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for kebele.");
		         document.myform.kebele1.value="";
	             document.myform.kebele1.focus();
	             return false;
		      } 
if(document.myform.accuserID.value=="")
   { alert("Please fill accuserID!" );
    document.myform.accuserID.focus() ;
    return false;
   }
   var str=document.myform.accuserID.value;
		   if(str.length>5 && str.length<12)
		   {
	       var valid="0123456789";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert number for  accuserID");
	          document.myform.accuserID.value="";
	          document.myform.accuserID.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least six digit for accuserID.");
		         document.myform.accuserID.value="";
	             document.myform.accuserID.focus();
	             return false;
		      }
if(document.myform.accusedID.value=="")
   { alert("Please fill accusedID!" );
    document.myform.accusedID.focus() ;
    return false;
   }
   var str=document.myform.accusedID.value;
		   if(str.length>5 && str.length<12)
		   {
	       var valid="0123456789";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert number for  accusedID");
	          document.myform.accusedID.value="";
	          document.myform.accusedID.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least six digit for accusedID.");
		         document.myform.accusedID.value="";
	             document.myform.accusedID.focus();
	             return false;
		      }
    if(document.myform.age.value=="")
   { alert("Please fill the age!" );
    document.myform.age.focus() ;
    return false;
   }
   if(document.myform.age1.value=="")
   { alert("Please fill the age!" );
    document.myform.age1.focus() ;
    return false;
   }			  
  return (true); 
}

</script> 	
</head>
<body>
   <center>
 <form action="case.php" method="post" name='myform' target="_top" onsubmit='return validate()' id='form1' enctype="multipart/form-data">
<h2>New Case Registration Form</h2>
<table id="container" height="40%" style="background-color:Silver" border="0" width="50%">
 <tr>
<td>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="date" id="date" name="date"/></td></tr>
<tr>
<td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="c_type">
<option disabled selected value>Select case type  </option>
      <option value="civil">civil</option>
      <option value="criminal">criminal</option>
      </select>
  </strong></td></tr>
<tr>
<td>
<table id="container">
  <tr>
  <td> 
  <h2><center>Accuser Information</center></h2></td>

<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="name" placeholder="First Name" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" placeholder="Father Name" name="fname" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:12px;font-weight:bold" placeholder="AccuserID&nbsp;Allowed:
<?php
require_once 'dbConfig.php';
$sqs="SELECT accuserID FROM cases ORDER BY accuserID DESC LIMIT 1";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$a=$row1['accuserID']+"1";
		echo $a;
	}
	
	}
?>
" name="accuserID" type="text"></td></tr>
<tr>
 <td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="sex">
<option disabled selected value>Select Sex  </option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
  </strong></td></tr>
  <tr>
  <td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px; font-weight:bold" name="age" placeholder="Age" type="number" min="18" max="130"></td></tr>  
</tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="kebele" placeholder="Kebele"type="text"></td>
</tr>
 </table>
 </td>
 <td>
 <table id="container">
  <tr>
<td> 
  <h2><center>Accused Information</center></h2></td>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"name="name1" placeholder="First Name" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" placeholder="Father Name" name="fname1" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:12px;font-weight:bold" placeholder="AccusedID&nbsp;Allowed:
<?php
require_once 'dbConfig.php';
$sqs="SELECT accusedID FROM cases ORDER BY accusedID DESC LIMIT 1";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
		$a=$row1['accusedID']+"1";
		echo $a;
	}
	
	}
?>

" name="accusedID" type="text"></td></tr>
<tr>
 <td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="sex1">
<option disabled selected value>Select Sex  </option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
  </strong></td></tr>
  <tr>
  <td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="age1" placeholder="Age" type="number" min="18" max="130"></td></tr>  
</tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="kebele1" placeholder="Kebele"type="text"></td>
</tr>
 </td>
   </tr>
   </table>
   <tr><td><select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:75%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="chilot">
  <option disabled selected value>Select chilot  </option>
  <option value="chilot1">chilot1</option>
  <option value="chilot2">chilot2</option>
  <option value="chilot3">chilot3</option>
  <option value="chilot4">chilot4</option>
  <option value="chilot5">chilot5</option>
  <option value="chilot6">chilot6</option>
  <option value="chilot6">chilot7</option>
</select></td>
  </tr>
   <tr><td align="right"><h2>Description paper</h2></td>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="file"id="image" name="image" cols="30" rows="5"></td></tr>
  <tr><td>&nbsp;</td></tr>
  <tr>

				 
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