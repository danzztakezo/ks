<?php $b = $this->config->item("base_url") . "/"; ?>

<!-- LOFSLIDER NEWS -->
<script type="text/javascript" src="<?php echo $b ?>js/lofslidernews/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo $b ?>js/lofslidernews/script.js"></script>
<link type="text/css" href="<?php echo $b ?>js/lofslidernews/css/layout.css" rel="stylesheet" />
<link type="text/css" href="<?php echo $b ?>js/lofslidernews/css/style.css" rel="stylesheet" />

<script type="text/javascript">
 $(document).ready( function(){	
		$('#lofslidecontent45').lofJSidernews({
			interval:2000,
			easing:'easeInOutQuad',
			duration:1200,
			auto:true });
	});
</script>

<style>
	ul.lof-main-wapper li {
		position:relative;	
	}
	
	.madamesari_food_frame{
	}
	
	.madamesari_food_frame_picture {
		padding: 10px;
	}
	
	.madamesari_food_frame img{
		border: 1px #ccc solid;
	}
	
	.madamesari_food{
		text-align: center; 
		font-size: 13px; 
		color: #FF6600; 
		margin: 10px auto;
	}
	
	.madamesari_food a:link, a:visited{
		color: #FF6600;
	}
	
	.madamesari_food a:hover{
		color: #000;
	}
</style>

<div class="contentmain">
  <div style="background: #FF6600; color: #fff; margin: 10px 0px 10px 0px; width: 860px; font-size: 14px; font-weight: bold; line-height: 30px;">
  	<p style="padding: 5px;">Madam Sari Restaurant</p>
  </div>
  
	<div>
		<img src="<?php echo $b . "images/madamesari/MS6.jpg" ?>" width="860" />
	</div>
	
	<div style="color: #FF6600; margin: 10px 0px 10px 0px; width: 860px;">
		<div style="padding: 10px;">
			<p>MADAME SARI Restaurant telah berdiri sejak tahun 2003. Restaurant ini lahir dari antusiasme sang pemilik Kartika Sari untuk menghadirkan masakan khas indonesia yang otentik dan PAS dengan selera para penggemar Kartika Sari. Konsep MADAME SARI Restaurant sendiri adalah untuk menyajikan “masakan sehari-hari” sehingga para penggemar KARTIKA SARI tidak akan bosan untuk selalu singgah ke MADAME SARI Restaurant ketika mereka berbelanja oleh-oleh di Kartika Sari Bandung…</p>
			<p>Menu Unggulan dari MADAME SARI adalah Sop Buntut dan Sop Garang Asam. Wah…ini patut dicoba oleh para penggemar Kartika Sari. Selain itu, ada Nasi Goreng Seafood, Nasi Goreng Kampung, Yamien Manis, dan Pho Bo yang Mak Nyuss banget…</p>
		</div>
	</div>

	<div style="background: #FF6600; color: #fff; margin: 10px 0px 10px 0px; width: 860px; font-size: 14px; font-weight: bold; line-height: 30px;">
		<p style="padding: 5px;">Madam Sari Food</p>		
	</div>
	
	<div style="width: 860px" class="madamesari_food_frame">
		<div style="float: left; width: 165px;">
			<div class="madamesari_food_frame_picture"><img alt="" src="<?php echo $b . "images/madamesari/MS1.jpg" ?>"></div>
			<div class="madamesari_food"><a href="#">Chicken Cordon Blue</a></div>
		</div>
		
		<div style="float: left; width: 165px;">
			<div class="madamesari_food_frame_picture"><img alt="" src="<?php echo $b . "images/madamesari/MS2.jpg" ?>"></div>
			<div class="madamesari_food"><a href="#">Chicken Cordon Blue</a></div>
		</div>
		
		<div style="float: left; width: 165px;">
			<div class="madamesari_food_frame_picture"><img alt="" src="<?php echo $b . "images/madamesari/MS3.jpg" ?>"></div>
			<div class="madamesari_food"><a href="#">Chicken Cordon Blue</a></div>
		</div>
		
		<div style="float: left; width: 165px;">
			<div class="madamesari_food_frame_picture"><img alt="" src="<?php echo $b . "images/madamesari/MS4.jpg" ?>"></div>
			<div class="madamesari_food"><a href="#">Chicken Cordon Blue</a></div>
		</div>
		
		<div style="float: left; width: 165px;">
			<div class="madamesari_food_frame_picture"><img alt="" src="<?php echo $b . "images/madamesari/MS5.jpg" ?>"></div>
			<div class="madamesari_food"><a href="#">Chicken Cordon Blue</a></div>
		</div>
		
		<div style="clear: both;"></div>
	</div>
	
	
	<div style="background: #FF6600; color: #fff; margin: 10px 0px 10px 0px; width: 860px; font-size: 14px; font-weight: bold; line-height: 30px;">
		<p style="padding: 5px;">Lokasi</p>		
	</div>
	
	<div style="width: 860px; color: #FF6600">
		<p style="padding: 5px;">Kartika Sari Dago Jl. Ir. Juanda no 85 (022-2509495) dan Kartika Sari Buah Batu 165A (022-7318485).</p>
	</div>
  
</div>