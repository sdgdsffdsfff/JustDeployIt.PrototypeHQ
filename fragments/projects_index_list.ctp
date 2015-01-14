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
    <div class="flash flash--spaced flash--success"><p>DeepPHPOOP has been removed successfully!</p></div>
    <div class='box section section--first section--with-create'>
        <a class="button button--positive button--create section__create" href="/projects/new" title="Create a new project"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Your Projects</h2>
            <p class='page-header__lead'>
                The list below shows all the projects which are currently set up for this account.
                Click on a project to view further details or select 'Deploy Now' to be taken straight to the new deployment screen.
            </p>
        </div>
    </div>
    <form accept-charset="UTF-8" action="/users/3471e5ea-a920-5641-1ed9-16609e345521/projects_sort_preference" class="edit_user" id="user_project_sort" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="patch" /><input name="authenticity_token" type="hidden" value="hCBCVjuHS1LiQhvPKI9TXQFfxx4W5W8ql3IgroD+9js=" /></div><div class='action-block clearfix'>
        <div class='action-block__sort radio-block js-project-sort'>
            <strong class='radio-block__label'>Sort:</strong>
            <label class="radio-block__group" for="user_alphabetic_sort_true"><input checked="checked" class="radio-block__input" id="user_alphabetic_sort_true" name="user[alphabetic_sort]" type="radio" value="true" />
                <span>Alphabetically</span>
            </label><label class="radio-block__group" for="user_alphabetic_sort_false"><input class="radio-block__input" id="user_alphabetic_sort_false" name="user[alphabetic_sort]" type="radio" value="false" />
            <span>Recently Deployed</span>
        </label></div>
    </div>
    </form>

    <ul class='project-listings layout-list clearfix js-project-list'>
        <li class='project-listing js-project' data-last-deployed='1420898243' data-name='DeepPHPOOP'>
            <div class='box'>
                <h3 class='g-heading-beta project-listing__name'><a href="/projects/deepphpoop">DeepPHPOOP</a></h3>
                <div class='project-listing__bar'>
                    <div class='project-listing__deployments'>
                        <span class='project-listing__count'>2</span>
                        <span class='project-listing__count-title'>Deployments</span>
                    </div>
                    <div class='project-listing__servers'>
                        <span class='project-listing__count'>1</span>
                        <span class='project-listing__count-title'>Servers</span>
                    </div>
                    <div class='project-listing__deploy'>
                        <a class="project-listing__deploy-button" href="/projects/deepphpoop/deployments/new">Deploy</a>
                    </div>
                </div>
            </div>
        </li>

    </ul>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
