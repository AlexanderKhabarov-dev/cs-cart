<?php /* Smarty version Smarty-3.1.21, created on 2021-01-20 11:31:10
         compiled from "/var/www/html/cscart/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13257953586007ea4eea1491-16942137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe22ef6e8b4bf3ecbaed408cf69438f4a3e88f2' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13257953586007ea4eea1491-16942137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6007ea4eeea040_54953742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6007ea4eeea040_54953742')) {function content_6007ea4eeea040_54953742($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }?><?php }} ?>
