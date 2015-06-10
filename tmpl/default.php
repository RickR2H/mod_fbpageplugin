<?php
/**
 * @copyright	Copyright (c) 2015 R2H (http://www.r2h.nl). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

//JHtml::_('script', 'mod_r2h_fbpageplugin/script.js', array(), true);
//JHtml::_('stylesheet', 'mod_r2h_fbpageplugin/style.css', array(), true);
?>
<div class="fb-page-plugin<?php echo $moduleclass_sfx ?>">
	<div id="fb-root"></div>
	<div class="fb-page" data-href="<?php echo $fb_href; ?>" data-width="<?php echo $fb_width; ?>" data-height="<?php echo $fb_height; ?>" data-hide-cover="<?php echo $fb_hide_cover; ?>" data-show-facepile="<?php echo $fb_show_facepile; ?>" data-show-posts="<?php echo $fb_show_posts; ?>">
		<div class="fb-xfbml-parse-ignore">
			<blockquote cite="<?php echo $fb_href; ?>">
				<a href="<?php echo $fb_href; ?>"><?php echo $fb_name; ?></a>
			</blockquote>
		</div>
	</div>
</div>