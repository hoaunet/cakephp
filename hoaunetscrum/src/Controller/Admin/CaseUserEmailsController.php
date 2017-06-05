<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseUserEmails Controller
 *
 * @property \App\Model\Table\CaseUserEmailsTable $CaseUserEmails
 *
 * @method \App\Model\Entity\CaseUserEmail[] paginate($object = null, array $settings = [])
 */
class CaseUserEmailsController extends AppController
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
        $caseUserEmails = $this->paginate($this->CaseUserEmails);

        $this->set(compact('caseUserEmails'));
        $this->set('_serialize', ['caseUserEmails']);
    }

    /**
     * View method
     *
     * @param string|null $id Case User Email id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseUserEmail = $this->CaseUserEmails->get($id, [
            'contain' => ['Easycases', 'Users']
        ]);

        $this->set('caseUserEmail', $caseUserEmail);
        $this->set('_serialize', ['caseUserEmail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseUserEmail = $this->CaseUserEmails->newEntity();
        if ($this->request->is('post')) {
            $caseUserEmail = $this->CaseUserEmails->patchEntity($caseUserEmail, $this->request->getData());
            if ($this->CaseUserEmails->save($caseUserEmail)) {
                $this->Flash->success(__('The case user email has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case user email could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseUserEmails->Easycases->find('list', ['limit' => 200]);
        $users = $this->CaseUserEmails->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseUserEmail', 'easycases', 'users'));
        $this->set('_serialize', ['caseUserEmail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case User Email id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseUserEmail = $this->CaseUserEmails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseUserEmail = $this->CaseUserEmails->patchEntity($caseUserEmail, $this->request->getData());
            if ($this->CaseUserEmails->save($caseUserEmail)) {
                $this->Flash->success(__('The case user email has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case user email could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseUserEmails->Easycases->find('list', ['limit' => 200]);
        $users = $this->CaseUserEmails->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseUserEmail', 'easycases', 'users'));
        $this->set('_serialize', ['caseUserEmail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case User Email id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseUserEmail = $this->CaseUserEmails->get($id);
        if ($this->CaseUserEmails->delete($caseUserEmail)) {
            $this->Flash->success(__('The case user email has been deleted.'));
        } else {
            $this->Flash->error(__('The case user email could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
