<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-notifications-index'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 18 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <div class='section section--first section--with-create box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Notifications</h2>
            <p class='page-header__lead'>
                You can add notifications here which will automatically alert third-party services about your deployment each time you deploy your project.
            </p>
        </div>
        <a class="button button--positive button--create section__create" href="/projects/deepphpoop/notifications/new" title="Configure a new type of notification"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>
    </div>
    <div class='content--constrained'>
        <div class='section section--equal section--first box'>
            <table class='table table--responsive'>
                <thead>
                <tr>
                    <td>Description</td>
                    <td class='u-text-center'>Counter</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class='u-text-center g-text-subtle' colspan='3'>No notifications have been set up for this project.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='sidebar__heading g-heading-gamma'>Supported Services</h3>
            <h4><a class="text--info" href="http://www.codebasehq.com/">Codebase</a></h4>
            <p>You can make notifications to Codebase, the project management tool with built in repository hosting.</p>
            <h4><a class="text--info" href="http://www.hipchat.com/">Hipchat</a></h4>
            <p>Hipchat, the team collaboration chat system.</p>
            <h4><a class="text--info" href="http://www.flowdock.com/">Flowdock</a></h4>
            <p>Flowdock is a collaboration web app for technical teams.</p>
            <h4><a class="text--info" href="http://www.newrelic.com/">New Relic</a></h4>
            <p>New Relic allows you to profile the performance of your apps.</p>
            <h4><a class="text--info" href="https://slack.com/">Slack</a></h4>
            <p>Slack brings all your communication together in one place.</p>
            <h4>HTTP Post</h4>
            <p>Or your own services using HTTP Post notifications.</p>
        </div>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
