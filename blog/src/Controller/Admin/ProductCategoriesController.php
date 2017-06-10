<?php
namespace App\Controller\Admin;

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

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productcategory = $this->Productcategories->newEntity();
        if ($this->request->is('post')) {
			if (!empty($this->request->data['upload']['name'])) {					
					$file = $this->request->data['upload']; //put the data into a var for easy use				
					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
					$arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
					$setNewFileName = time() . "_" . rand(000000, 999999);
				
					//only process if the extension is valid
					if (in_array($ext, $arr_ext)) {
						//do the actual uploading of the file. First arg is the tmp name, second arg is 
						//where we are putting it
						move_uploaded_file($file['tmp_name'], WWW_ROOT . '/img/category/' . $setNewFileName . '.' . $ext);
				
						//prepare the filename for database entry 
						$this->request->data['categories_image'] = 'category/'.$setNewFileName . '.' . $ext;
					}
			}
            $productcategory = $this->Productcategories->patchEntity($productcategory, $this->request->getData());
            if ($this->Productcategories->save($productcategory)) {
                $this->Flash->success(__('The productcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productcategory could not be saved. Please, try again.'));
        }
        $parentProductcategories = $this->Productcategories->ParentProductcategories->find('list', ['limit' => 200]);
        $this->set(compact('productcategory', 'parentProductcategories'));
        $this->set('_serialize', ['productcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Productcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productcategory = $this->Productcategories->get($id, [
            'contain' => ['ParentProductcategories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
			if (!empty($this->request->data['upload']['name'])) {					
					$file = $this->request->data['upload']; //put the data into a var for easy use				
					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
					$arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
					$setNewFileName = time() . "_" . rand(000000, 999999);
				
					//only process if the extension is valid
					if (in_array($ext, $arr_ext)) {
						//do the actual uploading of the file. First arg is the tmp name, second arg is 
						//where we are putting it
						move_uploaded_file($file['tmp_name'], WWW_ROOT . '/img/category/' . $setNewFileName . '.' . $ext);
				
						//prepare the filename for database entry 
						$this->request->data['categories_image'] = 'category/'.$setNewFileName . '.' . $ext;
					}
			}
            $productcategory = $this->Productcategories->patchEntity($productcategory, $this->request->getData());
            if ($this->Productcategories->save($productcategory)) {
                $this->Flash->success(__('The productcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productcategory could not be saved. Please, try again.'));
        }
        $parentProductcategories = $this->Productcategories->ParentProductcategories->find('list', ['limit' => 200]);
        $this->set(compact('productcategory', 'parentProductcategories'));
        $this->set('_serialize', ['productcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Productcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productcategory = $this->Productcategories->get($id);
        if ($this->Productcategories->delete($productcategory)) {
            $this->Flash->success(__('The productcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The productcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
