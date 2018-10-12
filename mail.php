<?php
if($_POST[submit]=='submit'){
$name=$_POST[name];
$email=$_POST[email];
$phon=$_POST[phon];
$message=$_POST[msg];
$emailSubject = 'Enquiry Now';

$mailto ='hbhardwaj185@gmail.com';
$ip = $_SERVER['REMOTE_ADDR']; 
$body = <<<EOD
<br><hr><br>
 <br>
Name* 		 :     $name     <br>
Mobile No*       :  $phon  <br>      
Email Id         :   $email   <br>         
Message          :   $message   <br>      
 <br>
EOD;

$headers = "From: realbrick04@gmail.com\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.
$success ? "" : "Mail failed";

}?>
