<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<title>Welcome to Venus County - jigani</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="web/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="web/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="web/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="header">	
	<div class="wrap"> 
		<div class="header-top">
			 <div class="logo">
				 <a href="index.php"><img src="web/images/logo.png" alt=""></a>
			 </div>
			 <div class="cart">
				<div class="span6 header-sidebar" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
					<div id="text-6" class="visible-all-devices "><div class="textwidget"><a href="#" class="header-btn">Reservation</a></div></div>
					<div class="ph-no">
                                            Call Us – <strong class="phone-number">+91 9449433684
                                            <span style="float: right; margin-top: 10px">(Shiva)</span></strong>
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
			   <li><a <?php if($url == 'about'){ ?> class='active'<?php } ?> href='about.php'><span>About</span></a></li>
			   <li <?php if($url == 'services'){ ?> class='active'<?php } ?> class='has-sub'><a href='services.php'><span>Services</span></a>
			      <ul>
			         <li class='has-sub'><a href='services.php'><span>Service 1</span></a></li>
			         <li class='has-sub'><a href='services.php'><span>Service 2</span></a></li>
			      </ul>
			   </li>
			   <li <?php if($url == 'contact'){ ?> class='active'<?php } ?> class='last'><a href='contact.php'><span>Contact</span></a></li>
			</ul>
		</div>
		<ul class="follow_icon">
			<li><a href="#" style="opacity: 1;"><img src="web/images/facebook.png" alt=""></a></li>
			<li><a href="#" style="opacity: 1;"><img src="web/images/feed.png" alt=""></a></li>
			<li><a href="#" style="opacity: 1;"><img src="web/images/twitter.png" alt=""></a></li>
		</ul>
		<div class="clear"></div> 
	</div>
</div>
    <?php echo $url;
 die();
    ?>