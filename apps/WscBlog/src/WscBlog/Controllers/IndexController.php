<?php

namespace WscBlog\Controllers;

use Eva\EvaEngine\Exception;
use Eva\EvaEngine\Paginator;
use WscBlog\Models\Articles;

class IndexController extends ControllerBase
{
    public function indexAction()
    {			
		$limit = 2;
		$page = $this->request->getQuery('page', 'int', 2);
		
		$articlesModel = new Articles();
		$queryParams = array(
			'columns'	=> array('id', 'title', 'summary', 'created'),
			// 'order'		=> array('id DESC')
		);
		$queryBuilder = $articlesModel->createFindBuilder($queryParams);
		
		$paginator = new Paginator(array(
		    "builder" => $queryBuilder,
		    "limit"=> $limit,
		    "page" => $page
		));
		
		$pager = $paginator->getPaginate();
		$this->view->setVar('pager', $pager);
		
		// mdl_echo("\$pager: " . var_export($pager, true));
		
		// // TODO... Why need $query?
		// $query = $queryBuilder->getQuery();
		// $paginator->setQuery($query->getSql());
		// $this->view->setVar('query', $query);
    }
}
