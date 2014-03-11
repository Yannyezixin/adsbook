<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
/*
function __autoload($class_name){
    require_once $_SERVER['DOCUMENT_ROOT'].'/model/'.$class_name.'php';
}*/
//echo '123';
require_once($_SERVER['DOCUMENT_ROOT'] . '/model/user_model.php');
if(!empty($_POST)){
    $data = array('u_password' => $_POST['u_password'],
	    'u_name' => $_POST['u_name'],
	    'u_email' => $_POST['u_email'],
	    'u_phone' => $_POST['u_phone'],
	    'u_qq' => $_POST['u_qq']);
    $insert = new user_model();
    $error = $insert->insert($data);
    if(!empty($error)) echo $error;
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/controller/');
    exit();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/views/adsuser_sign.php';
