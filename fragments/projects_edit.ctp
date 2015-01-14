<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-projects-edit'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 11 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>
    <div class='flash flash--spaced flash--pending'>
        <p>Caching repository in progress. <a href="/projects/deepphpoop/repository/caching">What does this mean?</a>.</p>
    </div>

</div>
<div class='container clearfix'>
    <div class="flash flash--spaced flash--success"><p>Project has been updated successfully!</p></div>
    <div class="flash flash--spaced flash--success"><p>A repository recache has been initiated successfully.</p></div>
    <div class='content--constrained'>
        <form accept-charset="UTF-8" action="/projects/deepphpoop" class="edit_project" id="edit_project_91546" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="patch" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div><div class='section section--first section--skinny box'>
            <h2 class='form-heading'>Project Settings</h2>
            <div class='form-group'>
                <label class="form-label" for="project_name">Name</label>
                <input class="form-control" id="project_name" name="project[name]" type="text" value="DeepPHPOOP" />
                <p class='form-hint'>The name of a project is used to identify it within your Deploy account.</p>
            </div>
            <div class='form-group'>
                <label class="form-label" for="project_notification_email">Notification Email Address</label>
                <input class="form-control" id="project_notification_email" name="project[notification_email]" type="text" />
                <p class='form-hint'>Leave blank to use users email address.</p>
            </div>
        </div>
            <div class='section section--first section--skinny box'>
                <h3 class='form-heading g-heading-beta u-margin-zero'>Repository Settings</h3>
                <p class='form-paragraph u-margin-top'>
                    If you need to change your branch or repository URL you can do so below.
                </p>
                <div class='js-repo-manual-details is-git-repo'>
                    <h3 class='form-heading g-heading-gamma'>Repository Type</h3>
                    <div class='form-group'>
                        <div class='radio-block radio-block--no-label'>
                            <label class="radio-block__group radio-block__group--full" for="scm_type_git"><input checked="checked" class="radio-block__input js-scm-type" id="scm_type_git" name="repository[scm_type]" type="radio" value="git" />
                                <span>Git</span>
                            </label><label class="radio-block__group radio-block__group--full" for="scm_type_subversion"><input class="radio-block__input js-scm-type" id="scm_type_subversion" name="repository[scm_type]" type="radio" value="subversion" />
                            <span>Subversion</span>
                        </label><label class="radio-block__group radio-block__group--full" for="scm_type_mercurial"><input class="radio-block__input js-scm-type" id="scm_type_mercurial" name="repository[scm_type]" type="radio" value="mercurial" />
                            <span>Mercurial</span>
                        </label></div>
                    </div>
                    <hr class='form-separator'>
                    <div class='form-group'>
                        <label class="form-label" for="repository_url">Full URL to repository</label>
                        <input class="form-control js-repo-url" id="repository_url" name="repository[url]" type="text" value="https://github.com/shukai0828/DeepPHPOOP.git" />
                    </div>
                    <div class='form-group is-related-git is-related-mercurial'>
                        <label class="form-label" for="repository_port">Custom repository port (if required)</label>
                        <input class="form-control" id="repository_port" name="repository[port]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="repository_root_path">Subdirectory to deploy from</label>
                        <input class="form-control" id="repository_root_path" name="repository[root_path]" type="text" />
                        <p class='form-hint'>
                            The subdirectory in your repository that you wish to deploy.
                            Leave blank to use the default specified in the project.
                        </p>
                    </div>
                    <div class='form-group is-related-git is-related-mercurial'>
                        <label class="form-label" for="repository_branch">Default branch you wish to deploy from?</label>
                        <div class='form-select'>
                            <select id="repository_branch" name="repository[branch]"><option value="dev_zsk">dev_zsk</option>
                                <option value="dev_zsk2">dev_zsk2</option>
                                <option selected="selected" value="master">master</option></select>
                        </div>
                    </div>
                    <div class='form-group js-auth-requirement-http is-hidden'>
                        <div class='form-group'>
                            <label class="form-label" for="repository_username">Username</label>
                            <input class="form-control" id="repository_username" name="repository[username]" type="text" value="treetree1303@gmail.com" />
                        </div>
                        <div class='form-group'>
                            <label class="form-label" for="repository_password">Password</label>
                            <input class="form-control" id="repository_password" name="repository[password]" type="password" />
                            <p class='form-hint'>Username/Password for HTTP only.</p>
                        </div>
                    </div>
                    <div class='form-group js-auth-requirement-ssh'>
                        <label class="form-label" for="deploy_generated_public">Use this public key and add it to your repository server&#39;s authorized keys:</label>
                        <textarea class='textarea textarea--snippet' id='deploy_generated_public' readonly>ssh-rsa AAAAB3NzaC1yc2EAAAABIwAAAQEA0DeiGr+0qU5Fm2vmIW7ViVNPmxhnt4vVwC4VYcJCoA03zMnnIin9VRBW82kvnj9gyT/CWFLqkVgMBlqxZuh7WgbD3A4S6mMF+HWbDxHJFdW6gWVlVv3z98W/CeuDtCmogrNI/y1sE2dqyfXhJstoK17+OiYbuOjIK2X035D8etIYC1Ej0mCbHpyaTQuH4XKzHqAuRtT7dA0fh17T+BvFOUnSlM/n21n+xVFnLEYmoLrBJ5rj3S9sqU6cXWRe0PKmHiu/nzZ0Sj/a6d3ak0LuVxtbjPXTp/QYL0uaVux2KZ8IYJeKuntvhnOgq4EMNi/K4ikMXgfZhsDRC8JXLwikIQ==</textarea>
                    </div>
                </div>

                <div class='form-group js-auth-requirement-ssh'>
                    <p class='form-paragraph u-margin-top'>
                        Want to use your own keys? <a class="js-key-upload g-text-info g-text-underlined" href="#">Upload your private key</a>.
                    </p>
                </div>
                <div class='form-group js-private-key-upload is-hidden'>
                    <label class="form-label" for="custom_private_key">To use your own private key, copy and paste it into the box below:</label>
<textarea class="textarea" id="project_custom_private_key" name="project[custom_private_key]">
</textarea>
                    <p class='form-paragraph u-margin-top'>
                        Or use the public key that Deploy has <a class="js-use-generated-public-key g-text-info g-text-underlined" href="#">generated for you</a>.
                    </p>
                </div>

            </div>
            <div class='form-submit'>
                <button class="button button--positive" name="button" type="submit">Save Changes</button>
            </div>
        </form>

    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h4 class='sidebar__heading g-heading-gamma'>GitHub Repository</h4>
            <p>Any links to this repository will be opened from your GitHub account.</p>
            <p><a href="http://github.com"><img alt="GitHub" src="/assets/images/hosting_service_logos/github.png" /></a></p>
            <ul>
                <li><a class="u-text-link" href="https://github.com/shukai0828/DeepPHPOOP/tree/master">Browse your repository</a></li>
                <li><a class="u-text-link" href="http://github.com">About GitHub</a></li>
            </ul>
            <h4 class='sidebar__heading g-heading-gamma'>Test Access</h4>
            <p>Push the button below and we'll run a quick test to see if we can login to your servers and repository.</p>
            <p>The result will be shown below.</p>
            <p><a class="button" href="#">Run Tests</a></p>
            <h4 class='sidebar__heading g-heading-gamma'>Recache Repository</h4>
            <p>Made some changes to your repository that Deploy hasn't picked up yet?</p>
            <p>Press this button to recache your repository.</p>
            <p><a class="button" data-confirm="Are you sure you want to recache your repository? You may be unavailable to Deploy this repository for a few minutes." data-method="post" href="/projects/deepphpoop/repository/recache" rel="nofollow">Recache Repository</a></p>
            <h4 class='sidebar__heading g-heading-gamma'>Delete Project</h4>
            <p>A project’s server information and configuration files can not be accessed once deleted.</p>
            <p><a class="button button--negative" data-confirm="Are you sure you wish to remove this project?" data-method="delete" href="/projects/deepphpoop" rel="nofollow">Delete Project</a></p>
            <p>If you need more space for projects, why not <a href="/billing/package">upgrade your account</a>?</p>
        </div>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
