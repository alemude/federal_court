<html>
<head>
<title>ምስክር መመዝገብ </title>
<script language="JavaScript" src="js/calendar.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-lang.js" type="text/JavaScript"></script>
<script language="JavaScript"  src="js/calendar-setup.js" type="text/JavaScript"></script>
	<link rel="stylesheet" href="common/css/all.css">
<script type="text/JavaScript">
function validate()
{ 
     if(document.myform.date.value=="")
   { alert("ቀን ይሙሉ!" );
    document.myform.date.focus() ;
    return false;
   }
   if(document.myform.caseID.value=="")
   { alert("የፋይል መለዮ  ያስገቡ" );
    document.myform.caseID.focus() ;
    return false;
   }
   if(document.myform.type.value=="")
   { alert("የፋይል አይነት ያስገቡ!" );
    document.myform.type.focus() ;
    return false;
   }
   if(document.myform.pfname.value=="")
   { alert("የከሳሽ  ስም  ያስገቡ!" );
    document.myform.pfname.focus() ;
    return false;
   }
   var str=document.myform.pfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ለስም ሆሄ ያስገቡ");
	          document.myform.pfname.value="";
	          document.myform.pfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ለስም ያስገቡ.");
		         document.myform.pfname.value="";
	             document.myform.pfname.focus();
	             return false;
		      }
			 if(document.myform.pmname.value=="")
   { alert("የከሳሽ አባት ስም!" );
    document.myform.pmname.focus() ;
    return false;
   }
   var str=document.myform.pmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ቢያንስ ሁለት ሆሄ ያስገቡ");
	          document.myform.pmname.value="";
	          document.myform.pmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.pmname.value="";
	             document.myform.pmname.focus();
	             return false;
		      }
			 if(document.myform.plname.value=="")
   { alert("የከሳሽ አባት ስም!" );
    document.myform.plname.focus() ;
    return false;
   }
   var str=document.myform.plname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(ቢ))==-1)
	         {
	          alert("ቢያንስ ሁለት ሆሄ ያስገቡ");
	          document.myform.plname.value="";
	          document.myform.plname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.plname.value="";
	             document.myform.plname.focus();
	             return false;
		      }
     if(document.myform.psex.value=="")
   { alert("የከሳሽ  ፆታ !" );
    document.myform.psex.focus() ;
    return false;
   }			  
       if(document.myform.padd.value=="")
   { alert("የከሳሽ አድራሻ !" );
    document.myform.padd.focus() ;
    return false;
   }
   if(document.myform.dfname.value=="")
   { alert("የተከሳሽ ስም!" );
    document.myform.dfname.focus() ;
    return false;
   }
   var str=document.myform.dfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.dfname.value="";
	          document.myform.dfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.dfname.value="";
	             document.myform.dfname.focus();
	             return false;
		      }
			 if(document.myform.dmname.value=="")
   { alert("የተከሳሽ አባት ስም !" );
    document.myform.dmname.focus() ;
    return false;
   }
   var str=document.myform.dmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.dmname.value="";
	          document.myform.dmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.dmname.value="";
	             document.myform.dmname.focus();
	             return false;
		      }
			 if(document.myform.dlname.value=="")
   { alert("የተከሳሽ የአያት ስም!" );
    document.myform.dlname.focus() ;
    return false;
   }
   var str=document.myform.dlname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.dlname.value="";
	          document.myform.dlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.dlname.value="";
	             document.myform.dlname.focus();
	             return false;
		      }
     if(document.myform.dsex.value=="")
   { alert("የተከሳሽ ፆታ!" );
    document.myform.dsex.focus() ;
    return false;
   }			  
       if(document.myform.daddress.value=="")
   { alert("የተከሳሽ አድራሻ!" );
    document.myform.daddress.focus() ;
    return false;
   }
if(document.myform.wfname.value=="")
   { alert("የምስክር ስም ያስገቡ!" );
    document.myform.wfname.focus() ;
    return false;
   }
   var str=document.myform.wfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.wfname.value="";
	          document.myform.wfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.wfname.value="";
	             document.myform.wfname.focus();
	             return false;
		      }
			 if(document.myform.wmname.value=="")
   { alert("የምስክር አባት ስም ያስገቡ!" );
    document.myform.wmname.focus() ;
    return false;
   }
   var str=document.myform.wmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.wmname.value="";
	          document.myform.wmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.wmname.value="";
	             document.myform.wmname.focus();
	             return false;
		      }
			 if(document.myform.wlname.value=="")
   { alert("የምስክር የአያት ስም !" );
    document.myform.wlname.focus() ;
    return false;
   }
   var str=document.myform.wlname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ቢያንስ ሁለት ሆሄ ያስገቡ");
	          document.myform.wlname.value="";
	          document.myform.wlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.wlname.value="";
	             document.myform.wlname.focus();
	             return false;
		      }
     if(document.myform.wsex.value=="")
   { alert("የምስክር ፆታ ያስገቡ!" );
    document.myform.wsex.focus() ;
    return false;
   }			  
       if(document.myform.waddress.value=="")
   { alert("የምስክር አድራሻ!" );
    document.myform.waddress.focus() ;
    return false;
   }
 if(document.myform.wifname.value=="")
   { alert("የምስክር ስም!" );
    document.myform.wifname.focus() ;
    return false;
   }
   var str=document.myform.wifname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.wifname.value="";
	          document.myform.wifname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.wifname.value="";
	             document.myform.wifname.focus();
	             return false;
		      }
			 if(document.myform.wimname.value=="")
   { alert("የምስክር አባት ስም!" );
    document.myform.wimname.focus() ;
    return false;
   }
   var str=document.myform.wimname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.wimname.value="";
	          document.myform.wimname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.wimname.value="";
	             document.myform.wimname.focus();
	             return false;
		      }
			 if(document.myform.wilname.value=="")
   { alert("የምስክር የአያት ስም!" );
    document.myform.wilname.focus() ;
    return false;
   }
   var str=document.myform.wilname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.wilname.value="";
	          document.myform.wilname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.wilname.value="";
	             document.myform.wilname.focus();
	             return false;
		      }
     if(document.myform.wisex.value=="")
   { alert("የምስክር ፆታ!" );
    document.myform.wisex.focus() ;
    return false;
   }			  
       if(document.myform.wiaddress.value=="")
   { alert("የምስክር አድራሻ!" );
    document.myform.wiaddress.focus() ;
    return false;
   }
   if(document.myform.witfname.value=="")
   { alert("የምስክር ስም!" );
    document.myform.witfname.focus() ;
    return false;
   }
   var str=document.myform.witfname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.witfname.value="";
	          document.myform.witfname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ያስገቡ.");
		         document.myform.witfname.value="";
	             document.myform.witfname.focus();
	             return false;
		      }
			 if(document.myform.witmname.value=="")
   { aler("የምስክር አባት ስም " );
    document.myform.witmname.focus() ;
    return false;
   }
   var str=document.myform.witmname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ሆሄ ያስገቡ");
	          document.myform.witmname.value="";
	          document.myform.witmname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ ይሙሉ.");
		         document.myform.witmname.value="";
	             document.myform.witmname.focus();
	             return false;
		      }
			 if(document.myform.witlname.value=="")
   { alert("የምስክር የአያት ስም!" );
    document.myform.witlname.focus() ;
    return false;
   }
   var str=document.myform.witlname.value;
		   if(str.length>1 && str.length<12)
		   {
	       var valid="ሀሁሂሃሄህሆኋለሉሊላሌልሎሏሐሑሒሓሔሕሖሗመሙሚማሜምሞሟሠሡሢሣሤሥሦሧረሩሪራሬርሮሯሰሱሲሳሴስሶሷሸሹሺሻሼሽሾሿቀቁቂቃቄቅቆቋበቡቢባቤብቦቧቨቩቪቫቬቭቮቯተቱቲታቴትቶቷቸቹቺቻቼችቾቿየዩዪያዬይዮነኑኒናኔንኖኗነኑኒናኔንኖኗኘኙኚኛኜኝኞኟአኡኢኣኤእኦኧከኩኪካኬክኮኳኸኹኺኻኼኽኾዃወዉዊዋዌውዎዘዙዚዛዜዝዞዟዠዡዢዣዤዥዦዧደዱዲዳዴድዶዷጀጁጂጃጄጅጆጇገጉጊጋጌግጎጓጠጡጢጣጤጥጦጧጨጩጪጫጬጭጮጯጰጱጲጳጴጵጶጷጸጹጺጻጼጽጾጿፈፉፊፋፌፍፎፏፀፁፂፃፄፅፆጿዐዑዒዓዔዕዖኀኁኂኃኄኅኆኋፐፑፒፓፔፕፖፗ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("ቢያንስ ሁለት ሆሄ ያስገቡ");
	          document.myform.witlname.value="";
	          document.myform.witlname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("ቢያንስ ሁለት ሆሄ.");
		         document.myform.witlname.value="";
	             document.myform.witlname.focus();
	             return false;
		      }
     if(document.myform.witsex.value=="")
   { alert("የምስክር ፆታ !" );
    document.myform.witsex.focus() ;
    return false;
   }			  
       if(document.myform.witaddress.value=="")
   { alert("የምስክር አድራሻ ይሙሉ!" );
    document.myform.witaddress.focus() ;
    return false;
   }
  if(document.myform.image.value=="")
   { alert("ፎቶግራፍ  ይሙሉ!" );
    document.myform.image.focus() ;
    return false;
   } 
  if(document.myform.maker.value=="")
   { alert("ስም  ይሙሉ!" );
    document.myform.maker.focus() ;
    return false;
   }   
  return (true); 
}

</script> 	
</head>
<body>
<center>
<p style="background-color:yellow;width:100%;border-radius:20px;font-size:30px;font-weight:bold"><td colspan="6" align="center"><span>ምስክር መመዝገብ</span></p>

 <form action="evidenceda.php" method="post" name='myform' target="_top" onsubmit='return validate()' id='form1' enctype="multipart/form-data">
<table align="center">
<tr><td colspan="4" align="right"></td><td>Date</td><td>
<input type="date" name="date" id="date"/>
<tr><td>
<input type="text" placeholder="የፋይል መለዮ" name="caseID" /></td></tr><tr><td>
<input type="text" placeholder="የፋይል አይነት" name="type" /></td></tr>
<tr><td>&nbsp;</td><td>የመጀመሪያ  ስም</td><td>የአባት ስም</td><td>የአያት ስም </td><td>ጾታ</td><td>አድራሻ</td></tr>
<tr><td align="right">ከሳሽ</td><td>
<input type="text" name="pfname" /></td><td>
<input type="text" name="pmname" /></td><td>
<input type="text" name="plname" /></td><td><select name="psex">
<option disabled selected value>ፆታ ይምረጡ  </option>
      <option value="Male">ወንድ </option> 
      <option value="Female">ሴት</option></select></td><td>
	  <input type"text" name="padd" /></td></tr>
<tr><td align="right">የተከሳሽ</td><td>
<input type="text" name="dfname" /></td><td>
<input type="text" name="dmname" /></td><td>
<input type="text" name="dlname" /></td><td><select name="dsex">
<option disabled selected value>ፆታ ይምረጡ  </option>
      <option value="Male">ወን</option> 
      <option value="Female">ሴት</option></select></td><td>
	  <input type"text" name="daddress" /></td></tr>
<tr><td align="right">Witness 1 </td><td>
<input type="text" name="wfname" /></td><td>
<input type="text" name="wmname" /></td><td>
<input type="text" name="wlname" /></td><td>
<select name="wsex">
 <option disabled selected value>ፆታ ይምረጡ  </option>
      <option value="Male">ወንድ </option> 
      <option value="Female">ሴት</option></select></td><td><input type"text" name="waddress" /></td></tr>
	  <tr><td align="right">2</td><td>
	  <input type="text" name="wifname" /></td><td>
	  <input type="text" name="wimname" /></td><td>
	  <input type="text" name="wilname" /></td><td>
	  <select name="wisex">
<option disabled selected value>ፆታ ይምረጡ</option>
      <option value="Male">ወንድ </option> 
      <option value="Female">ሴት</option></select></td><td>
	  <input type= "text" name="wiaddress" /></td></tr>
<tr><td align="right">3 </td><td>
<input type="text" name="witfname" /></td><td>
<input type="text" name="witmname" /></td><td>
<input type="text" name="witlname" /></td><td>
<select name="witsex">
<option disabled selected value>ፆታ ይምረጡ  </option>
      <option value="Male">ወንድ </option> 
      <option value="Female">ሴት</option></select></td><td><input type"text" name="witaddress" /></td></tr>	  
<tr><td valign="top" rowspan="4" align="right">ማብራሪያ ወረቀት </td><td colspan="4" rowspan="4">
<input type="file" name="image" cols="90" rows="7"/></td><td></td></tr><tr></tr><tr></tr><tr></tr>
		  <tr><td> <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:blue;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="submit" type="submit" class="style2" value="Submit" height="24" ></td>
				   </tr>
				 
				  <tr><td>
                   <input  style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:85%; background-color:red;border-radius:5px;color:white;font-size:30px;font-weight:bold" name="reset" type="reset" class="style2" value="ማጥፋት ">
                    
                </tr></table></form>
</center>
</body>
</html>