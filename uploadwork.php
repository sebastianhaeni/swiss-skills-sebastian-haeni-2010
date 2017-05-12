<?php 
include("competitors/php/saveWork.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
 	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Swiss Skills 2010 | Competitors Works</title>
	
	<meta name="description" content="Swiss Skills 2010. This site provides the submitted results of the swiss competition" />
	<meta name="author" content="Swiss Skills" />
	<meta name="keywords" content="swiss skills, IT, competition" />
	
	<link type="text/css" rel="stylesheet" href="display/css/screen.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="display/css/print.css" media="print" />
	<link type="text/css" rel="stylesheet" href="display/css/handheld.css" media="handheld" />
	
	<link type="text/css" rel="stylesheet" href="display/css/competitors.css" media="screen" />
	
	<script type="text/javascript" src="competitors/js/ajax.js"></script>
	<script type="text/javascript" src="competitors/js/uploadworkvalidator.js"></script>
</head>
<body>
	<div id="canvas">
		<div id="main">
		<div id="topstripe"></div>
			<div id="header">
				<div id="blur"></div>
				<div id="logo">
					<a href="index.php" title="Go to the homepage">&nbsp;</a>
				</div>
				<div id="navigation">
					<a href="#content" class="accessabilityfeature">Jump to content</a>
					<ul>
						<li id="button1"><a href="index.php">Home</a></li>
						<li id="button2" class="active"><a href="competitors.php">Works</a></li>
						<li id="button3"><a href="calendar.php">Calendar</a></li>
						<li id="button4"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div id="content">
				<a name="content" class="accessabilityfeature">Content begins here</a>
				<h1>Upload your own work</h1>
				<?php 
					include("competitors/php/uploadworks.php");
				?>
			</div>
			<div id="footer">
				<p>
					Copyright &copy; 2010 Swiss Skills | <a href="termsofservice.php">Terms of service</a>
				</p>
			</div>
		</div>
	</div>
</body>
</html>