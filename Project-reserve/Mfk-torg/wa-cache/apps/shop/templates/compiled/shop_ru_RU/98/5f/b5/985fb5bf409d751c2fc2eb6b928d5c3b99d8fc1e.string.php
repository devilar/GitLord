<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:39
         compiled from "985fb5bf409d751c2fc2eb6b928d5c3b99d8fc1e" */ ?>
<?php /*%%SmartyHeaderCode:15994687135c7ac35fe011a3-50584970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985fb5bf409d751c2fc2eb6b928d5c3b99d8fc1e' => 
    array (
      0 => '985fb5bf409d751c2fc2eb6b928d5c3b99d8fc1e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '15994687135c7ac35fe011a3-50584970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'set' => 0,
    'features' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac35fe0bb92_71995800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac35fe0bb92_71995800')) {function content_5c7ac35fe0bb92_71995800($_smarty_tpl) {?><table class="features listfeatures<?php if ((($tmp = @$_smarty_tpl->tpl_vars['set']->value['class_name'])===null||$tmp==='' ? '' : $tmp)){?> <?php echo $_smarty_tpl->tpl_vars['set']->value['class_name'];?>
<?php }?>">
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
            <tr<?php if ($_smarty_tpl->tpl_vars['feature']->value['class_names']){?> class="<?php echo $_smarty_tpl->tpl_vars['feature']->value['class_names'];?>
"<?php }?>>
                <td class="name"><?php echo $_smarty_tpl->tpl_vars['feature']->value['name'];?>
</td>
                <td class="value"><?php echo $_smarty_tpl->tpl_vars['feature']->value['values'];?>
</td>
            </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>