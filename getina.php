<?php include('servera.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="common/css/all.css">
    <title>
     ይግቡ 
    </title>
     
    <link rel="stylesheet" type="text/css"
            href="style.css">
<style>     
        body{    
            background:silver;  

        }  
	</style> 	
</head>
<body>
<form>
 <input style="width:20%;height:5%; background-color:blue;border-radius:5px;color:white;font-weight:bold;font-size:20px" type="button" value="ተመለስ!" onclick="history.go(-1)">
</form>
    <form method="post" action="getina.php" style="box-shadow:rgba(0,0,0,1) 0px 0px 10px;width:40%;height:50%; background-color:Silver;border-radius:40px;color:black">
 <table style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:100%; background-color:Gray;border-radius:10px;color:white;font-size:30px;font-weight:bold;text-align:center">
<tr><td>	 
 የፍርድ ቤቱ መግቢያ 
	</td></tr></table>
	 <center>
        
           
	<i style="color:white;font-size:150px"class="fa-solid fa-user-circle"></i>
	<br><br>
     <?php include('errora.php'); ?>
	 <br><br>
            <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:10%; background-color:white;border-radius:10px;color:black;font-size:23px;font-weight:bold" type="text" name="user_name" placeholder=" የተጠቃው  ስም ">
        
        <br><br>
           
            <input style="box-shadow:rgba(0,0,0,1) 0px 0px 20px;width:50%;height:10%; background-color:white;border-radius:10px;color:black;font-size:23px;font-weight:bold" type="password" name="password" placeholder=" የሚስጥር  ቃል">
        <br><br>
        
            <button  style="height:60px;width:25%;font-weight:bold;font-size:25px;border-radius:10px;background-color:blue;color:white" type="submit" class="btn"
                        name="login_user">
                ግባ		
            </button>
			 <script>
// Popup window code
function newWindow(url) {
	popupWindow= window.open(
		url,
		'popUpWindow','height=300,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
<div onClick="JavaScript:newWindow('contacta.php')" style="font-size:20px;font-weight:bold;color:blue">የሚስጥር ቃል ወይም  የተጠቃው ስም ተረስተዋል </div>		
 </center>
    </form>
	 </td>
   </tr>
 </table>
</body>
</html>