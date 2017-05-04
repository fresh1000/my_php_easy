<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="avatar-category-module">
<?php if ($grouped) : ?>
	<?php foreach ($list as $group_name => $group) : ?>
	<div>
		<h4><?php echo $group_name; ?></h4>
		<div>
			<?php foreach ($group as $item) :?>
				<div class="avatar-category-module-child-content">
					<?php $articleImage = json_decode($item->images); ?>
					<div class="avatar-intro-item-wrap">
						<?php if($articleImage->image_intro != NULL): ?>
							<div class="avatar-item-img" style="background-image: url("<?php echo htmlspecialchars($articleImage->image_intro); ?>");"> </div>
						<?php endif;?>
				<h4>
				   	<?php if ($params->get('link_titles') == 1) : ?>
					<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
					<?php echo $item->title; ?>
			        <?php if ($item->displayHits) :?>
						<span class="mod-articles-category-hits">
			            (<?php echo $item->displayHits; ?>)  </span>
			        <?php endif; ?></a>
			        <?php else :?>
			        <?php echo $item->title; ?>
			        	<?php if ($item->displayHits) :?>
						<span class="mod-articles-category-hits">
			            (<?php echo $item->displayHits; ?>)  </span>
			        <?php endif; ?></a>
			            <?php endif; ?>
		        </h4>

				<?php if ($params->get('show_author')) :?>
					<span class="mod-articles-category-writtenby">
					<?php echo $item->displayAuthorName; ?>
					</span>
				<?php endif;?>

				<?php if ($item->displayCategoryTitle) :?>
					<span class="mod-articles-category-category">
					(<?php echo $item->displayCategoryTitle; ?>)
					</span>
				<?php endif; ?>
				<?php if ($item->displayDate) : ?>
					<span class="mod-articles-category-date"><?php echo $item->displayDate; ?></span>
				<?php endif; ?>
				<?php if ($params->get('show_introtext')) :?>
					<p class="mod-articles-category-introtext">
					<?php echo $item->displayIntrotext; ?>
					</p>
				<?php endif; ?>

				<?php if ($params->get('show_readmore')) :?>
					<p class="mod-articles-category-readmore">
						<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<?php if ($item->params->get('access-view') == false) :
								echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE');
							elseif ($readmore = $item->alternative_readmore) :
								echo $readmore;
								echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit'));
								if ($params->get('show_readmore_title', 0) != 0) :
									echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
								endif;
							elseif ($params->get('show_readmore_title', 0) == 0) :
								echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE');
							else :
		
								echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE');
								echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit'));
							endif; ?>
			        </a>
					</p>
					<?php endif; ?>
				</div>
		    </div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php endforeach; ?>
<?php else : ?>
	<?php foreach ($list as $item) :?>
		<div class="avatar-category-module-child-content">
			<?php $articleImage = json_decode($item->images); ?>
			<div class="avatar-intro-item-wrap">
			<?php if($articleImage->image_intro != NULL): ?>
							<div class="avatar-item-img" style="background-image: url("<?php echo htmlspecialchars($articleImage->image_intro); ?>");"> </div>
						<?php endif;?>
		<h4>
		   	<?php if ($params->get('link_titles') == 1) : ?>
			<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?>
	        <?php if ($item->displayHits) :?>
				<span class="mod-articles-category-hits">
	            (<?php echo $item->displayHits; ?>)  </span>
	        <?php endif; ?></a>
	        <?php else :?>
	        <?php echo $item->title; ?>
	        	<?php if ($item->displayHits) :?>
				<span class="mod-articles-category-hits">
	            (<?php echo $item->displayHits; ?>)  </span>
	        <?php endif; ?></a>
	            <?php endif; ?>
        </h4>
        
			<?php if ($params->get('show_author')) :?>
				<span class="mod-articles-category-writtenby">
				<?php echo $item->displayAuthorName; ?>
				</span>
			<?php endif;?>

			<?php if ($item->displayCategoryTitle) :?>
				<span class="mod-articles-category-category">
				(<?php echo $item->displayCategoryTitle; ?>)
				</span>
			<?php endif; ?>
			<?php if ($item->displayDate) : ?>
				<span class="mod-articles-category-date"><?php echo $item->displayDate; ?></span>
			<?php endif; ?>
			<?php if ($params->get('show_introtext')) :?>
				<p class="mod-articles-category-introtext">
				<?php echo $item->displayIntrotext; ?>
				</p>
			<?php endif; ?>

			<?php if ($params->get('show_readmore')) :?>
				<p class="mod-articles-category-readmore">
					<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
					<?php if ($item->params->get('access-view') == false) :
							echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE');
						elseif ($readmore = $item->alternative_readmore) :
							echo $readmore;
							echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit'));
							if ($params->get('show_readmore_title', 0) != 0) :
								echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
							endif;
						elseif ($params->get('show_readmore_title', 0) == 0) :
							echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE');
						else :
		
							echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE');
							echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit'));
						endif; ?>
		        </a>
				</p>
				<?php endif; ?>
			</div>
        </div>
	<?php endforeach; ?>
<?php endif; ?>
</div>