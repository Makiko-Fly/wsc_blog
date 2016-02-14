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
			$title = $this->request->getPost('title', 'string');
			$summary = $this->request->getPost('summary', 'string');
			$text = $this->request->getPost('text', 'string');
			
			// TODO... Validate input texts
			// TODO... Sanitize input texts for forbidden words and escape special characters
			
			$articlesModel = new Articles();
			$success = $articlesModel->create(array(
				'user_id'	=> $user['id'],
				'title'		=> $title,
				'summary'	=> $summary,
				'text'		=> $text
			));
			if ($success) {
				$this->flash->success('成功发表新文章！');	
				$this->response->redirect('home');				
			} else {
				$this->flash->error('新文章发表失败：' . var_export($articlesModel->getMessages(), true));	
			}
		} else {
			// show create new article page
		}
    }
	
	public function viewAction($id) {
		
		// TODO... check validity of $id
		
		$article = Articles::findFirst($id);
		if (!$article) {
			$this->flash->error('文章不存在或已被删除');
			$this->response->redirect('home');			
		} else {
			$this->view->setVar('articleIter', $article);
		}
	}
}
