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
            <h4 class='g-heading-beta feed-heading'>Welcome to Deploy!</h4>
            <div class='content-block'>
                <p class='u-margin-bottom'>
                    Glad to have you on board, please watch the video below to get a feel for how Deploy works, or if you just want to jump right in click "Create a new project" over there on the right.
                </p>
            </div>
        </div>
    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='sidebar__heading g-heading-gamma'>Your Projects</h3>
        </div>
        <div class='content-block'>
            <p class='g-text-subtle'>You are not assigned to any projects.</p>
        </div>
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
