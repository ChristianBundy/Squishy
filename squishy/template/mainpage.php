<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Christian Bundy</title>
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
</head>
<body>
	<div id="container">
		<div id="head">
			<h1>BearBones CMS</h1>
			<ul id="nav">
				<li>Home</li>
				<li>Pages</li>
				<li>Modules</li>
				<li>Settings</li>
				<li>Help</li>
			</ul>
		</div>
		<div id="main">
			<div id="sidebar">
				<h2>Sidebar</h2>
				<ul>
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
					<li>Item 4</li>
					<li>Item 5</li>
				</ul>
			</div>
			
				
				<div id="content">
					<?php $this->hook('main_content') ?>
				</div>
		</div>
	</div>
	<div id="footer">
		<p>&copy; Christian Bundy 2010</p>
	</div>
</body>
</html>




















<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Christian Bundy</title>
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
</head>

<body>
<div id="header_wrapper">
	<div id="header">
		<h1 id="title"><a href="#">Christian Bundy</a></h1>
			<ul id="nav">
				<li id="first"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
	</div>
</div>
<div id="content">	
	<div id="left">
		<h2>This is the main content title</h2>
			<?php //$this->hook(1) ?>
	</div>
	
	<div id="right">
		<h2>This is a sidebar title</h2>
			<?php //$this->hook(2) ?>
	</div>
	<div class="clear"></div>
</div>
	
<div id="footer_wrapper">
	<div id="footer">
		<?php //$this->hook(3) ?>
	</div>
</div>


</body>
</html>
-->