<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
        <title>IGP - Biblioteca</title>
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
    <script type="text/javascript" src="js/sha512.js"></script>
    <script>
    function formhash(form, password) {
           // Create a new element input, this will be out hashed password field.
           var p = document.createElement("input");
           // Add the new element to our form.
           form.appendChild(p);
           p.name = "p";
           p.type = "hidden"
           p.value = hex_sha512(password.value);
           // Make sure the plaintext password doesn't get sent.
           password.value = "";
           // Finally submit the form.
           form.submit();
        }
    </script>
</head>
<body style="background-color: #dddddd;">



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
                    </ul>
                </div>
            </div>
		<div class="one-third column">
            <div id="login">
                <br>
                <h1>Biblioteca - IGP</h1>
                <h4 style="color:blue">Ingreso al sistema</h4>
                <br>
	            <div class="four columns alpha">

	                <form action="process_login.php" method="post" name="login_form">
	                 <label for="usuario">Usuario</label>
	                 <input type="text" id="user" name="user">
	                 <label for="clave">Clave</label>
	                 <input type="password" id="password" name="password">
	                 <button type="button" onclick="formhash(this.form, this.form.password);">Ingresar</button>
	                </form>
	            </div>
            </div>
		</div>
		<div class="one-third column">

			<div id="filetree">
			</div>

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