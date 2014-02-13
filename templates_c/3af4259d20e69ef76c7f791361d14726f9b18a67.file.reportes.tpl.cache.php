<?php /* Smarty version Smarty-3.1.11, created on 2013-04-12 10:15:13
         compiled from "tpl/reportes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12740474265166eafaa5a2a4-95284843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af4259d20e69ef76c7f791361d14726f9b18a67' => 
    array (
      0 => 'tpl/reportes.tpl',
      1 => 1365779707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12740474265166eafaa5a2a4-95284843',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5166eafaa87de2_85746120',
  'variables' => 
  array (
    'xajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5166eafaa87de2_85746120')) {function content_5166eafaa87de2_85746120($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
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
	<script>

	$(function() {
		$( "#datefrom" ).datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			numberOfMonths: 1,
			onClose: function( selectedDate ) {
			$( "#dateto" ).datepicker( "option", "minDate", selectedDate );
			}
		});
		$( "#dateto" ).datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			numberOfMonths: 1,
			onClose: function( selectedDate ) {
			$( "#datefrom" ).datepicker( "option", "maxDate", selectedDate );
			}
		});
	}); 	
	</script>
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
				       <li><a href="index.php">&nbsp;&nbsp;Inicio</a></li>
				       <li><a href="reportes.php">Reportes Anteriores</a></li>
                     </ul>
                    </span>
                     <span style="float:right;"><img src="img/003b.gif"></span>
				</div>
                </div>
				<div style="background-color:#C48118; text-align:left; border-bottom: 1px solid #C48118; border-top: 1px solid #C48118; color:#FFFFFF; font-weight:bold; font-size:24px; padding-left:10px;">
					Reportes Vulcanol&oacute;gicos
             	</div>			
	      <hr class="space">
	      
	      <div id="indexContent" class="span-24">
	      

      <div id="principal"  class="span-24"  style="background-color: #FFFFFF">
          
	    <div id="divarchive" class="span-7 prepend-1" style="background-color: #FFFFFF;">
	        <div style="font-size:16px; font-weight: bold; text-align:left;">Todos los reportes</div>
	        <div id="diviframe">
				<iframe width="100%" height="500px" frameborder="0" src="archives.html" id="frame_perfiles"></iframe>
			</div>	        
	    </div>      
<!--       
    <div id="divform" class="span-11 last"  style="background-color: #FFFFFF;">
        <div style="font-size:16px; font-weight: bold; text-align:left;">B&uacute;squeda por fechas</div>
        <div style="text-align:left;">
        <form name="formSearch" id="formSearch">
			<label for="datefrom">Volc&aacute;n</label>
            <select id="volcan" name="volcan">
                <option value="mi">Misti</option>
                <option value="fotolaguna">Sabancaya</option>
                <option value="precipitacion">Ubinas</option>
            </select><hr class="space">
				
	        <label for="datefrom">Desde</label>
	        <input style="width:100px" type="text" id="datefrom" name="datefrom" />
	        <label for="dateto">Hasta</label>
	        <input style="width:100px" type="text" id="dateto" name="dateto" />                        
	
	
	        <input type="button" value="Buscar" onclick="xajax_download(xajax.getFormValues('formSearch'))"    />
	
	
	        <div style="padding-top: 20px; font-weight: bold;">Resultados de la b&uacute;squeda:</div>
	
	        <div style="font-weight: bold" id="linkdownload"></div>
        </form>
        
        </div>
        
        <div id="divresult"></div>
    </div>
 -->

	      
	      
	      
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