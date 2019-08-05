https://code.tutsplus.com/tutorials/setup-oauth2-server-using-passport-in-laravel--cms-30576


generate client first 
- $ php artisan passport:client

check oauth_clients table
	personal_access_client = 0
	password_client = 0
	revoked = 0

access site: http://third-party.test:8080/auth_redirection.php