<?php /* Smarty version 3.1.27, created on 2016-09-21 19:07:15
         compiled from "E:\OpenServer\domains\modx-2.5.1-pl\modx-2.5.1-pl\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3179657e2b03316ac11_63080353%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e742ff807b6aaa5d66b5f0e071e2c413b4e20a6' => 
    array (
      0 => 'E:\\OpenServer\\domains\\modx-2.5.1-pl\\modx-2.5.1-pl\\setup\\templates\\footer.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3179657e2b03316ac11_63080353',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e2b0331808a8_21128780',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e2b0331808a8_21128780')) {
function content_57e2b0331808a8_21128780 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/OpenServer/domains/modx-2.5.1-pl/modx-2.5.1-pl/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '3179657e2b03316ac11_63080353';
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