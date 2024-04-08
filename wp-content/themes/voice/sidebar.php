<?php global $vce_sidebar_opts; ?>
<?php if($vce_sidebar_opts['use_sidebar'] != 'none') : ?>
<ins class="adsbygoogle"
     data-ad-client="ca-pub-3499162393115021"
     data-full-width-responsive="true"></ins>
	<aside id="sidebar" class="sidebar <?php echo $vce_sidebar_opts['use_sidebar']; ?>">
		<?php
			if(is_active_sidebar( $vce_sidebar_opts['sidebar'])){
					dynamic_sidebar($vce_sidebar_opts['sidebar']);
			}

			if(is_active_sidebar($vce_sidebar_opts['sticky_sidebar'])){
				echo '<div class="vce-sticky">';
					dynamic_sidebar($vce_sidebar_opts['sticky_sidebar']);
				echo '</div>';
			}
		?>
	</aside>
<?php endif; ?>