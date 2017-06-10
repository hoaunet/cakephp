<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Productcategories Controller
 *
 * @property \App\Model\Table\ProductcategoriesTable $Productcategories
 *
 * @method \App\Model\Entity\Productcategory[] paginate($object = null, array $settings = [])
 */
class ProductcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentProductcategories']
        ];
        $productcategories = $this->paginate($this->Productcategories);

        $this->set(compact('productcategories'));
        $this->set('_serialize', ['productcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Productcategory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productcategory = $this->Productcategories->get($id, [
            'contain' => ['ParentProductcategories', 'ChildProductcategories','Products']
        ]);

        $this->set('productcategory', $productcategory);
        $this->set('_serialize', ['productcategory']);
    }

    
}
