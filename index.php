<?php

$url = $_SERVER['HTTP_HOST'];

if (strpos($url, "localhost") !== false) {
    define('URL_APP', 'http://localhost:8000'); // Change for local debugging
} else {
    define('URL_APP', 'https://www.mydomain.com' ); // Change for production domain
}

define('APP_VERSION', '1.0.0'); // IMPORTANT! This will control your resources versions. Also, you will need to rename the resources folder

require_once "{$_SERVER['DOCUMENT_ROOT']}/App.php";
require App::renderApp();