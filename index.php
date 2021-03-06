<?php
//Init variables. No one likes to see php Notices. Defaults for this app set.
$file = 'README.md';
$title = '';
//Check for content other than home page
if(isset($_GET['file']) && $_GET['file'] !== '') {
	//htaccess only passes $_GET if file exists, but we still check in case index.php?file=xxx.md is accessed directly
	if(file_exists('./'.$_GET['file'])) {
		$file = $_GET['file'];
		$title = ucfirst(substr($file, 0, count($file) - 4));
		$title = $title . ' | ';
	}
}
//Include Markdown
require_once('./lib/markdown.php');
$content = Markdown(file_get_contents($file));
?><!DOCTYPE html>
<html>
<head>
	<title><?=$title;?>How ExpressionEngine Works</title>
	<meta name="description" content="A brief explanation behind content management in ExpressionEngine" />
	<meta name="keywords" content="bioshock infinite,bioshock" />
	<meta name="author" content="@fideloper and contributors">

	<meta property="og:image" content="https://si0.twimg.com/profile_images/1136703091/f.jpg" />
  	<meta property="og:description" content="A brief explanation behind content management in ExpressionEngine"/>
  	<meta property="og:title" content="How ExpressionEngine Works"/>

	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div id="content">
<?php echo $content; ?>
	</div>
	<!--
	Oh, hai! Thanks for viewing the source. This is the site, and stuff.

	Just to let you know, semicolons are OK in my book.
	-->
	<div id="nav">
		<ul class="clearfix nav">
			<li><a href="/">Home</a></li>
			<li><a href="/development.md">Development</a></li>
		</ul>
	</div>
	<div id="footer">
		<ul class="clearfix nav">
			<li>Started by <a href="http://twitter.com/fideloper">@fideloper</a></li>
			<li>Fork and contribute on <a href="https://github.com/fideloper/How-EE-Works">Github</a></li>
			<li class="legal">This was created with the intent of being <strong>simple</strong> &amp; <strong>community driven</strong>.<br />It is powered by Markdown.</li>
		</ul>
	</div>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-31040703-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>