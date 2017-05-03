</div> <!-- end: main -->

<footer class="site-footer">
	<section id="newsletter" class="text-center">
		<div class="wrapper">
				<h3 class="secondary-heading">Sign up on our Newsletter</h3>
			<form method="post" action="">
				<input type="email" id="email-newsletter" class="input-field email"/>
				<input type="submit" class="sbtn btnPrimary" value="SUBSCRIBE" />
			</form>
		</div>
	</section>
	
	<div id="footer-links" class="wrapper">
		<div class="row">
			<div id="about-us" class="footer-links-item col col-md-3 col-sm-6">
				<a href="<?php echo get_permalink(2); ?>" ><h2 class="tertiary-heading"> <?php echo get_post(2)->post_title; ?> </h2></a>
				<?php $trimmed_content = wp_trim_words( get_post(2)->post_content, 30, '...' ); ?>
				<p> <?php echo $trimmed_content; ?> </p>
			</div>
			
			<div id="social-links" class="footer-links-item col col-md-3 col-sm-6">
				<h2 class="tertiary-heading"> Follow Us </h2>
				<ul>
					<li> <a href="#"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a> </li>
					<li> <a href="#"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a> </li>
					<li> <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
					<li> <a href="#"> <i class="fa fa-pinterest-square" aria-hidden="true"></i></a> </li>
				</ul>
			</div>
			
			<div id="contact-us" class="footer-links-item col col-md-3 col-sm-6">
				<a href="<?php echo get_permalink(115); ?>" ><h2 class="tertiary-heading"> Contact </h2></a>
				<p> <?php echo get_option( 'blogdescription ' ); ?> </p> <br/>
				<p> <a class="contact-email" href="<?php echo 'mailto:' . get_option( 'admin_email' );?>"> <?php echo get_option( 'admin_email' ); ?> </a> </p>
			</div>
			
			<div id="site-info" class="footer-links-item col col-md-3 col-sm-6">
				<h2 class="tertiary-heading"> Information </h2>
				<nav class="footer-nav">
					<?php
						$args = array(
							'theme_location' => 'footer'
						);
						wp_nav_menu( $args ); 
					?>
				</nav>
				<div id="payment-icons">
					<ul>
						<li><i class="fa fa-cc-paypal" aria-hidden="true"></i></li>
						<li><i class="fa fa-cc-visa" aria-hidden="true"></i></li>
						<li><i class="fa fa-cc-amex" aria-hidden="true"></i></li>
						<li><i class="fa fa-cc-jcb" aria-hidden="true"></i></li>
						<li><i class="fa fa-cc-discover" aria-hidden="true"></i></li>
						<li><i class="fa fa-cc-mastercard" aria-hidden="true"></i></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div> <!-- end: footer-links -->
		
	<div class="footer-bottom text-center">
		<div id="footer-message"> <small><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> | designed by <a target="_blank" href="https://emzpesq.github.io/">Em Pesquera</a></small></div> 
	</div>
</footer>

<!-- </div>  end: container -->


<?php wp_footer(); ?>



</body>
</html>