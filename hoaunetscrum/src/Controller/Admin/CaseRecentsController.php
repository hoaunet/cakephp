<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseRecents Controller
 *
 * @property \App\Model\Table\CaseRecentsTable $CaseRecents
 *
 * @method \App\Model\Entity\CaseRecent[] paginate($object = null, array $settings = [])
 */
class CaseRecentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Easycases', 'Companies', 'Users', 'Projects']
        ];
        $caseRecents = $this->paginate($this->CaseRecents);

        $this->set(compact('caseRecents'));
        $this->set('_serialize', ['caseRecents']);
    }

    /**
     * View method
     *
     * @param string|null $id Case Recent id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseRecent = $this->CaseRecents->get($id, [
            'contain' => ['Easycases', 'Companies', 'Users', 'Projects']
        ]);

        $this->set('caseRecent', $caseRecent);
        $this->set('_serialize', ['caseRecent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseRecent = $this->CaseRecents->newEntity();
        if ($this->request->is('post')) {
            $caseRecent = $this->CaseRecents->patchEntity($caseRecent, $this->request->getData());
            if ($this->CaseRecents->save($caseRecent)) {
                $this->Flash->success(__('The case recent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case recent could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseRecents->Easycases->find('list', ['limit' => 200]);
        $companies = $this->CaseRecents->Companies->find('list', ['limit' => 200]);
        $users = $this->CaseRecents->Users->find('list', ['limit' => 200]);
        $projects = $this->CaseRecents->Projects->find('list', ['limit' => 200]);
        $this->set(compact('caseRecent', 'easycases', 'companies', 'users', 'projects'));
        $this->set('_serialize', ['caseRecent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case Recent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseRecent = $this->CaseRecents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseRecent = $this->CaseRecents->patchEntity($caseRecent, $this->request->getData());
            if ($this->CaseRecents->save($caseRecent)) {
                $this->Flash->success(__('The case recent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case recent could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseRecents->Easycases->find('list', ['limit' => 200]);
        $companies = $this->CaseRecents->Companies->find('list', ['limit' => 200]);
        $users = $this->CaseRecents->Users->find('list', ['limit' => 200]);
        $projects = $this->CaseRecents->Projects->find('list', ['limit' => 200]);
        $this->set(compact('caseRecent', 'easycases', 'companies', 'users', 'projects'));
        $this->set('_serialize', ['caseRecent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case Recent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseRecent = $this->CaseRecents->get($id);
        if ($this->CaseRecents->delete($caseRecent)) {
            $this->Flash->success(__('The case recent has been deleted.'));
        } else {
            $this->Flash->error(__('The case recent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
