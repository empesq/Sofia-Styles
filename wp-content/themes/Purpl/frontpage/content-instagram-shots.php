<section id="instagram-shots" class="rel wrapper">
	<div class="sectionHeading text-center">
		<a href="#"> <h1> Instagram Shots </h1> </a>
	</div>
	<h4 class="text-center">Follow us <a href="https://www.instagram.com/choose.sofiastyles/" target="_blank" class="text-link-secondary">@choose.sofiastyles</a> on Instagram</h4> <br/>
	<p class="text-center">Show us your style! Tag us in your photos using <a href="https://www.instagram.com/explore/tags/sofiastyles/" target="_blank" class="text-link-secondary">#sofiastyles </a></p> <br/> <br/>
	
	<div id="instafeed" class="row"></div>
</section>
<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: '3999506058',
        accessToken: '3999506058.1677ed0.4793d7ff06834c7e8125accf7fd5bf21',
        resolution: 'standard_resolution',
        template: '<div class="col col-lg-1 col-md-2 col-3"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div>',
        limit: 12
    });
    userFeed.run();
</script>