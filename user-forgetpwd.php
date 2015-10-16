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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PocketAd | About | Mobile Apps development company</title>
  <link href="css/style.css" rel="stylesheet" />
  <link rel="icon" href="Favicon.png" type="image/png" sizes="16x16"> 
  <link rel="stylesheet" href="css/screen.css">
	<script src="lib/jquery.js"></script>
	<script src="dist/jquery.validate.js"></script>

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
 re = /[0-9]/; 
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
	  }
	
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
    <meta charset="UTF-8">
   <meta name="description" content="PocketAd is an Android app which gives free money to its users for playing mobile games. It’s the new definition of free communication.">
<meta name="keywords" content="Mobile advertising company , Online advertising, Free Recharge App, Mobile Apps development company">
</head>
    
  <body>

  <div class="bg_1"> 
  <div class="header">
      <div class="logo"><a href="index.html" ><img src="images/pocketad-logo.png" alt="PocketAd Mobile marketing" /></a></div>
     
     <div class="navi_container"> 
     
   <ul>
       <li><a href="about.html" >about</a></li>
      <li><a href="team.html">team</a></li>
      <li><a href="contact.html">contact</a></li>
     </ul>
      
    </div>
  </div>
  <div class="navi_line"></div>
  
  <div class="about_container"> 
  <?php if(($mins <= 15) && ($count != 0)) { ?>
    <div class="phone5"> <div class="about_form"><p class="title4">Forgete Password</p>
    <br>


<div class="reggistration1"> <form class="cmxform" id="myForm" name="myForm" onSubmit="return validatePwd()" method="post" action="update-User-password.php"> <div class="form">
 <input type="hidden" name="yrv_UserId" value="<?php echo $iemi_no; ?>"  />
  <input type="hidden" name="auth_key" value="<?php echo $auth_key; ?>"  />
  
    <p><input type="password" name="new_password" placeholder="New password" class="input_box" required  /></p>

  
 <p><input id="cemail" type="password" name="con_password" placeholder="Confirm password" class="input_box" required></p>
 
 <p><input type="submit" name="save" value="done" id="submit_f" /></p>

</div>
</form>
</div>

</div>
</div>
   <?php } else { ?>
   <div class="phone5"> <div class="about_form"><p class="title4"> your Link is Expired</p>
 </div>
</div>
   <?php } ?>
 <div class="footer">
        <div class="footer_img"></div>
       
        <div class="fb_tw_you">
      <table align="center"><tr>
 <!--Social Icons -->
<td><a href="https://www.facebook.com/pocketad.in" ><img src="images/fb.png" alt=""/><span style="margin: 0px 6px 0;"/> </span></a></td>
 <td><a href="https://twitter.com/pocketad_in" ><img src="images/twitter.png" alt="" /><span style="margin: 0px 6px 0;"/> </span></a></td>
 <td><a href="https://www.youtube.com/user/pocketadin" ><img src="images/youtube.png" alt="" /><span style="margin: 0px 6px 0;"/> </span></a></td>
 </tr>
 </table>
     
      
      <div class="about_jobs">jobs</div>
      
       
      <div class="about_find_us">find us</div>
    </div>
  
    </div>
          <div class="copyright">&copy; YRV Apportunity LLP, 2014. All Rights Reserved</div>
  </div>
  
         
  
  </div> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53246099-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
</div>
