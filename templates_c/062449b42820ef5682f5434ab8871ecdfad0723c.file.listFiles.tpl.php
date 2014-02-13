<?php /* Smarty version Smarty-3.1.11, created on 2013-01-17 18:19:59
         compiled from "tpl/listFiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94407555750f86add905de5-57611551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '062449b42820ef5682f5434ab8871ecdfad0723c' => 
    array (
      0 => 'tpl/listFiles.tpl',
      1 => 1358464777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94407555750f86add905de5-57611551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f86add908596_73518963',
  'variables' => 
  array (
    'idppr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f86add908596_73518963')) {function content_50f86add908596_73518963($_smarty_tpl) {?>    <div id="divListFiles" style="text-align:left; font-weight:bold;">
    	
    </div>
	<hr>    
    <div style="text-align:left; font-weight:bold;">
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="userfile" class="fileUpload" multiple>&nbsp;&nbsp;
			<button id="px-submit" type="submit">Cargar</button>
			<button id="px-clear" type="reset">Borrar</button>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idppr']->value;?>
" id="idppr" name="idppr">
		</form>
    </div>    
	<hr class="space"><?php }} ?>