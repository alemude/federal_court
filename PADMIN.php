<?php
session_start();
require_once 'analog.php';
  require_once 'dbconfig.php';
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "You have to log in admin_h.php";
    header('location: getin.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_name']);
    header("location: index.php");
}
?>

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
<?php ?>
	  		
	<?php echo "<div style='color:green;font-size:45px'>WELL COME TO&nbsp;&nbsp;".$row1['status']."&nbsp;&nbsp;PAGE</div>";}}}?>
</center>
        <?php endif ?>

