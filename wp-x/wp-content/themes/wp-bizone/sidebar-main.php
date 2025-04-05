<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

if (!wp_bizone_show_position_preview("sidebar_right", "span4 side_bar_single") && wp_bizone_is_active_sidebar("sidebar_right")) { ?>
	<div class="span4 side_bar_single">
		<?php if (function_exists('dynamic_sidebar'))
			dynamic_sidebar('sidebar_right'); ?>
	</div>
<?php }
; ?>