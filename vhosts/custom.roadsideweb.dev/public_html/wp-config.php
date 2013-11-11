<?php
define('DB_NAME', 'rsmm');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         'TwVQLo{jMHWx8ospGqk(+y%RYw#a(}c|kzBG?I_f/.ohxoS g.#-<%7U:1?afzG|');
define('SECURE_AUTH_KEY',  '0Ka{G+D4[0.&YF~`fm-,q}6=MKP*(pkSA^j~G@Cv1oNzO~djEbCr;I$z*;|`harb');
define('LOGGED_IN_KEY',    '~M )#z6SNre|&!|{rH@ta]=QdMKT^6N~8kcY/@OD 9@Id^kY,n*K}HH_:>J%~foh');
define('NONCE_KEY',        'javF+gggPKjA|<J7NF~]|41ml`GjB5RkiOFJeM31,X.t!`D}SuY R:0^]8FfHDm%');
define('AUTH_SALT',        'Jj`Jc=+|<Vh3nndW;HUlw?^<wV`9<ys$jXEyHY2u}!7{v<p|}zB#|z](^%B7~y$c');
define('SECURE_AUTH_SALT', 'B|Y4/wifB3-%j8ZV<!j^tLGO~|sL#H46tPf-E!Nn@ddI=0B$zI^Jjd_0Bp3}-|Tm');
define('LOGGED_IN_SALT',   ']uE&pbl3stZJ+<#k8iF[HVlRcV3;R*I5Ty`xq[x Pg[a)>^u?VN3;;(oHXoO5|R*');
define('NONCE_SALT',       '|)US:]X */-S?R!rx.D5!PVH%4$}6z7E;@xw7iLw@p1>S}TG$)]V1+zaIxQ/Nm56');

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