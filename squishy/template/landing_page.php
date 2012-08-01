<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Squishy CMS</title>
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
</head>
<body>
	<div id="container">
		<div id="head">
			<h1 id="title">Squishy CMS</h1>
			<ul id="nav">
				<li><a href="#" id="current" >Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div id="main">
				<div id="box">
					<h1>Squishy CMS</h1>
				</div>
		
				<div id="content">
					<section id="top">
						<h2><?php $this->set_region('topleft-title')?></h2>
						<p>Think about the number of websites that people go through each and every day. Now, <a href="#">brainstorm with me</a> for a moment... why would they ever remember your website, out of the hundreds of the others? That's where I come in.</p>

						<p>Right now, a huge portion of your traffic leaves your site without going past the first page. Why? It's either cluttered, confusing, uninteresting, or not what they were looking for in the first place. Using <a href="#">state-of-the art technology</a>, I analyze your traffic and optimize the layout and look of your website, <a href="#">boosting your conversion rates.</a></p>
					</section>
					
					<section>
						<h2>Things should work <span class="highlight">perfectly</span> all the time.</h2>
						<p>Does your site load slowly? Do you get errors? Want features added to your site? Consider it done. <a href="#">Call me up, shoot me an email, or take a jog to my office</a> and I'll fix up your site faster than you can say "HTML".</p>
					</section>
					
				</div>
				
				<div id="sidebar">
					<section id="top">
						<h2>Know <span class="highlight">who</span> you're working with.</h2>
						<p>As a professional developer, I'm completely devoted to <a href="#">my clients and their sites</a>. I treat you like family, and treat your website as if it were my own. Unlike many other companies, <a href="#">my goal</a> isn't to squeeze all the cash out of you that I possibly can.</p>
					</section>
					<section>
						<h2>Hire a <span class="highlight">person</span>, not a company.</h2>
						<p>You're going to get better service, better quality, and a better web development experience from hiring a <a href="#">human being</a>. Every, single, time.</p>
			
					</section>
				</div>
		</div>
		
		<!--<div id="footer">-->
			<footer id="footer">
				<p>Copyright Christian Bundy 2010. All rights reserved.</p>
			</footer>
		<!--</div>-->
		
	</div>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19659228-1']);
  _gaq.push(['_setDomainName', '.christianbundy.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</html>