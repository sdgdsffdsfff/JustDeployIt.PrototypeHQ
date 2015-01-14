<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-commands-index'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 18 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>
    <div class="flash flash--spaced flash--notice"><p>Command has been removed successfully</p></div>
    <div class='box section section--first'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>SSH Commands</h2>
            <p class='page-header__lead'>When you deploy your project to SSH servers, you can set up SSH commands to be executed at various points in your deployment process. The list below shows all the commands you currently have setup.</p>
        </div>
    </div>
    <div class='box section section--first section--skinny section--with-create'>
        <h3 class='form-heading g-heading-beta'>Before changes&hellip;</h3>
        <p class='form-paragraph'>Commands to be immediately executed once connected to the server, <em>before</em> any files are uploaded or removed.</p>
        <table class='table table--responsive u-margin-top form-group'>
            <thead>
            <tr>
                <td></td>
                <td class='table__column--fill'>Description</td>
                <td>Server(s)</td>
                <td>When?</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class='g-text-subtle u-text-center' colspan='5'>There are no commands in this group.</td>
            </tr>
            </tbody>
        </table>
        <a class="button button--positive button--create section__create" href="/projects/deepphpoop/commands/new?cback=before_changes"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>

    </div>
    <div class='box section section--first section--skinny section--with-create'>
        <h3 class='form-heading g-heading-beta'>After changes&hellip;</h3>
        <p class='form-paragraph'>Commands to be executed <em>after</em> repository/config files have been uploaded or removed from the server.</p>
        <table class='table table--responsive u-margin-top form-group'>
            <thead>
            <tr>
                <td></td>
                <td class='table__column--fill'>Description</td>
                <td>Server(s)</td>
                <td>When?</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class='g-text-subtle u-text-center' colspan='5'>There are no commands in this group.</td>
            </tr>
            </tbody>
        </table>
        <a class="button button--positive button--create section__create" href="/projects/deepphpoop/commands/new?cback=after_changes"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>

    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
