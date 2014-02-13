<?php

/* Este archivo contiene el procedimiento para realizar un login
 * de manera segura
 */

/* This file has the procedure to make a secure login
 */

require ("../class/dbconnect.php");
require ("../class/PasswordHash.php");
require ("../class/Security.php");

secure_session_start(); // Our custom secure way of starting a php session.

$t_hasher = new PasswordHash(8, FALSE);
$hash1 = $t_hasher->HashPassword("loginfailed");
$hash2 = $t_hasher->HashPassword("incorrectpost");

$dbh = conx("shared","wmaster","igpwmaster");

if(isset($_POST['user'], $_POST['p'])) {
	$user = $_POST['user'];
	$password = $_POST['p']; // The hashed password.
	if(login($user, $password, $dbh) == true) {
		// Login success
		header('Location: ./userfiles.php');
                //echo "0";
	} else {
		// Login failed
		header('Location: ./index.php?e='.$hash1);
                //echo "1";
		
	}
} else {
	// The correct POST variables were not sent to this page.
	header('Location: ./login.php?error='.$hash2);
        //echo "2";
}

?>