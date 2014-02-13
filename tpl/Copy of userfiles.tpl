<!DOCTYPE html>
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

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link href="stylesheets/default/default.css" rel="stylesheet" type="text/css" media="screen" />    
    {$xajax}
    <script src="js/jquery-1.8.3.js" type="text/javascript"></script>
        
    
</head>
<body style="background-color: #dddddd;" onload="xajax_fileTree()">



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
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Portfolio</a></li>
                    </ul>
                </div>
            </div>
		<div class="one-third column">
			<h3>Ingreso al sistema</h3>
                        
                        <div class="four columns alpha">
                            <form>
                                    <label for="usuario">Usuario</label>
                                    <input type="text" id="usuario">
                                    <label for="clave">Clave</label>
                                    <input type="text" id="clave">
                                    <button type="submit">Ingresar</button>
                            </form>
                        </div>                        
                        
		</div>
		<div class="one-third column">
			<h3>Contenido</h3>
			<p>Recuerde que primero debe ingresar su usuario y clave para poder descargar</p>
			<ul class="square">
				<li><strong>A Responsive Grid Down To Mobile</strong>: Elegant scaling from a browser to tablets to mobile.</li>
				<li><strong>Fast to Start</strong>: It's a tool for rapid development with best practices</li>
				<li><strong>Style Agnostic</strong>: It provides the most basic, beautiful styles, but is meant to be overwritten.</li>
			</ul>
			
			<div id="filetree">
			</div>
			
		</div>
		<div class="one-third column">
			<h3>Archivos a subir</h3>
			<p>Solo para administradores del sistema</p>
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