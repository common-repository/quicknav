<?php
/**
 *
 * @package     Quicknav
 * @author      ThemeLooks
 * @copyright   2020 ThemeLooks
 * @license     GPL-2.0-or-later
 *
 *
 */

if( !defined( 'WPINC' ) ) {
    die;
}

$opt = get_option( 'quicknav_options' );


$perPage = !empty( $opt['productperpage'] ) ? $opt['productperpage'] : '5';


	// post product
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => esc_html( $perPage ),
		'cat' => esc_html( $opt['blog_type'] )
	);

	$data = new WP_Query( $args );

	if( $data->have_posts() ):
		while( $data->have_posts() ):
			$data->the_post();

	// Item
	?>
	<div class="tl_qv_item">
	    <div class="tl_qv_item_img">
	        <?php the_post_thumbnail(); ?>
	    </div>
	    <span class="tl_qv_item_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
	    <div class="tl_qv_content_bottom">
	        <span class="tl_qv_item_category"><?php the_category(); ?></span>
			
	    </div>
	</div>
	<?php
	//End Item 
		endwhile;
	endif;