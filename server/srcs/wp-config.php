<?php

define( 'DB_NAME', 'wordpress_db');
define( 'DB_USER', 'jkate' );
define( 'DB_PASSWORD', '5045547' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'PBWmSUl/j`=w;2/<[va?R1(Zk. WM?fD6mPaTo~h!k~ooFF;CD2+P}tM_ws3yTJy');
define('SECURE_AUTH_KEY',  '>@zSR1&cnGn|&lY?-&M-+9#9-o:?9yJ7Peo[avKI72[TxX&T|W~xDO(b)(jW%>HS');
define('LOGGED_IN_KEY',    '[?V%[v5|LgEf/aQ-Gv+3gJl[u>+($j#0PT+b0:u@=:R{}^q=NM}Dm27KAe8ak&%Z');
define('NONCE_KEY',        'L+lYq;lZ.>%+7g.@S&gZ_G]oZar|r?PsCk:vo4S]uqvg(d-A<,G]Hc+I{}5|0C;l');
define('AUTH_SALT',        'rbA`Z?[,*I[wy)L#O~pw|$Uzo};%V9(~AlK,qb25dlD8X)oNb~{KLDj{y`~+0m<]');
define('SECURE_AUTH_SALT', ')bH_-H3>e_fW$RW#<W;Xd!P+lJwKD1V(m+4u{ajfpzZ-.iJ+ ^Ev3||t$+z| Xl#');
define('LOGGED_IN_SALT',   '-+cBW>KI7N7|zix)3tiOd{q]HF_O7=wMT[Y=}K?ZJZLweU~-fV,d?YJ)WC#O:JMB');
define('NONCE_SALT',       'H}iDAR xZb[qcu]*1l;An,HShd3KSL4fP125-m2n|(w@_K.6C~FzJ(|0m:jkK#hJ');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';