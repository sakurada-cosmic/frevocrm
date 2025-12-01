<?php
/* Smarty version 4.5.5, created on 2025-11-07 15:09:56
  from '/var/www/html/layouts/v7/modules/EmailTemplates/DefaultContentForTemplates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690d8d347c5488_16732417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8b1ea9c4b93696b50a1df36282d060b8e7a45b' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/EmailTemplates/DefaultContentForTemplates.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690d8d347c5488_16732417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('VIEW_IN_BROWSER_TAG', EmailTemplates_Module_Model::$BROWSER_MERGE_TAG);
$_smarty_tpl->_assignInScope('WEBSITE_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('website'));
$_smarty_tpl->_assignInScope('FACEBOOK_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('facebook'));
$_smarty_tpl->_assignInScope('TWITTER_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('twitter'));
}
}
