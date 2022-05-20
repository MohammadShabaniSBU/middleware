<?php

namespace App\core;


class Request
{

    private static ?Request $instance = null;

    private function __construct()
    {
    }

    public static function getRequest(): Request
    {
        if(is_null(self::$instance))
            self::$instance = new self();
        return self::$instance;
    }

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position === false)
        {
            return $path;
        }
        return substr($path, 0, $position);
    }


    public function method(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }


    public function isGet(): bool
    {
        return $this->method() === 'get';
    }


    public function isPost(): bool
    {
        return $this->method() === 'post';
    }


    public function getBody(): array
    {
        $body = [];

        if($this->isGet())
        {
            foreach ($_GET as $key => $value)
            {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS );
            }
        }

        if($this->isPost())
        {
            foreach ($_POST as $key => $value)
            {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS );
            }
        }

        return $body;
    }

    public function getUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getQueryString()
    {
        $path = $this->getUri();
        $position = strpos($path, '?');
        if($position === false)
        {
            return $path;
        }
        return substr($path, $position+1);
    }


}