<?php
namespace App\Services;
class Router
{
    private static $list = [];

    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name

        ];
    }
    public static function enable(){
       var_dump(self::$list);
    }
}

