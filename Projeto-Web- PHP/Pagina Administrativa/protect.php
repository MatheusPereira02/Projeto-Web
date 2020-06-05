<?php

if(!function_exists("protect")){

   function protect(){

if(!isset($_SESSION))
session_start();


if(!isset($_SESSION['usuarioNiveisAcessoId']) ||!is_numeric($_SESSION['usuarioNiveisAcessoId'])){
header("Location: loginadm.php");
}
}
}
?>