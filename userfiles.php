<?php

require ("../class/dbconnect.php");
require ("../class/smarty/Smarty.class.php");
require ("../class/PasswordHash.php");
require ("../class/Security.php");
//require ("php_file_tree.php");

secure_session_start(); // Our custom secure way of starting a php session.
if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])){
    
    $smarty = new Smarty;
    //$smarty->assign("filetree",php_file_tree("data/".$_SESSION['username']."/", "[link]"));
    $smarty->assign("filetree",$_SESSION['username']);
    $smarty->assign("username",$_SESSION['username']);
    
    if  ($_SESSION['username']=="geodesia"){
        $smarty->display('tpl/useruploadfiles.tpl');
    }
    else{
        $smarty->display('tpl/userfiles.tpl');
    }
    
}


?>