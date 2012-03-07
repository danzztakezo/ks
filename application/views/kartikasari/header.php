<?php $b = $this->config->item("base_url") . "/"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Kartikasari</title>

<link href="<?php echo $b ?>css/kartikasari.css" rel="stylesheet" type="text/css" />

<!--[if lte IE 7]>
<link href="css/patches/patch_my_layout.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo $b ?>js/jquery.js"></script>

<!-- MENU HORIZONTAL -->
<link href="<?php echo $b ?>css/menu_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
  <div class="page_margins">
    <div class="page">
      <div id="header">
      	<img src="<?php echo $b ?>images/logo.png" alt="" width="200" align="middle" style="margin: 20px auto;"/>
      	<div id="headernav">
      		<a href="#">Home</a> |
      		<a href="#">Indonesia</a> |
      		<a href="#">English</a>
      	</div>
      </div>
      <div id="main">
      <div class="menu">
        <ul>
    			<li><a href="<?php echo $b . "kartikasari/home" ?>">Home</a></li>
    			<li><a href="<?php echo $b . "kartikasari/aboutus" ?>">About Us</a></li>
    			<li><a href="<?php echo $b . "kartikasari/products" ?>">Products</a></li>
    			<li><a href="<?php echo $b . "kartikasari/specialhampers" ?>">Special Hampers</a></li>
    			<li><a href="<?php echo $b . "kartikasari/location" ?>">Location</a></li>
    			<li><a href="<?php echo $b . "kartikasari/location" ?>">Contact Us</a></li>
    			<li style="padding-left: 230px;"><a href="<?php echo $this->config->item("kartikasaristore_url"); ?>" target="_blank">Online Store</a></li>
    		</ul>
			</div>
			<div class="separator"></div>
	

      