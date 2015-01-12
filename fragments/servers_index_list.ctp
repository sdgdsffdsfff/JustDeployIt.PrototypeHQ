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
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 12 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>
    <div class="flash flash--spaced flash--success"><p>Server has been added successfully!</p></div>
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
                    <tr id='server-b44c0963-91af-651f-0810-8f9a26375277'>
                        <td class='table__label' data-column-label='Name'><a href="/projects/deepphpoop/servers/b44c0963-91af-651f-0810-8f9a26375277/edit">RoyalWebHosting</a></td>
                        <td class='table__label' data-column-label='Type'>FTP</td>
                        <td class='table__label' data-column-label='Endpoint'>f13-preview.royalwebhosting.net:21 (PASV)</td>
                        <td class='u-text-right table__actions'>
                            <input name='server_identifier[]' type='hidden' value='b44c0963-91af-651f-0810-8f9a26375277'>
                            <a href="/projects/deepphpoop/servers/b44c0963-91af-651f-0810-8f9a26375277/edit"><img alt="Edit" class="icon" src="/assets/images/icon-pencil-c3c83e027bd471c46571ffc8a6914974.svg" /></a>
                            <a confirm="Are you sure you wish to remove this server?" data-method="delete" href="/projects/deepphpoop/servers/b44c0963-91af-651f-0810-8f9a26375277" rel="nofollow"><img alt="Delete" class="icon" src="/assets/images/icon-trash-4d0e03bf959145d64a6c5a9905127c05.svg" /></a>
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
