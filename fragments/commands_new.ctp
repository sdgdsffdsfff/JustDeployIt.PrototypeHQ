<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-commands-new'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 18 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <p class='page-back'><a class="page-back__link" href="/projects/deepphpoop/commands">&#8592; Back to list</a></p>
    <div class='content content--constrained'>
        <div class='box section section--first'>
            <div class='page-header'>
                <h2 class='page-header__title g-heading-alpha'>Create New SSH Command</h2>
                <p class='page-header__lead'>Use the form below to create a new SSH command for this project. The command you enter will be automatically executed <strong>before changes are pushed</strong>. All commands (and associated output) is available in your deployment log.</p>
            </div>
        </div>
        <form accept-charset="UTF-8" action="/projects/deepphpoop/commands" class="new_command" id="new_command" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div><input id="command_cback" name="command[cback]" type="hidden" value="before_changes" />

            <div class='box section section--skinny section--first'>
                <div class='form-group'>
                    <label class="form-label" for="command_description">Description</label>
                    <input class="form-control" id="command_description" name="command[description]" type="text" />
                    <p class='form-hint'>This is just for your information, this is just displayed in your log.</p>
                </div>
                <div class='form-group'>
                    <label class="form-label" for="command_command">Command</label>
<textarea class="textarea textarea--nowrap" id="command_command" name="command[command]" rows="6">
</textarea>
                    <p class='form-hint'>
                        This is the exact command which will be executed. You can use the variables described on the right to insert various strings into your commands.
                    </p>
                </div>
                <div class='form-group'>
                    <label for="_:class___form-checkbox__"><input name="command[halt_on_error]" type="hidden" value="0" /><input class="form-checkbox__input" id="command_halt_on_error" name="command[halt_on_error]" type="checkbox" value="1" />
                        <span class='form-checkbox__text'>Stop the deployment if the command fails</span>
                    </label><p class='form-hint'>If the command returns an exit code of another other than 0, the process will be halted.</p>
                </div>
            </div>
            <div class='box section section--skinny section--first'>
                <h3 class='form-heading g-heading__beta'>When should the command be run?</h3>
                <div class='form-group'>
                    <ul class='checkbox-list'>
                        <li class='checkbox-list__item'>
                            <label class='form-checkbox'>
                                <input checked="checked" class="form-checkbox__input" id="command_timing_all" name="command[timing]" type="radio" value="all" />
                                <span class='form-checkbox__text'>On all deployments</span>
                            </label>
                        </li>
                        <li class='checkbox-list__item'>
                            <label class='form-checkbox'>
                                <input class="form-checkbox__input" id="command_timing_first" name="command[timing]" type="radio" value="first" />
                                <span class='form-checkbox__text'>Only on first deployment to the server</span>
                            </label>
                        </li>
                        <li class='checkbox-list__item'>
                            <label class='form-checkbox'>
                                <input class="form-checkbox__input" id="command_timing_after_first" name="command[timing]" type="radio" value="after_first" />
                                <span class='form-checkbox__text'>Only after first deployment to the server</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='box section section--skinny section--first'>
                <h3 class='form-heading g-heading__beta'>Server(s)</h3>
                <p class='form-paragraph'>Select which servers you&rsquo;d like this command to be applied to. The file will only be executed on servers that you select below (or all if you select the top checkbox).</p>
                <div class='form-group'>
                    <ul class='checkbox-list'>
                        <li class='checkbox-list__item checkbox-list__item--separated is-all-checkbox js-checkbox-container'>
                            <label class="form-checkbox" for="command_all_servers"><input checked="checked" class="form-checkbox__input is-toggle-hint js-checkbox-all" id="command_all_servers" name="command[all_servers]" type="checkbox" value="1" />
                                <span class='form-checkbox__text'>Command should be run on all servers</span>
                                <p class='form-hint g-text-positive animated fadeIn'>
                                    This command will be automatically executed on all current and future SSH servers.
                                </p>
                            </label></li>
                        <li class='checkbox-list__item'>
                            <label class="form-checkbox" for="server_b44c0963-91af-651f-0810-8f9a26375277"><input class="form-checkbox__input" disabled="disabled" id="server_b44c0963-91af-651f-0810-8f9a26375277" name="command[servers][]" type="checkbox" value="152206" />
                                <span class='form-checkbox__text'>RoyalWebHosting</span>
                            </label></li>
                    </ul>
                </div>
            </div>
            <div class='form-submit'>
                <button class="button button--positive" name="button" type="submit">Save Command</button>
            </div>
        </form>


    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='sidebar__heading g-heading-gamma'>Multiple Lines?</h3>
            <p>If you're executing multiple commands on different lines your shell may require you to terminate lines with a backslash (<code>\</code>).</p>
            <h4 class='g-heading-gamma'>Variables</h4>
            <p>You can use any of the variables below in your commands to insert the appropriate revision data:</p>
            <ul class='g-text-subtle'>
                <li>
                    <code>%path% &mdash;</code>
                    <span>Server path</span>
                </li>
                <li>
                    <code>%username% &mdash;</code>
                    <span>Server username</span>
                </li>
                <li>
                    <code>%environment% &mdash;</code>
                    <span>Server Environment (development, production etc.)</span>
                </li>
                <li>
                    <code>%password% &mdash;</code>
                    <span>The unencrypted password for your server</span>
                </li>
                <li>
                    <code>%startrev% &mdash;</code>
                    <span>Start revision ref</span>
                </li>
                <li>
                    <code>%endrev% &mdash;</code>
                    <span>End revision ref</span>
                </li>
                <li>
                    <code>%branch% &mdash;</code>
                    <span>The branch of this deployment</span>
                </li>
                <li>
                    <code>%count% &mdash;</code>
                    <span>Deployment count for this project</span>
                </li>
                <li>
                    <code>%groupindex% &mdash;</code>
                    <span>If in a server group, the order in which this server is deployed (zero-indexed)</span>
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
