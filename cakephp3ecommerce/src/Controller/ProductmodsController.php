<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Productmods Controller
 *
 * @property \App\Model\Table\ProductmodsTable $Productmods
 *
 * @method \App\Model\Entity\Productmod[] paginate($object = null, array $settings = [])
 */
class ProductmodsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $productmods = $this->paginate($this->Productmods);

        $this->set(compact('productmods'));
        $this->set('_serialize', ['productmods']);
    }

    /**
     * View method
     *
     * @param string|null $id Productmod id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productmod = $this->Productmods->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productmod', $productmod);
        $this->set('_serialize', ['productmod']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productmod = $this->Productmods->newEntity();
        if ($this->request->is('post')) {
            $productmod = $this->Productmods->patchEntity($productmod, $this->request->getData());
            if ($this->Productmods->save($productmod)) {
                $this->Flash->success(__('The productmod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productmod could not be saved. Please, try again.'));
        }
        $products = $this->Productmods->Products->find('list', ['limit' => 200]);
        $this->set(compact('productmod', 'products'));
        $this->set('_serialize', ['productmod']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Productmod id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productmod = $this->Productmods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productmod = $this->Productmods->patchEntity($productmod, $this->request->getData());
            if ($this->Productmods->save($productmod)) {
                $this->Flash->success(__('The productmod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productmod could not be saved. Please, try again.'));
        }
        $products = $this->Productmods->Products->find('list', ['limit' => 200]);
        $this->set(compact('productmod', 'products'));
        $this->set('_serialize', ['productmod']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Productmod id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productmod = $this->Productmods->get($id);
        if ($this->Productmods->delete($productmod)) {
            $this->Flash->success(__('The productmod has been deleted.'));
        } else {
            $this->Flash->error(__('The productmod could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
