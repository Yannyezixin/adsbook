<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <style type="text/css">
    body{
        padding:60px;
        background-color: #fff;
    }
    .nav{
        font-size:20px;
        color:#fff;
    }
    </style>
  </head>
    <body>
     <?php include $_SERVER['DOCUMENT_ROOT'].'/views/ads_nav_user.php';?>
     <div class="container">
      <div class="header2">
        <div class="row row-offcanvas row-offcanvas-right">
          <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
            <div class="panel-heading">
              <div class="page-header">
              <h1>ADS Book | <small> Change Yourself Information!</small></h1>
              </div>
            </div>
          <div class="panel-body">
	  <form action="" method="post">
          <div class="input-group userinput">
          <span class="input-group-addon " title="姓名"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="u_name" value="<?php if(isset($userdate['u_name'])) echo $userdate['u_name'];?>" disabled>
         </div>
 
	<div class="input-group userinput">
          <span class="input-group-addon" title="邮箱"><span class="glyphicon glyphicon-envelope"></span></span>
           <input type="text" class="form-control" name="u_email" value="<?php if(isset($userdate['u_email'])) echo $userdate['u_email'];?>">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="联系方式"><span class="glyphicon glyphicon-earphone"></span></span>
           <input type="text" class="form-control" name="u_phone" value="<?php if(isset($userdate['u_phone'])) echo $userdate['u_phone'];?>">
         </div>
          
 	 <div class="input-group userinput">
          <span class="input-group-addon" title="QQ"><span class="glyphicon glyphicon-globe"></span></span>
           <input type="text" class="form-control" name="u_qq" value="<?php if(isset($userdate['u_qq'])) echo $userdate['u_qq'];?>">
         </div>

         
         
         <div></div>
        <div class="userbutton">
         <button type="submit" class="btn btn-default btn-lg" name="usersave"><span class="glyphicon glyphicon-ok-sign"></span></button></div>
	</form>
        </div>
        </div>
	
  </div>
  </div>
    </body>
</html>
