<?php
session_start();
  require_once 'dbconfiga.php';
// Starting the session, to use and
// store data in session variable

  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'indexa.php' page
// to allow the user to login
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "ገብተዋል admin_ha.php";
    header('location: getina.php');
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'indexa.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_name']);
    header("location: index.php");
}
?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <HTML>
<HEAD>
<META NAME="Generator" CONTENT="EditPlus">

<META NAME="Author" CONTENT="">

<META NAME="Keywords" CONTENT="">

<META NAME="Description" CONTENT="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>የደንበኛ  ዋና ገጽ </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../css/allpages.css" type="text/css" />
<style type="text/css">
<!--
.style2 {font-weight: bold; }
.style4 {font-size: 24px}
.style5 {color: #FFFFFF}
.style6 {font-size: 14px}
-->
html body{
	background-color:#FDEEF4;
}
</style>
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("ጥር ","ይካተት ","መጋቢት ","ሚያዝያ ","ግንቦት ","ሰኔ","ሀምሌ ","ነሀሴ ","መስከረም ","ጥቅምት ","ህዳር ","ታህሣሥ ");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>

<link rel="stylesheet" href="css/allpages.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<link rel="stylesheet" href="css/link.css" type="text/css" />
	<link rel="stylesheet" href="common/css/all.css" >


</head>
<body>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td> <h1 class="subHeader style4"><font size="6"><img src="image/3.png" alt="Header image" width="268" height="60" border="0" /></h1>
  </td> 
     <td> <h1 class="subHeader style4"><font size="6"><img src="image/5.jpg" alt="Header image" width="800" height="60" border="0" /></h1></td>
     <td> <h1 class="subHeader style4"><font size="6"><img src="image/justice.jpg" alt="Header image" width="268" height="60" border="0" /></h1>
  </td>  
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="Silver"><td colspan="8"><table width="100%" height="5%" id="navigation">
	 <td width="161"><a href="PADMINa.php" target="myframe"class="navText style2"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-home"></i></br>ዋና ገጽ </button></a></td>
	 	 <td width="161"><a href="advocatorda.php" target="myframe"class="navText style2"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-user-graduate"></i></br>ጠበቃ </button></a></td>
	 <td width="184"  > <a href="viewdecisionda.php" target="myframe"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-legal"></i></br>ውሳኔ  ማየት </button></a></td>
       <td width="184"  ><a href="displayInfoa.php" target="myframe"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-share"></i></br>መረጃ ማየት </button></a></td>
	   
      <td width="152" ><a href="appointment2a.php" target="myframe"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-book"></i></br>ቀጠሮ</button></a></td>
	 
       <td width="152" ><a href="logouta.php"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-power-off"></i></br>ይውጡ</button></a></td>
    </tr></table></td>
  </tr>
  <tr><td width="230" valign="top" bgcolor="Silver"><table width="230"  border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
        <td width="158" id="dateformat" style="background-color:Silver">&nbsp;&nbsp;
    <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>    <?php if (isset($_SESSION['ተሳክቷል '])) : ?>
            <div class="አልተሳካም " >
                <h3>
                    <?php
                        echo $_SESSION['ተሳክቷል'];
                        unset($_SESSION['አልተሳካም']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  
        <!-- የደንበኛ መረጃ -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['user_name'])) :

    $sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
if($row1['name']==$_SESSION['user_name']||$row1['name1']==$_SESSION['user_name']){		
		?>
<center>
<p>
<?php echo "<div style='font-size:15px;font-weight:bold;color:blue'>".$row1['name']."&nbsp;".$row1['fname']; ?>
           <br>
			
	<?php echo "እና<br><div style='font-size:15px;font-weight:bold;color:blue'>".$row1['name1']."&nbsp;".$row1['fname1'];}}} ?>
	</div>
	
            </p>
</center>
        <?php endif ?>
		<?php  if (isset($_SESSION['user_name'])) :

    $sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
if($row1['name']==$_SESSION['user_name']||$row1['name1']==$_SESSION['user_name']){		
		?>
<center>
<p>
<?php echo "<div style='font-size:15px;font-weight:bold;color:blue'>".$row1['name']."&nbsp;".$row1['fname']; ?>
           <br>
			
	<?php echo "VS<br><div style='font-size:15px;font-weight:bold;color:blue'>".$row1['name1']."&nbsp;".$row1['fname1'];}}} ?>
	</div>
	
            </p>
</center>
        <?php endif ?>
	 </td> 
        </tr>
        <tr>
		<td width="225" align="center"><a href="helpa.php" target="myframe" class="navText  style11"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">እገዛ </button></a></td>
        </tr>
       </table>
 </td>
     <td colspan="6" valign="top">

<iframe  src="PADMINa.php" name="myframe" frameborder="1" height="440" width="100%"></iframe>  </tr>
</table>
           <tr>
          <td colspan="6" align="center" bgcolor="#330000">
            <marquee behavior="alternate">
      Copy right @ 2014 የፍርድ ቤት አያያዝ ሲስተም 
            </marquee>
          </span> </td>
  </tr>
</table>
</body>
</html>