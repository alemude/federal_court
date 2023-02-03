<html>
<head>
<title>ጠበቃ መመዝገቢያ</title>
<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
	<link rel="stylesheet" href="common/css/all.css">
<script type="text/JavaScript">
function validate()
{
if(document.myform.date.value=="")
   { alert("እባክዎ ቀኑን ያስገቡ!" );
    document.myform.date.focus() ;
    return false;
   }	
if(document.myform.image.value=="")
   { alert("እባክዎ ፎቶግራፍ ያስገቡ!" );
    document.myform.image.focus() ;
    return false;
   }
   if(document.myform.fname.value=="")
   { alert("እባክዎ የመጀመሪያ ስም ያስገቡ!" );
    document.myform.fname.focus() ;
    return false;
   }
   var str=document.myform.fname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ/";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ የመጀመሪያ ስም በፊደል ያስገቡ");
	          document.myform.fname.value="";
	          document.myform.fname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም የመጀመሪያ ስም ያስገቡ.");
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
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ የአባት ስም በፊደል ያስገቡ");
	          document.myform.mname.value="";
	          document.myform.mname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም የአባት ስም ያስገቡ.");
		         document.myform.mname.value="";
	             document.myform.mname.focus();
	             return false;
		      } 

if(document.myform.lname.value=="")
   { alert("እባክዎ የአያት ስም ያስገቡ!" );
    document.myform.lname.focus() ;
    return false;
   }
   var str=document.myform.lname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ የአያት ስም በፊደል ያስገቡ");
	          document.myform.lname.value="";
	          document.myform.lname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም የአያት ስም ያስገቡ.");
		         document.myform.lname.value="";
	             document.myform.lname.focus();
	             return false;
		      }  
if(document.myform.sex.value=="")
   { alert("እባክዎ ፆታ ይምረጡ!" );
    document.myform.sex.focus() ;
    return false;
   }
if(document.myform.age.value=="")
   { alert("እባክዎ እድሜ ያስገቡ!" );
    document.myform.age.focus() ;
    return false;
   }
   

   if(document.myform.phone.value=="")
	{
	alert("እባክዎ ስልክ ቁጥር ያስገቡ ");
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
	alert("እባክዎ ስልክ ቁጥር በቁጥር ብቻ ያስገቡ");
	document.myform.phone.value="";
	document.myform.phone.focus();
	return false;
	}
	}
	if(str.length!=10)
	{
	alert("እባክዎ ስልክ ቁጥር ባለ 10 አሃዝ ያስገቡ.");
	document.myform.phone.focus();
	return false;
	}
 if (str.charAt(0)!="0")
           {
             alert("ስልክ ቁጥር የሚጀምረዉ በቁጥር 0 ነው");
			 document.myform.phone.focus();
              return false;
			  	   
           }
if (str.charAt(1)!="9")			   
           {
             alert("ስልክ ቁጥር የሚጀምረዉ በቁጥር 09 ነዉ");
			 document.myform.phone.focus();
              return false;
           }
if(document.myform.status.value=="")
   { alert("እባክዎ ማዕረግ ይምረጡ!" );
    document.myform.status.focus() ;
    return false;
   } 

if(document.myform.description.value=="")
   { alert("እባክዎ ማብራሪያ ያስገቡ!" );
    document.myform.description.focus() ;
    return false;
   }	      

if(document.myform.email.value == "" )
   {
    alert("እባክዎ ኢሜይል ዎን ያስገቡ!" );
    document.myform.email.focus() ;
    return false;
   }
   var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("የማያገለግል ኢሜይል አስገብተዋል");
  document.myform.email.value="";
  return false;
  }
if(document.myform.woreda.value=="")
   { alert("እባክዎ ወረዳዎን ያስገቡ!" );
    document.myform.woreda.focus() ;
    return false;
   }
   var str=document.myform.woreda.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ/";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ ወረዳዎን በፊደል ያስገቡ");
	          document.myform.woreda.value="";
	          document.myform.woreda.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም ወረዳዎን ያስገቡ.");
		         document.myform.woreda.value="";
	             document.myform.woreda.focus();
	             return false;
		      } 
if(document.myform.city.value=="")
   { alert("እባክዎ ከተማዎን ያስገቡ!" );
    document.myform.city.focus() ;
    return false;
   }
   var str=document.myform.city.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ ከተማዎን በፊደል ያስገቡ");
	          document.myform.city.value="";
	          document.myform.city.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም ከተማዎን ያስገቡ.");
		         document.myform.city.value="";
	             document.myform.city.focus();
	             return false;
		      } 

if(document.myform.kebele.value=="")
   { alert("እባክዎ ቀበሌዎን ያስገቡ!" );
    document.myform.kebele.focus() ;
    return false;
   }

   
   
   
   var str=document.myform.kebele.value;
		   if(str.length>1 && str.length<12)
		   {
    var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ ቀበሌዎን በፊደል ያስገቡ");
	          document.myform.kebele.value="";
	          document.myform.kebele.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም ቀበሌዎን ያስገቡ.");
		         document.myform.kebele.value="";
	             document.myform.kebele.focus();
	             return false;
		      } 
if(document.myform.status.value=="")
   { alert("እባክዎ ማዕረግ ይምረጡ!" );
    document.myform.status.focus() ;
    return false;
if(document.myform.description.value=="")
   { alert("እባክዎ ማብራሪያ ያስገቡ!" );
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
 <form action="registerAdvocatora.php" method="post" name='myform' target="_top" onsubmit='return validate()' id='form1' enctype="multipart/form-data">
<h2>አድስ ጠበቃ መመዝገቢያ ቅፅ</h2>
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
                 
                  <td colspan="2" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" placeholder="ስም" name="fname" size="30" />
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="2" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="የአባት ስም" name="mname" size="30" />
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="2" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="የአያት ስም" name="lname" size="30" />
                    <br />                  </td>
             <tr>
 <td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="sex">
<option disabled selected value>ፆታ ይምረጡ </option>
      <option value="Male">ወንድ</option>
      <option value="Female">ሴት</option>
      </select>
  </strong></td></tr>
				           <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="age" placeholder="እድሜ" type="number" min="24" max="130"/>
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="ስልክ ቁጥር" name="phone" size="30" />
                    <br />                  </td>
                </tr>
 </table>
 </td>
 <td>
 <table id="container">
  <tr>
<tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" placeholder="ኢሜይል" name="email" size="30" />
                    <br />                  </td>
                </tr>
				<tr style="vertical-align: top">
                  
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" placeholder="ወረዳ" name="woreda" size="30" />
				  
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" placeholder="ከተማ" name="city" size="30" />
				  
                    <br />                  </td>
                </tr>
                <tr style="vertical-align: top">
                   <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"type="text" name="kebele" placeholder="ቀበሌ" size="30" /></td>
                </tr>
                <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="text" name="h_number" placeholder="የቤት ቁጥር" size="30" />
                    <br />                  </td>
                </tr>
             <tr>
 <td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:14px;font-weight:bold" name="status">
<option disabled selected value>ማዕረግ ይምረጡ </option>
                      <option value="degree">ድግሪ</option>
                      <option value="master">ማስተርስ</option>
                      <option value="phd">ፒኤችድ</option>
					   <option value="phd">የለውም</option>
                    </select>
                    <br />                  </td>
                </tr>
				
   </table>


				 <tr style="vertical-align: top">
                  <td colspan="3" class="TitleColor"><textarea style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="description" cols="67" rows="5" placeholder="ስለ ጠበቃው ያስገቡ" ></textarea>
				  
                    <br />                  </td>
                </tr>
				  <tr><td> <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:blue;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="submit" type="submit" class="style2" value="አስባ" height="24" ></td>
				   </tr>
				 
				  <tr><td>
                   <input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:red;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="reset" type="reset" class="style2" value="አጥፋ">
                    <br />                  </td>
                </tr>
  </table>
</form>
 </body>
</html>