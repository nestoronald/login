<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>IGP - Sistema de informaci&oacute;n compartida</title>
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
            $('#filetree').fileTree({ root: './data/{$filetree}/' }, function(file) {
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
		<div class="one-third column">
		     <br>
			<h3>Usuario</h3>
            <h3 style="color:red">{$username}</h3>
		</div>
		<div class="one-third column">
		    <br>
                    <h3>Archivos</h3>
                    <p>Esta es la lista de archivos compartida por el administrador del area</p>
                    <div id="filetree">	</div>
                    <br>
		</div>
		<div class="one-third column">
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
</html>