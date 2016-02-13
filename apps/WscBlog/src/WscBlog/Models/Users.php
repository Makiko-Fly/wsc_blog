<?php

namespace WscBlog\Models;

use Eva\EvaEngine\Exception;

class Users extends \Eva\EvaEngine\Mvc\Model 
{
	public $id;
	public $username;
	public $password;
	public $created;
	public $modified;
	
	protected $tableName = 'users';

}