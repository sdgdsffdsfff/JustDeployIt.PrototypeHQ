<!DOCTYPE html>
<html lang='en'>
<head>
	<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='session-page'>
	<div class='session-header'>
		<div class='session-container'>
			<h1><a href="/reset"><img alt="Logo" src="/assets/images/logo-acf8a53bc09be8200bbb1bf638bc7c00.svg" /></a></h1>
		</div>
	</div>
	<div class='session-container'>

		<div class='section section--first section--skinny box'>
			<h2 class='g-heading-gamma u-text-center'>Forgotten your password?</h2>
		</div>
		<div class='section section--first section--skinny box'>
			<form accept-charset="UTF-8" action="/reset" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="q2fCH4M0FjDdtpSSQj3xONhD+YWdWZP1QZzNHL/e+NQ=" /></div>
				<div class='form-group'>
					<label class="form-label" for="email_address">E-Mail Address</label>
					<input class="form-control" id="email_address" name="email_address" type="text" />
					<p class='form-hint'>If you can&rsquo;t remember the e-mail address you need to login, please contact your account administrator, <strong>shukai zhao</strong>.</p>
				</div>
				<div class='form-group'>
					<button class="button button--positive" name="button" type="submit">Send me a password</button>
				</div>
			</form>

		</div>
		<p class='page-back u-text-right'>
			<a class="page-back__link" href="/login">&#8592; Back to login</a>
		</p>

	</div>
</body>
</html>
