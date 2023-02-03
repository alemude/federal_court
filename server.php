<?php
session_start();
 require_once 'dbconfig.php'; 
// Declaring and hoisting the variables
$user_name = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// User login
if (isset($_POST['login_user'])) {
     
    // Data sanitization to prevent SQL injection
    $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
 
    // Error message if the input field is left blank
    if (empty($user_name)) {
        array_push($errors, "username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
 
    // Checking for the errors
    if (count($errors) == 0) {
        // Password matching
        $password = md5($password);
       $sqs= "SELECT  * FROM createaccount WHERE user_name=
                '$user_name' AND password='$password'";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
            // Storing user_name in session variable
            $_SESSION['user_name'] = $user_name;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
			if($row1['status']=='Admin'){
			header('location:admin_h.php');
			}
           else if($row1['status']=='civil judge'||$row1['status']=='criminal judge'){
			header('location:judge_h.php');
			}
		   else if($row1['status']=='civil Officer'||$row1['status']=='Criminal Officer'){
			header('location:officer_h.php');
			}
			}
			}
			$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$pass2=$_POST['password'];
$UN=$_POST['user_name'];	
            // Storing user_name in session variable
            $_SESSION['user_name'] = $user_name;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
			if(($row1['name']==$UN&& $row1['accuserID']==$pass2)||($row1['name1']==$UN&& $row1['accusedID']==$pass2)){
			header('location:customer_h.php');
			}
			}
         }
			$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$pass2=$_POST['password'];
$UN=$_POST['user_name'];	
            // Storing user_name in session variable
            $_SESSION['user_name'] = $user_name;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
			if(($row1['name']==$UN&& $row1['accuserID']==$pass2)||($row1['name1']==$UN&& $row1['accusedID']==$pass2)){
			header('location:customer_h.php');
			}
	   
         }
		
		 }
			$sqs= "SELECT  * FROM advocators";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$pass2=$_POST['password'];
$UN=$_POST['user_name'];	
            // Storing user_name in session variable
            $_SESSION['user_name'] = $user_name;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
			if($row1['fname']==$UN&& $row1['advo_ID']==$pass2){
			header('location:advocator_h.php');
			}
	   
         }
		
		 }		 
	$password = md5($password);
         
        $query = "SELECT * FROM createaccount WHERE user_name=
                '$user_name' AND password='$password'";
        $results = mysqli_query($db, $query);
  
        // $results = 1 means that one user with the
        // entered user_name exists
        if (mysqli_num_rows($results) == 1) {
             
            // Storing user_name in session variable
            $_SESSION['user_name'] = $user_name;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
            header('location: getin.php');
        }
        else {
             
            // If the user_name and password doesn't match
            array_push($errors, "Enter valid User name or password!");
        }	 
		 
		 }}
?>