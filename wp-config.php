<?php
# Database Configuration
define( 'DB_NAME', 'wp_wlaseafoodmdev' );
define( 'DB_USER', 'wlaseafoodmdev' );
define( 'DB_PASSWORD', 'ZJvOaPEfagKFa-alGEc-' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'P{cei()?dX[MPLPh [/6=F!Rafe,.+]-Tky+Buy$p$=TCKD,bJXBUMVf^q8|L,|a');
define('SECURE_AUTH_KEY',  '<#m32gCH-6-|#sT--{L1.X-TK4Nl~$KArjN?Qj#<[9YbO#*3@-DdGz7g(63XH?Mt');
define('LOGGED_IN_KEY',    '.!*3KX?j5/m[uD9F_J<(E;8)kt^ju6V)LGN2^7Q+N;@V]nw rL$oU(|k!]T1~wP%');
define('NONCE_KEY',        'k18a8~>e_kD_|l+&n~1rQ|w]lb8{QNoPoRSwikZNYnpQaJq*<o&T+YJH>$SM(Za_');
define('AUTH_SALT',        '!Tb8w|c)P-*Ki?Ai*bH~YD>4w-_b--y/{+Qz9Gp:/YEo+m,A,aqrH=TC~3L2*@o/');
define('SECURE_AUTH_SALT', 'Xvc.gW{B-FLwm&nweZP_bH-T%5aM}89o?M.1o-Ia$8=s- @rZX*$oHE6@`8KG}T;');
define('LOGGED_IN_SALT',   'sjv3H}#CdRCdQN+N.df8ii+g]ZTh@`CCT_t%303gyOxtuh9`4+P U>jR7jNJG7<b');
define('NONCE_SALT',       'kbS; y5Th6^{<|FbMA@f6K!d[OAd-U@UE)n49o6@~nDh%G:UnhSgLavf|&L~K,eB');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'wlaseafoodmdev' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', 'ead3e0a2f4967d379ad39323889bf6ba28593ecc' );

define( 'WPE_CLUSTER_ID', '155350' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'wlaseafoodmdev.wpengine.com', 1 => 'wlaseafoodmdev.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-155350', );

$wpe_special_ips=array ( 0 => '34.72.13.182', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WPE_SFTP_ENDPOINT', '' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
