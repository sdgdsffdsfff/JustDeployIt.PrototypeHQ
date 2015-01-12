<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-servers-index'>
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
            <h2 class='page-header__title g-heading-alpha'>Servers</h2>
            <p class='page-header__lead'>
                The list below shows all the servers which are configured for this project.
            </p>
        </div>
        <a class="button button--positive button--create section__create" href="/projects/deepphpoop/servers/new" title="New Server"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>
    </div>
    <div class='content--constrained'>
        <div class='box section section--first section--skinny'>
            <h3 class='g-heading-beta'>Individual Servers</h3>
            <div class='u-margin-top form-group'>
                <table class='table table--responsive'>
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Type</td>
                        <td>Endpoint</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class='u-text-center g-text-subtle' colspan='4'>
                            You haven't added any servers yet. <a href="/projects/deepphpoop/servers/new">Add one now</a>.
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='sidebar__heading g-heading-gamma'>Automatic Deployment</h3>
            <p>You can enable automatic deployment from Github or Codebase &mdash; simply edit any server to view the appropriate hook URL.</p>
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

        </div>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
