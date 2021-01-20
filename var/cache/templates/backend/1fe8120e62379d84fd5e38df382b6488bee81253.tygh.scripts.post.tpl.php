<?php /* Smarty version Smarty-3.1.21, created on 2021-01-19 22:05:21
         compiled from "/var/www/html/cscart/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138928017960072d712a47c7-16820013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe8120e62379d84fd5e38df382b6488bee81253' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '138928017960072d712a47c7-16820013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60072d712a6995_42406990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60072d712a6995_42406990')) {function content_60072d712a6995_42406990($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/cscart/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/rus_payments/yandex_checkpoint.js"),$_smarty_tpl);?>
<?php }} ?>
