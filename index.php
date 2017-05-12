<?php
ob_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
 	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Swiss Skills 2010 | Home</title>
	
	<meta name="description" content="This website is a work which was produced during the ICT-Skills competition and got the first place." />
	<meta name="author" content="Swiss Skills" />
	<meta name="keywords" content="swiss skills, IT, competition" />
	
	<link type="text/css" rel="stylesheet" href="display/css/screen.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="display/css/print.css" media="print" />
	<link type="text/css" rel="stylesheet" href="display/css/handheld.css" media="handheld" />
	
	<script type="text/javascript" src="competitors/js/ajax.js"></script>
	<script type="text/javascript" src="competitors/js/slideshow.js"></script>
</head>
<body>
<noscript>
	<p style="font-size: 40px;">
		Please activate javascript.
	</p>
</noscript>
	<div style="position: absolute; top: 0; width: 100%; border-bottom: #000000; line-height: 30px; background: #FF2222; z-index: 3000;">
		<p style="color: #FFFFFF; text-align: center;">This website is a work which was produced during the <a style="color: #FFFFFF;" href="http://www.ict-skills.ch/" onclick="window.open(this.href);return false;">ICT-Skills</a> competition and got the first place.</p>
	</div>
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
						<li id="button1" class="active"><a href="index.php">Home</a></li>
						<li id="button2"><a href="competitors.php">Works</a></li>
						<li id="button3"><a href="calendar.php">Calendar</a></li>
						<li id="button4"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div id="content">
				<a name="content" class="accessabilityfeature">Content begins here</a>
				<h1>Welcome to swiss skills 2010</h1>
				<div id="slideshowpicturecontainer">
					<?php 
						$rootPath = "";
						include("competitors/php/slideshow.php");
					?>
				</div>
				<script type="text/javascript">Slideshow.start();</script>
				<p>
					Welcome to Swiss Skills 2010. This text here is dummy text to show how this website would look alike. Feel free not to read this text. It wont provide any information. If I had a lorem ipsum generator I would easily use this, but the only source which will provide this, the internet, isn't accessible from here. 
				</p>
				<p>
					Again, don&#39;t read this. It is a waste of time.
				</p>
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