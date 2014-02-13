<?php /* Smarty version Smarty-3.1.11, created on 2013-02-19 09:55:37
         compiled from "tpl/editProductoActividad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1224046547511166e2a2d7c1-56743036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524484631b9d7e6d68bc3c81f0ebbe8d38764181' => 
    array (
      0 => 'tpl/editProductoActividad.tpl',
      1 => 1361285731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1224046547511166e2a2d7c1-56743036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_511166e2b1f147_97830108',
  'variables' => 
  array (
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511166e2b1f147_97830108')) {function content_511166e2b1f147_97830108($_smarty_tpl) {?><table>	
	<tr class="cab-act">
		<td>Categoria</td>
		<td><div class="txt-box-600"><input name="categoria" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['categoria'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['categoria'];?>
<?php }?>"></div></td>
	</tr>
	<tr class="cab-act">
		<td>Producto/Actividad</td>
		<td><div class="txt-box-600"><input name="nombreactividad" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['nombreactividad'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombreactividad'];?>
<?php }?>"></div></td>
	</tr>
	<tr class="cab-act">
		<td>Universo / Linea Base</td>
		<td><div class="txt-box-600"><input name="universo" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['universo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['universo'];?>
<?php }?>"></div></td>
	</tr>
	<tr class="cab-act">
		<td>Unidad de medida</td>
		<td><div class="txt-box-600"><input name="unidadmedida" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['unidadmedida'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['unidadmedida'];?>
<?php }?>"></div></td>
	</tr>

</table>
<table>
	<tr class="prog">
		<td rowspan=2>&nbsp;</td>
		<td rowspan=2>Meta Fisica</td>
		<td colspan=3>Presupuesto</td>

	</tr>
	<tr class="prog">
		<td>C Total</td>
		<td>2,3</td>
		<td>2,6</td>
	</tr>
	<tr class="prog">
		<td><div class="txt-box">Programación<input name="periodo1" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['periodo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['periodo'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="metafisica1" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['metafisica'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['metafisica'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="total1" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['total'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['total'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial231" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial23'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial23'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial261" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial26'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial26'];?>
<?php }?>"></div></td>
	</tr>	
	<tr class="prog">
		<td><div class="txt-box">Programación<input name="periodo2" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['periodo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['periodo'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="metafisica2" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['metafisica'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['metafisica'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="total2" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['total'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['total'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial232" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial23'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial23'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial262"value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial26'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial26'];?>
<?php }?>"></div></td>
	</tr>
	<tr class="prog">
		<td><div class="txt-box">Programación<input name="periodo3" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['periodo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['periodo'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="metafisica3" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['metafisica'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['metafisica'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="total3" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['total'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['total'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial233" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial23'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial23'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial263"value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial26'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial26'];?>
<?php }?>"></div></td>
	</tr>		
	<tr class="prog">
		<td><div class="txt-box">Programación<input name="periodo4" type=text value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['periodo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['periodo'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="metafisica4" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['metafisica'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['metafisica'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="total4" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['total'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['total'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial234" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial23'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial23'];?>
<?php }?>"></div></td>
		<td><div class="txt-box"><input type=text name="parcial264" value="<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial26'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial26'];?>
<?php }?>"></div></td>
	</tr>		
		
</table>
<span style="float:right;"><input type=button value="Actualizar" onclick="xajax_dataUpdate(xajax.getFormValues('formUpdate'))">&nbsp;&nbsp;&nbsp;&nbsp;<input type=button value="Cancelar" onclick="xajax_menuAdmin();"></span>
<p>&nbsp;</p>
<?php }} ?>