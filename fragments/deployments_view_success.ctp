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
        <p>This project was last deployed about 4 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/6ac8f26c-17b6-8610-a1a5-8d6c240e3d0f">View details</a>.</p>
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
    <div class='flash flash--completed flash--spaced' data-status='completed' id='js-deployment-status'>
        <div class='is-hidden js-status js-status--pending'>
            <h4>Please wait…</h4>
            <p>
                We're just waiting for some spare capacity on our servers to run your deployment.
                This doesn't usually take more than a few moments.
                This page will update automatically.
            </p>
            <p>
                <a class="button button--negative" confirm="Are you sure you want to abort this deployment?" data-method="post" href="/projects/deepphpoop/deployments/6ac8f26c-17b6-8610-a1a5-8d6c240e3d0f/abort" rel="nofollow">Abort Deployment</a>
            </p>
        </div>
        <div class='is-hidden js-status js-status--running'>
            <h4 class='flash__heading'>Deploying…</h4>
            <p>
                <a confirm="Are you sure you want to abort this deployment?" data-method="post" href="/projects/deepphpoop/deployments/6ac8f26c-17b6-8610-a1a5-8d6c240e3d0f/abort" rel="nofollow">Abort Deployment!</a>
            </p>
            <p>
                Your deployment is currently in progress.
                The deployment log below will update live to inform you of the progress.
                This box will turn green when the deployment has completed.
            </p>
        </div>
        <div class='js-status js-status--completed'>
            <h4 class='flash__heading'>Deployment has finished successfully!</h4>
            <p>
                The deployment is now complete. All files were transferred successfully to your
                1 server.
            </p>
        </div>
        <div class='is-hidden js-status js-status--failed'>
            <h4 class='flash__heading'>Uh oh! Something went wrong with this deployment…</h4>
            <p>
                <a class="button" data-method="post" href="/projects/deepphpoop/deployments/6ac8f26c-17b6-8610-a1a5-8d6c240e3d0f/retry" rel="nofollow">Retry Deployment?</a>
            </p>
            <p>
                We're very sorry to report that something went wrong while trying to run your deployment.
                Please check the log below and contact <a href="mailto:support@deployhq.com">support@deployhq.com</a> if you need assistance.
            </p>
        </div>
    </div>

    <div class='section--first js-progress'>
        <div class='is-expanded js-log-entries log'>
            <div class='log-item log-item--success' id='603992293'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Deployment complete
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' id='603992290'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Notifying treetree1303@gmail.com
                    </p>
                </div>
            </div>
            <div class='log-item log-item--info' data-server='152206' id='603992287'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Disconnected from FTP server
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' data-server='152206' id='603992284'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Uploading deployment/deployment/config.ini
                    </p>
                </div>
            </div>
            <div class='log-item log-item--info' data-server='152206' id='603992281'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        1 config file(s) need to be uploaded
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' data-server='152206' id='603992278'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Excluding file README.md
                    </p>
                </div>
            </div>
            <div class='log-item log-item--info' data-server='152206' id='603992275'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        1 file(s) have been changed and will be uploaded
                    </p>
                </div>
            </div>
            <div class='log-item log-item--info' data-server='152206' id='603992272'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        0 file(s) are no longer required and will be removed
                    </p>
                </div>
            </div>
            <div class='log-item log-item--info' data-server='152206' id='603992269'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Connected to FTP server at f13-preview.royalwebhosting.net:21 (PASV)
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' data-server='152206' id='603992266'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Connecting to server at f13-preview.royalwebhosting.net:21 (PASV)
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' id='603992263'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Calculating changes required for deployment
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' id='603992260'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Repository update completed
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' id='603992257'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Updating cached repository from <a href="https://github.com/shukai0828/DeepPHPOOP/tree/master">https://github.com/shukai0828/DeepPHPOOP.git</a>
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' id='603992254'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Deployment started by shukai zhao
                    </p>
                </div>
            </div>
            <div class='log-item log-item--note' id='603992251'>
                <div class='log-item__inner'>
                    <p class='log-item__date g-text-micro'>11 Jan 08:49</p>
                    <p class='log-item__message'>
                        Beginning deployment from ffb12eca555d885e8f8892cdb7d842d8b7a3eaff to a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d (master)
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
