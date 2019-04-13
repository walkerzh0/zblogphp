<?php  /* Template Name: 发布投稿 */  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>发布投稿</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/plugin/YtUser/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/plugin/YtUser/layuiadmin/style/admin.css" media="all">
  <script src="<?php  echo $host;  ?>zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script>
  <script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
</head>
<body>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        
        <div class="layui-card">
          <div class="layui-card-header">发布投稿</div>
          <div class="layui-card-body">
            <form id="signup-form" class="layui-form" action="" lay-filter="component-form-element">
            <input id="edtID" name="ID" type="hidden" value="<?php  echo $user->ID;  ?>" />
            <input id="edtGuid" name="Guid" type="hidden" value="<?php  echo $user->Guid;  ?>" />
              <div class="layui-row layui-col-space10 layui-form-item">
                <div class="layui-col-lg12">
                  <label class="layui-form-label">标题：</label>
                  <div class="layui-input-block">
                    <input type="text" name="Alias" value="<?php  echo $user->StaticName;  ?>" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                  </div>
                </div>
                <div class="layui-col-lg12">
                  <label class="layui-form-label">分类：</label>
                  <div class="layui-input-block">
                  <div class="layui-col-md6">
                  <select name="city" lay-verify="">
                    <?php  echo Yt_Categories(0);  ?>
                  </select> 
                </div>


                  </div>
                </div>
              </div>
              <div class="layui-row layui-col-space10 layui-form-item">
                <div class="layui-col-lg12">
                  <label class="layui-form-label">内容：</label>
                  <div class="layui-input-block">
                    <?php  echo $article->UEditor;  ?>
                  </div>
                </div>

              </div>


            <div class="layui-form-item">
                <label class="layui-form-label">验证码：</label>
                <div class="layui-input-inline">
                    <input type="text" name="verifycode" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux"><?php  echo $article->verifycode;  ?></div>
            </div>

              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn" lay-submit lay-filter="component-form-element">立即提交</button>
                  <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="<?php  echo $host;  ?>zb_users/plugin/YtUser/layuiadmin/layui/layui.js"></script>  
  <script>
    var  basehost= '<?php  echo $host;  ?>'
    var  zbloghost= '<?php  echo $host;  ?>zb_users/plugin/YtUser/'
  layui.config({
    base: '<?php  echo $host;  ?>zb_users/plugin/YtUser/layuiadmin/'
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index', 'form'], function(){
    var $ = layui.$
    ,admin = layui.admin
    ,element = layui.element
    ,form = layui.form;
    form.render(null, 'component-form-element');
    element.render('breadcrumb', 'breadcrumb');
    form.on('submit(component-form-element)', function(data){
        admin.req({
        url: zbloghost + 'cmd.php?act=MemberPst&token=<?php  echo $zbp->GetToken();  ?>'
        ,type:'post'
        ,data:  $("#signup-form").serialize()
        ,done: function(res){
          layer.msg('修改成功', {
            offset: '15px'
            ,icon: 1
            ,time: 1000
          }, function(){
            location.href = '<?php  echo $host;  ?><?php  echo $zbp->Config('YtUser')->YtUser_User;  ?>';
          });
        },
        error:function(res){
            layer.msg($(res.responseText).find('member value string').text());
            $("#reg_verfiycode").attr("src",basehost+"zb_system/script/c_validcode.php?id=User&amp;tm="+Math.random());
        }
      });
      return false;

    });
  });
  </script>
</body>
</html>