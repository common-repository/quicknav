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


$options = get_option('quicknav_options');

$position = !empty( $options['quicknavposition'] ) ? $options['quicknavposition'] : 'right';

?>
<div class="tl_qv_wrapper">
    <!-- Overlay -->
    <div class="tl_qv_overlay"></div>
    <!-- End Overlay -->

    <!-- Toolbar -->
    <div class="tl_qv_toolbar toolbar_<?php echo esc_attr( $position ); ?>">
        <!-- Close Button -->
        <span class="tl_qv_close_btn">
            <i class="fas fa-times"></i>
        </span>
		<?php 
		// include Buttons
		require_once QUICKNAV_DIR_PATH . 'views/template-quick-btn.php';
		?>
        <!-- List -->
        <div class="tl_qv_lists">
            <div class="tl_qv_list_inner">
                <?php 
                // Logo
                if( !empty( $options['quick_logo'] ) ):
                ?>
                <div class="tl_qv_logo">
                    <a href="<?php echo esc_url( site_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( $options['quick_logo'] ); ?>">
                    </a>
                </div>
				<?php
                endif;
                // End Logo

				// include Items
                if( !empty( $options ['content_type'] ) ) {

                    switch( $options ['content_type'] ) {

                        case 'menu' :
                            require_once QUICKNAV_DIR_PATH . 'views/template-nav.php';
                            break;
                        case 'blog' :
                            require_once QUICKNAV_DIR_PATH . 'views/template-blog.php';
                            break;
                        case 'product' :
                            require_once QUICKNAV_DIR_PATH . 'views/template-woo.php';
                            break;
                        default :
                            require_once QUICKNAV_DIR_PATH . 'views/template-nav.php';
                            break;

                    }

                }
				?>
            </div>
        </div>
        <!-- End List -->
    </div>
    <!-- End Toolbar -->
</div>