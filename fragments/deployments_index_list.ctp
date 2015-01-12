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
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 11 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
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
            <tr class='is-status-completed'>
                <td class='table__label' data-column-label='Date/Time'><a class="u-text-link" href="/projects/deepphpoop/deployments/6ac8f26c-17b6-8610-a1a5-8d6c240e3d0f">11 Jan 2015 08:49</a></td>
                <td class='table__label' data-column-label='Server/Group'><a class="u-text-link" href="/projects/deepphpoop/servers/b9f12823-d554-8315-3307-02b09a3217f3/edit">TestingGroup</a></td>
                <td class='table__label' data-column-label='Status'><span class="action-status is-completed">Completed</span></td>
                <td class='table__label' data-column-label='From'>
                    <a class="commit-link" href="https://github.com/shukai0828/DeepPHPOOP/commit/ffb12eca555d885e8f8892cdb7d842d8b7a3eaff" rel="external" title="ffb12eca555d885e8f8892cdb7d842d8b7a3eaff">ffb12e</a>
                </td>
                <td class='table__label' data-column-label='To'><a class="commit-link" href="https://github.com/shukai0828/DeepPHPOOP/commit/a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d" rel="external" title="a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d">a04971</a> </td>
            </tr>
            <tr class='is-status-failed'>
                <td class='table__label' data-column-label='Date/Time'><a class="u-text-link" href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">10 Jan 2015 13:57</a></td>
                <td class='table__label' data-column-label='Server/Group'><a class="u-text-link" href="/projects/deepphpoop/servers/b44c0963-91af-651f-0810-8f9a26375277/edit">RoyalWebHosting</a></td>
                <td class='table__label' data-column-label='Status'><span class="action-status is-failed">Failed</span></td>
                <td class='table__label' data-column-label='From'>
                    N/A
                </td>
                <td class='table__label' data-column-label='To'><a class="commit-link" href="https://github.com/shukai0828/DeepPHPOOP/commit/a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d" rel="external" title="a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d">a04971</a> </td>
            </tr>
            <tr class='is-status-failed'>
                <td class='table__label' data-column-label='Date/Time'><a class="u-text-link" href="/projects/deepphpoop/deployments/819e5750-f757-a617-c261-cd80f8612d15">10 Jan 2015 13:38</a></td>
                <td class='table__label' data-column-label='Server/Group'><a class="u-text-link" href="/projects/deepphpoop/servers/b44c0963-91af-651f-0810-8f9a26375277/edit">RoyalWebHosting</a></td>
                <td class='table__label' data-column-label='Status'><span class="action-status is-failed">Failed</span></td>
                <td class='table__label' data-column-label='From'>
                    <a class="commit-link" href="https://github.com/shukai0828/DeepPHPOOP/commit/1f34bf3f8a1f3e3307214f4b8b1df3ecf5a87671" rel="external" title="1f34bf3f8a1f3e3307214f4b8b1df3ecf5a87671">1f34bf</a>
                </td>
                <td class='table__label' data-column-label='To'><a class="commit-link" href="https://github.com/shukai0828/DeepPHPOOP/commit/a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d" rel="external" title="a04971d1dd5924b5d0bc71de2ab9d2e31f46ff9d">a04971</a> </td>
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
