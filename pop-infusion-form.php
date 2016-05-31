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


<section id="popup-form-click" class="container">

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



<?php
get_footer();
