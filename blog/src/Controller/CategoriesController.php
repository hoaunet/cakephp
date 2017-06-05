<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 *
 * @method \App\Model\Entity\Category[] paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
		/*$categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);
			
        $this->paginate = [
            'contain' => ['ParentCategories']
        ];
        $categories = $this->paginate($this->Categories);
       
        $this->set(compact('categories'));
        $this->set('_serialize', ['categories']);*/
		$categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);
        $this->set(compact('categories'));
        $this->set('_serialize', ['categories']);
    }
}
