<?php
// index.php interface configuration
$title = "Generate Tokens";
$img = "https://clickhelp.co/images/feeds/blog/2016.05/keys.jpg";
$scope_info = "This service requires the following permissions for your account:";

// Client configuration
$issuer = "http://localhost:5000/";
$client_id = "b3bf431d-f373-40c4-96f9-fe688238a231";
$client_secret = "68c44822-7e1f-46c9-8249-6f7a91c8781f";
$redirect_url = "http://localhost:81/oauth/refreshtoken.php";
// add scopes as keys and a friendly message of the scope as value
$scopesDefine = array('openid' => 'log in using your identity', 
		'api.auth' => 'read your api',
		'email' => 'read your email',
		'profile' => 'read your basic profile info');

// refreshtoken.php interface configuration
$refresh_token_note = "NOTE: New refresh tokens expire in 12 months.";
$access_token_note = "NOTE: New access tokens expire in 1 hour.";
$manage_token_note = "You can manage your refresh tokens in the following link: ";
$manageTokens = "http://localhost:5000/connect/token";

?>
