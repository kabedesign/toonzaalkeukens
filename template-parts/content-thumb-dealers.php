<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package toonzaalkeukens
 */

?>

<div class="col-lg-4 col-md-6">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="dealer-wrapper">
	<?php if ( has_post_thumbnail() ) { 
	    echo the_post_thumbnail( 'thumb-dealer-medium' );
	}?>
	<div class="naam">
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	</div>
	<div class="adres">
		<?php the_field('straat_huisnr');?><br>
		<?php echo the_field('postcode'),' ', the_field('stad');?> 
	</div>
	<ul class="contact">
		<li><a href="tel:<?php the_field('telefoonnummer', $featured_dealer->ID);?>"><?php the_field('telefoonnummer', $featured_dealer->ID);?></a></li>
		<li><a href="mailto:<?php the_field('e-mail', $featured_dealer->ID);?>"><?php the_field('e-mail', $featured_dealer->ID);?></a></li>
		<li><a href="<?php the_field('website', $featured_dealer->ID);?>" target="_blank">Bezoek website</a></li>
	</ul>
	
</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- col-md-4 -->
