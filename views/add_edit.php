<html>
  <head>
    <meta name="viewport" content="width=decice-width,uer-scalable=no">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style type="text/css">
    body{
      padding: 60px;
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
      <div class="header2">
        <div class="row row-offcanvas row-offcanvas-right">
          <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
            <div class="panel-heading">
              <div class="page-header">
              <h1>ADS Book | <small> Add your friend!</small></h1>
              </div>
            </div>
          <div class="panel-body">
	  <form action="http://<?php echo $_SERVER['HTTP_HOST'];?>/controller/" method="post">
          <div class="input-group userinput">
          <span class="input-group-addon " title="姓名"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="f_name" value="<?php if(isset($fri_data['f_name'])) echo $fri_data['f_name'];?>">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="出生日期"><span class="glyphicon glyphicon-bold"></span></span>
           <input type="text" class="form-control" name="f_date" value="<?php if(isset($fri_data['f_date'])) echo $fri_data['f_date'];?>">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="联系方式"><span class="glyphicon glyphicon-earphone"></span></span>
           <input type="text" class="form-control" name="f_phone" value="<?php if(isset($fri_data['f_date'])) echo $fri_data['f_date'];?>">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="住址"><span class="glyphicon glyphicon-map-marker"></span></span>
           <input type="text" class="form-control" name="f_address" value="<?php if(isset($fri_data['f_address'])) echo $fri_data['f_address'];?>">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="邮箱"><span class="glyphicon glyphicon-envelope"></span></span>
           <input type="text" class="form-control" name="f_email" value="<?php if(isset($fri_data['f_email'])) echo $fri_data['f_email'];?>">
         </div>
         <div class="input-group userinput">
          <span class="input-group-addon" title="行业"><span class="glyphicon glyphicon-briefcase"></span></span>
           <input type="text" class="form-control" name="f_work" value="<?php if(isset($fri_data['f_work'])) echo $fri_data['f_work'];?>">
         </div>
         <div></div>
        <div class="userbutton">
         <input type="hidden" name="fri_id" value="<?php if(isset($fri_data['fri_id'])) echo $fri_data['fri_id'];?>">
         <button type="submit" class="btn btn-default btn-lg" name="insert_update"><span class="glyphicon glyphicon-ok-sign"></span></button></div>
	</form>
        </div>
        </div>
	
  </div>
  </div>
  </body>
</html>
