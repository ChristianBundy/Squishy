<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<title>Squishy CMS</title>
	
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
</head>

<body>
	<div id="container">
		<div id="head">
			<?php $this->set_region('title', 3); ?>
			
			<ul id="nav">
				<?php $this->set_region('navigation_bar', 4); ?>
			</ul>
		</div>
		
		<div id="main">
				<div id="box">
					<?php $this->set_region('big_box', 5); ?>
				</div>
		
				<div id="content">
					<section class="top">
						<?php $this->set_region('top-left', 6); ?>
					</section>
					
					<section>
						<?php $this->set_region('bottom-left', 6); ?>
					</section>
				</div>
				
				<div id="sidebar">
					<section class="top">
						<?php $this->set_region('top-right', 6); ?>
					</section>
					
					<section>
						<?php $this->set_region('bottom-right', 6); ?>
					</section>
				</div>
		</div>
	</div>	
	<div id="bigfoot">
		<footer id="footer">
			<?php $this->set_region('footer', 3); ?>
		</footer>
	</div>
</body>
</html>