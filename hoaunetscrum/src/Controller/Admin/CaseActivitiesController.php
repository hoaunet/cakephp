<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseActivities Controller
 *
 * @property \App\Model\Table\CaseActivitiesTable $CaseActivities
 *
 * @method \App\Model\Entity\CaseActivity[] paginate($object = null, array $settings = [])
 */
class CaseActivitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Easycases', 'Comments', 'Projects', 'Users']
        ];
        $caseActivities = $this->paginate($this->CaseActivities);

        $this->set(compact('caseActivities'));
        $this->set('_serialize', ['caseActivities']);
    }

    /**
     * View method
     *
     * @param string|null $id Case Activity id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseActivity = $this->CaseActivities->get($id, [
            'contain' => ['Easycases', 'Comments', 'Projects', 'Users']
        ]);

        $this->set('caseActivity', $caseActivity);
        $this->set('_serialize', ['caseActivity']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseActivity = $this->CaseActivities->newEntity();
        if ($this->request->is('post')) {
            $caseActivity = $this->CaseActivities->patchEntity($caseActivity, $this->request->getData());
            if ($this->CaseActivities->save($caseActivity)) {
                $this->Flash->success(__('The case activity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case activity could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseActivities->Easycases->find('list', ['limit' => 200]);
        $comments = $this->CaseActivities->Comments->find('list', ['limit' => 200]);
        $projects = $this->CaseActivities->Projects->find('list', ['limit' => 200]);
        $users = $this->CaseActivities->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseActivity', 'easycases', 'comments', 'projects', 'users'));
        $this->set('_serialize', ['caseActivity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case Activity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseActivity = $this->CaseActivities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseActivity = $this->CaseActivities->patchEntity($caseActivity, $this->request->getData());
            if ($this->CaseActivities->save($caseActivity)) {
                $this->Flash->success(__('The case activity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case activity could not be saved. Please, try again.'));
        }
        $easycases = $this->CaseActivities->Easycases->find('list', ['limit' => 200]);
        $comments = $this->CaseActivities->Comments->find('list', ['limit' => 200]);
        $projects = $this->CaseActivities->Projects->find('list', ['limit' => 200]);
        $users = $this->CaseActivities->Users->find('list', ['limit' => 200]);
        $this->set(compact('caseActivity', 'easycases', 'comments', 'projects', 'users'));
        $this->set('_serialize', ['caseActivity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case Activity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseActivity = $this->CaseActivities->get($id);
        if ($this->CaseActivities->delete($caseActivity)) {
            $this->Flash->success(__('The case activity has been deleted.'));
        } else {
            $this->Flash->error(__('The case activity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
