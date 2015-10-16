<?php
include "include/connect.php";
$auth_key = $_REQUEST['auth_key'];
date_default_timezone_set('Asia/Calcutta');
$current_date = strtotime(date("d-m-Y H:i:s"));
$sql_fpwd = mysql_fetch_assoc(mysql_query("select * from yrv_Fpwd where yrv_SID='$auth_key' and yrv_status='0'"));
$count = mysql_num_rows(mysql_query("select * from yrv_Fpwd where yrv_SID='$auth_key' and yrv_status='0'"));
$f_date = $sql_fpwd['yrv_Fdate'];
 $iemi_no = $sql_fpwd['yrv_userId'];
$diff = round(abs($f_date - $current_date));
$years = abs(floor($diff / 31536000));
$days = abs(floor(($diff-($years * 31536000))/86400));
$hours = abs(floor(($diff-($years * 31536000)-($days * 86400))/3600));
  $mins = abs(floor(($diff-($years * 31536000)-($days * 86400)-($hours * 3600))/60));#floor($difference / 60);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PocketAd | Reset Password</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.9.1.min.js"></script>
<style>
*{outline:none;
}
</style>
</head>
<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Russ Swift (rswift220@yahoo.com) -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://www.javascriptsource.com -->

<!-- Begin
function validatePwd() {
var invalid = " "; // Invalid character is a space
var minLength = 8; // Minimum length
var pw1 = document.myForm.new_password.value;
var pw2 = document.myForm.con_password.value;
// check for a value in both fields.
if (pw1 == '' || pw2 == '') {
alert('Please enter your password twice.');
return false;
}
// check for minimum length
if (document.myForm.new_password.value.length < minLength) {
alert('Password length Insufficient');
return false;
}
/* re = /[0-9]/; 
 if(!re.test(myForm.new_password.value)) {
  alert('password must contain at least one number (0-9)!');
   myForm.new_password.focus(); return false;
    } 
 re = /[a-z]/; 
 if(!re.test(myForm.new_password.value)) {
  alert('password must contain at least one lowercase letter (a-z)');
   myForm.new_password.focus(); return false;
    }
    re = /[A-Z]/; 
	if(!re.test(myForm.new_password.value)) {
	 alert('Password must contain at least one uppercase letter (A-Z)'); 
	 myForm.new_password.focus(); return false;
	  }*/
	
// check for spaces
if (document.myForm.con_password.value.indexOf(invalid) > -1) {
alert("Sorry, spaces are not allowed.");
return false;
}
else {
if (pw1 != pw2) {
alert ("Sorry! Passwords don't match");
return false;
}
else {
//alert('Nice job.');
return true;
      }
   }
}
//  End -->
</script>
<body>

<!--------------------------- Header Start -->
<div class="header">
<!-- Nav Start -->
	<div class="nav-reset"><a href="home.html"><img src="images/pocketad-logo.png" width="33" height="35" alt="pocket ad logo"></a></div><!-- Nav End -->
</div><!------------------- Header End -->





<!------------------------- Wrapper Start-->
<div class="wrapper">

<!------------- Heading Start-->
	<div class="main-heading">Reset password</div>

<!------------- Heading End-->

 <div class="reset_container">
   
      <div class="reset_form">
 <?php if(($hours <= 48) && ($count != 0)) { ?>
         	<form id="reset-form" name="myForm" onSubmit="return validatePwd()" method="post" action="update-User-password.php">
             <input type="hidden" name="yrv_UserId" value="<?php echo $iemi_no; ?>"  />
  <input type="hidden" name="auth_key" value="<?php echo $auth_key; ?>"  />
            <input type="password" name="new_password" placeholder="New password" style="text-align:left">
            <input type="password" name="con_password" placeholder="Confirm new password" style="text-align:left">
            <input type="submit" value="Reset">
         	</form>
  <?php } else { ?>
  <p class="title4">Your link has expired.</p>
  <?php } ?>
      </div>
      
 </div>   
  
</div><!------------------------------------ Wrapper End-->







<!--------------- Footer Start -->
<div class="footer" id="bottomtext">
  <div class="copyright">&copy; 2014, YRV Apportunity LLP. All Rights Reserved.  </div>
</div>
<!----------------- Footer End -->
<!--
<script>
var scrheight=screen.height;
var bottomtext=document.getElementById("bottomtext");
var hgt=parseInt(bottomtext.style.top);
bottomtext.style.top=scrheight-hgt+"px";
</script>
-->

</body>
</html>