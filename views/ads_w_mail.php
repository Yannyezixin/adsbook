<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ADS Mail</title>
  	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  	<style type="text/css">
  	body{
  		padding-top: 60px;
  		background-color: #fff;
  	}
    .nav{
        font-size: 20px;
        color: #fff;
        }
  	</style>

  </head>
  <body>
     <?php include $_SERVER['DOCUMENT_ROOT'].'/views/ads_nav_user.php';?>
      <div class="container">

            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="page-header">
                 <h1>ADS Book | <small> Send email to your friend!</small></h1>
                </div>
              </div>
            <div class="panel-body">
		<div class="row">
		   <div class="col-md-9">
		      <form action="" method="post"><hr/>
			<div class="input-group userinput">
			   <span class="input-group-addon" title="收件人"><span class="glyphicon glyphicon-send"></span></span>
			   <input type="text" class="form-control" name="email" placeholder="收件人" id="inputemail">
			 </div>
			<div class="input-group userinput">
			   <span class="input-group-addon" title="标题"><span class="glyphicon glyphicon-pencil"></span></span>
			   <input type="text" class="form-control" name="title" placeholder="标题">
			 </div>
			 <div>
				<textarea class="form-control" rows="20" placeholder="正文：有什么要说？" name="e_text"></textarea>
			 </div>
			 <hr />
			 <div class = 'col-md-3'>
				<input type="text" class="form-control" placeholder="QQ邮箱地址" title="确保你的QQ邮箱stmp以开启" name="qqemail">
			 </div>
			 <div class = 'col-md-3'>
				<input type="password" class="form-control" placeholder="QQ密码" title="通过QQ邮箱发送邮件" name="qqpassword">
			 </div>
			 <div class = 'col-md-3'>
				<button type="submit" class="btn btn-default" name="email_post">发送</button>
			 </div>

		   </div>
		   <div class=" col-md-3">
			<table class="table table-bordered">
			   <thead>
				<tr>
				   <th>姓名</th>
                   <th>邮箱</th>
                   <th><input type="checkbox" name="allcheck" onclick=""></th>
				</tr>
    		   </thead>
			   <tbody>
				<?php $id=0;$i=0; if(isset($datas)): ?>
				   <?php foreach($datas as $data): ?>
					<tr>
					    <td><?php echo $data['f_name']; ?></td>
                        <td id="email<?php  echo $id;?>"><?php echo $data['f_email'];?></td>
                        <td><input type="checkbox" name="checks[]" id="check<?php  echo $i;$i++;?>" onclick="document.getElementById('inputemail').value=document.getElementById('email<?php echo $id; $id++?>').innerText"         value="<?php echo $data['f_email'];?>"></td>
					</tr>
				   <?php endforeach; ?>
				<?php endif;?>
			   </tbody>
                </table>
            </form>
		   <div>
		</div>
            </div>
        </div>


  </body>
</html>
