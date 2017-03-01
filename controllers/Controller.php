<?php
namespace app\controllers;


class Controller
{
    protected $action;
    protected $defaultAction = 'index';
    protected $layout = 'main';
    protected $useLayout = true;

    public function run($action = null)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = 'action' . ucfirst($this->action);
        $this->$method();
    }
    protected function render($template, $params = [])
    {
        if ($this->useLayout) {
            echo $this->renderTemplate('layouts/main', [
                'content' => $this->renderTemplate($template, $params)
            ]);
        }else{
            echo $this->renderTemplate($template, $params);
        }
    }

    protected function renderTemplate($template, $params = [])
    {
        $dir = '';
        if($template != 'layouts/main'){
            $dir = lcfirst(str_replace(['Controller', 'app\controllers\\'],'', get_called_class()))."/";
        }

        $templatePath = $_SERVER['DOCUMENT_ROOT'] . "/../views/{$dir}{$template}.php";
        extract($params);
        ob_start();
        include $templatePath;
        return ob_get_clean();
    }
}