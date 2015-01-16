# JustDeployIt功能原型页面 #

> 基于[DeployHQ2.0 Beta][1]制作

## 模拟数据及调用关系 ##

1. `projects/deepphpoop/depoloyments.js.html` ，供deployments_preview.html和deployments_executing.html调用
2. `projects/deepphpoop/resposity/commit_select.html`, 供deployments_new.html调用
3. `projects/deepphpoop/resposity/commit_info.html`, 供deployments_new.html调用，应该是默认填充最新的提交信息
3. `projects/deepphpoop/resposity/caching.html`, 供projects_caching_success.html调用
3. `projects/deepphpoop/resposity/edit.html`, 供projects_edit_without_repository.html调用
3. `projects/deepphpoop/resposity/repo_list.json`, 使用其它比如GITHUB托管服务，绑定后从github获取的代码库列表供选择。
3. `projects/deepphpoop/resposity/index_provider.html`, 使用其它比如GITHUB托管服务，绑定后从github获取的代码库列表供选择。
3. `projects/deepphpoop/deployments.rss`, 供deployments_index_list.html和公用HEAD区调用
4. `projects/index.json`，创建项目时，请求后台的数据返回
4. `projects/deepphpoop/repository/index.json`，创建项目时，请求后台的数据返回
5. `server_groups`，供servers_new.html和servers_edit.html调用
 1. `projects/deepphpoop/server_groups/index_empty.html`，无初始数据
 2. `projects/deepphpoop/server_groups/index.html`，有初始数据
 3. `projects/deepphpoop/server_groups/edit.html`，编辑server_groups的模拟数据
 4. `projects/deepphpoop/server_groups/new_reponse.json`，添加server_groups时调用，意在获取服务器创建出来的结果数据
7. `servers`，也是供servers_new.html和servers_edit.html调用
 1. `projects/deepphpoop/servers/new.html`，ftp类型的服务器
 2. `projects/deepphpoop/servers/new_ssh.html`，ssh类型的服务器
4. `deployments_poll.json`，供deployments_executing.html调用
3. `commands_line_response.html`，供commands_index_list.html调用

## 备忘 ##

1. 服务器隶属于组时，默认部署分支以组属性为主

2. 系统管理员同时具备管理用户的权限
3. 用户管理员只能管理其所在项目的用户分配
4. 超级管理员，只能创建、删除、修改用户，将用户设置到已有的项目。不能维护项目、不能进行发布。

1. 发布时必须要有服务器存在，否则直接进入添加服务器界面并提示

[1]: https://treetree.beta.deployhq.com/login