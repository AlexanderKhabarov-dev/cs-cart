<?php /* Smarty version Smarty-3.1.21, created on 2021-01-19 22:05:20
         compiled from "/var/www/html/cscart/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133835112460072d70afeb94-96489960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8f6ca391f2fa2609e31cf13a7b582c8322a53ad' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '133835112460072d70afeb94-96489960',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60072d70b02b96_89278010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60072d70b02b96_89278010')) {function content_60072d70b02b96_89278010($_smarty_tpl) {?><?php if (@constant('ACCOUNT_TYPE')==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <i class="help-center__show-help-center--icon icon-question-sign"></i>
        </a>
    </div>
<?php }?>
<?php }} ?>
