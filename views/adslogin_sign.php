<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=decice-width,uer-scalable=no">
    <title>ADS book</title>
    <link rel="stylesheet" type="text/css" href="../css/mainstyle.css">
    <!--<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">-->
  </head>
  <body>
  	<div class="container">
      <div class="header"><b>ADS Book</b><hr />
        <b><p>Management or related
          Your friends, only one step!</p></b>
        </div>
  		<div class="sign-login">
		<form action="" method="post">
  			<div class="input"><b>User:</b><input type="text" name="name" placeholder="用户名"/></div>
  			<div class="input"><b>Passwd:</b><input type="password" name="password" placeholder="密码"></div>
  			<div id="login"><button type="submit" name="login"><b>Log In</b></button></div>
                        <!--<button type="submit" class="btn btn-default btn-lg" name="login"><span class="glyphicon glyphicon-log-in"></span></button>-->
		</form>
     		</div>
  	</div>
    <div class="sign"><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/controller/usersignup.php"><b>Sigu Up for ADS book</b></a></div>
  </body>
</html>
