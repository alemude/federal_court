<?php
session_start();
  require_once 'dbconfig.php';
// Starting the session, to use and
// store data in session variable

  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'index.php' page
// to allow the user to login
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "You have to log in admin_h.php";
    header('location: getin.php');
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'index.php'
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
<title>አስተዳደር ገጽ</title>
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
</style>
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("ጥር ","ይካቲት","መጋቢት ","ሚያዝያ ","ግንቦት ","ሰኔ","ሀምሌ ","ነሃሴ", "መስከረም ","ጥቅምት","ህዳር","ታህሳስ");
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td> <h1 class="subHeader style4"><font size="6"><img src="image/3.png" alt="Header image" width="268" height="60" border="0" /></h1>
  </td> 
     <td> <h1 class="subHeader style4"><font size="6"><img src="image/f.jpg" alt="Header image" width="800" height="60" border="0" /></h1></td>
     <td> <h1 class="subHeader style4"><font size="6"><img src="justice.jpg" alt="Header image" width="268" height="60" border="0" /></h1>
  </td>  
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr bgcolor="Silver" style="height:7%;"><td colspan="8">
  
   <table width="100%" id="navigation">
     
	  <td width="161"><a href="PADMIN.php" target="myframe"class="navText style2"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-home"></i></br>ዋና ገጽ</button></a></td>
	 <td width="184"  ><a href="viewdecisiona.php" target="myframe"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-assistive-listening-systems"></i></br>View evidence</button></a></td>
     
	 <td width="184"  ><a href="viewdecisiont.php" target="myframe"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-legal"></i></br>ውሳኔ ማየት</button></a></td>
       <td width="184"  ><a href="displayInfo.php" target="myframe"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-share"></i></br>መረጃ ማየት</button></a></td>
      <td width="184" ><a href="appointco.php" target="myframe"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-book"></i></br>የቀጠሮ ቀን ማየት</button></a></td>
       
	    <td width="225" height="20px" align="center" ><ul>
		<li><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-users"></i></br>Managed users</button>
			<ul>
				<li><a href="criminalo.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Criminal law officer</button></a></li>
				<li><a href="civilo.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Civil law officer</button></a></li>
				<li><a href="criminalj.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Criminal judge</button></a></li>
			<li><a href="civilj.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Civil judge</button></a></li>
			<li><a href="advocatord.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Advocator</button></a></li>
			</ul>
		</li>
	</ul></td>
	   
	   <td width="152" ><a href="logout.php"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold"><i style="color:blue;font-size:25px"class="fa-solid fa-power-off"></i></br>Logout</button></a></td>
     </tr>
	 </table>
</td>
  </tr>
  <tr><td width="230" valign="top" bgcolor="Silver">
  <table width="230" cellpadding="0" cellspacing="0" id="navigation">
   <tr>
        <td width="158" height="21"  id="dateformat" style="background-color:Silver">&nbsp;&nbsp;
    <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>   
 <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['user_name'])):

    $sqs= "SELECT  * FROM createaccount";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
if($row1['status']=='Admin'&&$row1['user_name']==$_SESSION['user_name']){		
		?>
 <center>
<p>
<?php echo "<div style='font-size:15px;font-weight:bold;color:blue'>".$row1['first_name']."&nbsp;".$row1['last_name']; ?>
           <br>
	  		
	<?php echo $row1['status'];}}}?>
	</div>
	
            </p>
</center>
        <?php endif ?>
	  </td> 
        </tr>
        
        <tr><td width="225" height="20" align="center" ><ul>
		<li><a href="#"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Manage account</button></a>
			<ul>
				<li><a href="createaccount.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Create account</button></a></li>
				<li><a href="updateStatus.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Update account</button></a></li>
				<li><a href="deleteStatus.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Delete account</button></a></li>
			    <li><a href="updatePassword.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Change password</button></a></li>
				<li><a href="forgetPassword.php" target="myframe" class="navText"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Forget password</button></a></li>
			
			</ul>
		</li>
	
	</ul></td></tr>
	    <tr>
          <td width="225" align="center"><a href="post.php" target="myframe" class="navText style11"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Post information</button></a></td>
        </tr>
		 <tr>
          <td width="225" align="center"><a href="1viewcasea.php" target="myframe" class="navText style11"><button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">View cases</button></a></td>
        </tr>
        <tr>
          <td width="225" align="center"><a href="1search.php" target="myframe" class="navText style11"><font size="4">
		  <button style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; height:100%;background-color:white;border-radius:5px;color:black;font-size:20px;font-weight:bold">Search customer</button></a></td>
        </tr>
       </table>
 </td>
     <td colspan="5" valign="top">

<iframe  src="PADMIN.php" name="myframe" frameborder="1" height="440" width="100%"></iframe>  </tr>
</table>
           <tr>
          <td height="60px" colspan="6" align="center" bgcolor="#330000">
            <marquee behavior="alternate">
      Copy right @ 2014 Court  Management System
            </marquee>
          </span> </td>
  </tr>
</table>
</body>
</html>