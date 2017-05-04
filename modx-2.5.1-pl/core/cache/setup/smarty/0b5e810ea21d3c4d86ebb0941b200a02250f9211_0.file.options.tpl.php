<?php /* Smarty version 3.1.27, created on 2016-09-21 19:07:22
         compiled from "E:\OpenServer\domains\modx-2.5.1-pl\modx-2.5.1-pl\setup\templates\options.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2043457e2b03a320aa8_67992850%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5e810ea21d3c4d86ebb0941b200a02250f9211' => 
    array (
      0 => 'E:\\OpenServer\\domains\\modx-2.5.1-pl\\modx-2.5.1-pl\\setup\\templates\\options.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043457e2b03a320aa8_67992850',
  'variables' => 
  array (
    '_lang' => 0,
    'installmode' => 0,
    'app_name' => 0,
    'new_folder_permissions' => 0,
    'new_file_permissions' => 0,
    'unpacked' => 0,
    'files_exist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e2b03a3dc7c3_25760158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e2b03a3dc7c3_25760158')) {
function content_57e2b03a3dc7c3_25760158 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2043457e2b03a320aa8_67992850';
?>
<form id="options" action="?action=options" method="post">
<h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_title'];?>
</h2>

<hr />

<table class="options">
<tbody>
<tr>
    <th style="width: 43%;">
        <img src="assets/images/im_new_inst.gif" width="32" height="32" alt="" />

        <label>
            <input type="radio" name="installmode" id="installmode0" value="0" <?php if ($_smarty_tpl->tpl_vars['installmode']->value == 0) {?> checked="checked" autofocus="autofocus"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_installation'];?>

        </label>
    </th>
    <td>
        <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_install_new_copy'];?>
 <?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
 -
        <strong><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_install_new_note'];?>
</strong>
    </td>
</tr>
<tr>
    <th>
        <img src="assets/images/im_inst_upgrade.gif" width="32" height="32" alt=""/>

        <label>
            <input type="radio" name="installmode" id="installmode1" value="1"<?php if ($_smarty_tpl->tpl_vars['installmode']->value < 1) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['installmode']->value == 1) {?> checked="checked" autofocus="autofocus"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_upgrade_existing'];?>

        </label>
    </th>
    <td><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_upgrade_existing_note'];?>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['installmode']->value > 0) {?>
<tr>
    <th>&nbsp;</th>
    <td style="background: #fffdbb; padding:0 1em; border:2px solid #CBD499">
        <h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_important_upgrade'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_important_upgrade_note'];?>
</p>
    </td>
</tr>
<?php }?>
<tr>
    <th>
        <img src="assets/images/im_inst_upgrade.gif" width="32" height="32" alt="" />
        <label>
            <input type="radio" name="installmode" id="installmode3" value="3"<?php if ($_smarty_tpl->tpl_vars['installmode']->value < 1) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['installmode']->value == 3) {?> checked="checked" autofocus="autofocus"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_upgrade_advanced'];?>

        </label>
    </th>
    <td><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_upgrade_advanced_note'];?>
</td>
</tr>
</tbody>
</table>

<?php if ($_smarty_tpl->tpl_vars['installmode']->value == 0) {?>
<hr />
<h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['advanced_options'];?>
</h3>

<table class="options">
<tbody>
<tr>
    <th style="padding-top: 1em;">
        <label>
            <input type="text" name="new_folder_permissions" id="new_folder_permissions" value="<?php echo $_smarty_tpl->tpl_vars['new_folder_permissions']->value;?>
" size="5" maxlength="4" />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_folder_permissions'];?>

        </label>
    </th>
    <td style="padding-top: 1em;"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_folder_permissions_note'];?>
</td>
</tr>
<tr>
    <th style="padding-top: 2em;">
        <label>
            <input type="text" name="new_file_permissions" id="new_file_permissions" value="<?php echo $_smarty_tpl->tpl_vars['new_file_permissions']->value;?>
" size="5" maxlength="4" />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_file_permissions'];?>

        </label>
    </th>
    <td style="padding-top: 2em;"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_file_permissions_note'];?>
</td>
</tr>
<tr>
    <th>
        <label>
            <input type="checkbox" name="nocompress" id="nocompress" value="1" />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_nocompress'];?>

        </label>
    </th>
    <td><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_nocompress_note'];?>
</td>
</tr>
<tr>
    <th>
        <label>
            <input type="checkbox" name="send_poweredby_header" id="send_poweredby_header" value="1" checked="checked" />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_send_poweredby_header'];?>

        </label>
    </th>
    <td><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_send_poweredby_header_note'];?>
</td>
</tr>
</tbody>
</table>
<?php }?>
<?php if (@constant('MODX_SETUP_KEY') == '@traditional@' && $_smarty_tpl->tpl_vars['unpacked']->value == 1 && $_smarty_tpl->tpl_vars['files_exist']->value == 1) {?>
<input type="hidden" name="unpacked" id="unpacked" value="1" />
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['installmode']->value != 0) {?>
<hr />
<h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['advanced_options'];?>
</h3>
<?php }?>
<table class="options">
<tbody>
<?php if ($_smarty_tpl->tpl_vars['installmode']->value != 0) {?>
<tr>
    <th>
        <label>
            <input type="checkbox" name="nocompress" id="nocompress" value="1" />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_nocompress'];?>

        </label>
    </th>
    <td><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_nocompress_note'];?>
</td>
</tr>
<?php }?>
<tr>
    <th style="padding-top: 2em;">
        <label>
            <input type="checkbox" name="unpacked" id="unpacked" value="1"<?php if ($_smarty_tpl->tpl_vars['unpacked']->value == 0) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['unpacked']->value == 1) {?> checked="checked"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_unpacked'];?>

        </label>
    </th>
    <td style="padding-top: 2em;"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_unpacked_note'];?>
</td>
</tr>
<tr>
    <th>
        <label>
            <input type="checkbox" name="inplace" id="inplace" value="1"<?php if ($_smarty_tpl->tpl_vars['files_exist']->value == 0) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['files_exist']->value == 1) {?> checked="checked"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_inplace'];?>

        </label>
    </th>
    <td><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_inplace_note'];?>
</td>
</tr>
</tbody>
</table>
<br />
<?php }?>


<div class="setup_navbar">
    <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
" />
    <input type="button" onclick="MODx.go('welcome');" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
" />
</div>
</form>
<?php }
}
?>