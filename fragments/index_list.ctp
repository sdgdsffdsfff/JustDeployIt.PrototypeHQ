<!DOCTYPE html>
<html lang='en'>
<head>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-dashboard-index'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>

<div class='container clearfix'>

    <div class='box section section--first'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Dashboard</h2>
            <p class='page-header__lead'>
                The dashboard shows the recent activity on your account along with a list of currently available projects.
            </p>
        </div>
    </div>
    <div class='content--constrained'>
        <div class='box section section--first section--skinny'>
            <h3 class='g-heading-beta'>Recent Activity</h3>
            <h4 class='g-heading-gamma feed-heading'>Today</h4>
            <ul class='feed layout-list'>
                <li class='feed-item feed-item--positive'>
                    <a class="feed-item__inner clearfix" href="/projects/deepphpoop/deployments/6ac8f26c-17b6-8610-a1a5-8d6c240e3d0f"><p class='feed-item__message'>
                        <span class='text--semibold'>shukai zhao</span>
                        deployed <mark class='g-text-code'>a04971d1</mark> to <em>RoyalWebHosting</em>
                    </p>
<span class='feed-item__project text--subtle text--italic' label='DeepPHPOOP'>
DeepPHPOOP
</span>
                    </a></li>
            </ul>
            <h4 class='g-heading-gamma feed-heading'>Yesterday</h4>
            <ul class='feed layout-list'>
                <li class='feed-item feed-item--negative'>
                    <a class="feed-item__inner clearfix" href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099"><p class='feed-item__message'>
                        <span class='text--semibold'>shukai zhao</span>
                        unsuccessfully deployed <mark class='g-text-code'>a04971d1</mark> to <em>RoyalWebHosting</em>
                    </p>
<span class='feed-item__project text--subtle text--italic' label='DeepPHPOOP'>
DeepPHPOOP
</span>
                    </a></li>
                <li class='feed-item feed-item--positive'>
                    <a class="feed-item__inner clearfix" href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099"><p class='feed-item__message'>
                        <span class='text--semibold'>shukai zhao</span>
                        deployed <mark class='g-text-code'>a04971d1</mark> to <em>RoyalWebHosting</em>
                    </p>
<span class='feed-item__project text--subtle text--italic' label='DeepPHPOOP'>
DeepPHPOOP
</span>
                    </a></li>
                <li class='feed-item feed-item--negative'>
                    <a class="feed-item__inner clearfix" href="/projects/deepphpoop/deployments/819e5750-f757-a617-c261-cd80f8612d15"><p class='feed-item__message'>
                        <span class='text--semibold'>shukai zhao</span>
                        unsuccessfully deployed <mark class='g-text-code'>a04971d1</mark> to <em>RoyalWebHosting</em>
                    </p>
<span class='feed-item__project text--subtle text--italic' label='DeepPHPOOP'>
DeepPHPOOP
</span>
                    </a></li>
                <li class='feed-item feed-item--positive'>
                    <a class="feed-item__inner clearfix" href="/projects/deepphpoop/deployments/819e5750-f757-a617-c261-cd80f8612d15"><p class='feed-item__message'>
                        <span class='text--semibold'>shukai zhao</span>
                        deployed <mark class='g-text-code'>a04971d1</mark> to <em>RoyalWebHosting</em>
                    </p>
<span class='feed-item__project text--subtle text--italic' label='DeepPHPOOP'>
DeepPHPOOP
</span>
                    </a></li>
                <li class='feed-item feed-item--general'>
                    <a class="feed-item__inner clearfix" href="/projects/deepphpoop/servers/b44c0963-91af-651f-0810-8f9a26375277/edit"><p class='feed-item__message'>
                        <span class='text--semibold'>Deploy</span>
                        created a new FTP server called <em>RoyalWebHosting</em>
                    </p>
<span class='feed-item__project text--subtle text--italic' label='DeepPHPOOP'>
DeepPHPOOP
</span>
                    </a></li>
                <li class='feed-item feed-item--general'>
                    <a class="feed-item__inner clearfix" href="/projects/deepphpoop"><p class='feed-item__message'>
                        <span class='text--semibold'>shukai zhao</span>
                        created a new project called <em>DeepPHPOOP</em>
                    </p>
<span class='feed-item__project text--subtle text--italic' label='DeepPHPOOP'>
DeepPHPOOP
</span>
                    </a></li>
            </ul>
        </div>
    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='sidebar__heading g-heading-gamma'>Your Projects</h3>
        </div>
        <ul class='project-list layout-list box js-starred-projects'>
            <li class='project-list__item project-list__item--starred'>
                <a class="project-list__action js-star-project" href="/projects/deepphpoop/star"><img alt="Icon star empty" class="project-list__icon project-list__star" src="/assets/images/icon-star-empty-983228f419b166694a1f89f859051c01.svg" title="Star Project" />
                    <img alt="Icon star filled" class="project-list__icon project-list__unstar" src="/assets/images/icon-star-filled-16fc7e710d631c5bd1e26ae07ea4f816.svg" title="Unstar Project" />
                </a><a class="project-list__link" href="/projects/deepphpoop">DeepPHPOOP</a>
            </li>

        </ul>
        <ul class='box is-hidden js-unstarred-projects layout-list project-list'>

        </ul>
        <div class='content-block'>
            <p><a class="text--micro text--link text--positive text--semibold" href="/projects/new">Create a new project →</a></p>
        </div>
    </div>


</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
