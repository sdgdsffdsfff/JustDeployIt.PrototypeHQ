<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-notifications-new'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'project_menu.ctp'; ?>

<div class='container'>
    <div class='flash flash--spaced flash--neutral'>
        <p>This project was last deployed about 18 hours ago to <strong>RoyalWebHosting</strong>. <a href="/projects/deepphpoop/deployments/00055b1b-b4ae-3676-2ada-ad604107a099">View details</a>.</p>
    </div>

</div>
<div class='container clearfix'>

    <div class='section section--first box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>New Notification</h2>
            <p class='page-header__lead'>Use the form below to create a new notification to be sent after each deployment within this project.</p>
        </div>
    </div>
    <div class='content--constrained'>
        <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications/new" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
            <div class='section section--first section--skinny box'>
                <div class='form-group form-group--micro'>
                    <label class="form-label" for="hook_type">Notification Type</label>
                    <div class='form-select'>
                        <select class="js-service-select" id="hook_type" name="hook_type"><option value="campfire"><span class="translation_missing" title="translation missing: en.projects.notifications.supported_services.campfire">Campfire</span></option>
                            <option value="codebase"><span class="translation_missing" title="translation missing: en.projects.notifications.supported_services.codebase">Codebase</span></option>
                            <option value="flowdock"><span class="translation_missing" title="translation missing: en.projects.notifications.supported_services.flowdock">Flowdock</span></option>
                            <option value="hipchat">Hipchat</option>
                            <option selected="selected" value="http_post">HTTP Post</option>
                            <option value="new_relic"><span class="translation_missing" title="translation missing: en.projects.notifications.supported_services.new_relic">New Relic</span></option>
                            <option value="slack"><span class="translation_missing" title="translation missing: en.projects.notifications.supported_services.slack">Slack</span></option></select>
                    </div>
                </div>
            </div>
        </form>

        <div class='notification-service' data-service='http_post'>
            <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications" class="new_notification" id="new_notification" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
                <input id="notification_hook_type" name="notification[hook_type]" type="hidden" value="http_post" />
                <div class='section section--first section--skinny box'>
                    <h3 class='form-heading form-heading--spaced g-heading-beta'>Notification: HTTP Post</h3>
                    <div class='form-group'>
                        <label class="form-label" for="notification_http_post_url">Endpoint</label>
                        <input class="form-control" id="notification_http_post_url" name="notification[properties][url]" type="text" />
                        <p class='form-hint'>This should be an HTTP or HTTPS URL which will receive the payload.</p>
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_http_post_username">Username</label>
                        <input class="form-control" id="notification_http_post_username" name="notification[properties][username]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_http_post_api_key">API Key or password</label>
                        <input class="form-control" id="notification_http_post_api_key" name="notification[properties][api_key]" type="password" />
                        <p class='form-hint'>HTTP Basic authentication will be used to log into the endpoint.</p>
                    </div>
                </div>
                <div class='form-submit'>
                    <button class="button button--positive" name="button" type="submit">Save</button>
                </div>
            </form>

        </div>

        <div class='is-hidden notification-service' data-service='hipchat'>
            <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications" class="new_notification" id="new_notification" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
                <input id="notification_hook_type" name="notification[hook_type]" type="hidden" value="hipchat" />
                <div class='section section--first section--skinny box'>
                    <div class='form-group'>
                        <label class="form-label" for="notification_hipchat_token">Auth Token</label>
                        <input class="form-control" id="notification_hipchat_token" name="notification[properties][token]" type="text" />
                        <p class='form-hint'>Only API v1 tokens generated by group admins will work.</p>
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_hipchat_room_id">Room Name</label>
                        <input class="form-control" id="notification_hipchat_room_id" name="notification[properties][room]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_hipchat_from">From Name</label>
                        <input class="form-control" id="notification_hipchat_from" name="notification[properties][from]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_hipchat_notify">Notify Users</label>
                        <div class='form-select'>
                            <select id="notification_hipchat_notify" name="notification[properties][notify]"><option value="0">Do not notify users</option>
                                <option value="1">Notify users in the room</option></select>
                        </div>
                    </div>
                </div>
                <div class='form-submit'>
                    <button class="button button--positive" name="button" type="submit">Save</button>
                </div>
            </form>

        </div>

        <div class='is-hidden notification-service' data-service='flowdock'>
            <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications" class="new_notification" id="new_notification" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
                <input id="notification_hook_type" name="notification[hook_type]" type="hidden" value="flowdock" />
                <div class='section section--first section--skinny box'>
                    <div class='form-group'>
                        <label class="form-label" for="notification_flowdock_token">API Token</label>
                        <input class="form-control" id="notification_flowdock_token" name="notification[properties][token]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_flowdock_from">External Username</label>
                        <input class="form-control" id="notification_flowdock_from" name="notification[properties][from]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_flowdock_tags">Tags</label>
                        <input class="form-control" id="notification_flowdock_tags" name="notification[properties][tags]" type="text" />
                    </div>
                </div>
                <div class='form-submit'>
                    <button class="button button--positive" name="button" type="submit">Save</button>
                </div>
            </form>

        </div>

        <div class='is-hidden notification-service' data-service='new_relic'>
            <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications" class="new_notification" id="new_notification" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
                <input id="notification_hook_type" name="notification[hook_type]" type="hidden" value="new_relic" />
                <div class='section section--first section--skinny box'>
                    <div class='form-group'>
                        <label class="form-label" for="notification_new_relic_application_id">Application ID</label>
                        <input class="form-control" id="notification_new_relic_application_id" name="notification[properties][application_id]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_new_relic_api_key">API Key</label>
                        <input class="form-control" id="notification_new_relic_api_key" name="notification[properties][api_key]" type="text" />
                        <p class='form-hint'>Please ensure that your New Relic API key is enabled in Integrations &rarr; Data Sharing.</p>
                    </div>
                </div>
                <div class='form-submit'>
                    <button class="button button--positive" name="button" type="submit">Save</button>
                </div>
            </form>

        </div>

        <div class='is-hidden notification-service' data-service='codebase'>
            <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications" class="new_notification" id="new_notification" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
                <input id="notification_hook_type" name="notification[hook_type]" type="hidden" value="codebase" />
                <div class='section section--first section--skinny box'>
                    <div class='form-group'>
                        <label class="form-label" for="notification_codebase_account">Account</label>
                        <input class="form-control" id="notification_codebase_account" name="notification[properties][account]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_codebase_project">Project</label>
                        <input class="form-control" id="notification_codebase_project" name="notification[properties][project]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_codebase_repository">Repository</label>
                        <input class="form-control" id="notification_codebase_repository" name="notification[properties][repository]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_codebase_username">Username</label>
                        <input class="form-control" id="notification_codebase_username" name="notification[properties][username]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_codebase_api_key">API key</label>
                        <input class="form-control" id="notification_codebase_api_key" name="notification[properties][api_key]" type="text" />
                    </div>
                </div>
                <div class='form-submit'>
                    <button class="button button--positive" name="button" type="submit">Save</button>
                </div>
            </form>

        </div>

        <div class='is-hidden notification-service' data-service='campfire'>
            <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications" class="new_notification" id="new_notification" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
                <input id="notification_hook_type" name="notification[hook_type]" type="hidden" value="campfire" />
                <div class='section section--first section--skinny box'>
                    <div class='form-group'>
                        <label class="form-label" for="notification_campfire_domain">Domain</label>
                        <input class="form-control" id="notification_campfire_domain" name="notification[properties][domain]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_campfire_room_id">Room ID</label>
                        <input class="form-control" id="notification_campfire_room_id" name="notification[properties][room_id]" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_campfire_api_key">API Key</label>
                        <input class="form-control" id="notification_campfire_api_key" name="notification[properties][api_key]" type="text" />
                    </div>
                </div>
                <div class='form-submit'>
                    <button class="button button--positive" name="button" type="submit">Save</button>
                </div>
            </form>

        </div>

        <div class='is-hidden notification-service' data-service='slack'>
            <form accept-charset="UTF-8" action="/projects/deepphpoop/notifications" class="new_notification" id="new_notification" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wfMiVhNXMb+ooNQ01R8PX1mNVqnbYdm1WCt9k1EsHX8=" /></div>
                <input id="notification_hook_type" name="notification[hook_type]" type="hidden" value="slack" />
                <div class='section section--first section--skinny box'>
                    <div class='form-group'>
                        <label class="form-label" for="notification_slack_account">Account</label>
                        <input class="form-control" id="notification_slack_account" name="notification[properties][account]" spellcheck="false" type="text" />
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="notification_slack_token">Token</label>
                        <input class="form-control" id="notification_slack_token" name="notification[properties][token]" spellcheck="false" type="text" />
                        <p class='form-hint'>Add a new incoming web hook in Slack to get your <a href="https://slack.com/services/new/incoming-webhook">token</a>.</p>
                    </div>
                </div>
                <div class='form-submit'>
                    <button class="button button--positive" name="button" type="submit">Save</button>
                </div>
            </form>

        </div>

    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <div class='is-hidden sidebar-service'>
                <h3 class='g-heading-gamma'>Codebase Notification</h3>
                <a href="http://www.codebasehq.com/"><img alt="Codebase" class="sidebar-service__image" src="/assets/images/hosting_service_logos/codebase.png" /></a>
                <p>Set up a notification for your project in Codebase to keep your deployment history right alongside your repositories and ticketing!</p>
            </div>
            <div class='is-hidden sidebar-service'>
                <h3 class='g-heading-gamma'>Hipchat Notification</h3>
                <a href="http://www.hipchat.com/"><img alt="Hipchat Logo" class="sidebar-service__image" src="/assets/images/icons/notifications/hipchat_large.png" /></a>
                <p>Receive a notification into your Hipchat room whenever a deployment is completed.</p>
            </div>
            <div class='is-hidden sidebar-service'>
                <h3 class='sidebar__heading g-heading-gamma'>Flowdock Notification</h3>
                <a href="http://www.flowdock.com/"><img alt="Flowdock Logo" class="sidebar-service__image" src="/assets/images/icons/notifications/flowdock_large.png" /></a>
                <p>Receive a notification into your flow whenever a deployment is completed.</p>
            </div>
            <div class='is-hidden sidebar-service'>
                <h3 class='sidebar__heading g-heading-gamma'>New Relic Notification</h3>
                <a href="http://www.newrelic.com/"><img alt="New Relic Logo" class="sidebar-service__image" src="/assets/images/icons/notifications/new_relic_large.png" /></a>
                <p>Add an entry to your Deployment Listings when a deployment is made.</p>
            </div>
            <div class='is-hidden sidebar-service'>
                <h3 class='sidebar__heading g-heading-gamma'>Campfire Notification</h3>
                <a href="http://campfirenow.com/"><img alt="Campfire Logo" class="sidebar-service__image" src="/assets/images/icons/notifications/campfire_large.png" /></a>
                <p>Receive a notification into your Campfire room whenever a deployment is completed.</p>
            </div>
            <div class='is-hidden sidebar-service'>
                <h3 class='sidebar__heading g-heading-gamma'>Slack Notification</h3>
                <a href="http://slack.com"><img alt="Slack Logo" class="sidebar-service__image" src="/assets/images/icons/notifications/slack_large.png" /></a>
                <p>Receive a notification into Slack whenever a deployment is completed.</p>
            </div>
            <div class='sidebar-service'>
                <h3 class='sidebar__heading g-heading-gamma'>Example JSON</h3>
                <p>The payload you receive is the same as you would get if you requested information about a deployment from our API.</p>
                <p><a class="u-text-link" href="http://paste.codebasehq.com/pastes/8qpw1f8u3totu8yzn5">View Example JSON</a></p>
            </div>
            <div class='sidebar-service'>
                <h3 class='sidebar__heading g-heading-gamma'>Payload Signing</h3>
                <p>All payloads are sent with a signature which allows you to verify the authenticity of the request if you so desire.</p>
                <p><a class="u-text-link js-public-key" href="/projects/deepphpoop/public_key">View our public key</a></p>
            </div>

            <h3 class='sidebar__heading g-heading-gamma'>Public Key</h3>
            <p>All notifications are signed using the private key which corresponds with this public key. You can use a library like <a class="u-text-link" href="http://rubygems.org/gems/basic_ssl">BasicSSL</a> with this key to verify the payload you receive.</p>
<textarea class="textarea textarea--snippet u-margin-top" id="" name="" readonly="readonly" rows="9">
-----BEGIN PUBLIC KEY-----&#x000A;MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDXJcP2N6NtcN26Q8nVaidXOA0w&#x000A;RxWK2HQTblIaQdGRDjqTvhrSlFuV5N4jz7w/w8uskP20G7ZQ+CkHwIXrWk76KZJn&#x000A;pdoOHPO6AqRmEFgV5Q6Y1CR77mvnT9O21hTnfzfyyiAdQC2oO8M9/jeLRPTAqmkG&#x000A;xdQa8iepUz4BwrrHmwIDAQAB&#x000A;-----END PUBLIC KEY-----</textarea>
        </div>
    </div>


</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
