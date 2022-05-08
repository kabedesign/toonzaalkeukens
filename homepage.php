<?php
/*
Template Name: Homepage
*/

get_header();
?>
<div class="container">
<div class="row">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<section id="offer" class="bg no-top">
	<div class="col-md-12">
		<div class="quote">
			<h2><?php the_field('quote_tekst', 'option', false, false); ?></h2>
		</div>
	</div>
	<?php 
			$args = array('post_type' => 'keukens', 'posts_per_page' => -1);
			$loop = new WP_Query($args);
			//Display the contents
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col-md-6">
						<?php get_template_part( 'template-parts/content', 'thumb-keuken' );?>
					</div>
			<?php endwhile;?>
			<?php wp_reset_postdata(); 
	?>
	</section>
</div><!-- row -->
</div><!-- container -->


<?php
get_footer();
