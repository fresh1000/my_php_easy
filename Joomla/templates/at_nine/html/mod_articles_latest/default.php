<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="avatar-latestnews">
<?php foreach ($list as $item) :?>
	<li style="list-style-type: none;">
		<span class="avatar-date">
			<p>
				<?php echo JHtml::_('date', $item->publish_up, JText::_('d'));?>
			</p>
			<p>
				<?php echo JHtml::_('date', $item->publish_up, JText::_('M'));?>
			</p>
		</span>
		<p class="avatar-latestnew-title">
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
		<p>
	</li>
<?php endforeach; ?>
</ul>
