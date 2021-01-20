<?php /* Smarty version Smarty-3.1.21, created on 2021-01-20 11:19:57
         compiled from "/var/www/html/cscart/design/backend/templates/views/categories/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13907908006007e7adc3bb16-72515892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9da553d2b3a8a8179b8c6754df53e4204e0d3695' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/views/categories/components/bulk_edit/actions.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13907908006007e7adc3bb16-72515892',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6007e7adc45135_94518921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6007e7adc45135_94518921')) {function content_6007e7adc45135_94518921($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('category_deletion_side_effects','export_products'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[categories.m_delete]",'form'=>"category_tree_form",'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_smarty_tpl->__("category_deletion_side_effects"))));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_products"),'dispatch'=>"dispatch[products.export_range]",'form'=>"category_tree_form"));?>

</li>
<?php }} ?>
