<?php

namespace App\controllers;

use App\core\Application;
use App\core\Controller;
use App\models\Task;

class TodoController extends Controller
{


    public function index()
    {
        $data = Task::do()->all();
        $this->render('Show' , compact('data') ); //['data' => $data]

    }

    public function create()
    {
        $this->render('Create');
    }

    public function save()
    {
        $data = Application::$app->request->getBody();
        Task::do()->create($data);
        Application::$app->response->to('/');

    }

    public function delete()
    {
        $data = Application::$app->request->getBody();
        Task::do()->delete('id', $data['id']);

    }

    public function edit()
    {
        $query = Application::$app->request->getQueryString();
        $id = explode('=', $query)[1];
        $task = Task::do()->find($id);
        $this->render('edit', ['data' => $task]);
    }

    public function update()
    {
        $data = Application::$app->request->getBody();
        Task::do()->update($data, 'id', $data['id']);
        Application::$app->response->to('/');
    }


}