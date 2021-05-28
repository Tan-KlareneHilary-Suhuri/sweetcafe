  <!-- Masthead-->
         <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(image/coffe2.jpeg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						 
                    	<h1 class="text-white ">Sip <em>&amp;</em> Eat <em>in</em></h1>
						<br>
						<br>
						<h1><?php echo $_SESSION['setting_name']; ?></h1>
						<br>
						 
						<h2 class="text-white">Everything's will be Better with a Coffee and Desserts</h2>
                         
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#product.php">Order Now</a>
						<a class="btn btn-primary btn-xl js-scroll-trigger" href="#book.php">Book Now</a>
						 
						</div>
						</div>
				</div>
			</div>
		</div>
	</header>
  
<?php include('services.php') ?>
 <?php include('product.php') ?>
 <?php include('events.php') ?>
 <?php include('about.php') ?>