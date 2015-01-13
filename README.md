# JustDeployIt功能原型页面 #

> 基于[DeployHQ2.0 Beta][1]制作

使用了自制的简单页面拼接工具，便于进行原子化的页面组装，提高效果预览的效率，降低修改成本。

## 模拟数据及调用关系 ##

1. `projects/deepphpoop/depoloyments.js.html` ，供deployments_preview.html和deployments_executing.html调用
2. `projects/deepphpoop/resposity/commit_select.html`, 供deployments_new.html调用
3. `projects/deepphpoop/resposity/latest_revision.html`, 供deployments_new.html调用
5. `server_groups`，供servers_new.html和servers_edit.html调用
 1. `projects/deepphpoop/server_groups/index_empty.html`，无初始数据
 2. `projects/deepphpoop/server_groups/index.html`，有初始数据
 3. `projects/deepphpoop/server_groups/edit.html`，编辑server_groups的模拟数据
 4. `projects/deepphpoop/server_groups/new_reponse`，添加server_groups时调用，未明用途
7. `servers`，也是供servers_new.html和servers_edit.html调用
 1. `projects/deepphpoop/servers/new.html`，ftp类型的服务器
 2. `projects/deepphpoop/servers/new_ssh.html`，ssh类型的服务器
4. `deployments_poll.json`，供deployments_executing.html调用
3. `commands_line_response.html`，供commands_index_list.html调用
4. `remote/user_data.js`，被remote.js脚本调用，获取用户详细信息

## TODO ##

1. remote.js, bar.css, 页面最底部的信息条
2. 跟remote.js有关的资源，icons等删除
2. 去除功能跳转见在url里出现的类似token的信息，同时参考deployments_exectued在js里的token变化时show full log不工作的因素
4. 功能和页面间的跳转衔接工作正常

## 注意事项 ##

1. 传递链接时，链接里类似GUID的字符串去除
2. 理解deployhq的JS机制
3. common_foot_js.ctp里，(App.Projects || App.Base)字符串中，Projects根据功能不同自动替换

[1]: https://treetree.beta.deployhq.com/login