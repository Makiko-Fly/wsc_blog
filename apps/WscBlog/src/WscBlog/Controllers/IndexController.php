<?php

namespace WscBlog\Controllers;

use Eva\EvaEngine\Exception;
use Eva\EvaEngine\Paginator;
use WscBlog\Models\Articles;

class IndexController extends ControllerBase
{
    public function indexAction()
    {			
		$limit = 5;
		$pageNum = $this->request->getQuery('pageNum', 'int', 1);
		
		$articlesModel = new Articles();
		$queryParams = array(
			'columns'	=> array('id', 'title', 'summary', 'created'),
			// 'order'		=> array('id DESC')
		);
		$queryBuilder = $articlesModel->createFindBuilder($queryParams);
		
		$paginator = new Paginator(array(
		    "builder" => $queryBuilder,
		    "limit"=> $limit,
		    "page" => $pageNum
		));
		
		$pager = $paginator->getPaginate();
		$this->view->setVar('pager', $pager);
		// // TODO... Why need $query?
		// $query = $queryBuilder->getQuery();
		// $paginator->setQuery($query->getSql());
		// $this->view->setVar('query', $query);
    }
}
