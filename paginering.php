<div class="paginering">
	<ul>
	<?php
	    global $wp_query;
	    $big = 999999999; // need an unlikely integer
	    $args = array(
	        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	        'format' => '?page=%#%',
	        'total' => $wp_query->max_num_pages,
	        'current' => max( 1, get_query_var( 'paged') ),
	        'show_all' => false,
	        'end_size' => 3,
	        'mid_size' => 2,
	        'prev_next' => True,
	        'prev_text' => __('&laquo; Previous'),
	        'next_text' => __('Next &raquo;'),
	        'type' => 'list',
	        );
	    echo paginate_links($args);
	?>
	</ul>
</div>