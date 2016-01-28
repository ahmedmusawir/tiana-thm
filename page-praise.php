<?php
/**
 * The template for displaying all pages.
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
<section class="container">
<!-- <h1>I am real praise</h1> -->
	<div id="primary" class="content-area col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

		<?php
		 
		$args = array(
		    // 'category_name' => 'news',
			'post_type'              => 'praises',
		    'posts_per_page' => -1
		);
		 
		$my_query = new WP_Query( $args );

		?>
		 
		<?php if ( $my_query->have_posts() ) : ?>
		 
		    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		 
		       
		        <section class="praise-block clearfix">

			        <div class="col-md-2 col-lg-2">
			        	<?php if ( has_post_thumbnail() ) : ?>
		    				<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>
						<?php endif; ?>
			        </div>

		         	<div class="col-md-10 col-md-10">
		         		<article class="praise-text">
		         		<!-- // Post data goes here. -->
			        		<?php the_content(); ?>
			         	</article>
			         	<aside class="praise-title">
			         		<?php the_title(); ?>
			         	</aside>
		         	</div>
		        	
		        </section>
		 
		    <?php endwhile; ?>
		 
		<?php endif; ?>
		 
		<!-- // Reset the `$post` data to the current post in main query. -->
		<?php wp_reset_postdata(); ?>
 

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- <div class="sidebar col-md-4 col-md-4"> -->

		<?php //get_sidebar();  ?>
		
	<!-- </div> -->
</section> <!-- End Container -->	
<?php
get_footer();
