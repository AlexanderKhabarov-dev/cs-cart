<?php /* Smarty version Smarty-3.1.21, created on 2021-01-19 22:10:32
         compiled from "/var/www/html/cscart/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53984393460072ea8e7b371-77028969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e080c9ed9ab9d0cce56d1a7c70275287a51aad1' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/common/sidebox.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53984393460072ea8e7b371-77028969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60072ea8e85e16_86949794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60072ea8e85e16_86949794')) {function content_60072ea8e85e16_86949794($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
