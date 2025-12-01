<?php
/* Smarty version 4.5.5, created on 2025-11-07 12:16:14
  from '/var/www/html/layouts/v7/modules/Users/PreferenceDetailViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690d647e9d1247_15810187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18a8d89ed5dfdf733ffb7230a07a383b43cf00f2' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/Users/PreferenceDetailViewPreProcess.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690d647e9d1247_15810187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class=""><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "PreferenceDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
