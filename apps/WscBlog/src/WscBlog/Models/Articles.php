<?php

namespace WscBlog\Models;


class Articles extends \Eva\EvaEngine\Mvc\Model 
{
	public $id;
	public $user_id;
	public $title;
	public $summary;
	public $text;
	public $created;
	public $modified;
	
	protected $tableName = 'articles';
	
    public function initialize()
    {
        $this->belongsTo("user_id", "WscBlog\Models\Users", "id", array('alias' => 'User'));
    }
	
	public function createFindBuilder($queryParams) 
	{
		$builder = $this->getDI()->getModelsManager()->createBuilder($queryParams);
		$builder->from(__CLASS__);
		
        if (!empty($queryParams['columns'])) {
            $builder->columns($queryParams['columns']);
        }
		
		if (!empty($queryParams['order'])) {
			$builder->orderBy($queryParams['order']);
		}

		return $builder;
	}
	
}