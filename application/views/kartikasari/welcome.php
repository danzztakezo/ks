<?php $b = $this->config->item("base_url") . "/"; ?>

<!-- JQUERY PIKACHOOSE -->
<script type="text/javascript" src="<?php echo $b ?>js/pikachoose/jquery.pikachoose.js"></script>
<link type="text/css" href="<?php echo $b ?>js/pikachoose/styles/bottom.css" rel="stylesheet" />

<script type="text/javascript">
	$(document).ready(function(){
			$("#pikame").PikaChoose({
				showTooltips: false, 
				carousel: true,
				carouselOptions:{wrap:'circular'},
				transition: [0],
				showCaption: true,
				speed: 5000
			});

			initialize();
		});
</script>
	
<div class="panel" style="height: 470px; padding: 5px;">
	<div style="float: left; width: 650px; height: 400px; border-right: 1px solid #ccc; margin: 0 auto;">
		<div class="pikachoose">
			<ul id="pikame" class="jcarousel-skin-pika">
				<li><a href="#"><img src="<?php echo $b ?>images/slides/1.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
				<li><a href="#"><img src="<?php echo $b ?>images/slides/2.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
				<li><a href="#"><img src="<?php echo $b ?>images/slides/3.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
				<li><a href="#"><img src="<?php echo $b ?>images/slides/4.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
				<li><a href="#"><img src="<?php echo $b ?>images/slides/5.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
				<li><a href="#"><img src="<?php echo $b ?>images/slides/5.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
				<li><a href="#"><img src="<?php echo $b ?>images/slides/5.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
			</ul>
		</div>
	</div>
	
	<div style="margin: 0px 0px 0px 655px; width: 360px; 
		height: 400px; padding: 0px;">
		<ul style="display: inline; list-style: none; padding: 0px; margin: 0px;">
			<li><a href="store.php"><img src="<?php echo $b ?>images/KS23.png"/></a></li>
			<li><a href="<?php echo $b . "kartikasari/madamesari"; ?>"><img src="<?php echo $b ?>images/KS21.png"/></a></li>
			<li><a href="<?php echo $b . "kartikasari/kebonjukut"; ?>"><img src="<?php echo $b ?>images/KS22.png"/></a></li>
			<li><a href="<?php echo $this->config->item("kartikasaristore_url"); ?>" target="_blank"><img src="<?php echo $b ?>images/KS24.png"/></a></li>
			<li><a href="http://littlegwen.com" target="_blank"><img src="<?php echo $b ?>images/KS25.png"/></a></li>
		</ul>
	</div>
</div>
