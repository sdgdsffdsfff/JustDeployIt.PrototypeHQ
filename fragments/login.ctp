<!DOCTYPE html>
<html lang='en'>
<head>
	<?php include 'elements' . DIRECTORY_SEPARATOR . 'common_head.ctp'; ?>
</head>
<body class='session-page'>
	<div class='session-header'>
		<div class='session-container'>
			<h1><a href="/login"><img alt="Logo" src="/assets/images/logo-acf8a53bc09be8200bbb1bf638bc7c00.svg" /></a></h1>
		</div>
	</div>
	<div class='session-container'>
		<div class="flash flash--spaced flash--success"><p>You have been logged out successfully</p></div>
		<div class='section section--first section--skinny box'>
			<h2 class='g-heading-gamma u-text-center'>treetree</h2>
		</div>
		<div class='section section--first section--skinny box'>
			<form accept-charset="UTF-8" action="/login" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="hCBCVjuHS1LiQhvPKI9TXQFfxx4W5W8ql3IgroD+9js=" /></div>
				<div class='form-group u-margin-top'>
					<label class="form-label" for="username">Username / E-Mail Address</label>
					<input class="form-control" id="username" name="username" spellcheck="false" type="text" />
				</div>
				<div class='form-group'>
					<label class="form-label" for="password">Password</label>
					<input class="form-control" id="password" name="password" type="password" />
				</div>
				<div class='form-group clearfix'>
					<button class="button button--positive u-float-left u-margin-right" name="button" type="submit">Login</button>
					<label class="form-checkbox u-float-right" for="remember"><input class="form-checkbox__input is-toggle-hint" id="remember" name="remember" type="checkbox" value="1" />
						<span class='form-checkbox__text g-text-subtle g-text-small'>Remember Me</span>
						<p class='form-hint g-text-negative u-margin-top'>
							Please remember, anyone with access to your local cookie store will also be able to login to your account.
						</p>
						<p class='form-hint g-text-negative'>
							<em>Do not use this functionality on public or un-trusted computers</em>.
						</p>
					</label></div>
				</form>

			</div>
			<p class='page-back u-text-right'>
				<a class="page-back__link" href="/reset">Can&#39;t login?</a>
			</p>

		</div>
	</body>
	</html>
