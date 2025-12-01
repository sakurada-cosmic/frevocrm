<?php
/* Smarty version 4.5.5, created on 2025-11-12 17:39:37
  from '/var/www/html/layouts/v7/modules/Calendar/partials/Menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691447c9728190_85853585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1b1373ffdbac4b62ceee6e6a8034fffea72795b' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/Calendar/partials/Menubar.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691447c9728190_85853585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('topMenus', $_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getTop());
$_smarty_tpl->_assignInScope('moreMenus', $_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getMore());?>

<div id="modules-menu" class="modules-menu">
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'], 'SIDE_BAR_LINK');
$_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value) {
$_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('CURRENT_LINK_NAME', "List");?>
			<?php $_smarty_tpl->_assignInScope('VIEW_ICON_CLASS', "vicon-calendarlist");?>
			<?php if ($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel') == 'LBL_CALENDAR_VIEW') {?>
				<?php $_smarty_tpl->_assignInScope('CURRENT_LINK_NAME', "Calendar");?>
				<?php $_smarty_tpl->_assignInScope('VIEW_ICON_CLASS', "vicon-mycalendar");?>
			<?php } elseif ($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel') == 'LBL_SHARED_CALENDAR') {?>
				<?php $_smarty_tpl->_assignInScope('CURRENT_LINK_NAME', "SharedCalendar");?>
				<?php $_smarty_tpl->_assignInScope('VIEW_ICON_CLASS', "vicon-sharedcalendar");?>
			<?php }?>
			<li class="module-qtip <?php if ($_smarty_tpl->tpl_vars['CURRENT_LINK_NAME']->value == $_smarty_tpl->tpl_vars['CURRENT_VIEW']->value) {?>active<?php }?> <?php echo $_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel');?>
" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel'),'Calendar');?>
">
				<a href="<?php echo $_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linkurl');?>
">
					<i class="<?php echo $_smarty_tpl->tpl_vars['VIEW_ICON_CLASS']->value;?>
"></i>
					<span><?php echo vtranslate($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel'),'Calendar');?>
</span>
				</a>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div><?php }
}
