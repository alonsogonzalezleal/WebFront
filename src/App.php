<?php

class App{

    private static $root;
    private static $uri;
    private static $routes_base;
    private static $app;

    private function __construct($routes_base){

        $this->root = $_SERVER['DOCUMENT_ROOT'];
        define("URL_ROUTES", "{$this->root}/src/routes/Views");
        define("URL_BASES", "{$this->root}/src/routes/Views/bases");

        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->uri = explode('/', $this->uri);

        $this->routes_base = $routes_base;
    }

    private static function renderBase(){
        $requested_uri = self::$app->uri[1];
        $base = URL_BASES;

        if (array_key_exists($requested_uri, self::$app->routes_base)) {
            $baseName =  (count($partes = explode('@', self::$app->routes_base[$requested_uri])) === 2) ? $partes[0] : null;
            $baseName = ($baseName === null ? 'Error' : $baseName);
            $base .= "/{$baseName}.php";
        } else {
            $base .= '/Error.php';
            http_response_code(404);
        }

        return $base;
    }

    public static function renderApp($routes_base){
        if (empty(self::$app)){
            self::$app = new App($routes_base);
        }
        return App::renderBase();
    }

    public static function renderContent(){
        $content = URL_ROUTES;

        if (http_response_code() === 404){
            return $content .= '/NotFoundView.php';
        }

        $requested_uri = self::$app->uri[1];
        $controller = (count($partes = explode('@', self::$app->routes_base[$requested_uri])) === 2) ? $partes[1] : null;
        $routes = constant("$controller::routes");
        $sliced_uri = array_slice(self::$app->uri, 1);
        $requested_uri = '/' . implode('/', $sliced_uri);
        $requested_uri = (substr($requested_uri, -1) === '/') ? rtrim($requested_uri, '/') : $requested_uri;
        $matched_route = null;

        foreach ($routes as $pattern => $route){
            if (preg_match("#^$pattern$#", $requested_uri)){
                $matched_route = $route;
                break;
            }
        }

        $content .= ($matched_route !== null) ? "{$matched_route}.php" : '/NotFoundView.php';
        
        return $content;
    }
}