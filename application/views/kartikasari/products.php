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
</style>

<div class="contentmain">
  <h4>Products</h4><hr/>
  
  <div id="lofslidecontent45" class="lof-slidecontent">
	<div class="preload"><div></div></div>
 	
 	<!-- MAIN CONTENT --> 
  <div class="lof-main-outer">
  	<ul class="lof-main-wapper">
  		<li>
      	<img src="<?php echo $b ?>images/products/1.jpg" title="Brownies" height="300" width="900">
      	<!-- 
        <div class="lof-main-item-desc">
        <h3><a target="_parent" title="Newsflash 2" href="#">Brownies</a></h3>
        	<p>Brownies Lezat dan Bergizi</p>
        </div>
        -->
      </li>
      
  		<li>
      	<img src="<?php echo $b ?>images/products/2.jpg" title="Brownies" height="300" width="900">
      </li>
      
  		<li>
      	<img src="<?php echo $b ?>images/products/3.jpg" title="Brownies" height="300" width="900">
      </li>
      
  		<li>
      	<img src="<?php echo $b ?>images/products/4.jpg" title="Brownies" height="300" width="900">
      </li>
      
  		<li>
      	<img src="<?php echo $b ?>images/products/5.jpg" title="Brownies" height="300" width="900">
      </li>
    </ul>  	
  </div>
  <!-- END MAIN CONTENT -->
   
  <!-- NAVIGATOR -->
  <div class="lof-navigator-outer">
  	<ul class="lof-navigator">
  		<li>
  			<div>
  				<img src="<?php echo $b ?>images/products/thumbs/1.png" />
  					<h3>Brownies</h3>
  					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
  			</div>
  		</li>
  		<li>
  			<div>
  				<img src="<?php echo $b ?>images/products/thumbs/2.png" />
  					<h3>Brownies</h3>
  					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
  			</div>
  		</li>
  		<li>
  			<div>
  				<img src="<?php echo $b ?>images/products/thumbs/3.png" />
  					<h3>Brownies</h3>
  					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
  			</div>
  		</li>
  		<li>
  			<div>
  				<img src="<?php echo $b ?>images/products/thumbs/4.png" />
  					<h3>Brownies</h3>
  					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
  			</div>
  		</li>
  		<li>
  			<div>
  				<img src="<?php echo $b ?>images/products/thumbs/5.png" />
  					<h3>Brownies</h3>
  					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
  			</div>
  		</li>
  	</ul>
  </div>
 </div> 
  
</div>