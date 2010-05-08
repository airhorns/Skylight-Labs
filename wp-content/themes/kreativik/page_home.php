<?php
/*
Template Name: Static Home Page
*/
?>

<?php get_header(); ?>

<!-- start billboard -->
<div id="billboard">
	<!-- Add here your images -->
	<!-- ATTENTION! All images must be 940x376px, otherwise the effect is not guaranteed to work -->
	<img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" alt="" />
	<img src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" alt="" />
	<img src="<?php bloginfo('template_url'); ?>/images/slide4.jpg" alt="" />
	<img src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" alt="" />
	
</div>
<!-- end billboard -->
<!-- start featured -->
<div id="featured">
	<div class="featured first">
		<h4>What is Skylight Labs?</h4>
		<h5>Skylight Labs builds are custom web applications delivered as a managed service. We build, host, analyze and revise your web app for as long as you need it.</h5>
	</div>
	<div class="featured center">
		<h4>Who are they for?</h4>
		<h5>You. The bright business owner, entrepreneur or go-getter who knows their customers are spending more time online and wants to engage them by extending new or existing services to the internet.</h5>
	</div>
	<div class="featured last">
		<h4>Why Skylight Labs?</h4>
		<h5>Because you want your app built well, deployed fast, and maintained without hiring IT, spending a fortune, or worst of all wasting time.</h5>
	</div>
	<div class="clear"></div>
</div>

<!-- end featured -->
<!-- start main content -->
<div id="content" class="half">
	<div class="half-1">
		<h2>A Fresh Look at Building Web Applications</h2>
		<div style="width: 425px">
		<p>Web applications offer opportunities for entrepreneurs and businesses of all types. However, building them in house or with an ad hoc mix of consultants and self proclaimed IT experts often leads to an app built for functionality today and maintenance never. </p>
		<br/>
		<p>Our approach is refreshingly simple. We take care of everything needed to make an application an enduring success. We’ll build your application and manage it as long as you need it, providing detailed analytics, hosting, regular revisions and support- all backed by our no-BS guarantee and superior service. You pay an upfront development fee and a flat monthly service fee, skip the frustration and get back to focusing on building your business.  </p>
		</div>
		<div>
			<a title="Contact Us" href="http://skylightlabs.ca/contact/" class="button-green">Contact Us</a>
			<a title="Services" href="http://skylightlabs.ca/services/" class="button-blue">Services</a>
		</div>
	</div>
	<div class="half-2">
		<h2>&nbsp;</h2>
		<!-- start theme features row 1 -->
		<div class="features-row">
			<div class="feature first">
				<img src="<?php bloginfo('template_url'); ?>/images/icon2.jpg" alt="W3C Valid" />
				<div>
					<h6>Turnkey Solution</h6>
					<p>We take care of everything. From creation to operation, we've got you covered.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="feature">
				<img src="<?php bloginfo('template_url'); ?>/images/icon1.jpg" alt="Pixel perfection" />
				<div>
					<h6>Analytics and Revisions </h6>
					<p>Detailed analytics let you choose to make smart revisions that add value.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- end theme features row 1 -->
		<!-- start theme features row 2 -->
		<div class="features-row">

			<div class="feature first">
				<img src="<?php bloginfo('template_url'); ?>/images/icon4.jpg" alt="Easy to customeize" />
				<div>
					<h6>Maintenance and Support</h6>
					<p>Youre app is cared for by the same professionals that built it, 365 days a year.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="feature">
				<img src="<?php bloginfo('template_url'); ?>/images/icon3.jpg" alt="Universal" />
				<div>
					<h6>Cloud Hosting</h6>
					<p>Your app lives in the cloud with instant access to all the resources it needs to handle any amount of traffic.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- end theme features row 2 -->
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<?php get_footer(); ?>