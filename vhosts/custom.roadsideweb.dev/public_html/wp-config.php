<?php
define('DB_NAME', 'rsmm');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         '^=.b4`}.^v /XV9w3td7m^y%]/({m]gnBC!#Z~h~*.3o-Yeaqr+gwZwM?A$u&bN;');
define('SECURE_AUTH_KEY',  'w3-WMe,AaZfQ>?:.]@O/i{ NkhAygI3OO/t+6h{O1r|)HPh[fwdkT$zF/(Ubz1sS');
define('LOGGED_IN_KEY',    '^@|@ 0/-=|/*UONu{e3uf#b)|7?mZMAm@q_.(k}:/-.a <#8,BYG*~OB6j%qe*p:');
define('NONCE_KEY',        '[BU<1lMP+~!O>Yq7~s:ar?v>NH7/2O{w/SLfBHt{|jNB:|kbYB1E}mG3s&vO8|-9');
define('AUTH_SALT',        '<G&kY&_g%UA9>NnVN;18R7SeHh|q;w0.}xlsQRjfhJm]F=7=o@JXK}WY35+|w{Bb');
define('SECURE_AUTH_SALT', '`]v;,UmBZ?ljmy&Q&jb>UhD(jPS]dNtv!!`w%]<xL^+dU=waDoYNG97#I=_z&2fv');
define('LOGGED_IN_SALT',   'e X8;4hdSFNTQ<@{Pe|RA7|&7nc5x*.+}.AW$zt|OGFaRjVokoXFJpOAyW6MbH-:');
define('NONCE_SALT',       '7Y!Kllkvn*u[D|1MZ{;+v<DG-Z>e?9jQAutK!(T``5c$4=_e(QQuX4ThT2j*pcB:');

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