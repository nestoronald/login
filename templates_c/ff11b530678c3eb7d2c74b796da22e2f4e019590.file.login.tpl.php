<?php /* Smarty version Smarty-3.1.11, created on 2013-04-23 09:45:00
         compiled from "tpl/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188984760550ed85059af8f9-71231726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff11b530678c3eb7d2c74b796da22e2f4e019590' => 
    array (
      0 => 'tpl/login.tpl',
      1 => 1366668661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188984760550ed85059af8f9-71231726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50ed85059cbe81_34869005',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ed85059cbe81_34869005')) {function content_50ed85059cbe81_34869005($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
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

	<!-- elFinder CSS (REQUIRED) -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">
	
	<script src="js/jquery-1.8.3.js" type="text/javascript"></script>	
	<script src="js/jquery-ui-1.10.0.custom.js" type="text/javascript"></script>
	<script src="js/jquery.dropdownPlain.js" type="text/javascript" ></script>
	<script type="text/javascript" src="js/elfinder.min.js"></script>			
	<script src="js/sha512.js" type="text/javascript"></script>
	<script src="js/hash.js" type="text/javascript"></script>

  </head>
  <body>
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
	      <h2>Administrador de archivos</h2>
	      <div id="indexContent" class="span-24">
		      <div id="divmain" class="span-16 prepend-1">
				<img src="img/logo-igp-bn.png">
		      </div>
	      
		      <div id="divright" class="span-6 last" style="text-align:left;">
		      		
					<div id="divCommentRight" style="font-size:14px;">

						<div style="text-align:left; width:180px; float:right; margin-right:120px;" id="dialog-form">	
							   	<p class="validateTips"></p>
								<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

							    <form id="login_form" name="login_form" method="post" action="process_login.php">
							        <label for="name">Usuario</label>
							        <input type="text" name="user" id="user" class="text ui-widget-content ui-corner-all">
							        <label for="password">Contraseña</label>
							        <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
							        <hr class="space">
									<input type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="formhash(this.form, this.form.password);" value="Ingresar" style="float: right; ">
									<input type="hidden" name="p" id="p">
							    </form>
							</div>
					</div>
		      </div>
		  </div>
		  <div id="elfinder" style="font-size:14px;"></div>		  
	      
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