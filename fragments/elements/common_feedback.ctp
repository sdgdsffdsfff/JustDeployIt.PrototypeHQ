<div class='feedback-bar'>
    <div class='container'>
        <ul class='feedback-list'>
            <li class='feedback-list__item'>
                <a class="feedback-list__link js-feedback-form" href="#">Report Bug</a>
                <div class='feedback-bar__form'>
                    <h2 class='form-heading g-heading-gamma'>Report Bug</h2>
                    <form accept-charset="UTF-8" action="/feedback/report_bug" class="js-feedback" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="hCBCVjuHS1LiQhvPKI9TXQFfxx4W5W8ql3IgroD+9js=" /></div>
                        <input id="url" name="url" type="hidden" value="https://treetree.beta.deployhq.com/?action=index&amp;controller=dashboard" />
                        <div class='form-group'>
                            <label class="form-label" for="description">Describe Problem</label>
                            <textarea class="textarea" id="description" name="description" rows="6"></textarea>
                            <p class='form-hint'>Please describe the bug you are experiencing.</p>
                        </div>
                        <div class='form-group'>
                            <label class="form-label" for="browser">Browser</label>
                            <input class="form-control" id="browser" name="browser" type="text" />
                            <p class='form-hint'>What browser and browser version are you using?</p>
                        </div>
                        <button class="button button--positive button--small" name="button" type="Submit">Send</button>
                    </form>

                </div>
            </li>
            <li class='feedback-list__item'>
                <a class="feedback-list__link js-feedback-form" href="#">Feedback</a>
                <div class='feedback-bar__form'>
                    <h2 class='form-heading g-heading-gamma'>Submit Feedback</h2>
                    <form accept-charset="UTF-8" action="/feedback/feedback" class="js-feedback" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="hCBCVjuHS1LiQhvPKI9TXQFfxx4W5W8ql3IgroD+9js=" /></div>
                        <div class='form-group'>
                            <label class="form-label" for="summary">What do you think?</label>
                            <textarea class="textarea" id="description" name="description" rows="6"></textarea>
                        </div>
                        <button class="button button--positive button--small" name="button" type="Submit">Send</button>
                    </form>
                </div>
            </li>
        </ul>
        <p class='feedback-paragraph'>
            You are currently using the beta version of Deploy.
            <a href="https://treetree.deployhq.com/">Use the stable version →</a>
        </p>
    </div>
</div>
