<?php
error_reporting(E_ALL);
ini_set('display_errors','on');
require_once $_SERVER['DOCUMENT_ROOT'].'/model/session_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/model/user_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/model/userindex_model.php';
if(!userIsLoggedIn()){
    include $_SERVER['DOCUMENT_ROOT'].'/views/adslogin_sign.php';
    exit();
}

//取出用户的id;
$friend = new userindex_model();
$row = $friend->select_userid($_SESSION['name']);
$user = new user_model();
$userdate = $user->select_user($row[0]);

if(isset($_POST['usersave'])){
    echo 'adfadfadf';
    $user_c_data = array(
        'u_email' => $_POST['u_email'],
        'u_phone' => $_POST['u_phone'],
        'u_qq' => $_POST['u_qq']);
    $user->update_user($user_c_data,' WHERE user_id = '.$row[0]);
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/controller/');
    exit();
}

require_once $_SERVER['DOCUMENT_ROOT'].'/views/ads_user_change.php';
