<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseActions Controller
 *
 * @property \App\Model\Table\CaseActionsTable $CaseActions
 *
 * @method \App\Model\Entity\CaseAction[] paginate($object = null, array $settings = [])
 */
class CaseActionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Easycases', 'Users']
        ];
        $caseActions = $this->paginate($this->CaseActions);

        $this->set(compact('caseActions'));
        $this->set('_serialize', ['caseActions']);
    }

    /**
     * View method
     *
     * @param string|null $id Case Action id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseAction = $this->CaseActions->get($id, [
            'contain' => ['Easycases', 'Users']
        ]);

        $this->set('caseAction', $caseAction);
        $this->set('_serialize', ['caseAction']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseAction = $this->CaseActions->newEntity();
        if ($this->request->is('post')) {
            $caseAction = $this->CaseActions->patchEntity($caseAction, $this->request->getData());
            if ($this->CaseActions->save($caseAction)) {
                $this->Flash->success(__('The case action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case action could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseActions->Easycases->find('list', ['limit' => 200]);
        $users = $this->CaseActions->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseAction', 'easycases', 'users'));
        $this->set('_serialize', ['caseAction']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case Action id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseAction = $this->CaseActions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseAction = $this->CaseActions->patchEntity($caseAction, $this->request->getData());
            if ($this->CaseActions->save($caseAction)) {
                $this->Flash->success(__('The case action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case action could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseActions->Easycases->find('list', ['limit' => 200]);
        $users = $this->CaseActions->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseAction', 'easycases', 'users'));
        $this->set('_serialize', ['caseAction']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case Action id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseAction = $this->CaseActions->get($id);
        if ($this->CaseActions->delete($caseAction)) {
            $this->Flash->success(__('The case action has been deleted.'));
        } else {
            $this->Flash->error(__('The case action could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
