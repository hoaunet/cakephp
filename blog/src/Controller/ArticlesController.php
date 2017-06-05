<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[] paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
		$articles = $this->Articles->find('all');
		$articles = $this->paginate($this->Articles);
        //$this->view
        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
    }
	
	
    public function category($id = null)
    {
        $articles = $this->Articles->find()->where(['category_id' => $id]);
		//print_r($categories);
		$this->set('articles', $articles);
        //$this->set('_serialize', ['article']);
		
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }
	 public function detail($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

   	
}
