<?php /* Smarty version Smarty-3.1.21, created on 2021-01-20 11:19:58
         compiled from "/var/www/html/cscart/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5635629096007e7ae10b117-89249453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277e0e7ac421a9907fb883dcdcb0c64fcbe6e55e' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5635629096007e7ae10b117-89249453',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6007e7ae1643b7_52832023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6007e7ae1643b7_52832023')) {function content_6007e7ae1643b7_52832023($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
