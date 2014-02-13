<?php /* Smarty version Smarty-3.1.11, created on 2013-01-18 08:40:51
         compiled from "tpl/list-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102922896250f6fb98d7e053-93549343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43eff52af42b6339465f99178b37dd241acb6324' => 
    array (
      0 => 'tpl/list-edit.tpl',
      1 => 1358516425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102922896250f6fb98d7e053-93549343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f6fb98dcb809_07864778',
  'variables' => 
  array (
    'data' => 0,
    'idppr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f6fb98dcb809_07864778')) {function content_50f6fb98dcb809_07864778($_smarty_tpl) {?><div id="divproyectos">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
    <div class="span-15" style="text-align:left; font-weight:bold;"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sec1']['rownum'];?>
. <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['nombre'];?>
</div>
	<div class="span-15">
		<table>
		<tr>
			<td>Nombre del PPR:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['nombre'];?>
</td>
         	<td><a href="#" onclick="xajax_pprEdit('<?php echo $_smarty_tpl->tpl_vars['idppr']->value;?>
');">Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Borrar</a></td>
		</tr>
		<tr>
            <td>Tipo del diseño presupuestal:</td>		
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['tipo'];?>
</td>
            <td>&nbsp;</td>
		</tr>
		<tr>
            <td>Entidad Rectora del PP:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['entidad'];?>
</td>
            <td>&nbsp;</td>
		</tr>
		<tr>                    
            <td>Responsable Técnico del PP:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['responsable'];?>
</td>
            <td>&nbsp;</td>
		</tr>
		<tr>                    
             <td>Coordinador Territorial:</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['coordinador'];?>
</td>
             <td>&nbsp;</td>
		</tr>
		<tr>                    
             <td>Actividades:</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['actividades'];?>
</td>
             <td>&nbsp;</td>
            </tr>
		<tr>
          <td>Productos:</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['productos'];?>
</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
         	<td>Costo:</td>
         	<td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['costo'];?>
</td>
         	<td>&nbsp;</td>
		</tr>
        </table>
	</div>
<?php endfor; endif; ?>

</div>
<div id="divedit">

</div>
<?php }} ?>