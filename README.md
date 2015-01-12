# JustDeployIt功能原型页面 #

> 基于[DeployHQ2.0 Beta][1]制作

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


[1]: https://treetree.beta.deployhq.com/login