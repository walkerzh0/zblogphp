Z-BlogPHP是由Z-Blog社区提供的博客程序，一直致力于给国内用户提供优秀的博客写作体验。从2006年起发布第一版，至今已有11年的历史，是目前国内为数不多的持续提供更新的开源CMS系统之一。我们的目标是使用户沉浸于写作、记录生活，不需要关注繁琐的设置等，让用户专注于创作。对于用户而言，它简单易用，体积小，速度快，支持数据量大。对开发者而言，它又有着强大的可定制性、丰富的插件接口和独立的主题模板。期待Z-BlogPHP能成为您写博客的第一选择。

GitHub: https://github.com/zblogcn/zblogphp

=============================
          社区说明
=============================
1. 使用交流及开发建议，请转向：Z-Blog论坛 http://bbs.zblogcn.com/；
2. 开发文档，参看[Z-Wiki](http://wiki.zblogcn.com/doku.php?id=zblogphp)；
3. 提交功能BUG，请在论坛内，或直接在GitHub Issue内提交；
4. 欢迎Pull Request，如果你喜欢，请为我们点一个Star :)

=============================
          运行环境
=============================
- Web Server: IIS / Apache / nginx / Lighttpd / Kangle / Tengine / Caddy and so on...
- PHP 5.2 - 7.2 / HHVM 3 
- MySQL 5+ / MariaDB 10+ / SQLite 3

=============================
          安装说明
=============================
首先请确保网站目录拥有755权限。
1. 上传Z-BlogPHP程序到网站目录
2. 打开http://你的网站/，进入安装界面
3. 建立数据库
   - 选择MySQL数据库，请输入空间商为您提供的MySQL帐号密码等信息
   - 选择SQLite，请确保服务器支持SQLite，安装程序将在点击下一步后自动创建SQLite数据库文件
4. 填写你为站点设置的管理员账号密码，务必使用强口令账号
5. 点击下一步，安装成功，进入网站

=============================
          一键部署
=============================
对于非虚拟主机用户，推荐使用宝塔面板搭建PHP环境并部署Z-BlogPHP。2分钟装好面板，一键管理服务器。
安装宝塔面板：https://www.bt.cn/download/linux.html?z-blog
一键部署：https://www.bt.cn/bbs/thread-5443-1-1.html?z-blog


----------------------------------------------------------------------------------------------------
commit2:desciption:Install plugins/themes and test ok
****************************************************************************************************
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        modified:   zb_users/plugin/AppCentre/client.php
        modified:   zb_users/plugin/AppCentre/function.php
        modified:   zb_users/plugin/AppCentre/include.php
        modified:   zb_users/plugin/AppCentre/plugin.js.php
        modified:   zb_users/plugin/AppCentre/plugin.xml
        modified:   zb_users/plugin/AppCentre/security.php
        modified:   zb_users/plugin/AppCentre/theme.js.php

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        zb_users/cache/compiled/simples/
        zb_users/plugin/FY_Prettify/
        zb_users/plugin/IMAGE/
        zb_users/plugin/YtUser/
        zb_users/plugin/apost_free/
        zb_users/plugin/markdown/
        zb_users/theme/simples/

no changes added to commit (use "git add" and/or "git commit -a")
----------------------------------------------------------------------------------------------------
commit4:get struct of page in theme/template/index.php
****************************************************************************************************
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        modified:   readme.txt
        modified:   zb_users/theme/WhitePage/template/index.php
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        docs/
----------------------------------------------------------------------------------------------------
description:[code-highlight: create prjs] function ok, but need to add some files of language js
detail:
    renamed:    docs/white_index_struct_of_page.png -> workplaces/docs/white_index_struct_of_page.png
    new file:   workplaces/prjs/code-highlight/highlight/CHANGES.md
    new file:   workplaces/prjs/code-highlight/highlight/LICENSE
    new file:   workplaces/prjs/code-highlight/highlight/README.md
    new file:   workplaces/prjs/code-highlight/highlight/README.ru.md
    new file:   workplaces/prjs/code-highlight/highlight/highlight.pack.js
    new file:   workplaces/prjs/code-highlight/highlight/styles/a11y-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/a11y-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/agate.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/an-old-hope.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/androidstudio.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/arduino-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/arta.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/ascetic.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-cave-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-cave-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-dune-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-dune-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-estuary-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-estuary-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-forest-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-forest-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-heath-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-heath-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-lakeside-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-lakeside-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-plateau-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-plateau-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-savanna-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-savanna-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-seaside-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-seaside-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-sulphurpool-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atelier-sulphurpool-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atom-one-dark-reasonable.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atom-one-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/atom-one-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/brown-paper.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/brown-papersq.png
    new file:   workplaces/prjs/code-highlight/highlight/styles/codepen-embed.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/color-brewer.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/darcula.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/darkula.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/default.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/docco.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/dracula.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/far.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/foundation.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/github-gist.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/github.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/gml.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/googlecode.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/grayscale.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/gruvbox-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/gruvbox-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/hopscotch.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/hybrid.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/idea.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/ir-black.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/isbl-editor-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/isbl-editor-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/kimbie.dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/kimbie.light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/lightfair.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/magula.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/mono-blue.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/monokai-sublime.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/monokai.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/nord.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/obsidian.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/ocean.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/paraiso-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/paraiso-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/pojoaque.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/pojoaque.jpg
    new file:   workplaces/prjs/code-highlight/highlight/styles/purebasic.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/qtcreator_dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/qtcreator_light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/railscasts.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/rainbow.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/routeros.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/school-book.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/school-book.png
    new file:   workplaces/prjs/code-highlight/highlight/styles/shades-of-purple.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/solarized-dark.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/solarized-light.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/sunburst.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/tomorrow-night-blue.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/tomorrow-night-bright.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/tomorrow-night-eighties.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/tomorrow-night.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/tomorrow.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/vs.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/vs2015.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/xcode.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/xt256.css
    new file:   workplaces/prjs/code-highlight/highlight/styles/zenburn.css
    new file:   workplaces/prjs/code-highlight/test.html
----------------------------------------------------------------------------------------------------

