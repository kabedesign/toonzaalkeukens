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

<div class="thumb-wrapper">
	<?php if ( has_post_thumbnail() ) { 
	    echo '<a href="',the_permalink(),'" class="thumb-img"><div class="img-wrapper">',the_post_thumbnail( 'thumb-keuken' ),'</div></a>';
	}?>
	<div class="title">
		<a href="<?php the_permalink();?>"><?php the_title( '<h3 class="entry-title">', '</h3>' ); ?></a>
	</div>
	<div class="prijs-wrapper">
		<?php $verkocht = get_field('verkocht');
		if ($verkocht && in_array('Verkocht', $verkocht)) :?>
			<div class="prijs">Verkocht!</div>
		<?php else :?>
			<div class="prijs"><?php the_field('prijs');?></div>
			<div class="vanaf-prijs"><?php the_field('vanaf_prijs');?></div>
		<?php endif;?>
	</div>
	<div class="dealer">
		<?php
		$featured_dealer = get_field('dealer');
		$featured_img = get_the_post_thumbnail_url($featured_dealer->ID,'full');
		if( $featured_dealer ): ?>
			<div class="thumb-dealer" style="background-image: url('<?php echo $featured_img;?>')"> </div> <!-- thumb dealer -->
    		<h5><?php echo get_the_title($featured_dealer->ID);?></h5>
		<?php wp_reset_postdata();?>
		<?php endif; ?>
	</div>
</div>
	
</article><!-- #post-<?php the_ID(); ?> -->