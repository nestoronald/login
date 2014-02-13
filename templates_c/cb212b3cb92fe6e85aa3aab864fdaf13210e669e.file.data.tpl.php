<?php /* Smarty version Smarty-3.1.11, created on 2013-02-18 13:57:24
         compiled from "tpl/data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95413662551223b81b884c9-01721430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb212b3cb92fe6e85aa3aab864fdaf13210e669e' => 
    array (
      0 => 'tpl/data.tpl',
      1 => 1361213822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95413662551223b81b884c9-01721430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51223b81bd7f68_74442598',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51223b81bd7f68_74442598')) {function content_51223b81bd7f68_74442598($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="utf-8"<?php echo '?>';?>
<actividades><actividad><categoria><?php echo $_smarty_tpl->tpl_vars['data']->value['categoria'];?>
</categoria><nombreactividad><?php echo $_smarty_tpl->tpl_vars['data']->value['nombreactividad'];?>
</nombreactividad><universo><?php echo $_smarty_tpl->tpl_vars['data']->value['universo'];?>
</universo><unidadmedida><?php echo $_smarty_tpl->tpl_vars['data']->value['unidadmedida'];?>
</unidadmedida><programacion id="1"><periodo><?php echo $_smarty_tpl->tpl_vars['data']->value['periodo1'];?>
</periodo><metafisica><?php echo $_smarty_tpl->tpl_vars['data']->value['metafisica1'];?>
</metafisica><presupuesto><total><?php echo $_smarty_tpl->tpl_vars['data']->value['total1'];?>
</total><parcial23><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial231'];?>
</parcial23><parcial26><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial261'];?>
</parcial26></presupuesto></programacion><programacion id="2"><periodo><?php echo $_smarty_tpl->tpl_vars['data']->value['periodo2'];?>
</periodo><metafisica><?php echo $_smarty_tpl->tpl_vars['data']->value['metafisica2'];?>
</metafisica><presupuesto><total><?php echo $_smarty_tpl->tpl_vars['data']->value['total2'];?>
</total><parcial23><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial232'];?>
</parcial23><parcial26><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial262'];?>
</parcial26></presupuesto></programacion><programacion id="3"><periodo><?php echo $_smarty_tpl->tpl_vars['data']->value['periodo3'];?>
</periodo><metafisica><?php echo $_smarty_tpl->tpl_vars['data']->value['metafisica3'];?>
</metafisica><presupuesto><total><?php echo $_smarty_tpl->tpl_vars['data']->value['total3'];?>
</total><parcial23><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial233'];?>
</parcial23><parcial26><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial263'];?>
</parcial26></presupuesto></programacion><programacion id="4"><periodo><?php echo $_smarty_tpl->tpl_vars['data']->value['periodo4'];?>
</periodo><metafisica><?php echo $_smarty_tpl->tpl_vars['data']->value['metafisica4'];?>
</metafisica><presupuesto><total><?php echo $_smarty_tpl->tpl_vars['data']->value['total4'];?>
</total><parcial23><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial234'];?>
</parcial23><parcial26><?php echo $_smarty_tpl->tpl_vars['data']->value['parcial264'];?>
</parcial26></presupuesto></programacion></actividad></actividades><?php }} ?>