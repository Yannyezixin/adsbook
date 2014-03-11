<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/email_model.php';
error_reporting(E_ALL);
ini_set('display_errors','on');

//require session_model 的函数块，用户检测登录和用户退出
require_once $_SERVER['DOCUMENT_ROOT'].'/model/session_model.php';
//require userindex_model的类，用户取出联系人，插入，修改，删除联系人
require_once $_SERVER['DOCUMENT_ROOT'].'/model/userindex_model.php';
 //检测后台用户登陆
if(!userIsLoggedIn()){
        //无登录显示登录首页
	include $_SERVER['DOCUMENT_ROOT'].'/views/adslogin_sign.php';
        exit();
}


$friend = new userindex_model();

//取出当前用户的id
$row = $friend->select_userid($_SESSION['name']);
//调用$friend对象的select_fri方法，即取出当前用户的联系人
$datas = $friend->select_fri('');
if(isset($_POST['email_post'])){
    //foreach($_POST['checks'] as $check){
        email_model($_POST['checks'],$_POST['title'],$_POST['e_text'],$_POST['qqemail'],$_POST['qqpassword']);
    //}
   header('Location: http://'.$_SERVER['HTTP_HOST'].'/controller/');
}




require_once $_SERVER['DOCUMENT_ROOT'].'/views/ads_w_mail.php';
