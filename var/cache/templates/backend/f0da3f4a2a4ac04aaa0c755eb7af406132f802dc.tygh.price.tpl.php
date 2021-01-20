<?php /* Smarty version Smarty-3.1.21, created on 2021-01-20 11:31:09
         compiled from "/var/www/html/cscart/design/backend/templates/views/products/components/bulk_edit/price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16044793096007ea4d9a03f6-86918130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0da3f4a2a4ac04aaa0c755eb7af406132f802dc' => 
    array (
      0 => '/var/www/html/cscart/design/backend/templates/views/products/components/bulk_edit/price.tpl',
      1 => 1606799788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16044793096007ea4d9a03f6-86918130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'primary_currency' => 0,
    'currencies' => 0,
    'show_stock_control_in_bulk_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6007ea4d9e59c5_15906891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6007ea4d9e59c5_15906891')) {function content_6007ea4d9e59c5_15906891($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/cscart/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_edit.price_and_stock','price','list_price','in_stock','bulk_edit.decrease_hint','bulk_edit.example_of_modified_value','price','list_price','in_stock','reset','apply'));
?>
<div class="bulk-edit-inner bulk-edit-inner--price">
    <div class="bulk-edit-inner__header">
        <span>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_prices_block_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->__("bulk_edit.price_and_stock");?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    </div>

    <div class="bulk-edit-inner__body">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_prices_block_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_inputs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_inputs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="bulk-edit-inner__input-group">
            <input type="number" 
                   step="any"
                   class="input-group__text" 
                   placeholder="<?php echo $_smarty_tpl->__("price");?>
"
                   data-ca-bulkedit-mod-changer
                   data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-price]"
                   data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-p]"
                   data-ca-bulkedit-equal-field="[name='products_data[?][price]']"
                   data-ca-name="price"
            />
            <select class="input-group__modifier" data-ca-bulkedit-mod-price-filter-p>
                <option value="number"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
                <option value="percent">%</option>
            </select>
        </div>

        <div class="bulk-edit-inner__input-group">
            <input type="number" 
                   step="any"
                   class="input-group__text" 
                   placeholder="<?php echo $_smarty_tpl->__("list_price");?>
"
                   data-ca-bulkedit-mod-changer
                   data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-listprice]"
                   data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-lp]"
                   data-ca-bulkedit-equal-field="[name='products_data[?][list_price]']"
                   data-ca-name="list_price"
            />
            <select class="input-group__modifier" data-ca-bulkedit-mod-price-filter-lp>
                <option value="number"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
                <option value="percent">%</option>
            </select>
        </div>

        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_stock_control_in_bulk_edit']->value)===null||$tmp==='' ? true : $tmp)) {?>
            <div class="bulk-edit-inner__input-group">
                <input type="number"
                       class="input-group__text input-group__text--full"
                       placeholder="<?php echo $_smarty_tpl->__("in_stock");?>
"
                       data-ca-bulkedit-mod-changer
                       data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-instock]"
                       data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-is]"
                       data-ca-bulkedit-equal-field="[name='products_data[?][amount]']"
                       data-ca-name="amount"
                />
                <input type="hidden" value="number" data-ca-bulkedit-mod-price-filter-is/>
            </div>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_inputs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <div class="bulk-edit-inner__hint">
            <span><?php echo $_smarty_tpl->__("bulk_edit.decrease_hint");?>
</span>
        </div>

        <div class="bulk-edit-inner__example">
            <p class="bulk-edit-inner__example-title"><?php echo $_smarty_tpl->__("bulk_edit.example_of_modified_value");?>
</p>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_price_examples")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_price_examples"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p class="bulk-edit-inner__example-line">
                <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("price");?>
:</span>
                <span class="bulk-edit-inner__example-line--right" 
                      data-ca-bulkedit-mod-default-value="30.00"
                      data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                      data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                      data-ca-bulkedit-mod-price
                >
                    <span class="bulk-edit-inner__example-line--green">30.00</span>
                    <span class="bulk-edit-inner__example-line--red"></span>
                </span>
            </p>

            <p class="bulk-edit-inner__example-line">
                <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("list_price");?>
:</span>
                <span class="bulk-edit-inner__example-line--right"
                      data-ca-bulkedit-mod-default-value="31.00"
                      data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                      data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                      data-ca-bulkedit-mod-listprice
                >
                    <span class="bulk-edit-inner__example-line--green">31.00</span>
                    <span class="bulk-edit-inner__example-line--red"></span>
                </span>
            </p>

            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_stock_control_in_bulk_edit']->value)===null||$tmp==='' ? true : $tmp)) {?>
                <p class="bulk-edit-inner__example-line">
                    <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("in_stock");?>
:</span>
                    <span class="bulk-edit-inner__example-line--right"
                          data-ca-bulkedit-mod-default-value="10"
                          data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                          data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                          data-ca-bulkedit-mod-instock
                    >
                        <span class="bulk-edit-inner__example-line--green">10</span>
                        <span class="bulk-edit-inner__example-line--red"></span>
                    </span>
                </p>
            <?php }?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_price_examples"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-mod-cancel" 
                role="button"
                data-ca-bulkedit-mod-cancel
                data-ca-bulkedit-mod-reset-changer="[data-ca-bulkedit-mod-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-mod-update" 
                role="button"
                data-ca-bulkedit-mod-update
                data-ca-bulkedit-mod-values="[data-ca-bulkedit-mod-changer]"
                data-ca-bulkedit-mod-target-form="[name=manage_products_form]"
                data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-mod-dispatch="products.m_update_prices"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
</div><?php }} ?>
