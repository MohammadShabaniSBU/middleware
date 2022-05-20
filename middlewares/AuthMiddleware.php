<?php


namespace App\middlewares;

use App\core\Application;
use App\core\Auth;
use App\exceptions\MiddlewareException;
use Exception;

class AuthMiddleware {

    public function check() 
    {
        if (! Auth::do()->isLogin())
            throw new MiddlewareException($this);
    }

    public function failure()
    {
        Application::$app->response->to('/login');
    }
}
