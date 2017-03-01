<?php
namespace app\controllers;

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
    public function actionRegistration()
    {
        $this->render('registration');
    }
}