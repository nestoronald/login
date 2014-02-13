<?php /* Smarty version Smarty-3.1.11, created on 2013-01-18 13:56:12
         compiled from "tpl/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166167728050f07bae1801d6-16511098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6536a4b25f30d1160ac63bd7b23fde8d5346ea07' => 
    array (
      0 => 'tpl/edit.tpl',
      1 => 1358535362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166167728050f07bae1801d6-16511098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f07bae24aa81_65634970',
  'variables' => 
  array (
    'idppr' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f07bae24aa81_65634970')) {function content_50f07bae24aa81_65634970($_smarty_tpl) {?><div id="tabs">
<ul>
<li><a href="#tabs-1">Resumen</a></li>
<li><a href="#tabs-2">Archivos</a></li>
</ul>

    
<div id="tabs-1">    
    <div id="divDataContent">
    
		<div style="text-align:left; padding: 5px 0px 5px 10px;">
            <form name="form<?php echo $_smarty_tpl->tpl_vars['idppr']->value;?>
" >
            	<input id="hiddenIdPpr" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idppr']->value;?>
" >
				<div class="divtext">
					<table>
					<tr><td><label for="nombrePPR">Nombre del PPR:</label></td>
	                    <td><input name="nombrePPR" class="edit-text" type="text" value=<?php echo $_smarty_tpl->tpl_vars['data']->value['nombre'];?>
 /></td>
					</tr>
					<tr>
	                    <td><label for="tipo">Tipo del diseño presupuestal:</label></td>		
	                    <td><input name="tipo" class="edit-text" type="text" value=<?php echo $_smarty_tpl->tpl_vars['data']->value['tipo'];?>
 /></td>
					</tr>
					<tr>
	                    <td><label for="entidad">Entidad Rectora del PP:</label></td>
	                    <td><input name="entidad" class="edit-text" type="text" value=<?php echo $_smarty_tpl->tpl_vars['data']->value['entidad'];?>
></td>
					</tr>
					<tr>                    
	                    <td><label for="responsable">Responsable Técnico del PP:</label></td>
	                    <td><input name="responsable" class="edit-text" type="text" value=<?php echo $_smarty_tpl->tpl_vars['data']->value['responsable'];?>
></td>
					</tr>
					<tr>                    
	                    <td><label for="coordinador">Coordinador Territorial:</label></td>
	                    <td><input name="coordinador" class="edit-text" type="text" value=<?php echo $_smarty_tpl->tpl_vars['data']->value['coordinador'];?>
></td>
					</tr>
					<tr>                    
	                    <td><label for="actividades">Actividades:</label></td>
	                    <td><textarea name="actividades" style="border: 1px solid #CCCCCC; width:350px; height:60px">
	                        <?php echo $_smarty_tpl->tpl_vars['data']->value['actividades'];?>

	                    </textarea></td>
                    </tr>
					<tr>
	                    <td><label for="productos">Productos:</label></td>
	                    <td><textarea name="productos" style="border: 1px solid #CCCCCC; width:350px; height:60px">
	                        <?php echo $_smarty_tpl->tpl_vars['data']->value['productos'];?>

	                    </textarea></td>
                    </tr>
                    <tr>
                    	<td><label for="costo">Costo:</label></td>
                    	<td><input name="costo" class="edit-text" type="text" value=<?php echo $_smarty_tpl->tpl_vars['data']->value['costo'];?>
></td>
                    </tr>
                    <tr>
                    <tr>
                    	<td colspan="2"><hr></td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                    	<td><input onclick="xajax_cancelUpdate()"  class="" type="button" value="Cancelar">&nbsp;&nbsp;&nbsp;
                    	<input class="" type="button" value="Actualizar"></td>
                    </tr>                    
                    </table>
                </div>                
            </form>
		</div>
	</div>
</div>
<div id="tabs-2">		
		<div id="divFilesContent">
		<table>
			<tr>
		    	<td><div id="divListFiles" style="text-align:left; font-weight:bold;"></div>
		    	</td>
    			<td style="vertical-align:top">
				    <div style="text-align:left; font-weight:bold; float:right;">
						<form action="upload.php" method="post" enctype="multipart/form-data">
							<input type="file" name="userfile" class="fileUpload" multiple>&nbsp;&nbsp;
							<button id="px-submit" type="submit">Cargar</button>
							<button id="px-clear" type="reset">Borrar</button>
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idppr']->value;?>
" id="idppr" name="idppr">
						</form>
				    </div>
		    	<td>
		    </tr>    
		</table>				
		</div>
</div>    
    
</div><?php }} ?>