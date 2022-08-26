<?php
// DATABASE CONFIGURATION
define('DB_HOST', 'DATABASE HOST');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'DATABASE NAME');

//GOOGLE API CONFIGURATION (google api services)
define('GOOGLE_CLIENT_ID', 'CLIENT ID');
define('GOOGLE_CLIENT_SECRET', 'CLIENT SECRET');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive');
define('REDIRECT_URI', 'http://localhost/google_drive_file_upload/google_drive_sync.php');

//START SESSION
if(!session_id()) session_start();

//GOOGLE AUTH URL
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 