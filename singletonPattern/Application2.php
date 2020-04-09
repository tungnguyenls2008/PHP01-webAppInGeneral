<?php


class Application2
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}

$app1 = Application2::getInstance();
$app2 = Application2::getInstance();
$app3 = new Application(); //Error