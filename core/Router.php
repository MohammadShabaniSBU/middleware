<?php

namespace App\core;

class Router
{

    protected array $routes = [];
    public Request $request;
    private Response $response;
    public View $view;
    public function __construct(Request $request, Response $response, View $view)
    {
        $this->response = $response;
        $this->request = $request;
        $this->view = $view;
    }

    public function get($path, $callback, $middleware = null)
    {
        $this->routes['get'][$path] = [
            'callback' => $callback,
            'middleware' => $middleware,
        ];
    }

    public function post($path, $callback, $middleware = null)
    {
        $this->routes['post'][$path] = [
            'callback' => $callback,
            'middleware' => $middleware,
        ];
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();

        $route = $this->routes[$method][$path] ?? false;

        $callback = $route['callback'];
        $middleware = $route['middleware'];

        if ($callback === false)
        {

            $this->response->setStatus(404);
            Application::$app->controller = new Controller();
            $this->view->renderView('_404');
            exit;
        }

        if(is_array($callback))
        {
           Application::$app->controller = new $callback[0];
           $callback[0] = Application::$app->controller;
        }

        if (!is_null($middleware)) {
            call_user_func([new $middleware, 'check']);
        }

        return call_user_func($callback);

    }

}