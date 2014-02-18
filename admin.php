<?php
    require ('../class/dbconnect.php');
    require ('../class/smarty/Smarty.class.php');
    require ("../class/PasswordHash.php");

    // secure_session_start();
    // function validar_vacio(){
    //     if (isset($_POST["user"])) {
    //         if (empty(trim($_POST["user"]))) {
    //             return true;
    //         }
    //     }
    // }
    function manageError(){

        $message="";
        if(isset($_GET["e"])){

                $t_hasher = new PasswordHash(8, FALSE);
                $hash = $_GET["e"];
                // $check = validar_vacio();
                $check0 = $t_hasher->CheckPassword('passchanged', $hash);
                $check1 = $t_hasher->CheckPassword('loginfailed', $hash);
                $check2 = $t_hasher->CheckPassword('incorrectpost', $hash);
                $check3 = $t_hasher->CheckPassword('nosession', $hash);
                // if ($check) {
                //     $message= "<div class='error'>Usuario no debe de estar vacio</div>";
                // }
                if ($check1){
                        $message= "<div class='error'>Usuario y/o correo,  ya están registrados</div>";
                }
                if ($check0){
                        $message= "<div class='notice'>Para completar el registro debe darle click al enlace de confirmación que se envió a su correo. </div>";
                }
                if ($check2){
                        $message= "<div class='error'>No se enviaron los datos necesarios</div>";
                }
                if ($check3){
                        $message= "<div class='error'>No ha iniciado sesión</div>";
                }
        }
        else{
                $message="";
        }

        return $message;
    }

	$smarty = new Smarty;
    $smarty->assign("message",  manageError());
	$smarty->display('tpl/admin.tpl');


?>

