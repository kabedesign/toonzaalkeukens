<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toonzaalkeukens
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="dealer-slider">
		<?php 
			$args = array('post_type' => 'dealers', 'posts_per_page' => -1);
			$loop = new WP_Query($args);
			//Display the contents
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
						<div class="dealer-slide">
							<?php echo the_post_thumbnail( 'thumb-dealer-medium' );?>
						</div>
			<?php endwhile;?>
			<?php wp_reset_postdata(); 
		?>
		</div><!-- dealer-slider -->

		<div class="bg black">
			<div class="scroll-to-top">
				<a href="#" class="vertical scroll">Scroll naar boven</a>
			</div>
		<div class="container">
		<div class="row">
			<div class=" col-lg-4 offset-lg-1 col-md-5 offset-md-1">
				<div class="site-info">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-toonzaalkeukens-wit.svg"></a>

					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-footer',
							'menu_id'        => 'menu-footer-menu',
						) );
					?>
				</div>
			</div><!--  col-md-4 -->
			<div class="col-lg-4 col-md-5">
				<div class="site-contact">
				<?php the_field('footer_tekst', 'option'); ?>
				<ul class="contact">
		    		<li>T: <a href="tel:<?php the_field('telefoonnummer', 'option');?>"><?php the_field('telefoonnummer', 'option');?></a></li>
		    		<li>E: <a href="mailto:<?php the_field('e-mailadres_algemeen', 'option'->ID);?>"><?php the_field('e-mailadres_algemeen', 'option');?></a></li>
		    	</ul>
			    </div><!-- site-contact -->
			</div><!-- col-md-4 -->

			<div class="col-md-11 offset-md-1">
				<div class="footer-end">
					© bulthaup den haag 2019 - bulthaup den haag is een onderdeel van Nell en Stutterheim Keukenarchitectuur B.V.
				</div><!-- footer-end -->
			</div> <!-- col-md-11 -->
		</div><!-- row -->
		</div><!-- container -->
		<a href="https://kabedesign.nl" target="_blank" class="kabedesign"></a>
		</div><!--  bg black -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/js.js"></script>

</body>
</html>
