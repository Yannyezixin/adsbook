<html>
  <head>
    <meta name="viewport" content="width=decice-width,uer-scalable=no">
    <title>Sign Up</title>
    <script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
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
<div class="bs-example">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
          <div class="panel-heading-left">ADS Book--Manage My friend!</div>
           <div class="row panel-heading-right">

        <div class="col-lg-3">

          <form action="" method="post">
          <div class="input-group">
            <input type="text" class="form-control" name="cms">
            <span class="input-group-btn">
              <button class="btn btn-default " type="submit" name="search" title="查找"> <span class="glyphicon glyphicon-search"></span> .</button>
            </span>

          </div><!-- /input-group -->
          </form>

        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->        </div>


        <!-- Table -->
        <table class="table table-hover">
          <thead>
            <tr>

              <th title="姓名"><span class="glyphicon glyphicon-user"></span></th>
              <th title="出生日期"><span class="glyphicon glyphicon-bold"></span></th>
              <th title="联系方式"><span class="glyphicon glyphicon-earphone"></span></th>
              <th title="住址"><span class="glyphicon glyphicon-map-marker"></span></th>
              <th title="邮箱"><span class="glyphicon glyphicon-envelope"></span></th>
              <th title="行业"><span class="glyphicon glyphicon-briefcase"></span></th>
              <th title="操作"><span class="glyphicon glyphicon-wrench"></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            </tr>
            <?php $i=0; if(isset($datas)): ?>
            <?php foreach($datas as $data): ?>
            <tr>
              <td id="f_name<?php echo $i;?>"><?php echo $data['f_name']; ?></td>
              <td id="f_date<?php echo $i;?>"><?php echo $data['f_date']; ?></td>
              <td id="f_phone<?php echo $i;?>"><?php echo $data['f_phone']; ?></td>
              <td id="f_address<?php echo $i;?>"><?php echo $data['f_address']; ?></td>
              <td id="f_email<?php echo $i;?>"><?php echo $data['f_email']; ?></td>
              <td id="f_work<?php echo $i;?>"><?php echo $data['f_work']; ?></td>
              <td><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/controller?fri_id='.$data['fri_id'];?>" title="删除"> <span class="glyphicon glyphicon-trash"></span></a>/
                  <a href="" title="编辑" onclick="
	document.getElementById('f_name').value = document.getElementById('f_name<?php echo $i;?>').innerHTML;
	document.getElementById('f_date').value = document.getElementById('f_date<?php echo $i;?>').innerHTML;
	document.getElementById('f_phone').value = document.getElementById('f_phone<?php echo $i;?>').innerHTML;
	document.getElementById('f_address').value = document.getElementById('f_address<?php echo $i;?>').innerHTML;
	document.getElementById('f_email').value = document.getElementById('f_email<?php echo $i;?>').innerHTML;
	document.getElementById('f_work').value = document.getElementById('f_work<?php echo $i;?>').innerHTML;
	document.getElementById('fri_id').value = <?php echo $data['fri_id'];?>;"
	 data-toggle="modal" data-target="#myModal">
<span class="glyphicon glyphicon-pencil"></span></td>
            </tr>
            <?php $i++; endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form action="http://<?php echo $_SERVER['HTTP_HOST'];?>/controller/" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">ADS Book | Manage Your friend!</h4>
      </div>
      <div class="modal-body">

          <div class="input-group userinput">
          <span class="input-group-addon " title="姓名"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="f_name" id="f_name" >
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="出生日期"><span class="glyphicon glyphicon-bold"></span></span>
           <input type="text" class="form-control" name="f_date"  id="f_date">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="联系方式"><span class="glyphicon glyphicon-earphone"></span></span>
           <input type="text" class="form-control" name="f_phone" id="f_phone">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="住址"><span class="glyphicon glyphicon-map-marker"></span></span>
           <input type="text" class="form-control" name="f_address" id="f_address">
         </div>

         <div class="input-group userinput">
          <span class="input-group-addon" title="邮箱"><span class="glyphicon glyphicon-envelope"></span></span>
           <input type="text" class="form-control" name="f_email" id="f_email">
         </div>
         <div class="input-group userinput">
          <span class="input-group-addon" title="行业"><span class="glyphicon glyphicon-briefcase"></span></span>
           <input type="text" class="form-control" name="f_work" id="f_work">
         </div>
         <div></div>
        <div class="userbutton">
         <input type="hidden" name="fri_id" id="fri_id">
         </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="insert_update"><span class="glyphicon glyphicon-ok-sign"></span></button>
      </div>
    </div><!-- /.modal-content -->
</form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script>
function edit_fri(id,fri_id){
	
}
</script>
</html>
  </body>
</html>
