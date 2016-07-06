<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
<!--<ul class="products">-->
<div class="panel panel-default" style="background: #F1F1F1;">
    <h3 class="panel-title search-top text-center" style="margin-top: -5px;"><strong class="sbg">TÌM SIM SỐ ĐẸP</strong></h3>
    <div class="panel-body">
        <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php _e( 'Search for:', 'woocommerce' ); ?></label>

            <div class="row">
                <div class="col-md-10 text-center">
                    <div class="col-md-11">
                        <div class="col-md-10">
                            <input style="width: 80%" type="search" id="woocommerce-product-search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Nhập Số&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
                        </div>
                        <div class="col-md-1 col-xs-12 text-center">
                            <input style="width: 19%" type="submit" value="<?php echo esc_attr_x( 'Tìm Số', 'submit button', 'woocommerce' ); ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="post_type" value="product" />
        </form>
    </div>
</div>
<div class="products">
    <table id="table-product">
        <thead>
            <tr role="row">
                <th class="hidden-moble col-md-2">STT</th>
                <th class="col-md-2">SĐT</th>
                <th class="col-md-2">Giá</th>
                <th class="hidden-moble col-md-2">Nhà Mạng</th>
                <th class="col-md-2">Đặt Mua</th>
            </tr>
        </thead>
        <tbody>