<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-config_files-new'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 16 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <form accept-charset="UTF-8" action="/projects/deepphpoop/config_files" class="new_config_file" id="new_config_file" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div><div class='content--constrained'>

        <div class='box section section--first'>
            <div class='page-header'>
                <h2 class='page-header__title g-heading-alpha'>New Config File</h2>
                <p class='page-header__lead'>
                    Use the form below to create a new configuration file which will be deployed to the appropriate servers whenever you deploy your application.
                </p>
            </div>
        </div>
        <div class='box section section--first section--skinny'>
            <h3 class='form-heading g-heading-beta'>Server Path</h3>
            <p class='form-paragraph'>If the folder doesn't exist, it will be created for you.</p>
            <div class='form-group'>
                <input class="form-control" id="config_file_path" name="config_file[path]" type="text" />
                <p class='form-hint'>
                    Enter the full path to the file starting from the root of deployed area. For example, if you wish to upload a file called <code>database.yml</code> into the <code>config</code> folder, just enter <code>config/database.yml</code>.
                </p>
            </div>
        </div>
        <div class='box section section--first section--skinny'>
            <h3 class='form-heading g-heading-beta'>Config File Contents</h3>
            <p class='form-paragraph'>In the field below, enter the full contents of the file which you wish to be uploaded when you deploy.</p>
            <div class='form-group form-group--coderay'>
                <div class='config-content'>
<textarea class="textarea g-text-code g-text-small" id="config_file_body" name="config_file[body]" rows="10">
</textarea>
                </div>
            </div>
            <h3 class='form-heading g-heading-beta'>Server(s)</h3>
            <p class='form-paragraph'>
                Select which servers you'd like this configuration file to be applied to.
                The file will only be copied to servers that you select below (or all if you select the top checkbox).
            </p>
            <ul class='checkbox-list'>
                <li class='checkbox-list__item checkbox-list__item--separated is-all-checkbox js-checkbox-container'>
                    <label class="form-checkbox" for="config_file_all_servers"><input checked="checked" class="form-checkbox__input is-toggle-hint js-checkbox-all" id="config_file_all_servers" name="config_file[all_servers]" type="checkbox" value="1" />
                        <span class='form-checkbox__text'>Upload to <strong>all</strong> servers</span>
                        <p class='form-hint g-text-positive animated fadeIn'>
                            This config file will automatically be uploaded to all current and future servers.
                        </p>
                    </label></li>
                <li class='checkbox-list__item'>
                    <label class="form-checkbox" for="server_b44c0963-91af-651f-0810-8f9a26375277"><input class="form-checkbox__input" id="server_b44c0963-91af-651f-0810-8f9a26375277" name="config_file[servers][]" type="checkbox" value="152206" />
                        <span class='form-checkbox__text'>RoyalWebHosting</span>
                    </label></li>
            </ul>

        </div>
        <div class='form-submit'>
            <button class="button button--positive" name="button" type="submit">Save Config File</button>
        </div>
    </div>
    </form>

    <div class='sidebar'>
        <div class='content-block'>
            <h4 class='g-heading-gamma'>Variables</h4>
            <p>You can use any of the variables below in your commands to insert the appropriate revision data:</p>
            <ul class='g-text-subtle'>
                <li>
                    <code>%path% &mdash;</code>
                    <span>Server path</span>
                </li>
                <li>
                    <code>%username% &mdash;</code>
                    <span>Server username</span>
                </li>
                <li>
                    <code>%environment% &mdash;</code>
                    <span>Server Environment (development, production etc.)</span>
                </li>
                <li>
                    <code>%password% &mdash;</code>
                    <span>The unencrypted password for your server</span>
                </li>
                <li>
                    <code>%startrev% &mdash;</code>
                    <span>Start revision ref</span>
                </li>
                <li>
                    <code>%endrev% &mdash;</code>
                    <span>End revision ref</span>
                </li>
                <li>
                    <code>%branch% &mdash;</code>
                    <span>The branch of this deployment</span>
                </li>
                <li>
                    <code>%count% &mdash;</code>
                    <span>Deployment count for this project</span>
                </li>
                <li>
                    <code>%groupindex% &mdash;</code>
                    <span>If in a server group, the order in which this server is deployed (zero-indexed)</span>
                </li>
            </ul>

        </div>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
