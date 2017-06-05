<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseUserViews Controller
 *
 * @property \App\Model\Table\CaseUserViewsTable $CaseUserViews
 *
 * @method \App\Model\Entity\CaseUserView[] paginate($object = null, array $settings = [])
 */
class CaseUserViewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Easycases', 'Users', 'Projects']
        ];
        $caseUserViews = $this->paginate($this->CaseUserViews);

        $this->set(compact('caseUserViews'));
        $this->set('_serialize', ['caseUserViews']);
    }

    /**
     * View method
     *
     * @param string|null $id Case User View id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseUserView = $this->CaseUserViews->get($id, [
            'contain' => ['Easycases', 'Users', 'Projects']
        ]);

        $this->set('caseUserView', $caseUserView);
        $this->set('_serialize', ['caseUserView']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseUserView = $this->CaseUserViews->newEntity();
        if ($this->request->is('post')) {
            $caseUserView = $this->CaseUserViews->patchEntity($caseUserView, $this->request->getData());
            if ($this->CaseUserViews->save($caseUserView)) {
                $this->Flash->success(__('The case user view has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case user view could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseUserViews->Easycases->find('list', ['limit' => 200]);
        $users = $this->CaseUserViews->Users->find('list', ['limit' => 200]);
        $projects = $this->CaseUserViews->Projects->find('list', ['limit' => 200]);
        $this->set(compact('caseUserView', 'easycases', 'users', 'projects'));
        $this->set('_serialize', ['caseUserView']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case User View id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseUserView = $this->CaseUserViews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseUserView = $this->CaseUserViews->patchEntity($caseUserView, $this->request->getData());
            if ($this->CaseUserViews->save($caseUserView)) {
                $this->Flash->success(__('The case user view has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case user view could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseUserViews->Easycases->find('list', ['limit' => 200]);
        $users = $this->CaseUserViews->Users->find('list', ['limit' => 200]);
        $projects = $this->CaseUserViews->Projects->find('list', ['limit' => 200]);
        $this->set(compact('caseUserView', 'easycases', 'users', 'projects'));
        $this->set('_serialize', ['caseUserView']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case User View id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseUserView = $this->CaseUserViews->get($id);
        if ($this->CaseUserViews->delete($caseUserView)) {
            $this->Flash->success(__('The case user view has been deleted.'));
        } else {
            $this->Flash->error(__('The case user view could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
