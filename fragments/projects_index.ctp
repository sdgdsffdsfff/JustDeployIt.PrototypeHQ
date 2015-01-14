<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-projects-index'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>

<div class='container clearfix'>

    <div class='flash flash--notice'>
        <p class='flash__close'><a data-dismiss=".flash" data-method="post" href="/users/3471e5ea-a920-5641-1ed9-16609e345521/hide_notice" rel="nofollow" title="Hide this message">Hide</a></p>
        <p>Deploy 2.0 is coming...</p>
        <p>We've been hard at work on the latest version of Deploy. Read about it here <a href='http://blog.atechmedia.com/introducing-deploy-2-0/'>on our blog</a> or get involved in the <a href='https://{{current_account}}.beta.deployhq.com'>open beta</a>.</p>
    </div>
    <div class='box section section--first section--with-create'>
        <a class="button button--positive button--create section__create" href="/projects/new" title="Create a new project"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Welcome to Deploy!</h2>
            <p class='page-header__lead'>
                Create a project to start deploying your Git, Mercurial, and Subversion repositories directly to any of your FTP or SFTP servers.After creating your project, you'll need to configure the repository and server details.
            </p>
        </div>
    </div>
    <div class='section--first u-text-center'>
        <p class='first-project'>
            <img alt="Crate" class="large-icon u-margin-bottom" src="/assets/images/crate-19d6c1be00f83b61444752f5fe7ff6b1.svg" />
            <a class="button button--positive" href="/projects/new">Create your first project →</a>
        </p>
    </div>
</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
