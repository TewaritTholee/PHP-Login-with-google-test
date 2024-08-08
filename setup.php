<?php
require_once('vendor/autoload.php');
$google = new Google_Client();
$google->setClientId('YOUR_CLIENT_ID'); // แทนที่ด้วย Client ID ของคุณ
$google->setClientSecret('YOUR_CLIENT_SECRET'); // แทนที่ด้วย Client Secret ของคุณ
$google->setRedirectUri('http://localhost/api/login_with_google/profile.php');
$google->addScope('email');
$google->addScope('profile');

session_start();
