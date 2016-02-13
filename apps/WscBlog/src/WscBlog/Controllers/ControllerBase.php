<?php

namespace WscBlog\Controllers;

class ControllerBase extends \Eva\EvaEngine\Mvc\Controller\ControllerBase
{
    public function initialize()
    {
        $this->view->setModuleLayout('WscBlog', '/views/layouts/layout1');
        $this->view->setModuleViewsDir('WscBlog', '/views');
        $this->view->setModulePartialsDir('WscBlog', '/views/partial');
    }

}
