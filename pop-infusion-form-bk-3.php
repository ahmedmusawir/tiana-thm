<?php
/**
 * Template Name: POPup Form
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<!-- <link rel="stylesheet" type="text/css" href="/wp-content/themes/tiana-thm/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/tiana-thm/css/component.css" />


<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-2" id="modal-2">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-3" id="modal-3">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-4" id="modal-4">
			<div class="md-content">


<section id="popup-form" class="container">

	<div class="img-holder">
		<img class="img-responsive" src="/wp-content/uploads/2016/05/tiana-top.jpg" alt="">
	</div>

	<article class="popup-text">
		
		<h4>Ready to make more money and have more fun in your business?</h4>

		<p>Join thousands of other entrpreneures and get instant access to my online marketting guides, worksheets and freebies.</p>

	</article>

	<article class="form-container">

		<!-- INFUSION READ CODE -->
		<form accept-charset="UTF-8" action="https://rp172.infusionsoft.com/app/form/process/79e728db504473c66e893dd67478ec93" class="infusion-form" method="POST">
		    <input name="inf_form_xid" type="hidden" value="79e728db504473c66e893dd67478ec93" />
		    <input name="inf_form_name" type="hidden" value="Sign Up on Website" />
		    <input name="infusionsoft_version" type="hidden" value="1.50.0.37" />

		    <div class="infusion-field row">
			   
			    <aside class="col-sm-12 col-md-12 col-lg-12">
			        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name" type="text" />
			    </aside>    
		    </div>
		    <div class="infusion-field row">
			    
			    <aside class="col-sm-12 col-md-12 col-lg-12">
			        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email" type="text" />
			    </aside>    
		    </div>
		    <div class="infusion-submit row">
			    <aside class="col-md-12">
			        <input id="pop-submit" type="submit" value="OFF COURSE! LET'S DO THIS!!" />
			    </aside>
		    </div>
		</form>
		<script type="text/javascript" src="https://rp172.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=6de7b0bc66d40391a6653e39e4657709">
		</script>
	</article>
	
</section>

			</div>
		</div>


		<div class="container">
			<!-- Top Navigation -->
			<!-- <div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/DynamicGrid/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=15313"><span>Back to the Codrops Article</span></a></span>
			</div>
			<header>
				<h1>Nifty Modal Window Effects <span>Some inspiration for different modal window appearances</span></h1>
			</header> -->
			<!-- <div class="main clearfix"> -->
				<!-- <div class="column">
					<p>There are many possibilities for modal overlays to appear. Here are some modern ways of showing them using CSS transitions and animations.</p>
				</div> -->
				<!-- <div class="column"> -->
					
					<!-- <button class="md-trigger" data-modal="modal-1">Fade in &amp; Scale</button>
					<button class="md-trigger" data-modal="modal-2">Slide in (right)</button>
					<button class="md-trigger" data-modal="modal-3">Slide in (bottom)</button> -->
					<button class="md-trigger" data-modal="modal-4">Newspaper</button>
					
				<!-- </div> -->
			<!-- </div> -->
		</div>
		<!-- /container -->
		<div class="md-overlay"></div><!-- the overlay element -->

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="/wp-content/themes/tiana-thm/js/classie.js"></script>
		<script src="/wp-content/themes/tiana-thm/js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="/wp-content/themes/tiana-thm/js/cssParser.js"></script>
		<script src="/wp-content/themes/tiana-thm/js/css-filters-polyfill.js"></script>

<?php
get_footer();
