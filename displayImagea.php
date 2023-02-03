<html>
<body>
<?php 
require_once 'dbConfig.php';
$result = $db->query("SELECT image FROM images ORDER BY created DESC"); 
?>
<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);
			?>" /> 
        <?php echo "<br>";} ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">NO Image(s) yet...</p> 
<?php } ?>
<br>
</body>
</html>