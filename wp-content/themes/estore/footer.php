<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and starting from <footer> tag.
 *
 * @package ThemeGrill
 * @subpackage eStore
 * @since eStore 0.1
 */
?>

	  <footer id="colophon">
		 <?php get_sidebar( 'footer' ); ?>
		 <div id="bottom-footer" class="clearfix">
			<div class="tg-container">
				<div class="copy-right">
					<?php printf( esc_html__( 'Copyright 2016 | All Rights Reserved', 'estore' ), 'eStore', '<a href="'.esc_url ( 'http://themegrill.com' ).'" rel="designer">ThemeGrill</a>' ); ?>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Powered by %s.', 'estore' ), '<a href="'.esc_url ( 'http://baobicongnghiep-ht.com' ).'">Tri Le</a>' ); ?>
				</div>
				<?php
				$logos = array();
				for ( $i = 1; $i < 5; $i++ ) {
					$paymentlogo = get_theme_mod('estore_payment_logo'.$i);
					if($paymentlogo) {
						array_push($logos, $paymentlogo);
					}
				}
				$totallogo = count($logos);
				if($totallogo > 0){ ?>
					<div class="payment-partner-wrapper">
						<ul>
						<?php for($j = 0; $j < $totallogo; $j++ ) { ?>
							<li><img src="<?php echo esc_url($logos[$j])?>" /></li>
						<?php } ?>
						</ul>
					</div>
				<?php } ?>
			</div>
		</div>
	  </footer>
	  <a href="#" class="scrollup"><i class="fa fa-angle-up"> </i> </a>
   </div> <!-- Page end -->
   <?php wp_footer(); ?>
   <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-76953832-1', 'auto');
	  ga('send', 'pageview');

	</script>
   <script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('meta[property="og:title"]').getAttribute('content') );var ga = document.createElement('script'); ga.type = 'text/javascript';ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=1f3f96a85de3418b141c0a731c750b34&data=eyJzc29faWQiOjM3ODkwOTIsImhhc2giOiJjNjY5MjhlOTE1MmE2N2U5ZmQ5MjE4YzM2ODdjY2U1MSJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script><noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">Tài trợ bởi vatgia.com</a></noscript><noscript><a href="http://vchat.vn" title="https://www.facebook.com/ldtri0209" target="_blank">Tri Le</a></noscript>
</body>
</html>
