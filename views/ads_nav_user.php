  <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/controller" title="HOME"><span class="glyphicon glyphicon-home"></span> <b>  ADS Book<b></a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="httP://<?php echo $_SERVER['HTTP_HOST'];?>/controller/email" title="发邮件" ><span class="glyphicon glyphicon-envelope"></span></a>
        </li>
        <li>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/controller/?excel_out" title="导出为excel"><span class="glyphicon glyphicon-floppy-open"></span></a>
        </li>
        <li>
          <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/controller/?excel_in" title="excel导入"><span class="glyphicon glyphicon-floppy-save"></span></a>
        </li>
        <li><a href="" title="添加联系人" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/controller?logout" title="退出"><span class="glyphicon glyphicon-log-out"></span></a></li>
        <li>
          <a href="http://<?php echo $_SERVER['HTTP_HOST'].'/controller/user';?>" title="<?php echo $_SESSION['name'];?>"><span class="glyphicon glyphicon-user"></span></a>
        </li>
      </ul>
    </nav>
  </div>
</header>
