<?php

namespace App\controllers;

use App\core\Application;
use App\core\Controller;
use App\core\Auth;
use App\models\User;

class AuthController extends Controller
{

    public function loginPage()
    {
        //get

        $this->setLayout('auth');

        Application::$app->controller->render('login');

    }
    public function registerShow(){

        $this->setLayout('auth');

        Application::$app->controller->render('register');

    }
    public function login()
    {

        $inpuTdata=Application::$app->request->getBody();

        

        $user=User::do()->find($inpuTdata['loginemail'],'email');
        
        if(is_array($user) and $inpuTdata['loginpassword']==$user[0]['password'])
        {
            Auth::do()->login($user[0]['id']);

            // Application::$app->response->to('dashboard');

        }
        $this->setLayout('auth');

        Application::$app->controller->render('login');
    }
    public function showDashboard(){

        Application::$app->controller->render('dashboard');


    }
    public function register()
    {
       
        $inpuTdata=Application::$app->request->getBody();

        echo '<pre>';
        var_dump($inpuTdata);
        die();

    }

}