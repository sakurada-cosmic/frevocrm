<?php
/* Smarty version 4.5.5, created on 2025-11-12 10:53:29
  from '/var/www/html/layouts/v7/modules/PDFTemplates/DefaultContentForTemplates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6913e8991d3ac6_45307035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a32d0df45152eb32d28be150b3e987d1dac2e6ac' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/PDFTemplates/DefaultContentForTemplates.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6913e8991d3ac6_45307035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('VIEW_IN_BROWSER_TAG', PDFTemplates_Module_Model::$BROWSER_MERGE_TAG);
$_smarty_tpl->_assignInScope('WEBSITE_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('website'));
$_smarty_tpl->_assignInScope('FACEBOOK_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('facebook'));
$_smarty_tpl->_assignInScope('TWITTER_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('twitter'));
}
}
