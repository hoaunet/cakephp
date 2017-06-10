<?php
namespace App\Controller;

use App\Controller\AppController;

class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Manufacturers', 'Productcategories']
        ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }
	public function categories($id = null)
    {
       $this->paginate = [
            'contain' => ['Manufacturers', 'Productcategories']
        ];
        $products = $this->paginate($this->Products);      
		
		$product1 = $this->Products->find()->order(['products_date_added' => 'DESC'])->limit(4);				
		$this->set('list', $product1);
		$this->set(compact('products')); 
        $this->set('_serialize', ['product']);		
    }  

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Manufacturers', 'Productcategories']
        ]);	
        
        $this->set('product', $product);
		
		$product1 = $this->Products->find()->order(['products_date_added' => 'DESC'])->limit(4);				
		$this->set('products', $product1);
		
        $this->set('_serialize', ['product']);
    }

  
}
