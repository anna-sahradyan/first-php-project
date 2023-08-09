<?php

namespace App\Services;
class Router
{
    private static $list = [];

    /*Method of route  for pages
     *@param $uri
     *@param $page_name
     * */

    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name

        ];
    }

    public static function post($uri, $class, $method)
    {
        self::$list[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true


        ];
    }

    public static function enable()
    {
        $query = $_GET['q'];

        foreach (self::$list as $route) {
            if ($route["uri"] === "/" . $query) {
                if ($route["post"] === true) {
                    $action = new $route["class"]();
                    $method = $route["method"];
                    $action->$method();
                } else {
                    require_once "views/pages/" . $route['page'] . ".php";
                    die();
                }
            }
        }
        self::not_found_page();
    }

    private static function not_found_page()
    {
        require_once "views/errors/404.php";
    }

}

