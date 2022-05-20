<?php

namespace App\core;

class Response
{

    private static ?Response $instance = null;

    private function __construct()
    {
    }

    public static function getResponse(): Response
    {
        if(is_null(self::$instance))
            self::$instance = new self();
        return self::$instance;
    }

    public function setStatus(int $code)
    {
        http_response_code($code);
    }

    public function to($location = null)
    {
        header('Location: '.$location);
    }

}