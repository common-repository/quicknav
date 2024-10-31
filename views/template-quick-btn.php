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

$option = get_option('quicknav_options');

$defaultIcon = !empty( $option['default_nav_icon'] ) ? $option['default_nav_icon'] : 'fas fa-arrow-right';


$position = !empty( $options['quicknavposition'] ) &&  $options['quicknavposition'] == 'left' ? 'right' : 'left';


?>
<!-- Buttons -->
<a class="tl_qv_btn tl_qv_btn_open tooltip_<?php echo esc_attr( $position ); ?>" href="#" data-toggle="tl_qv_offCanvas">
    <span class="tl_qv_btn_icon">
        <i class="<?php echo esc_attr( $defaultIcon ); ?>"></i>
    </span>
    <?php 
    if( !empty( $option['default_nav_title'] ) ) {
    	echo '<span class="tl_qv_text">'.esc_html( $option['default_nav_title'] ).'</span>';
    }
    ?>
</a>
<!-- End Buttons -->

<!-- Buttons -->
<?php 

$btns =  get_option('quicknav_options');



if( !empty( $btns['quickbtn'] ) ):

$getBtns = json_decode( $btns['quickbtn'], true );

$t = 19;

foreach( $getBtns as $key => $btn ):

$t += 6;

?>
<a class="tl_qv_btn tooltip_<?php echo esc_attr( $position ); ?>" href="<?php echo esc_url( $btn[1] ); ?>" target="_blank" data-toggle="tl_qv_offCanvas" style="top: calc(<?php echo esc_attr( $t ); ?>% + 50px);">
    <span class="tl_qv_btn_icon">
        <i class="<?php echo esc_attr( $btn[2] ); ?>"></i>
    </span>
    <span class="tl_qv_text"><?php echo esc_html( $btn[0] ); ?></span>
</a>
<?php 
endforeach;
endif;
?>
<!-- End Buttons -->