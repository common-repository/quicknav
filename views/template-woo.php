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


if( $opt['product_type'] == 'featured'  ) {

	// post product
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => esc_html( $perPage ),
		'tax_query' => array(
	        array(
	            'taxonomy' => 'product_visibility',
	            'field'    => 'name',
	            'terms'    => 'featured',
	        ),
	    )
	);


} else if( $opt['product_type'] == 'star' ) {

	// post product
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => esc_html( $perPage ),
		'meta_query' => array(
			array(
				'key' => '_wc_average_rating',
				'value' => '5.0',
				'compare' => 'LIKE'
			)
		)

	);

} else {
	// post product
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => esc_html( $perPage )
	);
}

	$data = new WP_Query( $args );

	if( $data->have_posts() ):
		while( $data->have_posts() ):
			$data->the_post();

			$_product = wc_get_product( get_the_ID() );
	// Item
	?>
	<div class="tl_qv_item">
	    <div class="tl_qv_item_img">
	        <?php the_post_thumbnail(); ?>
	    </div>
	    <span class="tl_qv_item_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
	    <div class="tl_qv_content_bottom">			
			<?php
			$cat = wc_get_product_category_list( get_the_ID() );

			if( !empty( $cat ) ) {
				echo '<span class="tl_qv_item_category">'.$cat.'</span>';
			}

			echo '<span class="tl_qv_item_price price">'.$_product->get_price_html().'</span>';
			
			?>
	    </div>
	</div>
	<?php
	//End Item 
		endwhile;
	endif;
?>