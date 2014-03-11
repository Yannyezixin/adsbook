<?php
function userIsLoggedIn()
{
	//检测是否有一个$_POST['action'] == login ,即用户是否提交了表单,没有则显示登陆页面
	if(isset($_POST['login']))
	{

		//若用户无录入信息便提交，则提醒再次输入
		if(!isset($_POST['name']) or $_POST['name'] == '' or !isset($_POST['password']) or $_POST['password'] == '')
		{
			$GLOBALS['loginError'] = 'Please fill in both fields';
			return FALSE;
		}

		//密码经过加密处理，加密盐
		$password = md5($_POST['password'].'adsbook'); 

		//假如检测到数据库中的author表中有改用户信息，则会话建立，存储用户信息
		//否则启动会话，并且清空用户信息
		if(databaseContainAuthors($_POST['name'],$password)) 
		{
			session_start();
			$_SESSION['loggedIn'] = TRUE;
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['password'] = $password;
			return TRUE;
		}
		else
		{
			session_start();
			unset($_SESSION['loggedIn']);
			unset($_SESSION['name']);
			unset($_SESSION['password']);
			$GLOBALS['loginError'] = 'The specified name  or password weas incorrect.';
			return FALSE;
		}
	}

	//检测到用户单击logout则，启动会话，清空会话内用户信息
	if(isset($_GET['logout']))
	{
		    session_start();
			unset($_SESSION['loggedIn']);
			unset($_SESSION['name']);
			unset($_SESSION['password']);
			header('Location: http://'.$_SERVER['HTTP_HOST'].'/controller');
			exit();
	}
	session_start();

	//检测是否有会话变量isset($_SESSION['loggedIn']，真则检查是否和数据库中的author表中的用户信息是否相同
	if(isset($_SESSION['loggedIn'])) 
	{
		return databaseContainAuthors($_SESSION['name'],$_SESSION['password']);
	}
}

function databaseContainAuthors($name,$password)
{
	include $_SERVER['DOCUMENT_ROOT'].'/model/db_model.php';

	//选择author表，并返回数值，即有用户信息时，$s > 0；
	try
	{
		$sql = 'SELECT COUNT(*) FROM ads_user WHERE u_name = :name AND u_password = :password';
		$s = $pdo->prepare($sql);
		$s->bindValue(':name',$name);
		$s->bindValue(':password',$password);
		$s->execute();
	}
	catch(PDOException $e)
	{
		$output = 'error searching for author.';
		echo $output;
		exit();
	}

	$row = $s->fetch();

	if($row[0] >0)
	{
		return TRUE;
	}
	else 
	{
		return FALSE;
	}
}
