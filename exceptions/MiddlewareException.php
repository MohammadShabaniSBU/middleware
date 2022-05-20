<?php 

namespace App\exceptions;

use App\middlewares\AuthMiddleware;
use Exception;

class MiddlewareException extends Exception {
    private AuthMiddleware $mid;

    public function __construct(AuthMiddleware $mid)
    {   
        $this->mid = $mid;
    }

    public function run() 
    {
        $this->mid->failure();
    }
}