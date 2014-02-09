<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package trk
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
        
        <aside id="nav-social">
            <a href="http://instagram.com/theroamingkitchen"><img class="icon-social" title="My Instagram" src="http://theroamingkitchen.net/logos/set4/instagram.png" alt="" width="25" /></a>
            <a href="http://pinterest.com/cristinasciarra/"><img class="icon-social" title="My Pinterest" src="http://theroamingkitchen.net/logos/set4/pinterest.png" alt="" width="25" /></a>
            <a href="http://theroamingkitchen.tumblr.com/"><img class="icon-social" title="My Tumblr" src="http://theroamingkitchen.net/logos/set4/tumblr.png" alt="" width="25" /></a>
            <a href="http://theroamingkitchen.net/feed/"><img class="icon-social" title="RSS feed" src="http://theroamingkitchen.net/logos/set4/rss.png" alt="" width="25" /></a>
            <a href="http://www.facebook.com/theroamingkitchen"><img class="icon-social" title="Facebook" src="http://theroamingkitchen.net/logos/set4/facebook.png" alt="" width="25"/></a>
            <a href="https://twitter.com/#!/roamingkitchen"><img class="icon-social" title="Twitter" src="http://theroamingkitchen.net/logos/set4/twitter.png" alt="" width="25" /></a>
        </aside>
        
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'trk' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'trk' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
