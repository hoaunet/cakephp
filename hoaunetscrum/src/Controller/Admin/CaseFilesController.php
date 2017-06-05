<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseFiles Controller
 *
 * @property \App\Model\Table\CaseFilesTable $CaseFiles
 *
 * @method \App\Model\Entity\CaseFile[] paginate($object = null, array $settings = [])
 */
class CaseFilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Projects', 'Companies', 'Easycases', 'Comments']
        ];
        $caseFiles = $this->paginate($this->CaseFiles);

        $this->set(compact('caseFiles'));
        $this->set('_serialize', ['caseFiles']);
    }

    /**
     * View method
     *
     * @param string|null $id Case File id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseFile = $this->CaseFiles->get($id, [
            'contain' => ['Users', 'Projects', 'Companies', 'Easycases', 'Comments', 'Archives']
        ]);

        $this->set('caseFile', $caseFile);
        $this->set('_serialize', ['caseFile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseFile = $this->CaseFiles->newEntity();
        if ($this->request->is('post')) {
            $caseFile = $this->CaseFiles->patchEntity($caseFile, $this->request->getData());
            if ($this->CaseFiles->save($caseFile)) {
                $this->Flash->success(__('The case file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case file could not be saved. Please, try again.'));
        }
        $users = $this->CaseFiles->Users->find('list', ['limit' => 200]);
        $projects = $this->CaseFiles->Projects->find('list', ['limit' => 200]);
        $companies = $this->CaseFiles->Companies->find('list', ['limit' => 200]);
        $easycases = $this->CaseFiles->Easycases->find('list', ['limit' => 200]);
        $comments = $this->CaseFiles->Comments->find('list', ['limit' => 200]);
        $this->set(compact('caseFile', 'users', 'projects', 'companies', 'easycases', 'comments'));
        $this->set('_serialize', ['caseFile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseFile = $this->CaseFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseFile = $this->CaseFiles->patchEntity($caseFile, $this->request->getData());
            if ($this->CaseFiles->save($caseFile)) {
                $this->Flash->success(__('The case file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case file could not be saved. Please, try again.'));
        }
        $users = $this->CaseFiles->Users->find('list', ['limit' => 200]);
        $projects = $this->CaseFiles->Projects->find('list', ['limit' => 200]);
        $companies = $this->CaseFiles->Companies->find('list', ['limit' => 200]);
        $easycases = $this->CaseFiles->Easycases->find('list', ['limit' => 200]);
        $comments = $this->CaseFiles->Comments->find('list', ['limit' => 200]);
        $this->set(compact('caseFile', 'users', 'projects', 'companies', 'easycases', 'comments'));
        $this->set('_serialize', ['caseFile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseFile = $this->CaseFiles->get($id);
        if ($this->CaseFiles->delete($caseFile)) {
            $this->Flash->success(__('The case file has been deleted.'));
        } else {
            $this->Flash->error(__('The case file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
