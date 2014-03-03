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
        html,body{font-size:12px;margin:0px;height:100%;}
        .mesWindow{border:#666 1px solid;background:#fff;}
        .mesWindowTop{border-bottom:#eee 1px solid;margin-left:4px;padding:3px;font-weight:bold;text-align:left;font-size:12px;}
        .mesWindowContent{margin:4px;font-size:12px;}
        .mesWindow .close{height:15px;width:28px;border:none;cursor:pointer;text-decoration:underline;background:#fff}
    </style>
    <script>
        var isIe=(document.all)?true:false;
        //设置select的可见状态
        function setSelectState(state)
        {
        var objl=document.getElementsByTagName('select');
        for(var i=0;i<objl.length;i++)
        {
        objl[i].style.visibility=state;
        }
        }
        function mousePosition(ev)
        {
        if(ev.pageX || ev.pageY)
        {
        return {x:ev.pageX, y:ev.pageY};
        }
        return {
        x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,y:ev.clientY + document.body.scrollTop - document.body.clientTop
        };
        }
        //弹出方法
        function showMessageBox(wTitle,content,pos,wWidth)
        {
        closeWindow();
        var bWidth=parseInt(document.documentElement.scrollWidth);
        var bHeight=parseInt(document.documentElement.scrollHeight);
        if(isIe){
        setSelectState('hidden');}
        var back=document.createElement("div");
        back.id="back";
        var styleStr="top:0px;left:0px;position:absolute;background:#666;width:"+bWidth+"px;height:"+bHeight+"px;";
        styleStr+=(isIe)?"filter:alpha(opacity=0);":"opacity:0;";
        back.style.cssText=styleStr;
        document.body.appendChild(back);
        showBackground(back,50);
        var mesW=document.createElement("div");
        mesW.id="mesWindow";
        mesW.className="mesWindow";
        mesW.innerHTML="<div class='mesWindowTop'><table width='100%' height='100%'><tr><td>"+wTitle+"</td><td style='width:1px;'><input type='button' onclick='closeWindow();' title='关闭窗口' class='close' value='×' /></td></tr></table></div><div class='mesWindowContent' id='mesWindowContent'>"+content+"</div><div class='mesWindowBottom'></div>";
        var v_top=(document.body.clientHeight-mesW.clientHeight)/2;
        v_top+=document.documentElement.scrollTop;
        styleStr="top:"+(v_top-180)+"px;left:"+(document.body.clientWidth/2-mesW.clientWidth/2)+"px;position:absolute;width:600px;margin-left:-300px;left:50%;z-index:9999;";
        mesW.style.cssText=styleStr;
        document.body.appendChild(mesW);
        }
        //让背景渐渐变暗
        function showBackground(obj,endInt)
        {
        if(isIe)
        {
        obj.filters.alpha.opacity+=5;
        if(obj.filters.alpha.opacity<endInt)
        {
        setTimeout(function(){showBackground(obj,endInt)},5);
        }
        }else{
        var al=parseFloat(obj.style.opacity);al+=0.05;
        obj.style.opacity=al;
        if(al<(endInt/100))
        {setTimeout(function(){showBackground(obj,endInt)},5);}
        }
        }
        //关闭窗口
        function closeWindow()
        {
        if(document.getElementById('back')!=null)
        {
        document.getElementById('back').parentNode.removeChild(document.getElementById('back'));
        }
        if(document.getElementById('mesWindow')!=null)
        {
        document.getElementById('mesWindow').parentNode.removeChild(document.getElementById('mesWindow'));
        }
        if(isIe){
        setSelectState('');}
        }
        //测试弹出
        function testMessageBox(ev)
        {
        var objPos = mousePosition(ev);
        messContent="<div style='padding:20px 0 20px 0;text-align:center'></div>";
        showMessageBox('添加联系人',messContent,objPos,350);
        }
        </script>
  </head>
  <body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/ads_nav_user.php';?>
<div class="container">
<div class="bs-example">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
          <div class="panel-heading-left">ADS Book--Manage My friend!--<a href="#" onclick="testMessageBox(event);">添加</a></div>
           <div class="row panel-heading-right">

        <div class="col-lg-3">

          <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">查找</button>
            </span>

          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->        </div>
       
         
        <!-- Table -->
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th>姓名</th>
              <th>生日</th>              
              <th>电话</th>
              <th>住址</th>
              <th>邮箱</th>
              <th>行业</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
            <tr>
              
              <td>Mark</td>
              <td>1994.14</td>
              <td>18826420127</td>
              <td>广州番禺区大学城外环路100号</td>
              <td>646840080@qq.com</td>
              <td>电视电子</td>
              <td>删除/编辑</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><html>


</html>
  </body>
</html>