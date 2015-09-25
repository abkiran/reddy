<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png">

    <title>Aarshitha</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="css/bootstrap.css" />
<?php 

include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='index.php') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='about.php') {
	include $browser_t.'/about.php';
	}
elseif ($page_name=='services.php') {
	include $browser_t.'/services.php';
	}
elseif ($page_name=='contact.php') {
	include $browser_t.'/contact.php';
	}
elseif ($page_name=='contact-post.php') {
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>