<?php include "include/connect.php"; 
 $ip = $_SERVER['REMOTE_ADDR'];
 $curent_date = strtotime(date("d-m-Y H:i:s"));
  $url = "http://api.ipinfodb.com/v3/ip-city/?key=46f7f2016f4a0851b1dae4974d8b50118f236b647a802e0cf079b85b08b63ad6&ip=$ip&format=json";
       $json = file_get_contents($url);
        $data = json_decode($json, TRUE);
     $statusCode = $data['statusCode']; 
	 $statusMessage = $data['statusMessage'];
	  $countryName = $data['countryName'];
	   $regionName = $data['regionName'];
	   $cityName = $data['cityName'];
	   $zipCode = $data['zipCode'];
	   $latitude = $data['latitude'];
	   $longitude = $data['longitude'];
	    $sql_dlast = mysql_query("select * from yrv_site_visitor where visitor_ip='$ip' order by visitor_date DESC LIMIT 0,1");
 $last_record = mysql_fetch_assoc($sql_dlast);
 $count_all = mysql_num_rows($sql_dlast);
 $end_date = $last_record['visitor_date'];
$diff = round(abs($curent_date - $end_date)); 
$years = abs(floor($diff / 31536000));
$days = abs(floor(($diff-($years * 31536000))/86400));
$hours = abs(floor(($diff-($years * 31536000)-($days * 86400))/3600));
 $mins = abs(floor(($diff-($years * 31536000)-($days * 86400)-($hours * 3600))/60));#floor($difference / 60);
 if($mins > 10)
 {
$sql_insrt = mysql_query("insert into yrv_site_visitor set visitor_ip='$ip',visitor_date='$curent_date',visitor_country='$countryName',visitor_state='$regionName',cityName='$cityName',zipCode='$zipCode',latitude='$latitude',longitude='$longitude'");
 }
?>
<!DOCTYPE html>
<html>
<head>
<style>
*{outline:none;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>PocketAd | Free Mobile Recharge, Postpaid Bill Adjustments, and DTH Recharges</title>
<?php include_once("analyticstracking.php") ?>
<link href="css/css.css" rel="stylesheet" type="text/css">
 <script src="js/jquery.min.js"></script>
<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
 <meta name="description" content="PocketAd is an Android app which gives free money to its users for playing mobile games. PocketAd pays your telephone and DTH bills if you play games on it.">
<meta name="keywords" content="Earn Money, Free money, Free Mobile Recharge, Free Recharge, Free DTH Recharge, Earn Mobile Recharge, Mobile Advertising, Mobile Marketing, Digital Marketing, Advertising app, Online advertising, Free Recharge App">
<script>
$(document).ready(function(e) {
    $('.learnmore > a').on('click', function(){
		var c1 = $( ".learnmore:last" );
var offset1 = c1.offset();
 $('body,html').animate({scrollTop:offset1.top},900);
		})
		
var txt='You play.'.split('');
var txt1='We pay.'.split('');
var delay=150;
for ( i=0; i<txt.length;i++){
	
    setTimeout(function(){$('.banner_type').append(txt.shift()) }, delay * i)}
	setTimeout(function (){for ( j=0; j<txt1.length;j++){
	setTimeout(function(){$('.banner_type1').append(txt1.shift());}, delay * j)
	}},delay * i)
   setTimeout(function(){$('.banner_type, .banner_type1').animate({opacity:'0', marginTop:'-100px'},400); $('.banner_top').animate({marginTop:'27%'}),$('.banner_content').animate({marginTop:'-7%'})}, delay * i * 2.5)
 			
				
});
$(function() {
        $('.img_gallery').cycle({
    fx:     'scrollLeft',
    timeout: 1000,
    before:  onBefore,
    after:   onAfter
 });
 });
function onBefore() {
    $('#output').html("Scrolling image:<br>" + this.src);
   }
function onAfter() {
    $('#output').html("Scroll complete for:<br>" + this.src)
        .append('<h3>' + this.alt + '</h3>');
}

</script>
<script type="text/javascript" src="js/cycle.js"></script>

</head>

<body>
<div style="position:absolute" class="at"></div>
<!--------------------------- Header Start -->
<div class="header">
<!-- Nav Start -->
	<div class="nav">
		<ul>
			<li class="selected"><a href="home.html"><img src="images/pocketad-logo.png" width="33" height="35" alt="pocket ad logo"></a></li>
			<li><a href="business.html">Business</a></li>
			<li><a href="partners.html">Partners</a></li>
			<li><a href="philanthropy.html">Philanthropy</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="contactus.html">Contact</a></li>
		</ul>
	</div><!-- Nav End -->
</div><!------------------- Header End -->





<!------------------------- Wrapper Start-->
<div class="wrapper">
	<!------------- Banner Start-->
	<div class="banner">
    	<div class="banner_left"><div class="img_gallery">
       	 
        		<img src="images/img_1.jpg" width="100%" height="100%">
        		<img src="images/img_2.jpg" width="100%" height="100%">
        		<img src="images/img_3.jpg" width="100%" height="100%">
                <img src="images/img_4.jpg" width="100%" height="100%">
                <img src="images/img_5.jpg" width="100%" height="100%">
        </div>
     </div>
        
        <div class="type-wrap"> </div>
        <div class="banner_right">
        	<div class="banner_top">
            <div class="banner_head">We give you cash...</div>
            <div class="banner_content_top">… and we don’t want it back! You’ll have a cash balance with us which increases each time you win games on the app. PocketAd pays as you go!</div>
            </div>
       				 <div class="banner_type"></div>
        			<div class="banner_type1"></div>
       
       		 <div class="banner_content">
					<a href="http://play.google.com/store/apps/details?id=com.PocketAd.in" target="_blank" ><div class="google-roll play-roll"></div></a>
             </div>
        </div>
    </div><!-------- Banner End-->
 </div>   
    <div class="learnmore"><a href="#">Learn more</a></div>

<!------------------------------------ Topics Start-->
<div class="wrapper">
<div class="topics">
<a id="next"></a>
<!----- Topics Games-->
<div class="topic" style="margin-top:100px;">
<div class="topic_left">
        	<div class="topic_head">We have no tricks, only games</div>
            <div class="topic_content">No download-more-apps and no points-accumulation nonsense. We don’t trick you into spending and we’ll never ask for your debit or credit card. Play games and earn in rupees!</div>
</div>
<div class="topic_right">
	<div class="topic_games"></div>
</div>
</div><!-------END----------->

<!----- Topics connected-->
<div class="topic">
<div class="topic_left">
		<div class="topic_connect"></div>
</div>

<div class="topic_right">
        	<div class="topic_head">We do more than prepaid recharge</div>
            <div class="topic_content">Some others claim to do free recharge too. But with us even postpaid users can avail bill adjustments. Also, our portfolio extends to DTH services… and we plan to surprise you with lots more soon!</div>

</div>
</div><!-------END----------->

<!----- Topics lend hand-->
<div class="topic">
<div class="topic_left">
        	<div class="topic_head">We let you lend a hand</div>
            <div class="topic_content">Always wanted to do something for the needy but never found time? You can do your bit from within the app! Donate PocketAd earnings to NGOs directly!</div>
</div>
<div class="topic_right">
	<div class="topic_hand"></div>
</div>
</div><!-------END----------->

</div>
<!------------------------------------ Topics End---->


<!----- Topics commercials-->
<div class="topic">
<div class="topic_left">
		<div class="topic_commercial"></div>
</div>

<div class="topic_right">
        	<div class="topic_head">Our commercials don’t irritate</div>
            <div class="topic_content">None of those annoying pop-ups to ruin your gaming experience and no unrelated marquee text. For the first time ever, you’ll start loving ads on apps. Take our word for that.</div>

</div>
</div><!-------END----------->

<!----- Topics we are light-->
<div class="topic">
<div class="topic_left">
        	<div class="topic_head">And we are light too!</div>
            <div class="topic_content">No matter how bad your cellphone data plan is, each time you win, you’ll earn 500-3000% of your costs playing the games. We don’t carry any text in fine print to cheat you.</div>
</div>
<div class="topic_right">
	<div class="topic_light"></div>
</div>
</div><!-------END----------->

</div>
<!------------------------------------ Topics End---->




</div><!------------------------------------ Wrapper End-->


<div style="height:50px;width:100%"></div>

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
			<li><a href="business-login.php">Business login</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="careers.html">Careers</a></li>
			<li><a href="media.php?filename=PocketAd Media Kit.zip&folder_name=media" >Media kit</a></li>
			<li><a href="forgot-password.html">Forgot password</a></li>
			<li><a href="privacypolicy.html">Privacy & terms</a></li>
		</ul>
	</div<!-- Nav End -->
  <div class="copyright">&copy; 2014, YRV Apportunity LLP. All Rights Reserved. </div>
</div>
<!----------------- Footer End -->







</body>
</html>