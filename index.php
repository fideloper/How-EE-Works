<?php
require_once('./lib/markdown.php');
$content = Markdown(file_get_contents('README.md'));
?><!DOCTYPE html>
<html>
<head>
	<title>How Expression Engine Works</title>
	<meta name="description" content="A brief explanation behind content management in Expression Engine" />
	<meta name="keywords" content="bioshock infinite,bioshock" />
	<meta name="author" content="@fideloper and contributors">

	<meta property="og:image" content="https://si0.twimg.com/profile_images/1136703091/f.jpg" />
  	<meta property="og:description" content="A brief explanation behind content management in Expression Engine"/>
  	<meta property="og:title" content="How Expression Engine Works"/>

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
	<div id="footer">
		<ul>
			<li>Started by <a href="http://twitter.com/fideloper">@fideloper</a></li>
			<li>Fork and contribute on <a href="https://github.com/fideloper/How-EE-Works">Github</a></li>
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