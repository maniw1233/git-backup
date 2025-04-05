<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

if (!wp_bizone_show_position_preview("sidebar-2", "sidebar-container") && wp_bizone_is_active_sidebar('sidebar-2')): ?>
	<div id="sidebar_secondary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php if (function_exists('dynamic_sidebar'))
					dynamic_sidebar('sidebar-2'); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>