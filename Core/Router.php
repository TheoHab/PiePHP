<?php

namespace Core;

class Router
{
   private static $routes;

   public static function connect($url, $route)
   {
      self::$routes[$url] = $route;
   }

   public static function get($url)
   {
      $explode = explode(DIRECTORY_SEPARATOR, $url);
      $result = self::$routes['/'.$explode[2]];
      return $result;

   }
}
?>
