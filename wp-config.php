<?php

// note that this is loaded from wp-config.d by the real wp-config.php

    !defined('DB_USER')          && define('DB_USER',          getenv('QOVERY_DATABASE_WORDPRESS_USERNAME')        ?: 'superuser');
    !defined('DB_NAME')          && define('DB_NAME',          getenv('QOVERY_DATABASE_WORDPRESS_NAME')        ?: 'qwerty');
    !defined('DB_PASSWORD')      && define('DB_PASSWORD',      getenv('QOVERY_DATABASE_WORDPRESS_PASSWORD')    ?: 'GseH6y0YL9URNc5J');
    !defined('DB_HOST')          && define('DB_HOST',          getenv('QOVERY_DATABASE_WORDPRESS_HOST')        ?: 'qwerty-r63ajcoriwo4nt8m-svc.qovery.io');


    if(!defined('WP_SITEURL')) {
        if (getenv('QOVERY_ROUTER_MAIN_WORDPRESSFORA2SIDEDMARKET_URL')) {
            define('WP_SITEURL', getenv('QOVERY_ROUTER_MAIN_WORDPRESSFORA2SIDEDMARKET_URL'));
        } else {
            define('WP_SITEURL', $proto . $_SERVER['SERVER_NAME']);
        }
    }

    if(!defined('WP_HOME')) {
        if (getenv('QOVERY_ROUTER_MAIN_WORDPRESSFORA2SIDEDMARKET_URL')) {
            define('WP_HOME', getenv('QOVERY_ROUTER_MAIN_WORDPRESSFORA2SIDEDMARKET_URL'));
        } else {
            define('WP_HOME', $proto . $_SERVER['SERVER_NAME']);
        }
    }
