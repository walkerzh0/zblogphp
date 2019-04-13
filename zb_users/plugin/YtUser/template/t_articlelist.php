{* Template Name: 投稿列表*}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>投稿列表</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="{$host}zb_users/plugin/YtUser/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="{$host}zb_users/plugin/YtUser/layuiadmin/style/admin.css" media="all">
</head>
<body>
  
  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">投稿列表</div>
          <div class="layui-card-body">
            <table class="layui-table">
              <colgroup>
                <col width="150">
                <col>
                <col width="200">
                <col width="150">
              </colgroup>
              <thead>
                <tr>
                  <th>文章ID</th>
                  <th>文章标题</th>
                  <th>发布时间</th>
                  <th>发布状态</th>
                </tr> 
              </thead>
              <tbody>
              {foreach $articles as $article}
                <tr>
                  <td>{$article.ID}</td>
                  <td>{$article.Title}</td>
                  <td>{$article.Time()}</td>
                  <td>{if $article->Status==0}公开{/if}{if $article->Status==1}草稿{/if}{if $article->Status==2}审核{/if}</td>
                </tr>
                {/foreach}
              </tbody>
            </table>
            <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-2">{template:t_pagebar}</div>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <script src="{$host}zb_users/plugin/YtUser/layuiadmin/layui/layui.js"></script>  
  <script>
  layui.config({
    base: '{$host}zb_users/plugin/YtUser/layuiadmin/' //静态资源所在路径
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index']);
  </script>
</body>
</html>