<?php /* Smarty version Smarty-3.1.11, created on 2013-04-12 10:28:16
         compiled from "tpl/vigilanciavolcanes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112918328951682445755c61-19422012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae26b890b0bf5e37db33aed704dd1560d30a4961' => 
    array (
      0 => 'tpl/vigilanciavolcanes.tpl',
      1 => 1365780493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112918328951682445755c61-19422012',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_516824457849d4_27324294',
  'variables' => 
  array (
    'xajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516824457849d4_27324294')) {function content_516824457849d4_27324294($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>IGP-Vigilancia de volcanes del sur del Per&uacute;</title>

    <link rel="stylesheet" href="css/style_dropdowns.css" type="text/css" media="screen, projection"/>
    <!-- Framework CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
    
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	
	<link type="text/css" href="css/jquery-ui.css" rel="stylesheet">
	<link href="css/fileUploader.css" rel="stylesheet" type="text/css" /> 

	<link media="screen" type="text/css" rel="stylesheet" href="csstree/jqueryFileTree.css">
	<link media="screen" type="text/css" rel="stylesheet" href="css/fileTree.css">
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
  <body>
	<div style="margin:0 auto 0 auto; width:970px; background-image: url(img/006a.gif);">
		<div class="container" style="margin: 0 auto;">
	    	<div id="header" class="cabecera1">
	    		<div class="span-9" style="text-align:center;"><br/><img src="img/logo-minan-igp_2012.png"></div>
			
	    		<div class="span-11">&nbsp;</div>
	    		<div class="span-4 last"><img src="img/igp-trans.png"></div>				
					<div class="span-24">
					<span style="float:left;"><img src="img/002b.gif"></span>
					<span>
						<ul class="dropdown">
                        </ul>
                    </span>
					<span style="float:right;"><img src="img/003b.gif"></span>                    
					</div>
			
                </div>
				<div style="background-color:#C48118; text-align:left; border-bottom: 1px solid #C48118; border-top: 1px solid #C48118; color:#FFFFFF; font-weight:bold; font-size:24px; padding-left:10px;">
					Vigilancia Sísmica de los Volcanes del Sur
             	</div>			
	      <hr class="space">
	      
	      <div id="indexContent" class="span-24">
		      <div class="span-23 prepend-1 last">
				<span style="font-size:20px; text-align:right">Volcán Sabancaya</span>
				<img height="400px" src="img/helli.gif" style="vertical-align:middle;">
		      </div>
		      <hr>
		      <div class="span-23 prepend-1 last">
				<span style="font-size:20px; text-align:right">Volcán Misti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<img height="400px" src="img/helli.gif" style="vertical-align:middle;">
	      
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

		<div style="background-color: #EEEEEE" class="span-24">
	         <hr>
	         <div>
	         	<img style="vertical-align:text-top; padding: 0 20px 0 20px;" src="img/logo-igp.png" height="150px">
	            <img style="vertical-align:text-top; padding: 0 20px 0 20px;" src="img/logo-indeci.jpg" height="100px">
	            <img style="vertical-align:text-top; padding: 0 20px 0 20px;" src="img/logo-gore.jpg" height="150px">
	         
	         </div>
	         <hr class="space">
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