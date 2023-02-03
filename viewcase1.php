<?php
$con= mysql_connect("localhost", "root","");

//check connection
     if(!$con){

	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }
	 
//select database
 mysql_select_db("dtcms",$con);
$query_custexpert = "SELECT * FROM newcase";
$custexpert = mysql_query($query_custexpert, $con) or die(mysql_error());
$row_custexpert = mysql_fetch_assoc($custexpert);
$totalRows_custexpert = mysql_num_rows($custexpert);


$colname_cusexpert = "-1";
 mysql_select_db("dtcms",$con);
if (isset($_POST['txt_search']))
 {//show all
   $searchword = $_POST['txt_search'];
   $query_cusexpert = "SELECT * FROM newcase WHERE case_id= $searchword ";
}
else
{
 $query_cusexpert  = "SELECT * FROM newcase";
}
$cusexpert = mysql_query($query_cusexpert, $con) or die(mysql_error());
$row_cusexpert = mysql_fetch_assoc($cusexpert);
$totalRows_cusexpert = mysql_num_rows($cusexpert);
?> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <HTML>
<HEAD>
<META NAME="Generator" CONTENT="EditPlus">

<META NAME="Author" CONTENT="">

<META NAME="Keywords" CONTENT="">

<META NAME="Description" CONTENT="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>court information paper</title>
<style type="text/css">
<!--
.style5 {color: #FF00FF; font-weight: bold; font-size: 18px; }
.style6 {color: black}
-->
</style>
</head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#contact6").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	

  });
  </script>
<body>
<h1 align="center" class="style6">የአዲስ ኬዝ መረጃ </h1>
<form id="form2" name="form2" method="post" action="viewcase.php">
  <label>በአይዲ ፈልግ
  <input name="txt_search" type="text" id="contact6" required/>
  <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg"></span><span class="style2"></span>
  </label>
  <input name="btn_search" type="submit" id="btn_search" value="አስገባ" />
</form>
<p align="center" class="style6">&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <table width="995" border="1">
    <tr>
      <td width="111"><span class="style6">የተመዘገበበት ቀን</span></td>
      <td width="46"><span class="style6">ኬዝ አይዲ</span></td>
	  <td width="46"><span class="style6">የኬዝ አይነት</span></td>
      <td width="95"><span class="style6">የአመልካች ስም</span></td>
	   <td width="95"><span class="style6">የአመልካች አባት ስም</span></td>
	  <td width="46"><span class="style6">ጾታ</span></td>
	  <td width="46"><span class="style6">እድሜ</span></td>
	  <td width="95"><span class="style6">የተከሳስ ስም</span></td>
	  <td width="95"><span class="style6">የተከሳስ አባት ስም</span></td>
      <td width="95"><span class="style6">የአመልካች አይዲ</span></td>
      <td width="95"><span class="style6">ብሄር</span></td>
		 <td width="54"><span class="style6">ዞን</span></td>
      <td width="71"><span class="style6">ወረዳ</span></td>
	  <td width="46"><span class="style6">ከበሌ</span></td>
      <td width="126"><span class="style6">ስልክ ቁጥር</span></td>
      <td width="81"><span class="style6">የዳኛ አይዲ</span></td>
      <td width="53"><span class="style6">ጠበቃ</span></td>
	  <td width="53"><span class="style6">ኢሜል</span></td>
      <td width="190"><span class="style6">የኬዝ መግለጫ</span></td>
     
     
    </tr>
    
      <?php do { ?>
	  <tr>
          <td><?php echo $row_cusexpert
		  ['register_date']; ?></td>
          <td><?php echo $row_cusexpert
		  ['case_id']; ?></td>
		   <td><?php echo $row_cusexpert
		  ['case_type']; ?></td>
      <td><?php echo $row_cusexpert
	  ['accuser_name']; ?></td>
	  <td><?php echo $row_cusexpert
	  ['accuser_fname']; ?></td>
	   <td><?php echo $row_cusexpert
		  ['sex']; ?></td>
		   <td><?php echo $row_cusexpert
		  ['Age']; ?></td>
		   <td><?php echo $row_cusexpert
		  ['accused_name']; ?></td>
		   <td><?php echo $row_cusexpert
		  ['accused_fname']; ?></td>
          <td><?php echo $row_cusexpert
	  ['accuserID']; ?></td>
    
      <td><?php echo $row_cusexpert
	  ['nation']; ?></td>
	 
	  
	   <td><?php echo $row_cusexpert
	  ['zone']; ?></td>
      <td><?php echo $row_cusexpert
	  ['wereda']; ?></td>
	   
		   <td><?php echo $row_cusexpert
		  ['kebele']; ?></td>
    
      <td><?php echo $row_cusexpert
	  ['phone_number']; ?></td>
      <td><?php echo $row_cusexpert
	  ['judge_id']; ?></td>
	   <td><?php echo $row_cusexpert
	  ['advocator']; ?></td>
      <td width="47"><?php echo $row_cusexpert
	  ['e_mail']; ?></td>
      </tr>
	<?php } while ($row_cusexpert = mysql_fetch_assoc($cusexpert)); ?>
  </table>
</form>
<a href="viewcase.php"></a>ጠቅላላ የተመዘገበ
<?php echo $totalRows_custexpert ?><pre>                          
   <input name="button" type="button" onClick="window.print()" value="Print" /></pre>

</body>
</html>
<?php
mysql_free_result($custexpert);

mysql_free_result($cusexpert);
?>