<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package toonzaalkeukens
 */

get_header();
?>
<div class="container">
<div class="row">
	<main id="primary" class="site-main">
		<div class="col-md-12">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1>Aangesloten dealers</h1>
			</header><!-- .page-header -->
		</div><!-- col-md-12 -->
		<div class="col-md-8">
			<div class="intro">
				<?php the_field('intro_tekst_dealers', 'option'); ?>
			</div>
		</div><!-- col-md-8 -->
		<div class="col-12">
			<div class="count-posts">
				<?php $count_posts = wp_count_posts('dealers')-> publish;
				echo $count_posts,' Aangesloten dealers';
				?>
			</div>
		</div><!-- col-12 -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'thumb-dealers' );

			endwhile;

			get_template_part ('paginering');
			
			else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
</div><!-- row -->
</div><!-- container -->
<?php
get_footer();
