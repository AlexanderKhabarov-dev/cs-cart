<?php /* Smarty version Smarty-3.1.21, created on 2021-01-20 11:31:09
         compiled from "/var/www/html/cscart/design/backend/templates/views/products/components/bulk_edit/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7638170996007ea4da259f2-55436517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a0cc1845761e93719b17511de57c87d0e6a5a3' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/views/products/components/bulk_edit/status.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7638170996007ea4da259f2-55436517',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6007ea4da338d8_74531503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6007ea4da338d8_74531503')) {function content_6007ea4da338d8_74531503($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_edit.make_active','bulk_edit.make_disabled','bulk_edit.make_hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_active");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[products.m_activate]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_disabled");
$_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp4,'dispatch'=>"dispatch[products.m_disable]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_hidden");
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp5,'dispatch'=>"dispatch[products.m_hide]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
