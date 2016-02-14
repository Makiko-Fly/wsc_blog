<?php

namespace WscBlog\Controllers;

use Eva\EvaEngine\Exception;
use WscBlog\Models\Articles;

class ArticleController extends ControllerBase
{
    public function createAction()
    {
		// check user is logged in
		$user = $this->session->get('auth');
		if (!$user) {
			$this->flash->error('您尚未登陆');
			return $this->response->redirect('home');
		}
		
		if ($this->request->isPost()) {
			
		} else {
			// show create new article page
		}
    }
}
