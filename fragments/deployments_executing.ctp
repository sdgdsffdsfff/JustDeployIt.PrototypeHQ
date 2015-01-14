<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-deployments-show'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed less than a minute ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/819e5750-f757-a617-c261-cd80f8612d15">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <p class='page-back'><a class="page-back__link" href="/projects/deepphpoop/deployments">&#8592; Back to list</a></p>
    <div class='section section--first box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Deployments</h2>
            <p class='page-header__lead'>
                The log below outlines all the stages which have been carried out for this deployment.
                The page will automatically update as the deployment is running.
            </p>
        </div>
    </div>
    <div class='flash flash--pending flash--spaced' data-status='pending' id='js-deployment-status'>
        <div class='js-status js-status--pending'>
            <h4>Please wait…</h4>
            <p>
                We're just waiting for some spare capacity on our servers to run your deployment.
                This doesn't usually take more than a few moments.
                This page will update automatically.
            </p>
            <p>
                <a class="button button--negative" confirm="Are you sure you want to abort this deployment?" data-method="post" href="/projects/deepphpoop/deployments/819e5750-f757-a617-c261-cd80f8612d15/abort" rel="nofollow">Abort Deployment</a>
            </p>
        </div>
        <div class='is-hidden js-status js-status--running'>
            <h4 class='flash__heading'>Deploying…</h4>
            <p>
                <a confirm="Are you sure you want to abort this deployment?" data-method="post" href="/projects/deepphpoop/deployments/819e5750-f757-a617-c261-cd80f8612d15/abort" rel="nofollow">Abort Deployment!</a>
            </p>
            <p>
                Your deployment is currently in progress.
                The deployment log below will update live to inform you of the progress.
                This box will turn green when the deployment has completed.
            </p>
        </div>
        <div class='is-hidden js-status js-status--completed'>
            <h4 class='flash__heading'>Deployment has finished successfully!</h4>
            <p>
                The deployment is now complete. All files were transferred successfully to your
                1 server.
            </p>
        </div>
        <div class='is-hidden js-status js-status--failed'>
            <h4 class='flash__heading'>Uh oh! Something went wrong with this deployment…</h4>
            <p>
                <a class="button" data-method="post" href="/projects/deepphpoop/deployments/819e5750-f757-a617-c261-cd80f8612d15/retry" rel="nofollow">Retry Deployment?</a>
            </p>
            <p>
                We're very sorry to report that something went wrong while trying to run your deployment.
                Please check the log below and contact <a href="mailto:support@deployhq.com">support@deployhq.com</a> if you need assistance.
            </p>
        </div>
    </div>

    <div class='is-hidden js-progress section--first'>
        <div class='log js-log-entries'>

        </div>
        <p class='u-text-center u-margin-top'>
            <a class="g-text-small g-text-info g-text-underlined js-show-log" href="#">Show full log...</a>
        </p>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
