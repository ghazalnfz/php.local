<?php



//spl_autoload_register(function($className) {
//     echo $className;
// });
//
//new finalClass();

class Autoloader
{
    public static function ClassLoader(string $className)
    {
        $filePath = __DIR__ . "classes/$className.php";

        if (is_readable($filePath)) {
            require $filePath;
        }
    }
}

spl_autoload_register('Autoloader::ClassLoader');

new finalClass();