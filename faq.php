<?php
include "include/connect.php";
$name = $_REQUEST['query'];
$email = $_REQUEST['email'];
$current_date = strtotime(date("d-m-Y H:i:s"));
$to = "yrv.apportunity@gmail.com";
$sql_insert = mysql_query("insert into yrv_web_enquiry set enq_name='$name',enq_email='$email',enq_phone='$phone',enq_date='$current_date',enq_msg='$enq_msg',enq_page='$page_name'");
$from = "do_not_reply@pocketad.in";
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= 'From: ' . $from . "\n";
$email_subject_me = "Faq" . ' ' . $page_name;
$email_subject_user = "PocketAd Faq";
$email_txt = "<p class='MsoNormal'><span lang='EN-US'>Dear visitor,<br />
<p style='margin-top: 5px; margin-bottom: 5px; line-height:19px'>
<p class='MsoNormal' style='margin-top: 5px; margin-bottom: 5px'><span lang='EN-US'>Email:</span>&nbsp;&nbsp;$email</p>
<p class='MsoNormal' style='margin-top: 5px; margin-bottom: 5px'><span lang='EN-US'>Messages:</span>&nbsp;&nbsp;$name<br />
<p style='margin-top: 5px; margin-bottom: 5px; line-height:19px'>
<p class='MsoNormal'><span lang='EN-US'>&nbsp;</span></p>
<p class='MsoNormal'><span lang='EN-US'>&nbsp;</span></p>";
$email_user = "<p class='MsoNormal'><span lang='EN-US'>Dear Visitor,<br />
<p style='margin-top: 5px; margin-bottom: 5px; line-height:19px'>
<p class='MsoNormal' style='margin-top: 5px; margin-bottom: 5px'><span lang='EN-US'><br/>Thank you for contacting us. We will get back to you shortly.</span></p>
<p style='margin-top: 5px; margin-bottom: 5px; line-height:19px'>
<p class='MsoNormal'><span lang='EN-US'>&nbsp;</span></p>
<p class='MsoNormal'><span lang='EN-US'>&nbsp;</span></p>
<p class='MsoNormal'><span lang='EN-US'>Team PocketAd</span></p>
<p class='MsoNormal'><span lang='EN-US'>Phone No&nbsp;+91-11-45577321</span></p>
<p class='MsoNormal'><span lang='EN-US'>Email&nbsp;info@pocketad.co.in</span></p>";

if($sql_insert)
{
 mail($to, $email_subject_me, $email_txt, $headers); 	
  mail($email, $email_subject_user, $email_user, $headers); 
 echo "<script language=\"javascript\">";

		echo "window.location ='faq1.html'";

	   echo  "</script>";
}
?>