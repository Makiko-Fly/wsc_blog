<?php

namespace WscBlog\Controllers;

use WscBlog\Models\Users;


class UserController extends ControllerBase
{
    public function loginAction()
    {		
		$user = $this->session->get('auth');
		if ($user) {
			return $this->response->redirect('home');
		}
		
		if ($this->request->isPost()) {
			$username = $this->request->getPost('name', 'string');
			$password = $this->request->getPost('pw', 'string');
			$user = Users::findFirst(array(
				"(username = :username: AND password = :password:)",
				'bind' => array(
					'username'	=> $username,
					'password'	=> $this->_encryptPw($password)
				)
			));
			if (!$user) {
				$this->flash->error('登陆失败');
			} else {
				$this->_registerSession($user);
				$this->flash->success('登陆成功');
			}
			$this->response->redirect('home');							
		} else {
			// show login page
		}
    }
	
	public function registerAction()
	{
		if ($this->request->isPost()) {
			$username = $this->request->getPost('name', 'string');
			$password = $this->request->getPost('pw', 'string');
			$password2 = $this->request->getPost('pw2', 'string');
			
			// TODO... do all sorts of validation
			
			// for illustration I do only one validation: pw1 == pw2
			if ($password !== $password2) {
				$this->flash->error("两次密码不相同");
			} else {
				// create user
				$usersModel = new Users();
				$success = $usersModel->create(array(
					'username'	=> $username,
					'password'  => $this->_encryptPw($password)
				));
				if ($success) {
					// TODO... it didn't show after redirect, check reason
					$this->flash->success('成功创建新用户');	
					$this->_registerSession($usersModel);
					$this->response->redirect('home');
				} else {
					$this->flash->error('创建新用户失败, ' . var_export($usersModel->getMessages(), true));	
				}
			}
		} else {
			// show register page
		}
	}
	
	public function logoutAction() {
		// TODO... how to properly delete user session
		$this->session->set('auth', null);
		$this->response->redirect('home');		
	}
	
	private function _registerSession($user) {
		$this->session->set(
		    'auth',
		    array(
		        'id'   => $user->id,
		        'name' => $user->username
		    )
		);
	}
	
	private function _encryptPw($password) {
		// TODO... Use proper crypto, for now, just return itself.
		return $password;
	}
}
