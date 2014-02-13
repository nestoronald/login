<?php /* Smarty version Smarty-3.1.11, created on 2013-02-19 10:34:38
         compiled from "tpl/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131719156850edabe8127260-22602416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4303e4510c352ad7c4f71e32b3b501916954e47' => 
    array (
      0 => 'tpl/project.tpl',
      1 => 1361288076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131719156850edabe8127260-22602416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50edabe829b8b1_48145376',
  'variables' => 
  array (
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50edabe829b8b1_48145376')) {function content_50edabe829b8b1_48145376($_smarty_tpl) {?><table>	
	<tr class="prog">
		<th>
			Categoria	
		</th>
		<th>
			Producto/Actividad	
		</th>
		<th>
			Universo / Linea Base	
		</th>
		<th>
			Unidad de medida
		</th>
	</tr>
	<tr class="prog">
		<td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['actividad']->value['categoria'];?>
</td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['nombreactividad'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombreactividad'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['universo'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['universo'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['unidadmedida'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['unidadmedida'];?>
 <?php }?></td>
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
		<td>Programación <?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['periodo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['periodo'];?>
<?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['metafisica'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['metafisica'];?>
<?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['total'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['total'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial23'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial23'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial26'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][0]['presupuesto']['parcial26'];?>
 <?php }?></td>
	</tr>	
	<tr class="prog">
		<td>Programación <?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['periodo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['periodo'];?>
<?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['metafisica'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['metafisica'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['total'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['total'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial23'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial23'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial26'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][1]['presupuesto']['parcial26'];?>
 <?php }?></td>
	</tr>
	<tr class="prog">
		<td>Programación <?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['periodo'])){?><?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['periodo'];?>
<?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['metafisica'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['metafisica'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['total'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['total'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial23'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial23'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial26'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][2]['presupuesto']['parcial26'];?>
 <?php }?></td>
	</tr>
	<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['periodo'])){?>
	<tr class="prog">
		<td>Programación <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['periodo'];?>
</td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['metafisica'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['metafisica'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['total'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['total'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial23'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial23'];?>
 <?php }?></td>
		<td>&nbsp;<?php if (!is_array($_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial26'])){?> <?php echo $_smarty_tpl->tpl_vars['actividad']->value['programacion'][3]['presupuesto']['parcial26'];?>
 <?php }?></td>
	</tr>
	<?php }?>
			
</table>
<p>&nbsp;</p>
<?php }} ?>