<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-deployments-create'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project hasn&rsquo;t been deployed yet. <a href="/projects/deepphpoop/deployments/new">Deploy now</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <div class='section section--first box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Preview Deployment</h2>
            <p class='page-header__lead'>
                The information below shows what would happen if you ran this deployment.
                If you're happy with this, just press 'Run Deployment' below otherwise press 'Go back to make changes' to make changes.
            </p>
        </div>
    </div>
    <div class='loading-block js-preview-loading'>
        <div class='section--first u-text-center'>
            <div class='first-project'>
                <img alt="Spinner Icon" class="large-icon u-margin-bottom" src="/assets/images/icon-spinner-b9e57ecb8e4afe0ea243a5a9cc699630.svg" />
                <div class='g-heading-gamma'>Please wait while your preview is generated&hellip;</div>
            </div>
        </div>
    </div>
    <div class='section section--first section--skinny box js-preview-container'>
        <h3 class='form-heading g-heading-beta'>Ready to go?</h3>
        <p class='form-paragraph'>
            If you're happy with the information outlined above, just hit the "Run Deployment" button or click "Go back to make changes" to make changes. Once you have approved the deployment you will not be able to cancel it through this system.
        </p>
        <form accept-charset="UTF-8" action="/projects/deepphpoop/deployments" class="new_deployment" id="new_deployment" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="q2fCH4M0FjDdtpSSQj3xONhD+YWdWZP1QZzNHL/e+NQ=" /></div><input id="deployment_start_revision" name="deployment[start_revision]" type="hidden" value="a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d" />
            <input id="deployment_end_revision" name="deployment[end_revision]" type="hidden" value="a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d" />
            <input id="deployment_server_id" name="deployment[server_id]" type="hidden" />
            <input id="deployment_parent_identifier" name="deployment[parent_identifier]" type="hidden" value="b44c0963-91af-651f-0810-8f9a26375277" />
            <input id="deployment_copy_config_files" name="deployment[copy_config_files]" type="hidden" value="1" />
            <input id="deployment_email_notify" name="deployment[email_notify]" type="hidden" value="0" />
            <input id="deployment_branch" name="deployment[branch]" type="hidden" value="master" />
            <button class="button button--positive u-margin-right" name="submit" type="submit">Run Deployment</button>
            <button class="button" name="edit" type="submit">Make Changes</button>
        </form>

    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
