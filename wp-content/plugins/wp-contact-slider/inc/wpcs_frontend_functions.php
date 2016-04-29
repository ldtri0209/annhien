<?php

add_action( 'wp_footer', 'wpcs_display_slider' );
/**
 * @author Mohammad Mursaleen
 * function to display WP Contact Slider on front end
 */
function wpcs_display_slider(){

    global $wp_query;
    $post_obj = $wp_query->get_queried_object();
    if ($post_obj) {
        $Page_ID = $post_obj->ID;
        $current_page_id =  (string)$Page_ID;
    }

    ///////////////////////// Code edit to display on all pages //////////// --- start ---////////////
    $args = array (
        'post_type'        => 'wpcs',
        'post_status'      => 'publish',
        'meta_query' => array(
            array(
                'key'     => 'wpcs_display_on_all',
                'value'   => 'yes',
                'compare' => '=',
            ),
        ),
    );
	
    // The Query
    $wpcs_query = new WP_Query( $args );

    if ( $wpcs_query->have_posts() ) { // If any slider set to Display on all pages

        wpcs_slider_section($args);
        // Restore original Post Data
        wp_reset_postdata();


    ///////////////////////// Code edit to display on all pages //////////// --- end ---////////////

    } elseif(is_home() || is_front_page()){ // added is_front_page() -- Fixed in version 1.34

        // WP_Query arguments
        $args = array(
            'post_type' => 'wpcs',
            'post_status' => 'publish',
            'meta_key' => 'wpcs_display_on_home',
            'meta_value' => 'yes',
        );

        // The Query
        $wpcs_query = new WP_Query($args);

        // The Loop
        if ($wpcs_query->have_posts()) {

            wpcs_slider_section($args);
            // Restore original Post Data
            wp_reset_postdata();
        }

    } elseif (is_page() || is_single()) {   // Added support for posts as well since version 1.2


        // WP_Query arguments
        $args = array(
            'post_type' => 'wpcs',
            'post_status' => 'publish',
        );

        // The Query
        $wpcs_query = new WP_Query($args);

        // The Loop
        if ($wpcs_query->have_posts()) {

            while ( $wpcs_query->have_posts() ) {

                $wpcs_query->the_post();

                // get the pages for which this slider is set
                $wpcs_pages = get_post_meta( get_the_ID() , 'wpcs_pages', false);

                // check if this page is one of selected pages
                 if( in_array($current_page_id , $wpcs_pages[0])) {
				 
					$args['p'] = get_the_ID(); // To fix bug in version 1.34
                    wpcs_slider_section($args);

                 }
                // Restore original Post Data
                wp_reset_postdata();

            }

        }

    }

}

/*
 * @author Mohammad Mursaleen
 * function to display slider
 */
function wpcs_slider_section($args){

    $counter = 0;

    $wpcs_query = new WP_Query( $args );

    while ( $wpcs_query->have_posts() ) {

        $wpcs_query->the_post();

            $title = get_the_title();
            $label_text_color = get_post_meta( get_the_ID() , 'wpcs_lable_text_color', true);
            $label_bg_color = get_post_meta( get_the_ID() , 'wpcs_lable_bg_color', true);
            $label_border_color = get_post_meta( get_the_ID() , 'wpcs_lable_border_color', true);
            $slider_position = get_post_meta( get_the_ID() , 'wpcs_slider_position', true);
            $slider_text_color = get_post_meta( get_the_ID() , 'wpcs_slider_text_color', true);
            $slider_bg_color = get_post_meta( get_the_ID() , 'wpcs_slider_bg_color', true);
            $slider_border_color = get_post_meta( get_the_ID() , 'wpcs_slider_border_color', true);
            $hide_on_mobile = get_post_meta( get_the_ID() , 'wpcs_hide_on_mobile', true);

            ?>
            <style>
                /** Style for the button & div **/
                .wpcs_handle,.wpcs_handle a:hover,.wpcs_handle a:active, .wpcs_handle a:focus, .wpcs_handle a:visited{
                    color: <?php  echo $label_text_color; ?> !important;
                    background:<?php echo $label_bg_color ?> !important;
                    border: 1px solid <?php echo $label_border_color; ?> !important;
                }

                .wpcs-slide-out-div {
                    background-color: <?php if(!empty($slider_bg_color)){ echo $slider_bg_color; } else { echo '#ffffff';} ?> !important;
                    border: 2px solid <?php  echo $slider_border_color; ?> !important;
                    color: <?php  echo $slider_text_color; ?> !important;
                }
                <?php if($hide_on_mobile == 'yes'){ ?>
                @media (max-width: 600px) {
                    .wpcs-slide-out-div {
                        display: none;
                    }
                }
                <?php } ?>
            </style>
            <script>
                <?php $tab_image_link =  plugins_url( 'img/contact_tab.gif', dirname(__FILE__) ); ?>

                jQuery( document ).ready(function() {

                    var tab_position = '<?php echo $slider_position; ?>' ;

                    jQuery(function($){

                        var tab_Width = $('#wpcs_handle').outerWidth(true);
                        var tab_Hight = $('#wpcs_handle').outerHeight(true);
                        console.log('tab-width =' + tab_Width);
                        console.log('tab-height =' + tab_Hight);

                        $('.wpcs-slide-out-div').tabSlideOut({
                            tabHandle: '.wpcs_handle',                     //class of the element that will become your tab
                            pathToTabImage: '<?php echo $tab_image_link; ?>', //path to the image for the tab //Optionally can be set using css
                            imageHeight: '36px',                     //height of tab image           //Optionally can be set using css
                            imageWidth: tab_Hight,                       //width of tab image            //Optionally can be set using css
                            tabLocation: '<?php echo $slider_position; ?>',                      //side of screen where tab lives, top, right, bottom, or left
                            speed: 600,                               //speed of animation
                            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
                            topPos: '10%',                          //position from the top/ use if tabLocation is left or right
                            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
                            fixedPosition: true                      //options: true makes it stick(fixed position) on scroll
                        });

                    });

                    if( tab_position == 'left'){
                        setTimeout(adjust_slider_on_left, 2000);
                    }

                    if( tab_position == 'right'){
                        setTimeout(adjust_slider_on_right, 2000);
                    }

                });
            </script>
            <div class="wpcs-slide-out-div">
                <a id='wpcs_handle' class="wpcs_handle wpcs_contact_label wpcs_<?php echo $slider_position; ?>" href="http://link-for-non-js-users.html"><?php echo $title ?></a>
                <div class="wpcs_scroll_div"  >
                    <div class="wpcs_content" >
                        <?php

                        // Check which option is selected to display in slider
                        $wpcs_option = get_post_meta( get_the_ID() , 'wpcs_option', true);

                        switch ($wpcs_option) {

                            case 'html':

                                $wpcs_html = get_post_meta( get_the_ID(), 'wpcs_html', true );
                                // check if the custom field has a value
                                if( ! empty( $wpcs_html ) ) {
                                    echo $wpcs_html;
                                }
                                break;

                            case 'shortcode':

                                $wpcs_shortcode = get_post_meta( get_the_ID(), 'wpcs_shortcode', true );
                                $wpcs_plugin_name = get_post_meta( get_the_ID(), 'wpcs_plugin_name', true );

                                // check if the custom field has a value
                                if( ! empty( $wpcs_shortcode ) ) {

                                    switch ($wpcs_plugin_name) {

                                        case 'cf7':
                                            ?>
                                            <div class="wpcs-cf7">
                                                <?php
                                                echo do_shortcode( $wpcs_shortcode );
                                                ?>
                                                <script>  /* added script to fix cf7 validation display bug */
                                                    jQuery(document).ready(function(){
                                                        var $wpcf7ResponseDiv = jQuery('.wpcf7-response-output');
                                                        jQuery('.wpcf7-submit').before($wpcf7ResponseDiv[0]);
                                                    });
                                                </script>
                                            </div>
                                            <?php
                                            break;

                                        case 'gf':
                                            ?>
                                            <div class="wpcs-gf">
                                                <?php
                                                echo do_shortcode( $wpcs_shortcode );
                                                ?>
                                            </div>
                                            <?php

                                            break;

                                        default:
                                            echo do_shortcode( $wpcs_shortcode );
                                            break;

                                    }

                                }
                                break;

                            default:
                                echo 'kindly select some option in your slider to display here';
                        }

                        $counter++;

                        // check to just display not more then one slider on single page
                        if($counter == 1)
                            break;

                    ?>
                </div>
            </div>
        </div>
    <?php

    }

}
