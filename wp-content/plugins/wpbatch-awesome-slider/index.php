<?php 
/*
Plugin Name: WPBatch Awesome Slider
Plugin URI: http://dreamwebit.com
Description: This plugin will give you a shortcode to show Awesome Slider in box format
Author: MTM Sujan
Version: 1.0
Author URI: http://dreamwebit.com
*/



function wpbatch_origianl_jquery_register() {
	wp_enqueue_script('jquery');
}
add_action('init', 'wpbatch_origianl_jquery_register');
add_filter('widget_text', 'do_shortcode');
function wpbatch_slider_external_files() {
    wp_enqueue_script( 'wpbatch-rainbow', plugins_url( '/js/rainbow.js', __FILE__ ), array('jquery'), 1.0, false);
    wp_enqueue_script( 'wpbatch-pgslider', plugins_url( '/js/pgwslider.min.js', __FILE__ ), array('jquery'), 1.0, false);
    wp_enqueue_style( 'wpbatch-pgwslider', plugins_url( '/css/pgwslider.min.css', __FILE__ ));
}
add_action('wp_enqueue_scripts','wpbatch_slider_external_files');
function neccessary_codes_for_wpbatch_slider(){
?>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('.pgwSlider').pgwSlider({
		autoSlide:true,
		displayList:true,
		listPosition:'left',
		transitionEffect:'fading',
		displayControls:true,
		intervalDuration:3000
	});
});
</script>
<?php 
}
add_action('wp_head', 'neccessary_codes_for_wpbatch_slider');
function custom_wpbatch_slider() {
  $labels = array(
    'name'               => _x( 'WPBatch Slider', 'wpbatchgallery' ),
    'singular_name'      => _x( 'Slider', 'wpbatchgallery' ),
    'add_new'            => _x( 'Add New', 'Slider' ),
    'add_new_item'       => __( 'Add New Slider' ),
    'edit_item'          => __( 'Edit Slider' ),
    'new_item'           => __( 'New Slider' ),
    'all_items'          => __( 'All Sliders' ),
    'view_item'          => __( 'View Sliders' ),
    'search_items'       => __( 'Search Sliders' ),
    'not_found'          => __( 'No Slider found' ),
    'not_found_in_trash' => __( 'No Slider Images found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'WPBatch Slider'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'wpbatch_slider', $args ); 
}
add_action( 'init', 'custom_wpbatch_slider' );
function wpbatch_slider_shortcode($atts, $content=null){
	$query = new WP_Query( array(
        'post_type' => 'wpbatch_slider',
        'posts_per_page' => -1
    ) );
    if ( $query->have_posts() ) { ?>
		<ul class="pgwSlider">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<li>
				<?php the_post_thumbnail(); ?>
				<span><?php the_content(); ?></span>
			</li>
		<?php endwhile;
		wp_reset_postdata(); ?>
		</ul>
    <?php return $myvariable;
    }
}
add_shortcode('wpbatch_slider', 'wpbatch_slider_shortcode');



?>