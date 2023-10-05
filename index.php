<?php

$url = $_SERVER['HTTP_HOST'];

if (strpos($url, "localhost") !== false) {
    define('URL_APP', 'http://localhost:8000'); // Change for local debugging
} else {
    define('URL_APP', 'https://www.mydomain.com' ); // Change for production domain
}

define('APP_VERSION', '1.0.0'); // IMPORTANT! This controls the versions of your resources. If you don't update this every deploy, browsers will cache the last version of the resources, potentially causing issues with page visualization.

require_once "{$_SERVER['DOCUMENT_ROOT']}/App.php";
require App::renderApp();