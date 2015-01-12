<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='js-users-profile'>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_header.ctp'; ?>

<div class='container clearfix'>

    <div class='section section--first box'>
        <div class='page-header'>
            <h2 class='page-header__title g-heading-alpha'>Your Profile</h2>
            <p class='page-header__lead'>Updating information here will update the information for all your aTech Media accounts.</p>
        </div>
    </div>
    <div class='content--constrained'>
        <form accept-charset="UTF-8" action="/profile" class="edit_user" id="edit_user_42703" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="patch" /><input name="authenticity_token" type="hidden" value="lAExgLFLIaHjmDwOg/cxGRgleVpkQiCMH3p53Z9EiqI=" /></div>
            <div class='section section--first section--skinny box'>
                <div class='form-group'>
                    <label class="form-label" for="user_email_address">E-Mail Address</label>
                    <input class="form-control" id="user_email_address" name="user[email_address]" type="text" value="treetree1303@gmail.com" />
                </div>
                <div class='form-group'>
                    <label class="form-label" for="user_first_name">First Name</label>
                    <input class="form-control" id="user_first_name" name="user[first_name]" type="text" value="shukai" />
                </div>
                <div class='form-group'>
                    <label class="form-label" for="user_first_name">Last Name</label>
                    <input class="form-control" id="user_last_name" name="user[last_name]" type="text" value="zhao" />
                </div>
                <div class='form-group'>
                    <label class="form-label" for="user_time_zone">Your Time Zone</label>
                    <div class='form-select'>
                        <select id="user_time_zone" name="user[time_zone]"><option value="American Samoa">(GMT-11:00) American Samoa</option>
                            <option value="International Date Line West">(GMT-11:00) International Date Line West</option>
                            <option value="Midway Island">(GMT-11:00) Midway Island</option>
                            <option value="Samoa">(GMT-11:00) Samoa</option>
                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
                            <option value="Alaska">(GMT-09:00) Alaska</option>
                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                            <option value="Tijuana">(GMT-08:00) Tijuana</option>
                            <option value="Arizona">(GMT-07:00) Arizona</option>
                            <option value="Chihuahua">(GMT-07:00) Chihuahua</option>
                            <option value="Mazatlan">(GMT-07:00) Mazatlan</option>
                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                            <option value="Central America">(GMT-06:00) Central America</option>
                            <option value="Central Time (US &amp; Canada)">(GMT-06:00) Central Time (US &amp; Canada)</option>
                            <option value="Guadalajara">(GMT-06:00) Guadalajara</option>
                            <option value="Mexico City">(GMT-06:00) Mexico City</option>
                            <option value="Monterrey">(GMT-06:00) Monterrey</option>
                            <option value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                            <option value="Bogota">(GMT-05:00) Bogota</option>
                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                            <option value="Lima">(GMT-05:00) Lima</option>
                            <option value="Quito">(GMT-05:00) Quito</option>
                            <option value="Caracas">(GMT-04:30) Caracas</option>
                            <option value="Atlantic Time (Canada)">(GMT-04:00) Atlantic Time (Canada)</option>
                            <option value="Georgetown">(GMT-04:00) Georgetown</option>
                            <option value="La Paz">(GMT-04:00) La Paz</option>
                            <option value="Santiago">(GMT-04:00) Santiago</option>
                            <option value="Montevideo">(GMT-03:30) Montevideo</option>
                            <option value="Newfoundland">(GMT-03:30) Newfoundland</option>
                            <option value="Brasilia">(GMT-03:00) Brasilia</option>
                            <option value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                            <option value="Greenland">(GMT-03:00) Greenland</option>
                            <option value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                            <option value="Azores">(GMT-01:00) Azores</option>
                            <option value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                            <option value="Casablanca">(GMT+00:00) Casablanca</option>
                            <option value="Dublin">(GMT+00:00) Dublin</option>
                            <option value="Edinburgh">(GMT+00:00) Edinburgh</option>
                            <option value="Lisbon">(GMT+00:00) Lisbon</option>
                            <option value="London">(GMT+00:00) London</option>
                            <option value="Monrovia">(GMT+00:00) Monrovia</option>
                            <option selected="selected" value="UTC">(GMT+00:00) UTC</option>
                            <option value="Amsterdam">(GMT+01:00) Amsterdam</option>
                            <option value="Belgrade">(GMT+01:00) Belgrade</option>
                            <option value="Berlin">(GMT+01:00) Berlin</option>
                            <option value="Bern">(GMT+01:00) Bern</option>
                            <option value="Bratislava">(GMT+01:00) Bratislava</option>
                            <option value="Brussels">(GMT+01:00) Brussels</option>
                            <option value="Budapest">(GMT+01:00) Budapest</option>
                            <option value="Copenhagen">(GMT+01:00) Copenhagen</option>
                            <option value="Ljubljana">(GMT+01:00) Ljubljana</option>
                            <option value="Madrid">(GMT+01:00) Madrid</option>
                            <option value="Paris">(GMT+01:00) Paris</option>
                            <option value="Prague">(GMT+01:00) Prague</option>
                            <option value="Rome">(GMT+01:00) Rome</option>
                            <option value="Sarajevo">(GMT+01:00) Sarajevo</option>
                            <option value="Skopje">(GMT+01:00) Skopje</option>
                            <option value="Stockholm">(GMT+01:00) Stockholm</option>
                            <option value="Vienna">(GMT+01:00) Vienna</option>
                            <option value="Warsaw">(GMT+01:00) Warsaw</option>
                            <option value="West Central Africa">(GMT+01:00) West Central Africa</option>
                            <option value="Zagreb">(GMT+01:00) Zagreb</option>
                            <option value="Athens">(GMT+02:00) Athens</option>
                            <option value="Bucharest">(GMT+02:00) Bucharest</option>
                            <option value="Cairo">(GMT+02:00) Cairo</option>
                            <option value="Harare">(GMT+02:00) Harare</option>
                            <option value="Helsinki">(GMT+02:00) Helsinki</option>
                            <option value="Istanbul">(GMT+02:00) Istanbul</option>
                            <option value="Jerusalem">(GMT+02:00) Jerusalem</option>
                            <option value="Kyiv">(GMT+02:00) Kyiv</option>
                            <option value="Pretoria">(GMT+02:00) Pretoria</option>
                            <option value="Riga">(GMT+02:00) Riga</option>
                            <option value="Sofia">(GMT+02:00) Sofia</option>
                            <option value="Tallinn">(GMT+02:00) Tallinn</option>
                            <option value="Vilnius">(GMT+02:00) Vilnius</option>
                            <option value="Baghdad">(GMT+03:00) Baghdad</option>
                            <option value="Kuwait">(GMT+03:00) Kuwait</option>
                            <option value="Minsk">(GMT+03:00) Minsk</option>
                            <option value="Nairobi">(GMT+03:00) Nairobi</option>
                            <option value="Riyadh">(GMT+03:00) Riyadh</option>
                            <option value="Tehran">(GMT+03:30) Tehran</option>
                            <option value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                            <option value="Baku">(GMT+04:00) Baku</option>
                            <option value="Moscow">(GMT+04:00) Moscow</option>
                            <option value="Muscat">(GMT+04:00) Muscat</option>
                            <option value="St. Petersburg">(GMT+04:00) St. Petersburg</option>
                            <option value="Tbilisi">(GMT+04:00) Tbilisi</option>
                            <option value="Volgograd">(GMT+04:00) Volgograd</option>
                            <option value="Yerevan">(GMT+04:00) Yerevan</option>
                            <option value="Kabul">(GMT+04:30) Kabul</option>
                            <option value="Islamabad">(GMT+05:00) Islamabad</option>
                            <option value="Karachi">(GMT+05:00) Karachi</option>
                            <option value="Tashkent">(GMT+05:00) Tashkent</option>
                            <option value="Chennai">(GMT+05:30) Chennai</option>
                            <option value="Kolkata">(GMT+05:30) Kolkata</option>
                            <option value="Mumbai">(GMT+05:30) Mumbai</option>
                            <option value="New Delhi">(GMT+05:30) New Delhi</option>
                            <option value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                            <option value="Kathmandu">(GMT+05:45) Kathmandu</option>
                            <option value="Almaty">(GMT+06:00) Almaty</option>
                            <option value="Astana">(GMT+06:00) Astana</option>
                            <option value="Dhaka">(GMT+06:00) Dhaka</option>
                            <option value="Ekaterinburg">(GMT+06:00) Ekaterinburg</option>
                            <option value="Rangoon">(GMT+06:30) Rangoon</option>
                            <option value="Bangkok">(GMT+07:00) Bangkok</option>
                            <option value="Hanoi">(GMT+07:00) Hanoi</option>
                            <option value="Jakarta">(GMT+07:00) Jakarta</option>
                            <option value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                            <option value="Beijing">(GMT+08:00) Beijing</option>
                            <option value="Chongqing">(GMT+08:00) Chongqing</option>
                            <option value="Hong Kong">(GMT+08:00) Hong Kong</option>
                            <option value="Krasnoyarsk">(GMT+08:00) Krasnoyarsk</option>
                            <option value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                            <option value="Perth">(GMT+08:00) Perth</option>
                            <option value="Singapore">(GMT+08:00) Singapore</option>
                            <option value="Taipei">(GMT+08:00) Taipei</option>
                            <option value="Ulaanbaatar">(GMT+08:00) Ulaanbaatar</option>
                            <option value="Urumqi">(GMT+08:00) Urumqi</option>
                            <option value="Irkutsk">(GMT+09:00) Irkutsk</option>
                            <option value="Osaka">(GMT+09:00) Osaka</option>
                            <option value="Sapporo">(GMT+09:00) Sapporo</option>
                            <option value="Seoul">(GMT+09:00) Seoul</option>
                            <option value="Tokyo">(GMT+09:00) Tokyo</option>
                            <option value="Adelaide">(GMT+09:30) Adelaide</option>
                            <option value="Darwin">(GMT+09:30) Darwin</option>
                            <option value="Brisbane">(GMT+10:00) Brisbane</option>
                            <option value="Canberra">(GMT+10:00) Canberra</option>
                            <option value="Guam">(GMT+10:00) Guam</option>
                            <option value="Hobart">(GMT+10:00) Hobart</option>
                            <option value="Melbourne">(GMT+10:00) Melbourne</option>
                            <option value="Port Moresby">(GMT+10:00) Port Moresby</option>
                            <option value="Sydney">(GMT+10:00) Sydney</option>
                            <option value="Yakutsk">(GMT+10:00) Yakutsk</option>
                            <option value="New Caledonia">(GMT+11:00) New Caledonia</option>
                            <option value="Solomon Is.">(GMT+11:00) Solomon Is.</option>
                            <option value="Vladivostok">(GMT+11:00) Vladivostok</option>
                            <option value="Auckland">(GMT+12:00) Auckland</option>
                            <option value="Fiji">(GMT+12:00) Fiji</option>
                            <option value="Kamchatka">(GMT+12:00) Kamchatka</option>
                            <option value="Magadan">(GMT+12:00) Magadan</option>
                            <option value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                            <option value="Wellington">(GMT+12:00) Wellington</option>
                            <option value="Chatham Is.">(GMT+12:45) Chatham Is.</option>
                            <option value="Nuku&#39;alofa">(GMT+13:00) Nuku&#39;alofa</option>
                            <option value="Tokelau Is.">(GMT+13:00) Tokelau Is.</option></select>
                    </div>
                </div>
                <div class='form-group'>
                    <a class="g-text-underlined g-text-positive" href="/identity/manage?to=/password">Change Your Password</a>
                </div>
            </div>
            <div class='form-submit'>
                <button class="button button--positive" name="button" type="submit">Save My Details</button>
            </div>
        </form>

    </div>
    <div class='sidebar'>
        <div class='content-block'>
            <h3 class='g-heading-gamma'>Desktop Notifications</h3>
            <p>Deploy supports <a href="http://notiapp.com">Noti</a>, an application that allows you to receive desktop notifications.</p>
            <p><a class="button" data-method="post" href="/profile/noti" rel="nofollow">Enable</a></p>
            <h3 class='g-heading-gamma'>Your API Key</h3>
            <p>You can use the key below (along with your e-mail address) to authenticate to the Deploy API.</p>
            <div class='form-group'>
<textarea class="textarea textarea--snippet" id="api_key" name="api_key" readonly="readonly">
dhvbzaovnsmybdanqsk88d67xkk136tcfjnv976f</textarea>
            </div>
            <p><a class="g-text-negative g-text-underlined" data-confirm="Are you sure you want to reset your API key?" data-method="post" data-readonly="true" href="/regenerate_api_key" rel="nofollow">Reset API Key →</a></p>
        </div>
    </div>

</div>
<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_footer.ctp'; ?>
<!--- feedback element, no use here --->

<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_foot_js.ctp'; ?>
</body>
</html>
