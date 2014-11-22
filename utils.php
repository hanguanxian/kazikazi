<?php

// define('APPID', 'wxb4998205d6371069');
// define('APP_SECRET', 'bb7fe71b1be1832afdd7063dd340d688');
// define('SECRET', 'suningtagisawesome');
// define('BASE_URL', 'http://vappn.com/suning/'); 
define('LOCAL', 1);
define('DEV', 1);

function initRedbean() {
    require_once './lib/rb.php';
    if (LOCAL) {
        R::setup('mysql:host=localhost;dbname=customer;charset=utf8;encoding:utf8', 'root', '');
    } else {
        R::setup('mysql:host=10.22.26.24;dbname=customer;charset=utf8;encoding:utf8_mb4', 'master', '12345');
    }
}

function render($tpl, $variables = array()) {
    require_once './lib/Twig/Autoloader.php';
    Twig_Autoloader::register(); 
    $loader = new Twig_Loader_Filesystem('./views');
    $twig = new Twig_Environment($loader, array(
        'cache' => './cache',
        'debug' => DEV
    ));
    
    $variables['baseUrl'] = BASE_URL;
    echo $twig->render($tpl, $variables);
}
