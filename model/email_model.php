<?php
   function email_model($to,$title,$body,$qqemail,$qqpassword){
    /*//Author:Jiucool WebSite: http://www.jiucool.com
    //$to 表示收件人地址 $subject 表示邮件标题 $body表示邮件正文
    //error_reporting(E_ALL);*/
    error_reporting(E_STRICT);
    /*date_default_timezone_set("Asia/Shanghai");//设定时区东八区*/
    require_once($_SERVER['DOCUMENT_ROOT'].'/Classes/email.class.php');
    /*include("class.smtp.php");
    $mail             = new PHPMailer(); //new一个PHPMailer对象出来
    $body             = eregi_replace("[\]",'',$body); //对邮件内容进行必要的过滤
    $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP(); // 设定使用SMTP服务
    $mail->SMTPDebug  = 1;                     // 启用SMTP调试功能
                                           // 1 = errors and messages
                                           // 2 = messages only
    $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
    $mail->SMTPSecure = "ssl";                 // 安全协议
    $mail->Host       = "smtp.qq.com";      // SMTP 服务器
    $mail->Port       = 465;                   // SMTP服务器的端口号
    $mail->Username   = $qqemail;  // SMTP服务器用户名
    $mail->Password   = $qqpassword;            // SMTP服务器密码
    $mail->SetFrom('发件人地址，如admin#jiucool.com #换成@', '发件人名称');
    $mail->AddReplyTo("邮件回复地址,如admin#jiucool.com #换成@","邮件回复人的名称");
    $mail->Subject    = $subject;
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer! - From www.jiucool.com"; // optional, comment out and test
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, "收件人名称");
    //$mail->AddAttachment("images/phpmailer.gif");      // attachment
    //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!恭喜，邮件发送成功！";
        }
    }*/
    //******************** 配置信息 ********************************
	$smtpserver = "smtp.qq.com";//SMTP服务器
	$smtpserverport =25;//SMTP服务器端口
	$smtpusermail = $qqemail;//SMTP服务器的用户邮箱
	$smtpemailtos = $to;//发送给谁
	$smtpuser = $qqemail;//SMTP服务器的用户帐号
	$smtppass = $qqpassword;//SMTP服务器的用户密码
	$mailtitle = $title;//邮件主题
	$mailcontent = $body;//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TYPETEXT为文本邮件
    //************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
   foreach($smtpemailtos as $smtpemailto){
    $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
		echo "<a href='http://{$_SERVER['HTTP_HOST']}/controller/email'>点此返回</a>";
		exit();
	}
	echo "恭喜！{$smtpemailto}邮件发送成功！！";
	echo "<a href='http://{$_SERVER['HTTP_HOST']}/controller/'>点此返回</a>";

	echo "</div>";


    }
    exit();
}

