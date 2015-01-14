<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-excluded_files-index'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 16 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <div class='section section--first section--with-create box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Excluded Files</h2>
            <p class='page-header__lead'>
                You can define a list of files that are included in your repository, but that you don"t wish to be deployed with the rest of your application (for example, a .gitmodules file).
            </p>
        </div>
        <a class="button button--positive button--create section__create" href="/projects/deepphpoop/excluded_files/new" title="Add another excluded file"><img alt="Icon add" class="button__icon" src="/assets/images/icon-add-e0280f31016ead5fa85f6969fbd6f2db.svg" /></a>
    </div>
    <div class='section section--first section--equal box'>
        <table class='table table--responsive'>
            <thead>
            <tr>
                <td>File Path</td>
                <td></td>
            </tr>
            </thead>
            <tbody></tbody>
            <tr class='table__inline'>
                <td class='table__inline-label' data-column-label='File Path'>README.md</td>
                <td class='table__actions table__actions--inline u-text-right'>
                    <a href="/projects/deepphpoop/excluded_files/0/edit"><img alt="Edit" class="icon" src="/assets/images/icon-pencil-c3c83e027bd471c46571ffc8a6914974.svg" /></a>
                    <a data-confirm="Are you sure you wish to remove this excluded file?" data-method="delete" href="/projects/deepphpoop/excluded_files/0" rel="nofollow"><img alt="Delete" class="icon" src="/assets/images/icon-trash-4d0e03bf959145d64a6c5a9905127c05.svg" /></a>
                </td>
            </tr>
        </table>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
