<?php /* Smarty version 3.1.27, created on 2016-09-21 19:17:50
         compiled from "E:\OpenServer\domains\modx-2.5.1-pl\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2436457e2b2aef3cb77_07250768%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0d8bf74ad61202851a6924cc8893d9fde51e64c' => 
    array (
      0 => 'E:\\OpenServer\\domains\\modx-2.5.1-pl\\setup\\templates\\footer.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2436457e2b2aef3cb77_07250768',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e2b2af04e113_66240668',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e2b2af04e113_66240668')) {
function content_57e2b2af04e113_66240668 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/OpenServer/domains/modx-2.5.1-pl/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '2436457e2b2aef3cb77_07250768';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>