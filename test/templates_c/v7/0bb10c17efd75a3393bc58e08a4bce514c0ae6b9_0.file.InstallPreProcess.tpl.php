<?php
/* Smarty version 4.3.2, created on 2023-10-13 18:00:27
  from 'C:\xampp\htdocs\vtigercrm\layouts\v7\modules\Install\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652977ab133f84_70567388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb10c17efd75a3393bc58e08a4bce514c0ae6b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm\\layouts\\v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652977ab133f84_70567388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
