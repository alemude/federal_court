<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$conn){
		die('Error - '.mysqli_connect_error($conn));
	}
	 
//select database
 mysqli_select_db("brcourt",$con);
$query_custexpert = "SELECT * FROM case";
$custexpert = mysqli_query($query_custexpert, $con) or die(mysqli_error());
$row_custexpert = mysqli_fetch_assoc($custexpert);
$totalRows_custexpert = mysqli_num_rows($custexpert);


$colname_cusexpert = "-1";
 mysqli_select_db("brcourt",$con);
if (isset($_POST['txt_search']))
 {//show all
   $searchword = $_POST['txt_search'];
   $query_cusexpert = "SELECT * FROM case WHERE caseID= $searchword ";
}
else
{
 $query_cusexpert  = "SELECT * FROM case";
}
$cusexpert = mysqli_query($query_cusexpert, $con) or die(mysqli_error());
$row_cusexpert = mysqli_fetch_assoc($cusexpert);
$totalRows_cusexpert = mysqli_num_rows($cusexpert);
?> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <HTML>
<HEAD>
<META NAME="Generator" CONTENT="EditPlus">

<META NAME="Author" CONTENT="">

<META NAME="Keywords" CONTENT="">

<META NAME="Description" CONTENT="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>court case paper</title>
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
<h1 align="center" class="style6">New case detail information</h1>
<form id="form2" name="form2" method="post" action="viewcase.php">
  <label>Search by ID
  <input name="txt_search" type="text" id="contact6" required/>
  <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg"></span><span class="style2"></span>
  </label>
  <input name="btn_search" type="submit" id="btn_search" value="Submit" />
</form>
<p align="center" class="style6">&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <table width="995" border="1">
    <tr>
      <td width="46"><span class="style6">Case id</span></td>
	  <td width="111"><span class="style6">Register date</span></td>
	  <td width="46"><span class="style6">Case type</span></td>
      <td width="95"><span class="style6">Accuser name</span></td>
	  <td width="95"><span class="style6">Accuser father name</span></td>
	  <td width="46"><span class="style6">Accuser Age</span></td>
	  <td width="46"><span class="style6">Accuser sex</span></td>
	  <td width="46"><span class="style6">Accuser ID</span></td>
	   <td width="46"><span class="style6">Accuser Kebele</span></td>
	  <td width="95"><span class="style6">Accused name</span></td>
	  <td width="95"><span class="style6">Accused father name</span></td>
	   <td width="46"><span class="style6">Accused Age</span></td>
	  <td width="46"><span class="style6">Accused sex</span></td>
	  <td width="46"><span class="style6">Accused ID</span></td>
	   <td width="46"><span class="style6">Accused Kebele</span></td>
      <td width="95"><span class="style6">accuserID</span></td>
	  <td width="46"><span class="style6">Accused kebele</span></td>
      <td width="126"><span class="style6">Image</span></td>
      <td width="53"><span class="style6">advocator</span></td>
	 </tr>
      <?php do { ?>
	  <tr>
	     <td><?php echo $row_cusexpert
		  ['caseID']; ?></td>
          <td><?php echo $row_cusexpert
		  ['date']; ?></td>
          <td><?php echo $row_cusexpert
		  ['c_type']; ?></td>
      <td><?php echo $row_cusexpert
	  ['name']; ?></td>
	  <td><?php echo $row_cusexpert
	  ['fname']; ?></td>
	    <td><?php echo $row_cusexpert
		  ['age']; ?></td>
	   <td><?php echo $row_cusexpert
		  ['sex']; ?></td>
		     <td><?php echo $row_cusexpert
	  ['accuserID']; ?></td>
	     <td><?php echo $row_cusexpert
	  ['kebele']; ?></td>
	  
		  <td><?php echo $row_cusexpert
		  ['name1']; ?></td>
		   <td><?php echo $row_cusexpert
		  ['fname1']; ?></td>
          <td><?php echo $row_cusexpert
	  ['age1']; ?></td>
    
      <td><?php echo $row_cusexpert
	  ['sex']; ?></td>
	  <td><?php echo $row_cusexpert
	  ['accusedID']; ?></td>
      <td><?php echo $row_cusexpert
	  ['kebele1']; ?></td>
	   <td><?php echo $row_cusexpert
		  ['image']; ?></td>
    
      <td><?php echo $row_cusexpert
	  ['advocator']; ?></td>
     
      </tr>
	<?php } while ($row_cusexpert = mysqli_fetch_assoc($cusexpert)); ?>
  </table>
</form>
<a href="viewcase.php">Show All</a> Total records
<?php echo $totalRows_custexpert ?><pre>                          
   <input name="button" type="button" onClick="window.print()" value="Print" /></pre>

</body>
</html>
<?php
mysqli_free_result($custexpert);

mysqli_free_result($cusexpert);
?>