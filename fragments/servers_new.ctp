<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-servers-new'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project hasn&rsquo;t been deployed yet. <a href="/projects/deepphpoop/deployments/new">Deploy now</a>.</p>
    </div>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 13 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <div class='section section--first box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Add New Server</h2>
            <p class='page-header__lead'>You can add an unlimited number of servers to your project. Each server can represent a different role of your project (for example you may have production, staging and development servers). Simply configure the appropriate fields below, we will attempt to connect to your server to ensure everything is OK when you click &lsquo;Save&rsquo;.</p>
        </div>
    </div>
    <div class='content--constrained'>
        <form accept-charset="UTF-8" action="/projects/deepphpoop/servers" autocomplete="off" class="new_server" id="new_server" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
            <div class='section section--first section--skinny box'>
                <h3 class='form-heading form-heading--spaced g-heading-beta'>Choose Protocol</h3>
                <div class='form-group'>
                    <label class="form-label" for="server_name">Name</label>
                    <input class="form-control" id="server_name" name="server[name]" type="text" />
                </div>
                <div class='form-group'>
                    <label class="form-label" for="server_type">Protocol</label>
                    <div class='form-select'>
                        <select id="server_type" name="server[type]"><option value="">Select Protocol</option>
                            <option value="Servers::Ssh">SSH/SFTP</option>
                            <option value="Servers::Ftp">FTP</option>
                            <option value="Servers::S3">Amazon S3</option>
                            <option value="Servers::Rackspace">Rackspace Cloud Files</option></select>
                    </div>
                </div>
            </div>
            <div class='js-protocol-container'>
            </div>
            <div class='section section--first section--skinny box'>
                <h3 class='form-heading form-heading--spaced g-heading-beta'>Server Group</h3>
                <div class='form-group'>
                    <label class="form-label" for="server_server_group">Server Group</label>
                    <div class='form-select'><select id="server_server_group_identifier" name="server[server_group_identifier]"><option value="">Individual Servers</option>
                    </select></div>
                    <p class='form-hint'>
                        Select a group that this server will belong to. This server will then be deployed
                        simultaniously with the other servers in the group.
                        <a class="js-manage-server-groups" href="/projects/deepphpoop/server_groups">Manage Server Groups</a>.
                    </p>
                </div>
            </div>
            <div class='box is-hidden js-deployment-options section section--first section--skinny'>
                <h3 class='form-heading form-heading--spaced g-heading-beta'>Deployment Options</h3>
                <div class='form-group'>
                    <label class="form-label" for="server_notification_email">Notification email address</label>
                    <input class="form-control" id="server_notification_email" name="server[notification_email]" type="text" />
                    <p class='form-hint'>Leave blank to use project notification address.</p>
                </div>
                <div class='form-group'>
                    <label class="form-label" for="server_branch">Branch to deploy from</label>
                    <div class='form-select'>
                        <select id="server_branch" name="server[branch]"><option value="">Project default (master)</option>
                            <option value="dev_zsk">dev_zsk</option>
                            <option value="dev_zsk2">dev_zsk2</option>
                            <option value="master">master</option></select>
                    </div>
                </div>
                <div class='form-group'>
                    <label class="form-label" for="server_environment">Environment</label>
                    <input class="form-control" id="server_environment" name="server[environment]" type="text" />
                    <p class='form-hint'>Production, Testing, Development etc. can be substituted into SSH commands.</p>
                </div>
                <div class='form-group'>
                    <label class="form-label" for="server_root_path">Subdirectory to deploy from</label>
                    <input class="form-control" id="server_root_path" name="server[root_path]" type="text" />
                    <p class='form-hint'>
                        The subdirectory in your repository that you wish to deploy.
                        Leave blank to use the default specified in the project.
                    </p>
                </div>
            </div>
            <div class='form-submit'>
                <button class="button button--positive" name="button" type="submit">Save</button>
            </div>
        </form>


    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='sidebar__heading g-heading-gamma'>Firewall Access</h3>
            <p>To grant Deploy access to your servers, please allow the following IP ranges through your firewall:</p>
            <ul>
                <li>
                    <code>185.22.208.0/25</code>
                </li>
                <li>
                    <code>2a00:67a0:a:1::/64</code>
                </li>
            </ul>

            <h3 class='sidebar__heading g-heading-gamma'>Host Key Checking</h3>
            <p>
                Deploy will make a note of your server's host key when we first connected to it.
            </p>
            <p>
                If this changes in future you may need to reset your host key from the server edit page.
            </p>

        </div>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
