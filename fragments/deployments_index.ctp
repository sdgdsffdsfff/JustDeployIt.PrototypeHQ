<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-deployments-index'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project hasn&rsquo;t been deployed yet. <a href="/projects/deepphpoop/deployments/new">Deploy now</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <div class='section section--first section--with-create box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>DeepPHPOOP: Deployments</h2>
            <p class='page-header__lead'>
                To deploy this application again, click the button on the right.
                To view the appropriate commits or comparisons in your source control service just click commit reference.
                Click on the date to view details of the deployment.
            </p>
        </div>
        <a class="button button--positive button--create section__create" href="/projects/deepphpoop/deployments/new" title="Deploy this project now"><img alt="Icon deploy" class="button__icon" src="/assets/images/icon-deploy-1d7c9b0fa9060ac75428ef942562ad49.svg" /></a>
    </div>

    <div class='section section--first section--skinny box'>
        <table class='table table--responsive'>
            <thead>
            <tr>
                <td>Date/Time</td>
                <td class='table__column--fill'>Server/Group</td>
                <td>Status</td>
                <td>From</td>
                <td>To</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class='u-text-center g-text-subtle' colspan='5'>This project hasn&rsquo;t been deployed yet.</td>
            </tr>
            </tbody>
        </table>
        <p class='u-margin-top u-text-right'>
            <a class="g-text-info text--small u-text-link" href="/projects/deepphpoop/deployments.rss?token=u2c0ljxymnztvid2l99yx0wbogc8g3the4e3tkr7">RSS Feed</a>
        </p>
    </div>


</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
