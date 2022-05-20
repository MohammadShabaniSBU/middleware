<?php

namespace App\core;

class Controller
{
    public string $layout = 'main';
    public function setLayout($layout):void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []):void
    {
        Application::$app->router->view->renderView($view, $params);
    }
}