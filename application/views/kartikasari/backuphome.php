<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Kartikasari</title>

<link href="css/kartikasari.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
<link href="css/patches/patch_my_layout.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!-- JQUERY -->
<script type="text/javascript" src="js/jquery.js"></script>

<!-- JQUERY SLIDES -->
<!-- <script type="text/javascript" src="js/slides/slides.min.jquery.js"></script>
<link href="js/slides/global.css" rel="stylesheet" type="text/css" />
 -->
 
<!-- JQUERY PIKACHOOSE -->
<script type="text/javascript" src="js/pikachoose/jquery.pikachoose.js"></script>
<link type="text/css" href="js/pikachoose/styles/bottom.css" rel="stylesheet" />

<link href="css/menu_style.css" rel="stylesheet" type="text/css" />

<!-- GOOGLE MAPS -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7NtUocoWoPlX7Gf7BL3c4DlTjRt5XK7Y&sensor=true">
</script>

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
		});

		function initialize() {
	    var latlng = new google.maps.LatLng(-34.397, 150.644);
			var point = new google.maps.LatLng(-34.397, 150.650);
			var marker = new google.maps.Marker({position: point, title:"Kartika Sari!"});
		
	    var myOptions = {
	      zoom: 8,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
		
	    var map = new google.maps.Map(document.getElementById("map"), myOptions);
			marker.setMap(map);
	  }
</script>
</head>
<body onload="initialize()">
  <div class="page_margins">
    <div class="page">
      <div id="header">
      	<img src="images/logo.png" alt="" width="150" align="middle" style="margin: 20px auto;"/>
      	<div id="headernav">
      		<a href="#">Home</a> |
      		<a href="#">Indonesia</a> |
      		<a href="#">English</a>
      	</div>
      </div>
      <div id="main">
      
	<div class="menu">
		<ul>
			<li><a href="#" >Home</a></li>
			<li><a href="#" id="current">About Us</a></li>
			<li><a href="/faq.php">Products</a></li>
			<li><a href="/contact/contact.php">Special Hampers</a></li>
			<li><a href="<?php $this->config->item("base_url") . "/karti" ?>">Location</a></li>
			<li style="padding-left: 110px;"><a href="/contact/contact.php">Online Store</a></li>
		</ul>
	</div>
	
	<div class="separator"></div>
	
      	<div class="panel" style="height: 470px; padding: 5px;">
      		<div style="float: left; width: 650px; height: 400px; border-right: 1px solid #ccc; margin: 0 auto;">
						<div class="pikachoose">
							<ul id="pikame" class="jcarousel-skin-pika">
								<li><a href="#"><img src="images/slides/1.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
								<li><a href="#"><img src="images/slides/2.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
								<li><a href="#"><img src="images/slides/3.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
								<li><a href="#"><img src="images/slides/4.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
								<li><a href="#"><img src="images/slides/5.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
								<li><a href="#"><img src="images/slides/5.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
								<li><a href="#"><img src="images/slides/5.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
							</ul>
						</div>
      		</div>
      		
      		<div style="margin: 0px 0px 0px 655px; width: 360px; 
      			height: 400px; padding: 0px;">
      			<ul style="display: inline; list-style: none; padding: 0px; margin: 0px;">
      				<li><a href="http://kartikatoast.com" target="_blank"><img src="images/KS21.png"/></a></li>
      				<li><a href="store.php"><img src="images/KS22.png"/></a></li>
      				<li><a href="store.php"><img src="images/KS23.png"/></a></li>
      				<li><a href="store.php"><img src="images/KS24.png"/></a></li>
      				<li><a href="http://littlegwen.com" target="_blank"><img src="images/KS25.png"/></a></li>
      			</ul>
      		</div>
      	</div>

      	<div class="panel" style="height: 240px; border-top: 1px #ccc solid;">
      		<div style="padding: 5px; margin-left: 40px;">
      			<div style="width: 230px; float: left; min-height: 200px; margin-top: 30px;">
      				<a href="#"><img src="images/paypal.png" align="middle" /></a>
      			</div>
      			<div style="width: 620px; min-height: 230px;" id="map">
      			</div>
      		</div>
      	</div>
      </div>
      
      <div id="footer" role="contentinfo">
    	<div style="float: left; width: 25%; border-right: 1px #e5e5e5 solid; padding-left: 10px; height: 110px; background: url(images/kartikasari_bottom.png) no-repeat; background-position: 50px 30px;">
    	</div>
    	<div style="float: left; width: 25%; border-right: 1px #e5e5e5 solid; padding-left: 10px; height: 110px;">
    		<h5>Office</h5>
    		<p>
    			Jl. Ir. H Juanda No 85 Bandung<br/>
    			Jl. H. Akbar No 4-6 Bandung<br/>
    			Telp. +62 227735262 | +62 22993837 <br/> 
    			Fax. +62 227735262 
    		</p>
    	</div>
    	<div style="float: left; width: 20%; border-right: 1px #e5e5e5 solid; padding-left: 10px; height: 110px;">
    		<h5>Main Menu</h5>
    		<ul style="list-style: none;">
    			<li><a href="#">Store Profile</a></li>
    			<li><a href="#">Contact Us</a></li>
    			<li><a href="#">About Us</a></li>
    			<li><a href="#">Payment How to</a></li>
    		</ul>
    	</div>
    	<div style="float: left; width: 20%; padding-left: 10px; height: 110px;">
    		<h5>Follow Us</h5>
    		<ul style="list-style: none;">
					<li style="line-height: 25px"><img src="images/fb.png">&nbsp;<a href="#" target="_blank">Facebook</a></li>
					<li><img src="images/twitter.png">&nbsp;<a href="#" target="_blank">Twitter</a></li>
				</ul>
    	</div>
    	<div class="clear"></div>
    	<div style="padding-top: 10px; margin: 10px 0px 0px 0px; font-size: 11px; text-align: center; height: 50px; border-top: 1px #ccc solid;">
    		Bestview in Modern Browser, Mozilla Firefox 8+, Opera 9+, Chrome 16+, Internet Explorer 7+ <br/>
    		Copyright &copy; Kartikasari.com | Developed By <a href="http://evolab.web.id" target="_blank">EvoLab Technologies</a> | Designed By <a href="https://www.facebook.com/pages/Garasi-401/205359429534022" target="_blank">401 Studio</a>
    	</div>
    </div>
    </div>
    <!-- start: skip link navigation -->
    <!-- end: skip link navigation -->
  </div>
</body>
</html>
