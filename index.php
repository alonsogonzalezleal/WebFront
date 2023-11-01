<?php

// CONSTANTS
define('APP_VERSION', '1.0.0'); // IMPORTANT! This controls the versions of your resources. If you don't update this every deploy, browsers will cache the last version of the resources, potentially causing issues with page visualization.
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
define('URL', $_SERVER['HTTP_HOST']);

// Require App logic
require_once ROOT_PATH . '/src/App.php';

// SERVER CONFIGURATION
date_default_timezone_set('America/Mexico_City');

// Include the required controller files
require_once ROOT_PATH . '/src/controllers/HomeController.php';
require_once ROOT_PATH . '/src/controllers/SectionController.php';
require_once ROOT_PATH . '/src/controllers/AboutController.php';

if (strpos(URL_APP, 'localhost') !== false) {
    define('URL_APP', 'http://localhost:8000'); // Change for local debugging
} else {
    define('URL_APP', 'https://www.mydomain.com'); // Change for production domain
}


// Here, you can manage your controllers, which will contain the routes (paths) for the browser's address bar.
$routes_base = array(
    '' => 'Default@HomeController',
    'about' => 'Default@AboutController',
    'section' => 'Section@SectionController'
);

require App::renderApp($routes_base);