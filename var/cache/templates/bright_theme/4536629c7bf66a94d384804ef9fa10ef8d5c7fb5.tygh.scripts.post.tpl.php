<?php /* Smarty version Smarty-3.1.21, created on 2021-01-19 22:03:05
         compiled from "/var/www/html/cscart/design/themes/responsive/templates/addons/rus_russianpost/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134283726460072ce9648ff5-67701546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4536629c7bf66a94d384804ef9fa10ef8d5c7fb5' => 
    array (
      0 => '/var/www/html/cscart/design/themes/responsive/templates/addons/rus_russianpost/hooks/index/scripts.post.tpl',
      1 => 1610895624,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134283726460072ce9648ff5-67701546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60072ce965d207_16745271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60072ce965d207_16745271')) {function content_60072ce965d207_16745271($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/cscart/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/rus_russianpost/func.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_russianpost/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_russianpost/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/rus_russianpost/func.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
