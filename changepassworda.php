<?php
if(!isset($_SESSION))
{
session_start();
}
if(isset($_POST['submit']))
			  {
			  $oldu=$_POST['username'];
			  $oldp=$_POST['oldpass'];
              $G=md5($oldp);
			  $newp=$_POST['newpass'];
			   $H=md5($newp);
			  $confirm=$_POST['repeatnewpass'];
			   $N=md5($confirm);
			  if(!$oldu || !$oldp || !$newp  || !$confirm)	
			echo"የተሳሳተ የይለፍ ቃል!";
			  else if ($newp != $confirm)
			 echo"አድሱ የይለፍ ቃል አልተመሳሰለም!";
			  else
			  {
			  $con=mysql_connect("localhost","root","") or die(mysql_error());
             mysql_select_db("dtcms",$con)or die(mysql_error());
			  $query=mysql_query("select * from createaccount where username='$oldu' and password='$G'");
			  if($query && mysql_num_rows($query)== 1)
			  {
			  mysql_query("update createaccount set password='$H' where username='$oldu' and password='$G'");
			  echo 'የተሻሻለው የይለፍ ቃል ተሳክቷል!';
			  }
			  else
			  echo "የበፊቱ የደንበኛ ስም ና የይለፍ ቃል አልተገናኙም!" .mysql_error();	
				  
			  }		 
mysql_close($con);
}
?>
<body>
</body>