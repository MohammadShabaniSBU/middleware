<?php

namespace App\core;

class View
{
    public function __construct()
    {
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);

        echo str_replace("{{content}}", $viewContent, $layoutContent);

    }

    protected function layoutContent()
    {

        $layout = Application::$app->controller->layout;

        ob_start();
        include_once "../views/layouts/$layout.php";
        return ob_get_clean();

    }

    protected function renderOnlyView($view, $params)
    {

        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once "../views/$view.php";
        return ob_get_clean();
    }

}