<?php
/**
 * This file is required in the root directory so WordPress can find it.
 * WP is hardcoded to look in its own directory or one directory up for wp-config.php.
 */
require_once __DIR__ . '/vendor/autoload.php';

$webrootDir = __DIR__;

define('WP_ENV', $_ENV['WP_ENV'] ?? 'production');

$wpHome = $_ENV['WP_HOME'] ?? 'http://localhost';
define('WP_HOME', trim($wpHome, '/'));
define('WP_SITEURL', WP_HOME . '/wp');
define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', realpath($webrootDir . '/' . CONTENT_DIR));
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'mysql');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

define('AUTH_KEY', 'o;Z+b)FaZM9}Z]E]k~!|:vWCEdz[?W$%&<unmi|AE?(*lq@uOIPdSTKB&hLUpZ,l');
define('SECURE_AUTH_KEY', 'v~b4jl@ jBCqpPK Hq+&B9vy+2;,Vd|-M+O0pA(l;sH_|Yd#vX=AT&;+Zu<6*;zb');
define('LOGGED_IN_KEY', ':wSDgAWi:mSt/rQO||]JQeO|tx0sKPr!a&F@M@=:gazW@eSYI@}hG^}kf gpIR.Y');
define('NONCE_KEY', 'e&jEr~2Rk(H!se,2@>_h-T!-L]Y ,|el{GM ?E}l+zh]g%SA>8[.EBa:Si+L<BEf');
define('AUTH_SALT', 'b7^o|]|iZeMG97lp0-K0?Z3+[3Q=(8;2q%oEj{KPN+WV:@kOA-~hrkv^Dh|w9)sa');
define('SECURE_AUTH_SALT', 'FNx;<YwMAPE90uD(4WcX!UQR~+-;jPFb;Y&r+|W&MBRc^}:Q-4S+C%pd`fsP5{O*');
define('LOGGED_IN_SALT', '+x}.AaD>Rf[z(e~aBR}$Ewljms?(3#Efl!cTq$5[Fi:KFpzG}JgtHbp(7JuofmpS');
define('NONCE_SALT', '|`^7:%-M-|Y#5HO}VrQ{$PyEd-!!`#bXP>N7sl5}TIssvs9+wzDYAm2abT+:E{SA');

define('WP_CACHE', (WP_ENV !== 'developemnt'));
define('DISABLE_WP_CRON', (WP_ENV === 'developemnt'));
define('WP_POST_REVISIONS', $_ENV['WP_POST_REVISIONS'] ?? 5);
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

define('WP_DEBUG', (WP_ENV === 'development'));
define('WP_DEBUG_DISPLAY', (WP_ENV === 'developemnt'));
define('WP_DEBUG_LOG', false);
define('SCRIPT_DEBUG', false);

/**
 * Allow WordPress to detect HTTPS when used behind a reverse proxy or a load balancer
 * See https://codex.wordpress.org/Function_Reference/is_ssl#Notes
 */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

if (!defined('ABSPATH')) {
    define('ABSPATH', $webrootDir . '/wp/');
}

require_once ABSPATH . 'wp-settings.php';
