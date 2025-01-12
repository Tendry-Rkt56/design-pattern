<?php

namespace Singleton;

class Singleton 
{

     private static $instane = null;

     // Empêcher l'instanciation
     private function __construct()
     {
          
     }

     // Empêcher la duplication
     public function __clone()
     {
          
     }

     public static function getInstance()
     {
          if (self::$instane == null) self::$instane = new self();
          return self::$instane;
     }

}