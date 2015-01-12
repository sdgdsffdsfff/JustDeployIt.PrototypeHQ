<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-excluded_files-edit'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 17 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <div class='content--constrained'>
        <form accept-charset="UTF-8" action="https://treetree.beta.deployhq.com/projects/deepphpoop/excluded_files/0" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
            <div class='section section--first box'>
                <div class='page-header'>
                    <h2 class='page-header__title g-heading-alpha'>Edit Excluded File</h2>
                    <p class='page-header__lead'>
                        Use the form below to modify your excluded file.
                    </p>
                    <div class='form-group u-margin-top u-margin-bottom-zero'>
                        <label class="form-label" for="filename">File Path</label>
                        <input class="form-control" id="filename" name="filename" type="text" value="README.md" />
                        <p class='form-hint'>
                            Any file which matches this pattern will not be deployed with the rest of your application.
                            Note that this only applies to files in your main repository, not any associated submodules.
                        </p>
                    </div>
                </div>
            </div>
            <div class='form-submit'>
                <button class="button button--positive" name="button" type="submit">Update Excluded File</button>
            </div>
        </form>

    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='sidebar__heading g-heading-gamma'>Wildcards</h3>
            <p>You can use a variety of wildcards in your filename, including:</p>
            <ul>
                <li>
                    <code>* &mdash;</code>
                    <span>Matches any file</span>
                </li>
                <li>
                    <code>** &mdash;</code>
                    <span>Matches directories recursively or files expansively</span>
                </li>
                <li>
                    <code>? &mdash;</code>
                    <span>Matches any one character</span>
                </li>
                <li>
                    <code>[set] &mdash;</code>
                    <span>Matches any one character in set, e.g.</span>
                    <code>[a-z]</code>
                </li>
            </ul>
        </div>
    </div>


</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
