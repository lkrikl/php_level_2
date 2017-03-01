<?php
namespace app\controllers;

use app\models\Product;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->render('index', ['model' => Product::getAll()]);
    }
    public function actionView()
    {
        $id = $_GET['id'];
        $this->render('view', ['model' => Product::getById($id)]);
    }
}