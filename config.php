<?php
// Database Settings
define("DB_HOST", "0.tcp.in.ngrok.io:12456");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "botnet");

// Application Settings
define("ADMIN_EMAIL", "localhost@gmail.com");
define("SITE_URL", "https://ultimatetoys.club/.hidden"); // Example: http://localhost/blacknet
define("APP_NAME", "BlackNET");
define("APP_DEVELOPER", "Black.Hacker");
define("APP_VERSION", "v3.7.0");
define("APP_PATH", dirname(__FILE__, 2) . DIRECTORY_SEPARATOR); // ( Don't Change );
define("MODULES_PATH", APP_PATH . "modules" . DIRECTORY_SEPARATOR); //( Don't Change);
define("DATA_SPLITTER", "|BN|"); // ( Don't Change );
define("LOGS_PATH", APP_PATH . "php_logs.log"); // ( Don't Change );

// Environment Settings
require_once 'environment.php';

// Autoload Composer
require_once APP_PATH . 'vendor/autoload.php';

// Load BlackNET Modules
require_once 'modules.php';
