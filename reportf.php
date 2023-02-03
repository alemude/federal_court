<center><p style="font-size:30px;font-weight:bold;color:green;align:center">Report for Bahir dar zuria first instance court</p></center>
<p style="font-size:20px;font-weight:bold;color:blue;align:center">Monthly report</p>
<?php
require_once 'dbConfig.php';
$count=0;
$count1=0;
$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30){
	if($row1['c_type']=='civil'){
	$count++;
}
	if($row1['c_type']=='criminal'){
	$count1++;
}
}
	}}
$counta=0;
$count1a=0;
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30){
	if($row1['c_type']=='civil'){
	$counta++;
}
	if($row1['c_type']=='criminal'){
	$count1a++;
}
}
	}}
$countd=0;
$count1d=0;
$sqs= "SELECT  * FROM decision";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['rdate'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30){
	if($row1['casetype']=='money'){
	$countd++;
}
	if($row1['casetype']=='criminal'){
	$count1d++;
}
}
	}}
$casec=$count+$counta;
$casecr=$count1+$count1a;
$caseudc=$counta-$countd;
$caseudcr=$count1a-$count1d;
echo '<table width="100%" height="15%" cellspacing="0" cellpadding="0" border="1">
   <tr style="background-color:#303000;border-color:green;color:white">
    <th style="font-size:20px;font-weight:bold">Case type</th>
    <th style="font-size:20px;font-weight:bold">Registered cases</th>
    <th style="font-size:20px;font-weight:bold">Assigned cases</th>
	<th style="font-size:20px;font-weight:bold">Unassigned cases</th>
    <th style="font-size:20px;font-weight:bold">Decided cases</th>
    <th style="font-size:20px;font-weight:bold">Undecided cases</th>
  </tr>
   <tr style="background-color:Silver;border-color:green">
    <td style="font-size:20px;font-weight:bold">Civil</td>
    <td style="font-size:20px;font-weight:bold">'.$casec.'</td>
    <td style="font-size:20px;font-weight:bold">'.$counta.'</td>
	<td style="font-size:20px;font-weight:bold">'.$count.'</td>
    <td style="font-size:20px;font-weight:bold">'.$countd.'</td>
    <td style="font-size:20px;font-weight:bold">'.$caseudc.'</td>
  </tr>
   <tr style="background-color:Silver;border-color:green">
    <td style="font-size:20px;font-weight:bold">Criminal</td>
    <td style="font-size:20px;font-weight:bold">'.$casecr.'</td>
    <td style="font-size:20px;font-weight:bold">'.$count1a.'</td>
	<td style="font-size:20px;font-weight:bold">'.$count1.'</td>
    <td style="font-size:20px;font-weight:bold">'.$count1d.'</td>
    <td style="font-size:20px;font-weight:bold">'.$caseudcr.'</td>
  </tr>
</table>';
	?>
	<p style="font-size:20px;font-weight:bold;color:blue;align:center">Semi annual report</p>
<?php
require_once 'dbConfig.php';
$count=0;
$count1=0;
$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30*6){
	if($row1['c_type']=='civil'){
	$count++;
}
	if($row1['c_type']=='criminal'){
	$count1++;
}
}
	}}
$counta=0;
$count1a=0;
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30*6){
	if($row1['c_type']=='civil'){
	$counta++;
}
	if($row1['c_type']=='criminal'){
	$count1a++;
}
}
	}}
$countd=0;
$count1d=0;
$sqs= "SELECT  * FROM decision";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['rdate'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30*6){
	if($row1['casetype']=='money'){
	$countd++;
}
	if($row1['casetype']=='criminal'){
	$count1d++;
}
}
	}}
$casec=$count+$counta;
$casecr=$count1+$count1a;
$caseudc=$counta-$countd;
$caseudcr=$count1a-$count1d;
echo '<table width="100%" height="15%" cellspacing="0" cellpadding="0" border="1">
   <tr style="background-color:#808000;border-color:green;color:white">
    <td style="font-size:20px;font-weight:bold">Case type</th>
    <td style="font-size:20px;font-weight:bold">Registered cases</th>
    <td style="font-size:20px;font-weight:bold">Assigned cases</th>
	<td style="font-size:20px;font-weight:bold">Unassigned cases</th>
    <td style="font-size:20px;font-weight:bold">Decided cases</th>
    <td style="font-size:20px;font-weight:bold">Undecided cases</th>
  </tr>
   <tr style="background-color:Silver;border-color:green">
    <td style="font-size:20px;font-weight:bold">Civil</td>
    <td style="font-size:20px;font-weight:bold">'.$casec.'</td>
    <td style="font-size:20px;font-weight:bold">'.$counta.'</td>
	<td style="font-size:20px;font-weight:bold">'.$count.'</td>
    <td style="font-size:20px;font-weight:bold">'.$countd.'</td>
    <td style="font-size:20px;font-weight:bold">'.$caseudc.'</td>
  </tr>
   <tr style="background-color:Silver;border-color:green">
    <td style="font-size:20px;font-weight:bold">Criminal</td>
    <td style="font-size:20px;font-weight:bold">'.$casecr.'</td>
    <td style="font-size:20px;font-weight:bold">'.$count1a.'</td>
	<td style="font-size:20px;font-weight:bold">'.$count1.'</td>
    <td style="font-size:20px;font-weight:bold">'.$count1d.'</td>
    <td style="font-size:20px;font-weight:bold">'.$caseudcr.'</td>
  </tr>
</table>';
	?>
	<p style="font-size:20px;font-weight:bold;color:blue;align:center">Annual report</p>
<?php
require_once 'dbConfig.php';
$count=0;
$count1=0;
$sqs= "SELECT  * FROM cases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30*12){
	if($row1['c_type']=='civil'){
	$count++;
}
	if($row1['c_type']=='criminal'){
	$count1++;
}
}
	}}
$counta=0;
$count1a=0;
$sqs= "SELECT  * FROM assignedcases";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['date'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30*12){
	if($row1['c_type']=='civil'){
	$counta++;
}
	if($row1['c_type']=='criminal'){
	$count1a++;
}
}
	}}
$countd=0;
$count1d=0;
$sqs= "SELECT  * FROM decision";
	mysqli_select_db($db, 'brcourt');
	if($result = mysqli_query($db, $sqs)){
	while($row1 = mysqli_fetch_assoc($result)){
$date1 = $row1['rdate'];  
$date2 = date('y-m-d');  
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$value=($months*30)+$days;
if($value<=30*12){
	if($row1['casetype']=='money'){
	$countd++;
}
	if($row1['casetype']=='criminal'){
	$count1d++;
}
}
	}}
$casec=$count+$counta;
$casecr=$count1+$count1a;
$caseudc=$counta-$countd;
$caseudcr=$count1a-$count1d;
echo '<table width="100%" height="15%" cellspacing="0" cellpadding="0" border="1">
   <tr style="background-color:#66CDAA;border-color:green;color:white">
    <td style="font-size:20px;font-weight:bold">Case type</th>
    <td style="font-size:20px;font-weight:bold">Registered cases</th>
    <td style="font-size:20px;font-weight:bold">Assigned cases</th>
	<td style="font-size:20px;font-weight:bold">Unassigned cases</th>
    <td style="font-size:20px;font-weight:bold">Decided cases</th>
    <td style="font-size:20px;font-weight:bold">Undecided cases</th>
  </tr>
   <tr style="background-color:Silver;border-color:green">
    <td style="font-size:20px;font-weight:bold">Civil</td>
    <td style="font-size:20px;font-weight:bold">'.$casec.'</td>
    <td style="font-size:20px;font-weight:bold">'.$counta.'</td>
	<td style="font-size:20px;font-weight:bold">'.$count.'</td>
    <td style="font-size:20px;font-weight:bold">'.$countd.'</td>
    <td style="font-size:20px;font-weight:bold">'.$caseudc.'</td>
  </tr>
   <tr style="background-color:Silver;border-color:green">
    <td style="font-size:20px;font-weight:bold">Criminal</td>
    <td style="font-size:20px;font-weight:bold">'.$casecr.'</td>
    <td style="font-size:20px;font-weight:bold">'.$count1a.'</td>
	<td style="font-size:20px;font-weight:bold">'.$count1.'</td>
    <td style="font-size:20px;font-weight:bold">'.$count1d.'</td>
    <td style="font-size:20px;font-weight:bold">'.$caseudcr.'</td>
  </tr>
</table>';
	?>