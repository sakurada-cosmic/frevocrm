<?php
/* Smarty version 4.5.5, created on 2025-11-14 15:52:44
  from '/var/www/html/layouts/v7/modules/Documents/partials/Menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6916d1bc2d98d2_49638762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a5a79c44d2b26853e7bea01861fef88c9ea989' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/Documents/partials/Menubar.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6916d1bc2d98d2_49638762 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['REQ']->value['view'] == 'Detail') {?>
<div id="modules-menu" class="modules-menu">    
    <ul>
        <li class="active">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
">
				<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>

                <span><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</span>
            </a>
        </li>
    </ul>
</div>
<?php }
}
}
