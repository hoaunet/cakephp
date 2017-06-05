<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomFilters Controller
 *
 * @property \App\Model\Table\CustomFiltersTable $CustomFilters
 *
 * @method \App\Model\Entity\CustomFilter[] paginate($object = null, array $settings = [])
 */
class CustomFiltersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProjectUniqs', 'Companies', 'Users', 'FilterTypes', 'FilterMembers']
        ];
        $customFilters = $this->paginate($this->CustomFilters);

        $this->set(compact('customFilters'));
        $this->set('_serialize', ['customFilters']);
    }

    /**
     * View method
     *
     * @param string|null $id Custom Filter id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customFilter = $this->CustomFilters->get($id, [
            'contain' => ['ProjectUniqs', 'Companies', 'Users', 'FilterTypes', 'FilterMembers']
        ]);

        $this->set('customFilter', $customFilter);
        $this->set('_serialize', ['customFilter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customFilter = $this->CustomFilters->newEntity();
        if ($this->request->is('post')) {
            $customFilter = $this->CustomFilters->patchEntity($customFilter, $this->request->getData());
            if ($this->CustomFilters->save($customFilter)) {
                $this->Flash->success(__('The custom filter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custom filter could not be saved. Please, try again.'));
        }
        $projectUniqs = $this->CustomFilters->ProjectUniqs->find('list', ['limit' => 200]);
        $companies = $this->CustomFilters->Companies->find('list', ['limit' => 200]);
        $users = $this->CustomFilters->Users->find('list', ['limit' => 200]);
        $filterTypes = $this->CustomFilters->FilterTypes->find('list', ['limit' => 200]);
        $filterMembers = $this->CustomFilters->FilterMembers->find('list', ['limit' => 200]);
        $this->set(compact('customFilter', 'projectUniqs', 'companies', 'users', 'filterTypes', 'filterMembers'));
        $this->set('_serialize', ['customFilter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Custom Filter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customFilter = $this->CustomFilters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customFilter = $this->CustomFilters->patchEntity($customFilter, $this->request->getData());
            if ($this->CustomFilters->save($customFilter)) {
                $this->Flash->success(__('The custom filter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custom filter could not be saved. Please, try again.'));
        }
        $projectUniqs = $this->CustomFilters->ProjectUniqs->find('list', ['limit' => 200]);
        $companies = $this->CustomFilters->Companies->find('list', ['limit' => 200]);
        $users = $this->CustomFilters->Users->find('list', ['limit' => 200]);
        $filterTypes = $this->CustomFilters->FilterTypes->find('list', ['limit' => 200]);
        $filterMembers = $this->CustomFilters->FilterMembers->find('list', ['limit' => 200]);
        $this->set(compact('customFilter', 'projectUniqs', 'companies', 'users', 'filterTypes', 'filterMembers'));
        $this->set('_serialize', ['customFilter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Custom Filter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customFilter = $this->CustomFilters->get($id);
        if ($this->CustomFilters->delete($customFilter)) {
            $this->Flash->success(__('The custom filter has been deleted.'));
        } else {
            $this->Flash->error(__('The custom filter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
