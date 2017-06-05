<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeCompanies Controller
 *
 * @property \App\Model\Table\TypeCompaniesTable $TypeCompanies
 *
 * @method \App\Model\Entity\TypeCompany[] paginate($object = null, array $settings = [])
 */
class TypeCompaniesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Types']
        ];
        $typeCompanies = $this->paginate($this->TypeCompanies);

        $this->set(compact('typeCompanies'));
        $this->set('_serialize', ['typeCompanies']);
    }

    /**
     * View method
     *
     * @param string|null $id Type Company id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeCompany = $this->TypeCompanies->get($id, [
            'contain' => ['Companies', 'Types']
        ]);

        $this->set('typeCompany', $typeCompany);
        $this->set('_serialize', ['typeCompany']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeCompany = $this->TypeCompanies->newEntity();
        if ($this->request->is('post')) {
            $typeCompany = $this->TypeCompanies->patchEntity($typeCompany, $this->request->getData());
            if ($this->TypeCompanies->save($typeCompany)) {
                $this->Flash->success(__('The type company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type company could not be saved. Please, try again.'));
        }
        $companies = $this->TypeCompanies->Companies->find('list', ['limit' => 200]);
        $types = $this->TypeCompanies->Types->find('list', ['limit' => 200]);
        $this->set(compact('typeCompany', 'companies', 'types'));
        $this->set('_serialize', ['typeCompany']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Company id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeCompany = $this->TypeCompanies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeCompany = $this->TypeCompanies->patchEntity($typeCompany, $this->request->getData());
            if ($this->TypeCompanies->save($typeCompany)) {
                $this->Flash->success(__('The type company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type company could not be saved. Please, try again.'));
        }
        $companies = $this->TypeCompanies->Companies->find('list', ['limit' => 200]);
        $types = $this->TypeCompanies->Types->find('list', ['limit' => 200]);
        $this->set(compact('typeCompany', 'companies', 'types'));
        $this->set('_serialize', ['typeCompany']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Company id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeCompany = $this->TypeCompanies->get($id);
        if ($this->TypeCompanies->delete($typeCompany)) {
            $this->Flash->success(__('The type company has been deleted.'));
        } else {
            $this->Flash->error(__('The type company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
