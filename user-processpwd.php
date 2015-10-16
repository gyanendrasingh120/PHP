<?php
include "include/connect.php";
$imei = $_REQUEST['imei'];
$response = array();
$response["FPWD"] = array();
date_default_timezone_set('Asia/Calcutta');
$current_date = strtotime(date("d-m-Y H:i:s"));
$numbergenerator = mt_rand(1000,10000000000);
$chars = 'ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789';
$max = strlen($chars)-1;
$invoicerandom = null;
for($i=0; $i < 10; $i++) {
$a_no .= $chars{mt_rand(0, $max)};
} 
$SID = sha1($a_no);
$sql_user = mysql_fetch_assoc(mysql_query("select yrv_userId,yrv_userEmail,yrv_userFname from yrv_user where yrv_userId='$imei'"));
$yrv_email_id = $sql_user['yrv_userEmail'];
 $name1 = $sql_user['yrv_userFname'];
  $name2 = explode(' ',$name1);
$name = $name2['0'];
$sql_insert = mysql_query("insert into yrv_Fpwd set yrv_userId='$imei',yrv_Fdate='$current_date',yrv_SID='$SID'");
$from = "accounts@pocketad.co.in";
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= 'From: ' . $from . "\n";
$email_subject_me = "PocketAd Reset Password.";
$email_txt = "<p class='MsoNormal'><span lang='EN-US'>Dear $name,<br/><br/>
<p style='margin-top: 5px; margin-bottom: 5px; line-height:19px'>
<p class='MsoNormal' style='margin-top: 5px; margin-bottom: 5px'><span lang='EN-US'>To initiate the password reset process for your PocketAd Account, click the link below:</span></p><br/>
<p class='MsoNormal' style='margin-top: 5px; margin-bottom: 5px'><span lang='EN-US'>https://www.pocketad.in/reset-password.php?auth_key=$SID</span></p><br/>
<p style='margin-top: 5px; margin-bottom: 5px; line-height:19px'>
<p class='MsoNormal'><span lang='EN-US'>If clicking the link above doesn't work, please copy and paste the URL in a new browser window instead.<br/>
<br/>
If you've received this mail in error, it's likely that another user entered your email address by  mistake while setting up his/her account. <br/><br/> If you didn't initiate the request, you don't need to take any further action and can safely disregard this email.
</span></p>
<br/>
<br/>
<p class='MsoNormal'><span lang='EN-US'>Sincerely,</span></p>
<p class='MsoNormal'><span lang='EN-US'><strong>Team PocketAd.</strong></span></p>";
 $ok = mail($yrv_email_id, $email_subject_me, $email_txt, $headers); 
 if($ok)
 {
  $FPWD["success"] = 1;
        $FPWD["message"] = "User successfully send mail.";
	    $FPWD["YRV_EMAIL"] = $yrv_email_id;
		 array_push($response["FPWD"], $FPWD);  
		 echo json_encode($response);
 }
?>