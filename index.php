<?php
	require ('../class/dbconnect.php');
	require ('../class/smarty/Smarty.class.php');
	require ("../class/PasswordHash.php");

	function manageError(){

		if(isset($_GET["e"])){

			$t_hasher = new PasswordHash(8, FALSE);
			$hash = $_GET["e"];
			$check1 = $t_hasher->CheckPassword('loginfailed', $hash);
			$check2 = $t_hasher->CheckPassword('incorrectpost', $hash);
			$check3 = $t_hasher->CheckPassword('nosession', $hash);

			if ($check1){
				return "<div class=error>Usuario / Clave no validos</div>";
			}
			if ($check2){
				return "<div class=error>No se enviaron los datos necesarios</div>";
			}
			if ($check3){
				return "<div class=error>No ha iniciado sesión</div>";
			}
		}
		else{
			return "";
		}
	}

	$smarty = new Smarty;
	$smarty->display('tpl/index.tpl');

?>