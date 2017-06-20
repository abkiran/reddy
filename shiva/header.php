<?php
$DOMAIN=$_SERVER['HTTP_HOST'];
if( $DOMAIN!='madhumitraestates.com' || $DOMAIN!='madhumitra.in' ){ 
	$media='venuscounty.co.in';
	$ph="9535319779";
	$site_name="Venus county";
} else{
	$ph="9449433684";
	$media=$DOMAIN;
	$site_name="Madhumitra";
} ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to <?php echo $site_name; ?> - jigani</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		 <meta name="keywords" content="<?php echo $site_name; ?>, <?php echo $site_name; ?> Jigani, Aashritha <?php echo $site_name; ?>, Madhumitra Phase 2, Madhumitra estates jigani, BMRDA plots jigani, <?php echo $site_name; ?> phase 1, <?php echo $site_name; ?> phase 2 , <?php echo $site_name; ?> phase 3, <?php echo $site_name; ?> phase 4, <?php echo $site_name; ?> jigani price, BMRDA approved plots jigani,">
        <meta name="description" content="Welcome to <?php echo $site_name; ?>. A new venture from S.V Developers, incepted in the year 2004 are one of the emerging real estate companies in Bangalore. ">
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
// analytics 
<?php 
if ( $_SERVER['HTTP_HOST'] != 'localhost' ){ ?>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66093530-<?php echo $DOMAIN=='venuscounty.co.in'?'2':''; ?>', 'auto');
  ga('send', 'pageview');

  
  //chat
  var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500,domain:'kirankr.com'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//kirankr.com/chat/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(check_operator_messages)/true/(top)/350/(units)/pixels/(leaveamessage)/true/(disable_pro_active)/true/(noresponse)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
<?php } ?>
</script>


</head>
<body class="slimScrollDiv">
<div class="header">	
	<div class="wrap"> 
		<div class="header-top">
			 <div class="logo">
                <a href="index.php"><img style="max-height: 105px;float: left;" src="images/bmrda.png" alt=""> <h1 style="font-size: 52px;width: 164%;margin-top: 30px;text-transform: uppercase;color: #8f9334;"><?php echo $DOMAIN=='venuscounty.co.in'?'<?php echo $site_name; ?>':explode('.', $DOMAIN)[0]; ?></h1></a>
			 </div>
			 <div class="cart">
				<div class="span6 header-sidebar" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
					<div id="text-6" class="visible-all-devices "><div class="textwidget"><a class="header-btn">BOOK NOW</a></div></div>
					<div class="ph-no">
                                             <strong class="phone-number">Call     +91 <?php echo $ph; ?>
                                            <!-- <span style="float: right; margin-top: 10px">Shiva Reddy </span> --></strong>
                                        </div>
				</div>
			</div>	
			<div class="clear"></div> 
	   	</div>
	</div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div id='cssmenu'>
			<ul>
                            <?php $url = trim(basename($_SERVER['PHP_SELF'], '.php') . PHP_EOL); ?>
                           <li <?php if($url=='' || $url == 'index'){ ?> class='active'<?php } ?>><a href='index.php'><span>Home</span></a></li>
			   <li <?php if($url == 'about'){ ?> class='active'<?php } ?>><a  href='about.php'><span>About</span></a></li>
			   <li <?php if($url == 'contact'){ ?> class='active'<?php } ?> class='last'><a href='contact.php'><span>Contact</span></a></li>
			</ul>
		</div>
		<!-- <ul class="follow_icon">
			<li><a href="#" style="opacity: 1;"><img src="web/images/facebook.png" alt=""></a></li>
			<li><a href="#" style="opacity: 1;"><img src="web/images/twitter.png" alt=""></a></li>
		</ul> -->
		<div class="clear"></div> 
	</div>
</div>
