<?php 
session_start();
include('inc/header.php');
?>
<title>phpzag.com : Demo Product Search Filter with Ajax, PHP & MySQL</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
<script src="js/search.js"></script>
<link rel="stylesheet" href="css/style.css">
<?php include('inc/container.php');?>
<div class="container">		
	<h2>Example: Product Search Filter with Ajax, PHP & MySQL</h2>
	<?php
	//include 'class/Product.php';
	//$product = new Product();	
	?>	
	<div class="row">
	<div class="col-md-3">                    
		<div class="list-group">
			<h3>Price</h3>	
			<div class="list-group-item">
				<input id="priceSlider" data-slider-id='ex1Slider' type="text" data-slider-min="1000" data-slider-max="65000" data-slider-step="1" data-slider-value="14"/>
				<div class="priceRange">8500 - 30000</div>
				<input type="hidden" id="minPrice" value="8500" />
				<input type="hidden" id="maxPrice" value="30000" />                  
			</div>			
		</div>    
		<div class="list-group">
			<h3>Features</h3>
			<div class="brandSection">
				<?php
				$features=array("Free Wifi","Outdoor Activities","Indoor Entertainment","Spa","Room Service","Swimming Pool","Restaurant/Coffee Shop","Pets Allowed");
				foreach($features as $feature){	
				?>
				<div class="list-group-item checkbox">
				<label><input type="checkbox" class="productDetail brand" value="<?php echo "$feature"; ?>"  > <?php echo "$feature"; ?></label>
				</div>
				<?php }	?>
			</div>
		</div>
		
	</div>
	<div class="col-md-9">
	 <br />
		<div class="row searchResult">
		</div>
	</div>
    </div>	
</div>	
<?php include('inc/footer.php');?>






