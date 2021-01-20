<?php /* Smarty version Smarty-3.1.21, created on 2021-01-20 11:19:57
         compiled from "/var/www/html/cscart/design/backend/templates/views/categories/components/bulk_edit/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9034420846007e7adbd3990-23573681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd3cb7ba52860b88a111ef64c765a39e895baace' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/views/categories/components/bulk_edit/status.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9034420846007e7adbd3990-23573681',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6007e7adbec3a2_66498057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6007e7adbec3a2_66498057')) {function content_6007e7adbec3a2_66498057($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status','active','change_to_status','disabled','change_to_status','hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("active")));
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1,'dispatch'=>"dispatch[categories.m_activate]",'form'=>"category_tree_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("disabled")));
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[categories.m_disable]",'form'=>"category_tree_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("hidden")));
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[categories.m_hide]",'form'=>"category_tree_form"));?>

</li>
<?php }} ?>
