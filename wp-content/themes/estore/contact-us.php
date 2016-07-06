<?php
/*
Template Name: Contact Us
*/
get_header();
?>
<div id="content" class=" site-content"><!-- #content.site-content -->
    <div class="page-header clearfix">
        <div class="tg-container">
            <?php //echo do_shortcode( '[metaslider id=112]' );?>
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
            <!--				<h3 class="entry-sub-title">--><?php //estore_breadcrumbs(); ?><!--</h3>-->
        </div>
    </div>
    <main id="main" class="clearfix <?php echo esc_attr($estore_layout); ?>">
        <div class="tg-container">
            <div id="primary-contact-content">
                <div id="info" class="col-md-6 col-sm-6 qua_col_padding" style="padding: 0 15px;width: 50%; float: left;">
                    <div class="qua_page_heading">
                        <h4 class="contact-title"><span>THÔNG TIN LIÊN HỆ:</span></h4>
                        <div class="qua-separator" style="margin: 15px auto 0;"></div>
                    </div>
                    <div id="contact-detail">
<!--                        <div class="row ">-->
<!--                            <span class="title"><i class="fa fa-building"></i> Company Name:</span>-->
<!--                            <span class="info" style="font-size: 17px;">Thien Ha Furniture Corporation<br></span>-->
<!--                        </div>-->
                        <div class="row ">
                            <span class="title"><i class="fa fa-location-arrow"></i> Địa chỉ:</span>
                            <span class="info">170 Nguyễn Tư Giản, Phường 12, Q. Gò Vấp, Hồ Chí Minh, Việt Nam<br></span>
                        </div>
                        <div class="row ">
                            <span class="title"><i class="fa fa-mobile-phone"></i> Điện thoại:</span>
                            <span class="info">+84 917 577 599 <br></span>
                        </div>
                        <div class="row ">
                            <span class="title"><i class="fa fa-fax"></i> Di động:</span>
                            <span class="info">+84 919 672 679 <br></span>
                        </div>
                        <div class="row ">
                            <span class="title"><i class="fa fa-envelope-o"></i> Email:</span>
                            <span class="info"><a href="mailto:caohuyenngan91@gmail.com"> caohuyenngan91@gmail.com</a></span>
                        </div>
                        <!-- <div class="row ">
                            <span class="title"><i class="fa fa-skype"></i> Skype:</span>
                            <span class="info">caohuyenngan<br></span>
                        </div> -->
                        <div class="row ">
                            <span class="title"><i class="fa fa-internet-explorer"></i> Website:</span>
                            <span class="info"><a href="http://www.khosimsodepgiare.com">http://www.khosimsodepgiare.com</a><br></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 qua_col_padding contact-form" style="padding: 0 15px;width: 50%; float: right;">
                    <div class="qua_page_heading">
                        <h4 class="contact-title"><span>LIÊN HỆ:</span></h4>
                        <div class="qua-separator" style="margin: 15px auto 0;"></div>
                    </div>
                    <?php
                    echo do_shortcode ('[contact-form-7 id="194" title="Main Contact"]');
                    ?>
                </div>
            </div>
            <div id="map" class="row">
                <div class="qua_page_heading">
                    <h4 class="contact-title"><span>GOOGLE MAP:</span></h4>
                    <div class="qua-separator" style="margin: 15px auto 0;"></div>
                </div>
                <?php
                echo do_shortcode ('[put_wpgm id=2]');
                ?>
            </div>
        </section>
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>
