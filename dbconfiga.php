<?php  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "brcourt";  
 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  

if ($db->connect_error) {  
    die("አልተገኘም " . $db->connect_error);  
}
?>