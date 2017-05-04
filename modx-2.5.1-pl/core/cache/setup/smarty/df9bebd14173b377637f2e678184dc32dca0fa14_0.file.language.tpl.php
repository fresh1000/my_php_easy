<?php /* Smarty version 3.1.27, created on 2016-09-21 19:17:50
         compiled from "E:\OpenServer\domains\modx-2.5.1-pl\setup\templates\language.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:585557e2b2aef20632_47382777%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df9bebd14173b377637f2e678184dc32dca0fa14' => 
    array (
      0 => 'E:\\OpenServer\\domains\\modx-2.5.1-pl\\setup\\templates\\language.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585557e2b2aef20632_47382777',
  'variables' => 
  array (
    'restarted' => 0,
    '_lang' => 0,
    'languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e2b2aef2d356_89922590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e2b2aef2d356_89922590')) {
function content_57e2b2aef2d356_89922590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '585557e2b2aef20632_47382777';
?>
<form id="install" action="?" method="post">

<?php if ($_smarty_tpl->tpl_vars['restarted']->value) {?>
    <br class="clear" />
    <br class="clear" />
    <p class="note"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['restarted_msg'];?>
</p>
<?php }?>

<div class="setup_navbar" style="border-top: 0;">
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['choose_language'];?>
:
        <select name="language" autofocus="autofocus">
            <?php echo $_smarty_tpl->tpl_vars['languages']->value;?>

    	</select>
    </p>

    <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['select'];?>
" />
</div>
</form><?php }
}
?>