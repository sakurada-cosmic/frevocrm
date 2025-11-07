<?php
/* Smarty version 4.5.5, created on 2025-11-07 10:49:00
  from '/var/www/html/layouts/v7/modules/Install/Step6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690d500c1c5336_84925113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7b52301c7dccabb6e06e30c78420f2d76bd8bd9' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/Install/Step6.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690d500c1c5336_84925113 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal" name="step6" method="post" action="index.php">
	<input type=hidden name="module" value="Install" />
	<input type=hidden name="view" value="Index" />
	<input type=hidden name="mode" value="Step7" />
	<input type=hidden name="auth_key" value="<?php echo $_smarty_tpl->tpl_vars['AUTH_KEY']->value;?>
" />

	<div class="row main-container">
		<div class="inner-container">
			<div class="row">
				<div class="col-sm-10">
					<h4><?php echo vtranslate('LBL_ONE_LAST_THING','Install');?>
</h4>
				</div>
				<div class="col-sm-2 hide">
					<a href="https://wiki.vtiger.com/vtiger6/" target="_blank" class="pull-right">
						<img src="<?php echo vimage_path('help.png');?>
" alt="Help-Icon"/>
					</a>
				</div>
			</div>
			<hr>
			<div class="offset2 row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<table class="config-table input-table">
						<tbody>
							<tr>
								<td><strong><?php echo vtranslate('LBL_COMPANY','Install');?>
</strong></td>
								<td><input type="text" name="company"></td>
							</tr>
							<tr>
								<td><strong><?php echo vtranslate('LBL_NAME','Install');?>
 <span class="no">*</span></strong></td>
								<td><input type="text" name="lastname" class="short" style="width:103px" placeholder="<?php echo vtranslate('LBL_LAST_NAME','Install');?>
">
								<input type="text" name="firstname" class="short" style="width:103px" placeholder="<?php echo vtranslate('LBL_FIRST_NAME','Install');?>
"></td>
							</tr>
							<tr>
								<td><strong><?php echo vtranslate('LBL_PHONE','Install');?>
</strong></td>
								<td><input type="text" name="phone"></td>
							</tr>
							<tr>
								<td><strong><?php echo vtranslate('LBL_EMAIL_ADDRESS','Install');?>
 <span class="no">*</span></strong></td>
								<td><input type="text" name="email"></td>
							</tr>
							<tr>
								<td><strong><?php echo vtranslate('LBL_PURPOSE','Install');?>
 <span class="no">*</span></strong></td>
								<td>
									<label><input name="reg_survey[]" type="checkbox" value="<?php echo vtranslate('LBL_PURPOSE_CHECKBOX_1','Install');?>
"><?php echo vtranslate('LBL_PURPOSE_CHECKBOX_1','Install');?>
</label><br>
									<label><input name="reg_survey[]" type="checkbox" value="<?php echo vtranslate('LBL_PURPOSE_CHECKBOX_2','Install');?>
"><?php echo vtranslate('LBL_PURPOSE_CHECKBOX_2','Install');?>
</label><br>
									<label><input name="reg_survey[]" type="checkbox" value="<?php echo vtranslate('LBL_PURPOSE_CHECKBOX_3','Install');?>
"><?php echo vtranslate('LBL_PURPOSE_CHECKBOX_3','Install');?>
</label><br>
									<label><input name="reg_survey[]" type="checkbox" value="<?php echo vtranslate('LBL_PURPOSE_CHECKBOX_4','Install');?>
"><?php echo vtranslate('LBL_PURPOSE_CHECKBOX_4','Install');?>
</label><br>
									<label><input name="reg_survey[]" type="checkbox" value="<?php echo vtranslate('LBL_PURPOSE_CHECKBOX_5','Install');?>
"><?php echo vtranslate('LBL_PURPOSE_CHECKBOX_5','Install');?>
</label><br>
									<label><input name="reg_survey[]" type="checkbox" value="<?php echo vtranslate('LBL_PURPOSE_CHECKBOX_6','Install');?>
"><?php echo vtranslate('LBL_PURPOSE_CHECKBOX_6','Install');?>
</label><br>
									<label><input name="reg_survey[]" type="checkbox" value="<?php echo vtranslate('LBL_PURPOSE_CHECKBOX_7','Install');?>
"><?php echo vtranslate('LBL_PURPOSE_CHECKBOX_7','Install');?>
</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row offset2">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<?php echo vtranslate('LBL_PRIVACY_POLICY','Install');?>

				</div>
			</div>
			<div class="row offset2">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="button-container">
						<input type="button" class="btn btn-large btn-primary" value="<?php echo vtranslate('LBL_NEXT','Install');?>
" name="step7"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<div id="progressIndicator" class="row main-container hide">
	<div class="inner-container">
		<div class="inner-container">
			<div class="row">
				<div class="col-sm-12 welcome-div alignCenter">
					<h3><?php echo vtranslate('LBL_INSTALLATION_IN_PROGRESS','Install');?>
...</h3><br>
					<img src="<?php echo vimage_path('install_loading.gif');?>
"/>
					<h6><?php echo vtranslate('LBL_PLEASE_WAIT','Install');?>
.... </h6>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
