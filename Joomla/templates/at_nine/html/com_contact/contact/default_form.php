<?php

 /**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
		<div class="contact-form-content">
			<div class="form-heading"><?php  echo JText::_('COM_CONTACT_EMAIL_FORM'); ?></div>
			<table>
				<tr>
					<th><?php echo $this->form->getLabel('contact_name'); ?></th>
					<td><?php echo $this->form->getInput('contact_name'); ?></td>
				</tr>
				<tr class="row-space"></tr>
				<tr>
					<th><?php echo $this->form->getLabel('contact_email'); ?></th>
					<td><?php echo $this->form->getInput('contact_email'); ?></td>
				</tr>
				<tr class="row-space"></tr>
				<tr>
					<th><?php echo $this->form->getLabel('contact_subject'); ?></th>
					<td><?php echo $this->form->getInput('contact_subject'); ?></td>
				</tr>
				<tr class="row-space"></tr>
				<tr>
					<th class="contact-message"><?php echo $this->form->getLabel('contact_message'); ?></th>
					<td><?php echo $this->form->getInput('contact_message'); ?></td>
				</tr>
			</table>
			<?php //Dynamically load any additional fields from plugins. ?>
			     <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			          <?php if ($fieldset->name != 'contact'):?>
			               <?php $fields = $this->form->getFieldset($fieldset->name);?>
			               <?php foreach($fields as $field): ?>
			                    <?php if ($field->hidden): ?>
			                         <?php echo $field->input;?>
			                    <?php else:?>
			                         <div>
			                            <?php echo $field->label; ?>
			                            <?php if (!$field->required && $field->type != "Spacer"): ?>
			                               <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
			                            <?php endif; ?>
			                         </div>
			                         <div><?php echo $field->input;?></div>
			                    <?php endif;?>
			               <?php endforeach;?>
			          <?php endif ?>
			     <?php endforeach;?>			
				<?php 	if ($this->params->get('show_email_copy')){ ?>
						
						<div class="send-copy"><?php echo $this->form->getLabel('contact_email_copy'); ?><?php echo $this->form->getInput('contact_email_copy'); ?></div>
				<?php 	} ?>
			<div class="button" style="direction: rtl;"><button class="btn validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
				<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
				<?php echo JHtml::_( 'form.token' ); ?>
			</div>
		</div>
	</form>
</div>
