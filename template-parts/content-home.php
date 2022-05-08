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
	<div class="col-md-5">
		<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->	

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'toonzaalkeukens' ),
				'after'  => '</div>',
			)
		);
		?>
	<a class="bttn filled" href="<?php the_field('button_url');?>"><?php the_field('button_tekst');?></a>
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
	</div><!-- col-md-5 -->

	<div class="col-md-7">
		<div class="banner-wrapper">
		<?php if ( has_post_thumbnail() ) { 
		    echo '<div class="banner-thumb">', the_post_thumbnail( 'banner-thumb' ), '</div>';
		}?>
		<div class="verticalbar grey">
			<div class="text"><?php echo $blog_title = get_bloginfo(); ?></div>
		</div>
		</div><!-- banner-wrapper -->
	</div><!-- col-md-7 -->

	
</article><!-- #post-<?php the_ID(); ?> -->
