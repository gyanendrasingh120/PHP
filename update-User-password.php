<?php
include "include/connect.php";
$yrv_UserId = $_REQUEST['yrv_UserId'];
$auth_key = $_REQUEST['auth_key'];
$new_password = sha1($_REQUEST['new_password']);
date_default_timezone_set('Asia/Calcutta');
$sql_Fup = mysql_query("update yrv_Fpwd set yrv_status='1' where yrv_SID='$auth_key' and yrv_userId='$yrv_UserId'");
$sql_up = mysql_query("update yrv_user set yrv_userPwd='$new_password' where yrv_userId='$yrv_UserId'");
 if($sql_up)
 {
 echo "<script language=\"javascript\">";

		echo "window.location ='user-thanks.php'";

	   echo  "</script>";
 }
?>