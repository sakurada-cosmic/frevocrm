<?php
/* Smarty version 4.5.5, created on 2025-11-07 10:51:30
  from '/var/www/html/layouts/v7/modules/Users/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690d50a2b232b4_67987013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c8b930eb96891bed0892cafbd5a4ff56fa99b5f' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/Users/Login.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690d50a2b232b4_67987013 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>body {background: url(layouts/v7/resources/Images/login-background.jpg);background-position: center;background-size: cover;width: 100%;background-repeat: no-repeat;}hr {margin-top: 15px;background-color: #7C7C7C;height: 2px;border-width: 0;}.app-footer p {margin-top: 0px;}.footer {background-color: #fbfbfb;height:26px;}.bar {position: relative;display: block;width: 100%;}.bar:before, .bar:after {content: '';width: 0;bottom: 1px;position: absolute;height: 1px;background: #35aa47;transition: all 0.2s ease;}.bar:before {left: 50%;}.bar:after {right: 50%;}</style><span class="app-nav"></span><div class="container-fluid loginPageContainer"><div class="col-lg-5 col-md-12 col-sm-12 col-xs-12"><div class="loginDiv login-widgetHeight"><img class="img-responsive user-logo" src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('imagepath');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('alt');?>
"><div><span class="<?php if (!$_smarty_tpl->tpl_vars['ERROR']->value) {?>hide<?php }?> failureMessage" id="validationMessage"><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value,'Users');?>
</span><span class="<?php if (!$_smarty_tpl->tpl_vars['MAIL_STATUS']->value) {?>hide<?php }?> successMessage"><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value,'Users');?>
</span></div><div id="loginFormDiv"><form class="form-horizontal" method="POST" action="index.php"><input class="login-input" type="hidden" name="module" value="Users"/><input class="login-input" type="hidden" name="action" value="Login"/><div class="group"><input class="login-input" id="username" type="text" name="username" placeholder="<?php echo vtranslate('User Name','Users');?>
"><span class="bar"></span><label class="login-label"><?php echo vtranslate('User Name','Users');?>
</label></div><div class="group"><input class="login-input" id="password" type="password" name="password" placeholder="<?php echo vtranslate('Password','Users');?>
" ><span class="bar"></span><label class="login-label"><?php echo vtranslate('Password','Users');?>
</label></div><div class="group"><button type="submit" class="login-button login-buttonBlue"><?php echo vtranslate('LBL_LOGIN','Users');?>
</button><br><a class="forgotPasswordLink" style="color: #15c;"><?php echo vtranslate('LBL_FORGET_PASSWORD','Users');?>
</a></div></form></div><div id="forgotPasswordDiv" class="hide"><form class="form-horizontal" action="forgotPassword.php" method="POST"><div class="group"><input class="login-input" id="fusername" type="text" name="username" placeholder="<?php echo vtranslate('User Name','Users');?>
<" ><span class="bar"></span><label class="login-label"><?php echo vtranslate('User Name','Users');?>
</label></div><div class="group"><input class="login-input" id="email" type="email" name="emailId" placeholder="<?php echo vtranslate('LBL_MAILADDRESS','Users');?>
<" ><span class="bar"></span><label class="login-label"><?php echo vtranslate('LBL_MAILADDRESS','Users');?>
</label></div><div class="group"><button type="submit" class="login-button login-buttonBlue forgot-submit-btn"><?php echo vtranslate('LBL_MAILADDRESS','Users');?>
</button><br><span>パスワードをメールで送信します<a class="forgotPasswordLink pull-right" style="color: #15c;">戻る</a></span></div></form></div></div></div><div class="col-lg-1 hidden-xs hidden-sm hidden-md"><div class="separatorDiv"></div></div><div class="col-lg-5 hidden-xs hidden-sm hidden-md"><div class="marketingDiv widgetHeight"><?php if ($_smarty_tpl->tpl_vars['JSON_DATA']->value) {?><div class="scrollContainer"><?php $_smarty_tpl->_assignInScope('ALL_BLOCKS_COUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSON_DATA']->value, 'BLOCKS_DATA', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['BLOCKS_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['BLOCKS_DATA']->value) {
$_smarty_tpl->tpl_vars['BLOCKS_DATA']->do_else = false;
if ($_smarty_tpl->tpl_vars['BLOCKS_DATA']->value) {?><div><h4><?php echo $_smarty_tpl->tpl_vars['BLOCKS_DATA']->value[0]['heading'];?>
</h4><ul class="bxslider"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS_DATA']->value, 'BLOCK_DATA');
$_smarty_tpl->tpl_vars['BLOCK_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_DATA']->value) {
$_smarty_tpl->tpl_vars['BLOCK_DATA']->do_else = false;
?><li class="slide"><?php $_smarty_tpl->_assignInScope('ALL_BLOCKS_COUNT', $_smarty_tpl->tpl_vars['ALL_BLOCKS_COUNT']->value+1);
if ($_smarty_tpl->tpl_vars['BLOCK_DATA']->value['image']) {?><div class="col-lg-3" style="min-height: 100px;"><img src="<?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['image'];?>
" style="width: 100%;height: 100%;margin-top: 10px;"/></div><div class="col-lg-9"><?php } else { ?><div class="col-lg-12"><?php }?><div title="<?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['summary'];?>
"><h3><b><?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['displayTitle'];?>
</b></h3><?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['displaySummary'];?>
<br><br><?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['pubDate'];?>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['url'];?>
" target="_blank"><u><?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['urlalt'];?>
</u></a><br><br></div><?php if ($_smarty_tpl->tpl_vars['BLOCK_DATA']->value['image']) {?></div><?php } else { ?></div><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php if ($_smarty_tpl->tpl_vars['ALL_BLOCKS_COUNT']->value != $_smarty_tpl->tpl_vars['DATA_COUNT']->value) {?><br><hr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php } else { ?><div class="inActiveImgDiv"><div><h4><?php echo vtranslate("LBL_F-Revo_Notice","Users");?>
</h4></div><a href="https://f-revocrm.jp" target="_blank" style="margin-right: 25px;"><img src="https://f-revocrm.jp/frevowp/wp-content/uploads/2021/09/image_frevo_top.png" style="width: 85%; height: 100%; margin-top: 25px;"/></a></div><?php }?></div></div></div><?php echo '<script'; ?>
>jQuery(document).ready(function () {var validationMessage = jQuery('#validationMessage');var forgotPasswordDiv = jQuery('#forgotPasswordDiv');var loginFormDiv = jQuery('#loginFormDiv');loginFormDiv.find('#password').focus();loginFormDiv.find('a').click(function () {loginFormDiv.toggleClass('hide');forgotPasswordDiv.toggleClass('hide');validationMessage.addClass('hide');});forgotPasswordDiv.find('a').click(function () {loginFormDiv.toggleClass('hide');forgotPasswordDiv.toggleClass('hide');validationMessage.addClass('hide');});loginFormDiv.find('button').on('click', function () {var username = loginFormDiv.find('#username').val();var password = jQuery('#password').val();var result = true;var errorMessage = '';if (username === '' & password === '') {errorMessage = "<?php echo vtranslate('LBL_ENTER_USERNAME_AND_PASSWORD','Users');?>
";result = false;} else if (username === '') {errorMessage = "<?php echo vtranslate('LBL_USER_NAME','Users');?>
";result = false;} else if (password === '') {errorMessage = "<?php echo vtranslate('LBL_ENTER_PASSWORD','Users');?>
";result = false;}if (errorMessage) {validationMessage.removeClass('hide').text(errorMessage);}return result;});forgotPasswordDiv.find('button').on('click', function () {var username = jQuery('#forgotPasswordDiv #fusername').val();var email = jQuery('#email').val();var email1 = email.replace(/^\s+/, '').replace(/\s+$/, '');var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/;var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;var result = true;var errorMessage = '';if (username === '' & (!emailFilter.test(email1) || email == '')) {errorMessage = '<?php echo vtranslate('LBL_ENTER_USERNAME_AND_MAILADDRESS','Users');?>
";';result = false;} else if (username === '') {errorMessage = '<?php echo vtranslate('LBL_ENTER_USERNAME','Users');?>
";';result = false;} else if (!emailFilter.test(email1) || email == '') {errorMessage = '<?php echo vtranslate('LBL_ENTER_MAILADDRESS','Users');?>
";';result = false;} else if (email.match(illegalChars)) {errorMessage = '<?php echo vtranslate('LBL_INVALID_MAILADDRESS','Users');?>
";';result = false;}if (errorMessage) {validationMessage.removeClass('hide').text(errorMessage);}return result;});jQuery('input').blur(function (e) {var currentElement = jQuery(e.currentTarget);if (currentElement.val()) {currentElement.addClass('used');} else {currentElement.removeClass('used');}});var ripples = jQuery('.ripples');ripples.on('click.Ripples', function (e) {jQuery(e.currentTarget).addClass('is-active');});ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function (e) {jQuery(e.currentTarget).removeClass('is-active');});loginFormDiv.find('#username').focus();var slider = jQuery('.bxslider').bxSlider({auto: true,pause: 4000,nextText: "",prevText: "",autoHover: true});jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });jQuery('.bx-wrapper .bx-viewport').css('background-color', 'transparent');jQuery('.bx-wrapper .bxslider li').css('text-align', 'left');jQuery('.bx-wrapper .bx-pager').css('bottom', '-15px');var params = {theme		: 'dark-thick',setHeight	: '100%',advanced	:	{autoExpandHorizontalScroll:true,setTop: 0}};jQuery('.scrollContainer').mCustomScrollbar(params);});<?php echo '</script'; ?>
></div><?php }
}
