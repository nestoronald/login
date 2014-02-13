<?php /* Smarty version Smarty-3.1.11, created on 2013-06-14 16:53:05
         compiled from "tpl/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12222722565170180c4953a0-15117705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf81e985b630d9e345e2ff550df8bb2897ed5c25' => 
    array (
      0 => 'tpl/main.tpl',
      1 => 1371246783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12222722565170180c4953a0-15117705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5170180c4f8372_40448378',
  'variables' => 
  array (
    'xajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5170180c4f8372_40448378')) {function content_5170180c4f8372_40448378($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>IGP - Reportes Vulcanol&oacute;gicos</title>

    <link rel="stylesheet" href="css/style_dropdowns.css" type="text/css" media="screen, projection"/>
    <!-- Framework CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
    
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">

	<link type="text/css" href="css/jquery-ui.css" rel="stylesheet">



	<!--
	<link type="text/css" rel="Stylesheet" href="css/ui-lightness/jquery-ui-1.8.14.custom.css">
	-->
	
	<script src="js/jquery-1.8.3.js" type="text/javascript"></script>	
	<script src="js/jquery-ui-1.10.0.custom.js" type="text/javascript"></script>
	<script src="js/jquery.fileUploader.js" type="text/javascript"></script>
	<script src="js/jqueryFileTree.js" type="text/javascript"></script>
	<script src="js/jquery.dropdownPlain.js" type="text/javascript" ></script>
			
	<script src="js/sha512.js" type="text/javascript"></script>
	<script src="js/hash.js" type="text/javascript"></script>
	<?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>

  </head>
  <body onload="xajax_lastReport()">
	<div style="margin:0 auto 0 auto; width:970px; background-image: url(img/006a.gif);">
		<div class="container" style="margin: 0 auto;">
	    	<div id="header" class="cabecera1">
	    		<div class="span-9" style="text-align:center;"><br/><img src="img/logo-minan-igp_2012.png"></div>
			
	    		<div class="span-11">&nbsp;</div>
	    		<div class="span-4 last"><img src="img/igp-trans.png"></div>				
					<div class="span-23 last" style="padding-top:12px; padding-left:20px;">
					<span style="float:left;"><img src="img/002.gif"></span>
					<span>
						<ul class="dropdown">
					       <li><a href="index.php">&nbsp;&nbsp;Inicio</a></li>
					       <li><a href="reportes.php">Reportes Anteriores</a>
					       </li>
                         </ul>
                    </span>
					<span style="float:left;"><img src="img/003.gif"></span>                    
					</div>
					<div style="ẗext-align:left; padding-left:20px; padding-top:5px; float:left"><img src="img/titulo.png"></div>			
                </div>


	      <hr class="space">
	      
	      <div id="indexContent" class="span-24">
		      <div id="divmain" class="span-16 prepend-1">
				<h2>Vigilancia Sísmica de Volcanes</h2>
				<p>El IGP vigila continuamente la actividad de los volcanes en el sur del Peru, es asi que el 22 de Febrero 2013 reporta la ocurrencia de 3 sismos de magnitudes 4.6, 5.2 y 5.0 ML en inmediaciones del volcán Sabancaya, en un lapso de solo 95 minutos, causando destrucción en Maca, poblado situado en el valle del Colca, a 20 km al NE del cráter. Inmediatamentente el IGP instala una red de estaciones sísmicas en las proximidades del volcan, y reporta a las autoridades de Defensa Civil la ocurrencia de cientos de sismos/día.</p>
				<img src="img/helli.gif">
		      </div>
	      
		      <div id="divright" class="span-6 last" style="text-align:left;">
		      		
					<div id="divCommentRight" style="font-size:14px;">
						<h6>Ultimos reportes</h6>
						<div id="divultimoreporte"></div>
						<h6>Sismogramas en tiempo real </h6>
						<p><a href="http://www.igp.gob.pe/vigilanciavolcanes/" target="_blank">Haga click aqu&iacute;</a></p>
						<h6>Trayectorias referenciales - Volcán Sabancaya</h6>
						<p><a href="http://www.met.igp.gob.pe/volcanes/" target="_blank">Haga click aqu&iacute;</a></p>
 
					</div>
		      </div>
		  </div>
		  
		  <div id="loginContent" class="span-22 prepend-1">
		  
		  </div>
		  
		  
		  <div id="projectContent" class="span-22 prepend-1">
				<div id="divListProject" class="span-22 last ddl-menu"></div>
				<form id="formUpdate">
			  		<div class="span-22 last" style="padding-top:10px;">
			  			<div id="divmenuCategory" class="ddl-menu-year"></div>
			  			<div id="divmenuSubcategory" class="ddl-menu"></div>
			  			<div id="divmenuData" class="ddl-menu"></div>
			  		</div>
			  		<div id="divactividadproducto" class="span-22 last" style="padding-top:10px;"></div>
		  		</form>
		  </div>

		  
	      
	      <div class="span-24 contenedor-pie">
	      	    <br>
				<p>Calle Badajoz # 169 - Mayorazgo IV Etapa - Ate Vitarte | Central Telefónica: 317-2300 |
				Escríbenos a: <a class="mostaza" href="mailto:web@igp.gob.pe">web@igp.gob.pe</a>
				</p>
				      
	      </div>
		</div>
	</div>
  </body>
</html>
<?php }} ?>