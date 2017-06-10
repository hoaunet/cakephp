<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{

	public function initialize()
    {
        parent::initialize();

        
    }
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {		
	    $articles = TableRegistry::get('Articles');
		$query = $articles->find()->order(['created' => 'DESC'])->limit(4);				
		$this->set('articles', $query);
		
		$products = TableRegistry::get('Products');
		$product = $products->find()->order(['products_date_added' => 'DESC'])->limit(4);				
		$this->set('products', $product);
			
		$product_categories = TableRegistry::get('Productcategories');
		$product_cates = $product_categories->find()->where(['parent_id' => 0])->limit(4);					
		$this->set('product_cates', $product_cates);
		
		$manufacturers = TableRegistry::get('Manufacturers');
		$manufacturer = $manufacturers->find()->order(['date_added' => 'DESC'])->limit(4);					
		$this->set('manufacturers', $manufacturer);
		
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
		$this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
