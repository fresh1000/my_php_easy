<?php /* Smarty version 3.1.27, created on 2016-09-21 19:07:15
         compiled from "E:\OpenServer\domains\modx-2.5.1-pl\modx-2.5.1-pl\setup\templates\language.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2535157e2b033105cc3_34225834%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '409cea917b719a263fb32742037e7b4b238d6eb1' => 
    array (
      0 => 'E:\\OpenServer\\domains\\modx-2.5.1-pl\\modx-2.5.1-pl\\setup\\templates\\language.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2535157e2b033105cc3_34225834',
  'variables' => 
  array (
    'restarted' => 0,
    '_lang' => 0,
    'languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e2b033112743_26050111',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e2b033112743_26050111')) {
function content_57e2b033112743_26050111 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2535157e2b033105cc3_34225834';
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