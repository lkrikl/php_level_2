<?php

class Autoloader
{
    public $paths = [
        'models/',
        'services/',
        'traits/'
    ];

    public function loadClass($className)
    {
        $className = str_replace("app","..",$className);
        $className = str_replace('\\','/', $className) . ".php";
        include $className;
    }
}