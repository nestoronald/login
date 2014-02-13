<?php /* Smarty version Smarty-3.1.11, created on 2013-04-24 14:33:10
         compiled from "tpl/reportes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132249736951702a04ce8a65-50438862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af4259d20e69ef76c7f791361d14726f9b18a67' => 
    array (
      0 => 'tpl/reportes.tpl',
      1 => 1366831779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132249736951702a04ce8a65-50438862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51702a04d0be11_48603590',
  'variables' => 
  array (
    'xajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51702a04d0be11_48603590')) {function content_51702a04d0be11_48603590($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
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
	<link href="css/fileUploader.css" rel="stylesheet" type="text/css" /> 

	<link media="screen" type="text/css" rel="stylesheet" href="csstree/jqueryFileTree.css">
	<link media="screen" type="text/css" rel="stylesheet" href="css/fileTree.css">
	
	<script src="js/jquery-1.8.3.js" type="text/javascript"></script>	
	<script src="js/jquery-ui-1.10.0.custom.js" type="text/javascript"></script>

	<script src="js/jqueryFileTree.js" type="text/javascript"></script>
	<script src="js/jquery.dropdownPlain.js" type="text/javascript" ></script>
			
	<?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>

  </head>
  <body>
	<div style="margin:0 auto 0 auto; width:970px; background-image: url(img/006a.gif);">
		<div class="container" style="margin: 0 auto;">
	    	<div id="header" class="cabecera1">
	    		<div class="span-9" style="text-align:center;"><br/><img src="img/logo-minan-igp_2012.png"></div>
			
	    		<div class="span-11">&nbsp;</div>
	    		<div class="span-4 last"><img src="img/igp-trans.png"></div>
	    		
				<div class="span-24" style="padding-top:12px; padding-left:24px;">
					<span style="float:left;"><img src="img/002.gif"></span>
					<span>
					<ul class="dropdown">
				       <li><a href="index.php">&nbsp;&nbsp;Inicio</a></li>
				       <li><a href="reportes.php">Reportes Anteriores</a></li>
                     </ul>
                    </span>
                    <span style="float:left;"><img src="img/003.gif"></span>
				</div>
				<div style="ẗext-align:left; padding-left:20px; padding-top:5px; float:left"><img src="img/titulo.png"></div>
                </div>
	      <hr class="space">
	      
	      <div id="indexContent" class="span-24">
	      

      <div id="principal"  class="span-24"  style="background-color: #FFFFFF">
          
	    <div id="divarchive" class="span-8 prepend-1" style="background-color: #FFFFFF;">
	        <div style="font-size:16px; font-weight: bold; text-align:left;">Todos los reportes</div>
	        <div id="diviframe">
				<iframe width="100%" height="650px" frameborder="0" src="archives.html" id="frame_perfiles"></iframe>
			</div>	        
	    </div>
	    <div id="fotos" class="span-13 prepend-1" style="background-color: #FFFFFF;">
	    	<div style="padding:5px"><img style="padding:5px;border-width:1px; border-style:solid; border-color:#000; vertical-align:middle" src="img/misti.png" width="414px"></div>
			<div style="padding:5px"><img style="padding:5px;border-width:1px; border-style:solid; border-color:#000;" src="img/sabancaya.png" width="414px"></div>
			<div style="padding:5px"><img style="padding:5px;border-width:1px; border-style:solid; border-color:#000;" src="img/ubinas.png"></div>	    	    
	    </div>
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