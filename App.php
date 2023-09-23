<?php

$root = $_SERVER['DOCUMENT_ROOT'];

require_once "{$root}/src/controllers/HomeController.php";
require_once "{$root}/src/controllers/SectionController.php";
require_once "{$root}/src/controllers/AboutController.php";


class App{

    private $root;
    private $uri;
    private $routesBase;

    private function __construct(){

        $this->root = $_SERVER['DOCUMENT_ROOT'];
        define("URL_ROUTES", "{$this->root}/src/routes");
        define("URL_BASES", "{$this->root}/src/routes/bases");

        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->uri = explode('/', $this->uri);

        // Here you can administrate your routes bases
        $this->routesBase = array(
            '' => 'Default@HomeController',
            'about' => 'Default@AboutController',
            'section' => 'Section@SectionController'
        );
    }

    public static function renderApp(){
        return App::renderBase();
    }

    private static function renderBase(){
        $app = new App();
        $requested_uri = $app->uri[1];
        $base = URL_BASES;

        if (array_key_exists($requested_uri, $app->routesBase)) {
            $baseName =  (count($partes = explode('@', $app->routesBase[$requested_uri])) === 2) ? $partes[0] : null;
            $baseName = ($baseName === null ? 'Error' : $baseName);
            $base .= "/{$baseName}.php";
        } else {
            $base .= '/Error.php';
            http_response_code(404);
        }

        return $base;
    }

    public static function renderContent(){
        $content = URL_ROUTES;

        if (http_response_code() === 404){
            return $content .= '/404.php';
        }

        $app = new App();
        $requested_uri = $app->uri[1];
        $controller = (count($partes = explode('@', $app->routesBase[$requested_uri])) === 2) ? $partes[1] : null;
        $routes = constant("$controller::routes");
        $sliced_uri = array_slice($app->uri, 1);
        $requested_uri = '/' . implode('/', $sliced_uri);
        $requested_uri = (substr($requested_uri, -1) === '/') ? rtrim($requested_uri, '/') : $requested_uri;
        $matched_route = null;

        foreach ($routes as $pattern => $route){
            if (preg_match("#^$pattern$#", $requested_uri)){
                $matched_route = $route;
                break;
            }
        }

        $content .= ($matched_route !== null) ? "/{$matched_route}.php" : '/404.php';
        
        return $content;
    }
}