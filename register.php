<html>
    <meta charset="utf-8" />
	<link href="stylesheets/base.css" rel="stylesheet">
        <link href="stylesheets/skeleton.css" rel="stylesheet">
        <link href="stylesheets/layout.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<script type="text/javascript" src="js/sha512.js"></script>
	<script type="text/javascript">
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
	<body>
		<div style="width: 200px; text-align:left; margin-top:50px; margin-left:50px;">
			<form action="register.php" method="post" name="login_form">
			<label for="name">Usuario</label>
			<input type="text" id="user" name="user">
			<label for="password">Contraseña</label>
			<input type="password" value="" id="password" name="password">
			<input style="float: right; " type="button" value="Registrar" onclick="formhash(this.form, this.form.password);" />
			</form>
		</div>
	</body>
</html>

<?php

	require ("../class/dbconnect.php");

	if (isset($_POST["p"])){
		$username = $_POST["user"];
		$email = "rloyola@igp.gob.pe";
		// Create a random salt
		$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
		// Create salted password (Careful not to over season)
		$password = hash('sha512', $_POST["p"].$random_salt);

		// Add your insert to database script here.
		// Make sure you use prepared statements!
                $dbh = conx("shared","wmaster","igpwmaster");
		if ($insert_stmt = $dbh->prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)")) {
			// Execute the prepared query.
			$insert_stmt->execute(array( $username, $email, $password, $random_salt));
		}
	}
?>