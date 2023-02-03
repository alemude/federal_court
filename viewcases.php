
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
<h1 align="center" class="style6">New case reports</h1>
         <?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='brcourt';	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$conn){
		die('Error - '.mysqli_connect_error($conn));
	}
 $a=$_POST['dayfrom'];
 $b=$_POST['dayto'];
 $sqs= "SELECT * FROM cases where date BETWEEN '$a' AND '$b'";
	     mysqli_select_db($conn, 'brcourt');
	     if($result = mysqli_query($conn, $sqs)){
		 $row3 = mysqli_fetch_array($result, MYSQLI_ASSOC);
		while($row3 = mysqli_fetch_assoc($result)){
	echo "<table border='0' style='box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:85%;height:5%; background-color:white;border-radius:10px;color:black;'><tr><td><td>"."<form style='box-shadow:rgba(0,0,0,1) 0px 0px 10px; border-radius:40px;color:#jjlldd; text-shadow:1px 0px 10px #99ccff;'>"."<b style= 'font-size:20px'>"."Case ID is:&nbsp;".$row['caseID']."</b>";
			echo " <article>"."  <details>".
          "  <summary>"."<b style= 'font-size:20px;'>"."See more..."."</b>"."</summary>".
          "  <p style='color:black'>"."
			<b style= 'font-size:25px;'>"
			."Register date:".$row['date']."
	 <br>"." Case type:".$row['c_type']."
     <br>"." Accuser name:".$row['name']."
	 <br>"." Accuser father name:".$row['fname']."
	 <br>"." Accuser Age:".$row['age']."
	 <br>"." Accuser sex:".$row['sex']."
	 <br>"." Accuser ID:".$row['accuserID']."
	 <br>"." Accuser Kebele:".$row['kebele']."
	  <br>"."Accused name:".$row['name1']."
	  <br>"."Accused father name:".$row['fname1']."
	 <br>"." Accused Age:".$row['age1']."
	  <br>"."Accused sex:".$row['sex1']."
	  <br>"."Accused ID:".$row['accusedID']."
	  <br>"."Accused Kebele:".$row['kebele']."
      <br>"."Description paper:".$row['image']."
      <br>"."Advocator:".$row['advocator']."".
      
"</p>".
"</details>"."
</article>"."</form>"."</td><td>";
echo "<button style='height:40px;width:60px;border-radius:20px;background-color:green;border-color:red;color:white'>Asign:</button></td></tr><table>";
}
}
								  ?>
