<?php
define('DB_NAME', 'rsmm');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         've4hbhEM{3YLucKUakrdis/&0_zO[+&g@x&SJ_*H<)Y0.2yYo@Sn^xy)}4#=&E3h');
define('SECURE_AUTH_KEY',  '3@cUC43#;;-(@bj|fuf=Cor1h^?i{/CI|{LIw:kNC2Q A|fDa?~!d8Od5-`EP)A?');
define('LOGGED_IN_KEY',    'wKe@-I&<bwch+R)3s(up]0D)4j=ZA|)8ePtaLHb:SP|-lA[%T2?A{Bx% )63J9|L');
define('NONCE_KEY',        'i#%27kDld`Qnx4KJYl%&c6Um>`aaZT{kge`5q4^vU7M|&]%xt 691991.WT$YKCS');
define('AUTH_SALT',        'x46JcBJxvONtmnfAUX^TKI@ogrfaY)$%zg4$FW!D[46D<CiReP0E,Tjhl(jw#d.h');
define('SECURE_AUTH_SALT', 'o(R]C0-2ODB;gL&I,+MUx]Q;]i6nhDSW8)$H;-hgh&+|WErJ1wOu9P OnWlTFVmD');
define('LOGGED_IN_SALT',   '3Hvk,H|9 92L_X-#go15!)LB)gHUg}~-N=P+| xlnB9B-AeSLrTt-}8`MQ-z?%),');
define('NONCE_SALT',       'x1s<KF^2aStd0%xFH`uW p*5S 2$ez:T@($d1;8>!VU(5$-pqMcbl2K&9+baj26T');

$table_prefix = 'wp_';
define ('WPLANG', '');
if( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__).'/wordpress/');
define('WP_SITEURL', 'http://'.$_SERVER['SERVER_NAME'].'');
define('WP_CONTENT_DIR', ABSPATH.'public');
define('WP_CONTENT_URL', WP_SITEURL.'/public');
define('WP_PLUGIN_DIR', dirname(__FILE__.'../').'/vendor/plugins');
define('WP_PLUGIN_URL', WP_SITEURL.'/vendor/plugins');
define('PLUGINDIR', WP_PLUGIN_DIR);

require_once(ABSPATH . 'wp-settings.php');
?>