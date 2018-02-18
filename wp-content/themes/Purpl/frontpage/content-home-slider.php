<section id="home-slider" class="wrapper">
	<div id="home-slider-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo get_site_url() . '/wp-content/uploads/2018/02/allyson-johnson-73023-min.jpg' ?>" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Lorem Ipsum</h5>
					<p>consectetur adipiscing elit, sed do eiusmod tempor <p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_site_url() . '/wp-content/uploads/2018/02/freestocks-org-182581-min.jpg' ?>" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Lorem Ipsum</h5>
					<p>consectetur adipiscing elit, sed do eiusmod tempor</p>
				</div>
			</div>
		<a class="carousel-control-prev" href="#home-slider-carousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#home-slider-carousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
</section>

<script type="text/javascript">
	jQuery('#home-slider-carousel').carousel({
			interval: false
		});
</script>
