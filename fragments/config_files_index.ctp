<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-config_files-index'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project hasn&rsquo;t been deployed yet. <a href="/projects/deepphpoop/deployments/new">Deploy now</a>.</p>
    </div>

</div>
<div class='container clearfix'>
    <div class="flash flash--spaced flash--success"><p>Config file has been added successfully!</p></div>
    <div class='section section--first section--with-create box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Config Files</h2>
            <p class='page-header__lead'>
                You can define a set of configuration files which you do not store in your repository but are required by your project (for example, database configuration files). These files will then be automatically uploaded whenever you deploy your project.
            </p>
        </div>
        <a class="button button--positive button--create section__create" href="/projects/deepphpoop/config_files/new" title="Create a new config file"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>
    </div>
    <div class='section section--first section--equal box'>
        <table class='table table--responsive'>
            <thead>
            <tr>
                <td>Path</td>
                <td>Size</td>
                <td>Servers</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class='g-text-subtle u-text-center' colspan='4'>You haven't added any config files for this project.</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
