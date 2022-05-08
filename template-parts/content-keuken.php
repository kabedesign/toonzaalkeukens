<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package toonzaalkeukens
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-md-12">
<div class="keuken-slider-wrapper">
	<div class="count"></div>
	<div class="keuken-slider">

		<?php if ( has_post_thumbnail() ) { 
		    echo'<div class="slide">', the_post_thumbnail('banner-thumb-full'),'</div>';
		}?>

		<!-- SLIDER FOTO's -->
		<?php
		$images = get_field('fotos_keuken');
		if($images): ?>
			<?php foreach ($images as $image): ?>
				<div class="slide">
					<img src="<?php echo esc_url($image['sizes']['banner-thumb-full']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div> 
			<?php endforeach; ?>
		<?php endif;?>
	
	</div> <!-- keuken-slider -->

	<div class="col-lg-10 offset-lg-1 col-md-12">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="prijs-wrapper">
			<?php $verkocht = get_field('verkocht');
			if ($verkocht && in_array('Verkocht', $verkocht)) :?>
				<div class="prijs">Verkocht!</div>
			<?php else :?>
				<div class="prijs"><?php the_field('prijs');?></div>
				<div class="vanaf-prijs"><?php the_field('vanaf_prijs');?></div>
			<?php endif;?>
		</div><!-- prijs-wrapper -->
	</div> <!-- col-md-10 offset-1 -->
	<div class="verticalbar grey left">
		<a href="<?php echo get_post_type_archive_link( 'keukens' ); ?>" class="text">Overzicht</a>
	</div>
</div> <!-- keuken-slider-wrapper -->
</div> <!-- col-md-12 -->

<div class="col-md-9 offset-md-1">
<div class="entry-content pl">
	<?php
	the_content();

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'toonzaalkeukens' ),
			'after'  => '</div>',
		)
	);
	?>
</div><!-- .entry-content -->
<?php if ( get_edit_post_link() ) : ?>
	<footer class="entry-footer">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'toonzaalkeukens' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</footer><!-- .entry-footer -->
<?php endif; ?>
</div><!-- col-md-9 offset-md-1 -->

	
</article><!-- #post-<?php the_ID(); ?> -->
