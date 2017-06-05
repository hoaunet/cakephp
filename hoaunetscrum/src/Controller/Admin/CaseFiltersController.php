<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseFilters Controller
 *
 * @property \App\Model\Table\CaseFiltersTable $CaseFilters
 *
 * @method \App\Model\Entity\CaseFilter[] paginate($object = null, array $settings = [])
 */
class CaseFiltersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $caseFilters = $this->paginate($this->CaseFilters);

        $this->set(compact('caseFilters'));
        $this->set('_serialize', ['caseFilters']);
    }

    /**
     * View method
     *
     * @param string|null $id Case Filter id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseFilter = $this->CaseFilters->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('caseFilter', $caseFilter);
        $this->set('_serialize', ['caseFilter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseFilter = $this->CaseFilters->newEntity();
        if ($this->request->is('post')) {
            $caseFilter = $this->CaseFilters->patchEntity($caseFilter, $this->request->getData());
            if ($this->CaseFilters->save($caseFilter)) {
                $this->Flash->success(__('The case filter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case filter could not be saved. Please, try again.'));
        }
        $users = $this->CaseFilters->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseFilter', 'users'));
        $this->set('_serialize', ['caseFilter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case Filter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseFilter = $this->CaseFilters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseFilter = $this->CaseFilters->patchEntity($caseFilter, $this->request->getData());
            if ($this->CaseFilters->save($caseFilter)) {
                $this->Flash->success(__('The case filter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case filter could not be saved. Please, try again.'));
        }
        $users = $this->CaseFilters->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseFilter', 'users'));
        $this->set('_serialize', ['caseFilter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case Filter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseFilter = $this->CaseFilters->get($id);
        if ($this->CaseFilters->delete($caseFilter)) {
            $this->Flash->success(__('The case filter has been deleted.'));
        } else {
            $this->Flash->error(__('The case filter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
