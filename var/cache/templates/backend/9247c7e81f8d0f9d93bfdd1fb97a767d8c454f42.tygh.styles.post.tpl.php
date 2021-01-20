<?php /* Smarty version Smarty-3.1.21, created on 2021-01-19 22:05:17
         compiled from "/var/www/html/cscart/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171203428060072d6deefac8-53492069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9247c7e81f8d0f9d93bfdd1fb97a767d8c454f42' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '171203428060072d6deefac8-53492069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60072d6def6549_77558392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60072d6def6549_77558392')) {function content_60072d6def6549_77558392($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/cscart/app/functions/smarty_plugins/function.style.php';
?><?php if (@constant('ACCOUNT_TYPE')==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
