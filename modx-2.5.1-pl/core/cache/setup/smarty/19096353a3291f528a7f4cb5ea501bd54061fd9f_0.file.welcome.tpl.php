<?php /* Smarty version 3.1.27, created on 2016-09-21 19:17:53
         compiled from "E:\OpenServer\domains\modx-2.5.1-pl\setup\templates\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:766957e2b2b1787a21_15874775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19096353a3291f528a7f4cb5ea501bd54061fd9f' => 
    array (
      0 => 'E:\\OpenServer\\domains\\modx-2.5.1-pl\\setup\\templates\\welcome.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766957e2b2b1787a21_15874775',
  'variables' => 
  array (
    '_lang' => 0,
    'config_key' => 0,
    'writableError' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e2b2b17ef417_34014561',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e2b2b17ef417_34014561')) {
function content_57e2b2b17ef417_34014561 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '766957e2b2b1787a21_15874775';
?>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/js/sections/welcome.js"><?php echo '</script'; ?>
>
<form id="welcome" action="?action=welcome" method="post">
<div>
    <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['welcome'];?>
</h2>
    <?php echo $_smarty_tpl->tpl_vars['_lang']->value['welcome_message'];?>

    <br />
</div>

<?php if (@constant('MODX_SETUP_KEY') != '@traditional@') {?>
<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_key_change'];?>
</p>

<div id="cck-div">
    <h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_key'];?>
</h3>
    <p><small><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_key_override'];?>
</small></p>
    <div class="labelHolder">
        <label for="config_key"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_key'];?>
</label>
        <input type="text" name="config_key" id="config_key" value="<?php echo $_smarty_tpl->tpl_vars['config_key']->value;?>
" style="width:250px" />
        <br />
        <?php if ($_smarty_tpl->tpl_vars['writableError']->value) {?>
        <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_not_writable_err'];?>
</span>
        <?php }?>
    </div>
</div>
<?php }?>
<div class="setup_navbar">
    <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
" autofocus="autofocus" />
</div>
</form>
<?php }
}
?>