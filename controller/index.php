<?php
/*
|-----------------------------
| adsbook首页以及用户首页的C
|-----------------------------
|
| 此controller控制：
|
|   用户是否登录，每执行一操作
|
|   取出当前用户所有的联系人数据
|
|   对当前用户的联系人信息进行添加
| 或修改：
|   需要：插入联系人信息，对应当前
| 用户的id;取出要修改的联系人的信息，
| 后重新update联系人的信息；
|
| 删除联系人的数据，get 一个联系人的id,
| 调用对象的一个删除方法；
|
|
|
|
*/
error_reporting(E_ALL);
ini_set('display_errors','on');

//require session_model 的函数块，用户检测登录和用户退出
require_once $_SERVER['DOCUMENT_ROOT'].'/model/session_model.php';

//require userindex_model的类，用户取出联系人，插入，修改，删除联系人
require_once $_SERVER['DOCUMENT_ROOT'].'/model/userindex_model.php';

//require user_model的类，取出用户信息，进行修改
require_once $_SERVER['DOCUMENT_ROOT'].'/model/user_model.php';

//reuire excel_model的类，对当前用户的所有联系人的信息进行导出为excel格式
require_once $_SERVER['DOCUMENT_ROOT'].'/model/excel_model.php';
 //检测后台用户登陆
if(!userIsLoggedIn()){
        //无登录显示登录首页
	include $_SERVER['DOCUMENT_ROOT'].'/views/adslogin_sign.php';
        exit();
}


$friend = new userindex_model();

//取出当前用户的id
$row = $friend->select_userid($_SESSION['name']);

if(isset($_POST['search'])){
  $_POST['cms'] = '%'.$_POST['cms'].'%';
  $datas = $friend->search_fri($_POST['cms'],$row[0]);
}
else
//调用$friend对象的select_fri方法，即取出当前用户的联系人
$datas = $friend->select_fri('');


if(isset($_POST['edit_id'])){
  //取出对应的联系的信息
  if(isset($_POST['edit_id'])) $fri_data = $friend->select_fri($_POST['edit_id']);
  //echo json_encode($fri_data);
	echo $fri_data['f_name'];
  exit();
  //require_once $_SERVER['DOCUMENT_ROOT'].'/views/add_edit.php';
  //exit();
}
//添加联系人
if(isset($_POST['insert_update'])){
  $data = array(
             'f_name' => $_POST['f_name'],
             'f_date' => $_POST['f_date'],
             'f_phone' => $_POST['f_phone'],
             'f_email' => $_POST['f_email'],
             'f_work' => $_POST['f_work'],
             'f_address' => $_POST['f_address']);
  //var_dump($data);
  if($_POST['fri_id']) $friend->insert_update_fri($data," WHERE fri_id = {$_POST['fri_id']}",$row[0]);
  else $friend->insert_update_fri($data,'',$row[0]);
  header('Location: http://'.$_SERVER['HTTP_HOST'].'/controller');
}

//对用户的联系人信息进行导出
if(isset($_GET['excel_out'])){
    $excel = new excel_model();
    $excel->excel_out($row[0]);
    exit();
}
if(isset($_POST['frm1'])){
   $excel = new excel_model();
   $excel->excel_in($row[0]);
   exit();
}


//删除联系人
if(isset($_GET['fri_id'])){
  $fri_id = $_GET['fri_id'];
  $friend->delete_fri($fri_id);
  header('Location: http://'.$_SERVER['HTTP_HOST'].'/controller');
}

//加载view,用户的页面；
require_once $_SERVER['DOCUMENT_ROOT'].'/views/adsuser_index.php';

