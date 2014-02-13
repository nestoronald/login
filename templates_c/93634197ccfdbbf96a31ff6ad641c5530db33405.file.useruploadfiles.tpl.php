<?php /* Smarty version Smarty-3.1.11, created on 2014-01-15 17:11:21
         compiled from "tpl/useruploadfiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39083371052618d89da72a4-19059248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93634197ccfdbbf96a31ff6ad641c5530db33405' => 
    array (
      0 => 'tpl/useruploadfiles.tpl',
      1 => 1389805876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39083371052618d89da72a4-19059248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52618d89dcfea5_47082671',
  'variables' => 
  array (
    'filetree' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52618d89dcfea5_47082671')) {function content_52618d89dcfea5_47082671($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>IGP - Web Shared</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
        
        <!-- elFinder CSS (REQUIRED) -->
        <link type="text/css" href="css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">
	
        
        <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
        <link href="stylesheets/default/default.css" rel="stylesheet" type="text/css" media="screen" />
    
        <script src="js/jquery-1.8.3.js" type="text/javascript"></script>
        <!--
        <script src="js/php_file_tree_jquery.js" type="text/javascript"></script>
        -->
        <script src="js/jqueryFileTree.js" type="text/javascript"></script>
        <link href="css/jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen" />
        
        <!-- elFinder JS (REQUIRED) -->
        <script type="text/javascript" src="js/elfinder.min.js"></script>
        <script src="js/jquery-ui-1.10.0.custom.js" type="text/javascript"></script>        
	<script type="text/javascript" charset="utf-8">
	$().ready(function() {
		var elf = $('#elfinder').elfinder({
			url : 'php/connector.php',	// connector URL (REQUIRED)
			contextmenu : {	navbar : [],cwd : [],files  : []},
			resizable : false,
            uiOptions : {
                    // toolbar configuration
                    toolbar : [
                            ['mkdir', 'upload'],
                            ['copy', 'cut', 'paste','download']
                    ],

                    // directories tree options
                    tree : {
                            // expand current root on init
                            openRootOnLoad : true,
                            // auto load current dir parents
                            syncTree : true
                    },

                    // navbar options
                    navbar : {
                            minWidth : 150,
                            maxWidth : 500
                    },

                    // current working directory options
                    cwd : {
                            // display parent directory in listing as ".."
                            oldSchool : false
                    }
            }
			//lang: 'ru'             // language (OPTIONAL)
		}).elfinder('instance');
	});
	
	</script>        
        
        <!--
        
        <script>  
  $(document).ready( function() {
    $('#filetree').fileTree({ root: './data/sismologia/' }, function(file) {
        //alert(file);
        window.location.href="file.php?url="+file;
    });
  });    
    </script>
        -->
        <script>
            function arbol(){
            $('#filetree').fileTree({ root: './data/<?php echo $_smarty_tpl->tpl_vars['filetree']->value;?>
/' }, function(file) {
                    //alert(file);
                    window.location.href="file.php?url="+file;
                });
            }
        </script>        
</head>
<body style="background-color: #dddddd;" onload="arbol()">



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container" style="margin:0 auto 0 auto; background-color: #ffffff;">
            	<div id="header">
                    <div class="six columns">
                        &nbsp;<img id="logo-minam-igp" width="300px" src="img/logo-minan-igp_2012.png">
                    </div>
                    <div class="seven columns">&nbsp;</div>
                    <div class="three columns">
                        <div id="logo-igp"></div>
                    </div>

                </div>
            <div id="menu-main">
                <div id="nav">
                    <ul style="float:right">
                           <li><a href="index.php">SALIR</a></li>
                    </ul>
                </div>
            </div>
		<div class="three columns">
		     <br>
			<h3>Usuario</h3>
            <h3 style="color:red"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
		</div>
		<div class="thirteen columns">
                     <div id="elfinder"></div>
		</div>

                <div id="igp-footer">
                    <div id="igp-footer-text">
                    Calle Badajoz # 169 - Mayorazgo IV Etapa - Ate Vitarte | Central Telefónica: 317-2300 |Escríbenos a: <a href="mailto:web@igp.gob.pe" class="mostaza">web@igp.gob.pe</a>
                    </div>
	      </div>
	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html><?php }} ?>