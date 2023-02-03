<html>
<head>
<title>ፋይል መመዝገቢያ</title>
<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
	<link rel="stylesheet" href="common/css/all.css">
<script type="text/JavaScript">
function validate()
{ 
     if(document.myform.date.value=="")
   { alert("እባክዎ ቀን ያስገቡ!" );
    document.myform.date.focus() ;
    return false;
   }
     if(document.myform.chilot.value=="")
   { alert("እባክዎ ችሎት ያስገቡ!" );
    document.myform.chilot.focus() ;
    return false;
   }
        if(document.myform.image.value=="")
   { alert("እባክዎ ፎቶግራፍ ያስገቡ!" );
    document.myform.image.focus() ;
    return false;
   }
       if(document.myform.sex.value=="")
   { alert("እባክዎ የከሳሽ ፆታ ያስገቡ!" );
    document.myform.sex.focus() ;
    return false;
   }
       if(document.myform.sex1.value=="")
   { alert("እባክዎ የተከሳሽ ፆታ ያስገቡ!" );
    document.myform.sex1.focus() ;
    return false;
   }
			
	if(document.myform.c_type.value=="")
   { alert("እባክዎ የፋይል አይነት ያስገቡ!" );
    document.myform.c_type.focus() ;
    return false;
   }      
	if(document.myform.name.value=="")
   { alert("እባክዎ ስም ያስገቡ!" );
    document.myform.name.focus() ;
    return false;
   }
   var str=document.myform.name.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ/";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ ስም በፊደል ያስገቡ");
	          document.myform.name.value="";
	          document.myform.name.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም ስም ያስገቡ.");
		         document.myform.name.value="";
	             document.myform.name.focus();
	             return false;
		      } 
			 if(document.myform.name1.value=="")
   { alert("እባክዎ ስም ያስገቡ!" );
    document.myform.name1.focus() ;
    return false;
   }
   var str=document.myform.name1.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ/ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ ስም በፊደል ያስገቡ");
	          document.myform.name1.value="";
	          document.myform.name1.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም ስም ያስገቡ.");
		         document.myform.name1.value="";
	             document.myform.name1.focus();
	             return false;
		      }  
			  
			  
			  
			 	if(document.myform.fname.value=="")
   { alert("እባክዎ የአባት ስም ያስገቡ!" );
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
	          alert("እባክዎ የአባት ስም በፊደል ያስገቡ");
	          document.myform.fname.value="";
	          document.myform.fname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም የአባት ስም ያስገቡ.");
		         document.myform.fname.value="";
	             document.myform.fname.focus();
	             return false;
		      }   
if(document.myform.fname1.value=="")
   { alert("እባክዎ የአባት ስም ያስገቡ!" );
    document.myform.fname1.focus() ;
    return false;
   }
   var str=document.myform.fname1.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ/";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ የአባት ስም በፊደል ያስገቡ");
	          document.myform.fname1.value="";
	          document.myform.fname1.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም የአባት ስም ያስገቡ.");
		         document.myform.fname1.value="";
	             document.myform.fname1.focus();
	             return false;
		      } 
if(document.myform.kebele.value=="")
   { alert("እባክዎ ቀበሌ ያስገቡ!" );
    document.myform.kebele.focus() ;
    return false;
   }
   var str=document.myform.kebele.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ/";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ ቀበሌ በፊደል ያስገቡ");
	          document.myform.kebele.value="";
	          document.myform.kebele.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም ቀበሌ ያስገቡ.");
		         document.myform.kebele.value="";
	             document.myform.kebele.focus();
	             return false;
		      }   
if(document.myform.kebele1.value=="")
   { alert("እባክዎ ቀበሌ ያስገቡ!" );
    document.myform.kebele1.focus() ;
    return false;
   }
   var str=document.myform.kebele1.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ/";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("እባክዎ ቀበሌ በፊደል ያስገቡ");
	          document.myform.kebele1.value="";
	          document.myform.kebele1.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ሁለት ፊደል በመጠቀም ቀበሌ ያስገቡ.");
		         document.myform.kebele1.value="";
	             document.myform.kebele1.focus();
	             return false;
		      } 
if(document.myform.accuserID.value=="")
   { alert("እባክዎ የከሳሽ መለያ ያስገቡ!" );
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
	          alert("እባክዎ ቁጥር በመጠቀም መለያ ያስገቡ");
	          document.myform.accuserID.value="";
	          document.myform.accuserID.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ስድስት አሀዝ በመጠቀም መለያ ያስገቡ.");
		         document.myform.accuserID.value="";
	             document.myform.accuserID.focus();
	             return false;
		      }
if(document.myform.accusedID.value=="")
   { alert("እባክዎ የተከሳሽ መለያ ያስገቡ!" );
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
	          alert("እባክዎ የተከሳሽ መለያ በቁጥር ያስገቡ");
	          document.myform.accusedID.value="";
	          document.myform.accusedID.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("እባክዎ ቢያንስ ስድስት አሀዝ በመጠቀም የተከሳሽ መለያ ያስገቡ.");
		         document.myform.accusedID.value="";
	             document.myform.accusedID.focus();
	             return false;
		      }
    if(document.myform.age.value=="")
   { alert("እባክዎ እድሜ ያስገቡ!" );
    document.myform.age.focus() ;
    return false;
   }
   if(document.myform.age1.value=="")
   { alert("እባክዎ እድሜ ያስገቡ!" );
    document.myform.age1.focus() ;
    return false;
   }			  
  return (true); 
}

</script> 	
</head>
<body>
   <center>
 <form action="casea.php" method="post" name='myform' target="_top" onsubmit='return validate()' id='form1' enctype="multipart/form-data">
<h2>አድስ ፋይል መመዝገቢያ ቅፅ</h2>
<table id="container" height="40%" style="background-color:Silver" border="0" width="50%">
 <tr>
<td>
<input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="date" id="date" name="date"/></td></tr>
<tr>
<td><strong>
    <select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="c_type">
<option disabled selected value>የፋይል አይነት ይምረጡ </option>
      <option value="civil">የፍታብሄር</option>
      <option value="criminal">የወንጀል</option>
      </select>
  </strong></td></tr>
<tr>
<td>
<table id="container">
  <tr>
  <td> 
  <h2><center>የከሳሽ መረጃ</center></h2></td>

<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="name" placeholder="ስም" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" placeholder="የአባት ስም" name="fname" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:12px;font-weight:bold" placeholder="የተፈቀደ የከሳሽ መለያ:
<?php
require_once 'dbConfiga.php';
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
<option disabled selected value>ፆታ ይምረጡ</option>
      <option value="Male">ወንድ</option>
      <option value="Female">ሴት</option>
      </select>
  </strong></td></tr>
  <tr>
  <td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px; font-weight:bold" name="age" placeholder="እድሜ" type="number" min="18" max="130"></td></tr>  
</tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="kebele" placeholder="ቀበሌ"type="text"></td>
</tr>
 </table>
 </td>
 <td>
 <table id="container">
  <tr>
<td> 
  <h2><center>የተከሳሽ መረጃ</center></h2></td>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold"name="name1" placeholder="ስም" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" placeholder="የአባት ስም" name="fname1" type="text"></td></tr>
<tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:12px;font-weight:bold" placeholder="የተፈቀደ የተከሳሽ መለያ:
<?php
require_once 'dbConfiga.php';
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
<option disabled selected value>ፆታ ይምረጡ</option>
      <option value="Male">ወንድ</option>
      <option value="Female">ሴት</option>
      </select>
  </strong></td></tr>
  <tr>
  <td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="age1" placeholder="እድሜ" type="number" min="18" max="130"></td></tr>  
</tr>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="kebele1" placeholder="ቀበሌ"type="text"></td>
</tr>
 </td>
   </tr>
   </table>
   <tr><td><select style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:75%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" name="chilot">
  <option disabled selected value>ችሎት ይምረጡ  </option>
  <option value="chilot1">ችሎት1</option>
  <option value="chilot2">ችሎት2</option>
  <option value="chilot3">ችሎት3</option>
  <option value="chilot4">ችሎት4</option>
  <option value="chilot5">ችሎት5</option>
  <option value="chilot6">ችሎት6</option>
  <option value="chilot6">ችሎት7</option>
</select></td>
  </tr>
   <tr><td align="right"><h2>የማብራሪያ ወረቀት</h2></td>
<td><input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:white;border-radius:5px;color:black;font-size:15px;font-weight:bold" type="file"id="image" name="image" cols="30" rows="5"></td></tr>
  <tr><td>&nbsp;</td></tr>
  <tr>

				 
				  <tr><td> <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:blue;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="submit" type="submit" class="style2" value="ያስገቡ" height="24" ></td>
				   </tr>
				 
				  <tr><td>
                   <input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:red;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="reset" type="reset" class="style2" value="ያጥፉ">
                    <br />                  </td>
                </tr>
  </table>
</form>
 </body>
</html>