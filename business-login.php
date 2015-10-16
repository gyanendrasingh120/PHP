<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PocketAd | Advertisers s Login</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.9.1.min.js"></script>
<style>
*{outline:none;
}

.wrapper{margin-top:100px;height:300px;}
.footer_menu{position: absolute;margin-top:100px;}
@media (min-device-width : 320px) and (max-device-width:1100px) and (orientation:landscape){
.footer_menu{position: static;
}
</style>
<script>

function showHideTop(id) {
    var el = document.getElementById(id);
    if( el && el.style.display == 'block')  
		{
        el.style.display = 'none';
		$('#menu-icon-top').attr('style','background: url(images/menu-icon.png) center center;background-repeat:no-repeat;');
		}
    else {
        el.style.display = 'block';
		$('#menu-icon-top').attr('style','background: url(images/menu-icon-click.png) center center;background-repeat:no-repeat;');
		}
}
function showHideBottom(id) {
    var el = document.getElementById(id);
    if( el && el.style.display == 'block')    
		{
        el.style.display = 'none';
		$('#menu-icon-bottom').attr('style','background: url(images/menu-icon.png) center center;background-repeat:no-repeat;');
		}
    else {
        el.style.display = 'block';
		$('#menu-icon-bottom').attr('style','background: url(images/menu-icon-click.png) center center;background-repeat:no-repeat;');
		}
}
$(window).scroll(function () { 
    $('#navi2').attr('style','display:none'); 
	$('#navi').attr('style','display:none');
	$('#menu-icon-bottom').attr('style','background: url(images/menu-icon.png) center center;background-repeat:no-repeat;');
	$('#menu-icon-top').attr('style','background: url(images/menu-icon.png) center center;background-repeat:no-repeat;');
});
</script>
<link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
 <meta name="description" content="Play games and earn money instantly. Get mobile and DTH recharges free of cost.">
<meta name="keywords" content="PocketAd Advertisers’ Login, Free mobile recharges, free postpaid bill payment, free DTH recharge">

</head>

<body>



<!--------------------------- Header Start -->
<div class="header header1">
<!-- Nav Start -->
	<div class="nav nav1">
    <a href="#" id="menu-icon"></a>
		<ul>
			<li><a href="index.html"><img src="images/pocketad-logo.png" width="33" height="35" alt="pocket ad logo"></a></li>
			<li><a href="business.html">Business</a></li>
			<li><a href="partners.html">Partners</a></li>
            <li><a href="philanthropy.html">Philanthropy</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="contactus.html">Contact</a></li>
		</ul>
	</div><!-- Nav End -->
</div><!------------------- Header End -->


<!--Top Responsive Menu Start-->
	<div class="header_menu">
		<div  id="logo_cont">
        	<div id="logo_menu"><a href="index.html"><img src="images/pocketad-logo.png" alt="pocket ad logo"></a></div>
        </div>
        
		<div class="top_nav">
			<a href="#" id="menu-icon-top" onclick="showHideTop('navi');"></a>
			<ul id="navi">
			<li><a href="http://play.google.com/store/apps/details?id=com.PocketAd.in">Download</a></li>
			<li><a href="business.html">Business</a></li>
			<li><a href="partners.html">Partners</a></li>
			<li><a href="philanthropy.html">Philanthropy</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="contactus.html">Contact</a></li>
			</ul>
		</div>
	</div>
<!--Top Responsive Menu End-->

<?php
 $error1 = $_SESSION['LOGIN_ERROR']; 
 if($error1 == '')
 {
   $error = $_REQUEST['error'];
 }
 else
 {
	$error = $_SESSION['LOGIN_ERROR'];  
 }
 ?>

<!------------------------- Wrapper Start-->
<div class="wrapper">

<div class="navsmall"></div> 

<!------------- Heading Start-->
<div class="main-heading2">Advertisers login</div>
<!------------- Heading End-->

 <div class="login_container" style="height:300px;">
   
      <div class="login_form">
       
         	<form name="login" id="login" method="post" action="advertisers/loginchk.php">
            <input type="text" name="user_name" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
         	</form>
         </p>	
      </div>
<!--<div class="forgot_busi"><a href="#">Forgot Password?</a></div > -->

</div>  
  
  
  
  
  
</div><!------------------------------------ Wrapper End-->




<!--------------- Social links Start -->
<!--<div class="social">
<a href="#"><img src="images/fb.png" width="45" height="45"></a>
<a href="#"><img src="images/twitter.png" width="45" height="45"></a>
<a href="#"><img src="images/youtube.png" width="45" height="45"></a>
</div> -->
<div class="social">
<a href="http://www.facebook.com/PocketAdIndia" target="_blank"><div class="fb-roll social-roll"></div></a>
<a href="http://www.twitter.com/PocketAdIndia" target="_blank"><div class="twitter-roll social-roll"></div></a>
<a href="http://www.youtube.com/user/PocketAdIndia" target="_blank"><div class="youtube-roll social-roll"></div></a>
</div>


<!--------------- Social links  end -->


<!--------------- Footer Start -->
<div class="footer">
	<!-- Nav Start -->
  <div class="nav">
		<ul>
			<li><a href="business-login.html"  class="ftr_selected">Business login</a></li>
			<li><a href="team.html">Team</a></li>
            <li><a href="careers.html">Careers</a></li>
            <li><a href="media.php?filename=PocketAd Media Kit.zip&folder_name=media">Media kit</a></li>
			<li><a href="forgot-password.html">Forgot password</a></li>
			<li><a href="privacypolicy.html">Privacy & terms</a></li>
		</ul>
	</div><!-- Nav End -->
  <div class="copyright">&copy; 2014, YRV Apportunity LLP. All Rights Reserved.</div>
</div>
<!----------------- Footer End -->

<div style="clear:both;"></div>

<!--bottom Responsive Menu Start-->
	<div class="footer_menu"><!-- footer_busi-->
		<div  id="footer_cont_menu">
        	<div id="footer_cont_left">
				<div class="footer-nav">
					<a href="careers.html">Career</a>
					<a href="termsofuse.html">Terms</a>
					<a href="business-login.php" class="ftr_selected">Login</a>
				</div>
			</div>
			<div class="bottom_nav">
			<a name="bottom" href="#bottom" id="menu-icon-bottom"  onclick="showHideBottom('navi2');"></a>
			<ul id="navi2">
			<li><a href="http://www.facebook.com/PocketAdIndia" target="_blank">Facebook</a></li>
            <li><a href="http://www.youtube.com/user/PocketAdIndia" target="_blank">Youtube</a></li>
            <li><a href="http://www.twitter.com/PocketAdIndia" target="_blank">Twitter</a></li>
			<li><a href="forgot-password.html">Forgot password</a></li>
			<li><a href="privacypolicy.html">Privacy</a></li>
			<li><a href="team.html">Team</a></li>
			</ul>
		</div>
		</div>
			

		
		<div id="footer_cont_copy">
			<div class="copyright">2014, YRV Apportunity LLP. All Rights Reserved. </div>
        </div>
	</div>
<!--bottom Responsive Menu End-->

</body>
</html>