<?php

namespace App\core;

use App\core\db\Database;
use App\core\db\MysqlDatabase;

class Application
{

    public static string $ROOT_DIR;
    public static Application $app;

    public Response $response;
    public Request $request;
    public View $view;
    public MysqlDatabase $db;
    public \PDO $pdo;
    public Router $router;


    public Controller $controller;

    public function __construct(string $rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->response = Response::getResponse();
        $this->request = Request::getRequest();
        $this->view = new View();
        $this->router = new Router($this->request, $this->response, $this->view);
        $this->pdo = Database::db()->pdo($config['db']);
        $this->db = new MysqlDatabase($this->pdo);

    }

    public function run()
    {
        $this->router->resolve();
    }

}