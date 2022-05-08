<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package toonzaalkeukens
 */

get_header();
?>
<div class="container">
<div class="row">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'keuken' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- row -->
</div><!-- container -->

<?php
$featured_dealer = get_field('dealer');
$featured_img = get_the_post_thumbnail_url($featured_dealer->ID,'full');
if( $featured_dealer ): ?>
    <section id="featured-dealer" class="bg grey">
    <div class="container">
	<div class="row">
    	<div class="col-md-10 offset-md-1">
    		<h2>Neem contact op met de dealer</h2>
    	</div>
    	<div class="col-lg-2 offset-lg-1 col-md-4">
    		<div class="thumb-dealer" style="background-image: url('<?php echo $featured_img;?>')"> </div> <!-- thumb dealer -->
		</div>
    	<div class="col-lg-3 col-md-4">
    		<div class="info">
	    		<h4><?php echo get_the_title($featured_dealer->ID);?></h4>
	    		<address>
	    			<?php the_field('straat_huisnr', $featured_dealer->ID);?><br>
	    			<?php the_field('postcode', $featured_dealer->ID); the_field('stad', $featured_dealer->ID);?>
	    		</address>
    		</div>
    	</div>
    	<div class="col-lg-3 col-md-4">
    		<ul class="contact">
    		<li><a href="tel:<?php the_field('telefoonnummer', $featured_dealer->ID);?>"><?php the_field('telefoonnummer', $featured_dealer->ID);?></a></li>
    		<li><a href="mailto:<?php the_field('e-mail', $featured_dealer->ID);?>"><?php the_field('e-mail', $featured_dealer->ID);?></a></li>
    		<li><a href="<?php the_field('website', $featured_dealer->ID);?>" target="_blank">Bezoek website</a></li>
	    	</ul>
    	</div>
    </div><!-- row -->
	</div><!-- container -->
    </section><!-- Featured Dealer -->
<?php wp_reset_postdata();?>
<?php endif; ?>

<section id="related" class="bg">
<div class="container">
<div class="row">
	<div class="col-md-12">
		<h2>Andere toonzaalkeukens van deze dealer</h2>
	</div>
	<div class="result">
<?php

$meta = get_post_meta( get_the_ID(),'dealer', true );
$posts = get_posts(array(
	'numberposts'	=> 3,
	'post_type'		=> 'keukens',
	'post__not_in'	=> array($post->ID),
	'meta_query' => array(
        array(
            'key'	  => 'dealer',	
            'value'   => $meta,
            'compare' => 'LIKE',
        ),
    ),
));
if( $posts ): ?>
	
	<?php foreach( $posts as $post ): 
	
	$feat_dealer = get_field('dealer'); 
	$dealer_name = get_the_title($feat_dealer->ID);
		setup_postdata( $post );
		?>
		<div class="col-md-4">
			<?php get_template_part( 'template-parts/content', 'thumb-keuken' ); ?>
		</div>
	
	<?php endforeach;	
	wp_reset_postdata(); 
	
	else:?>
		<div class="col-md-12">
			<p class="no-results">Er worden momenteel geen andere toonzaalkeukens aangeboden door deze dealer.</p>
		</div>
<?php endif; ?>

</div> <!-- result -->


</div><!-- row -->
</div><!-- container -->
</section> <!-- Related -->

<?php
// get_sidebar();
get_footer();
