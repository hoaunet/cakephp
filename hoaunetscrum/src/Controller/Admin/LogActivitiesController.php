<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LogActivities Controller
 *
 * @property \App\Model\Table\LogActivitiesTable $LogActivities
 *
 * @method \App\Model\Entity\LogActivity[] paginate($object = null, array $settings = [])
 */
class LogActivitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Users', 'LogTypes']
        ];
        $logActivities = $this->paginate($this->LogActivities);

        $this->set(compact('logActivities'));
        $this->set('_serialize', ['logActivities']);
    }

    /**
     * View method
     *
     * @param string|null $id Log Activity id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logActivity = $this->LogActivities->get($id, [
            'contain' => ['Companies', 'Users', 'LogTypes']
        ]);

        $this->set('logActivity', $logActivity);
        $this->set('_serialize', ['logActivity']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logActivity = $this->LogActivities->newEntity();
        if ($this->request->is('post')) {
            $logActivity = $this->LogActivities->patchEntity($logActivity, $this->request->getData());
            if ($this->LogActivities->save($logActivity)) {
                $this->Flash->success(__('The log activity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The log activity could not be saved. Please, try again.'));
        }
        $companies = $this->LogActivities->Companies->find('list', ['limit' => 200]);
        $users = $this->LogActivities->Users->find('list', ['limit' => 200]);
        $logTypes = $this->LogActivities->LogTypes->find('list', ['limit' => 200]);
        $this->set(compact('logActivity', 'companies', 'users', 'logTypes'));
        $this->set('_serialize', ['logActivity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Log Activity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logActivity = $this->LogActivities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logActivity = $this->LogActivities->patchEntity($logActivity, $this->request->getData());
            if ($this->LogActivities->save($logActivity)) {
                $this->Flash->success(__('The log activity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The log activity could not be saved. Please, try again.'));
        }
        $companies = $this->LogActivities->Companies->find('list', ['limit' => 200]);
        $users = $this->LogActivities->Users->find('list', ['limit' => 200]);
        $logTypes = $this->LogActivities->LogTypes->find('list', ['limit' => 200]);
        $this->set(compact('logActivity', 'companies', 'users', 'logTypes'));
        $this->set('_serialize', ['logActivity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Log Activity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logActivity = $this->LogActivities->get($id);
        if ($this->LogActivities->delete($logActivity)) {
            $this->Flash->success(__('The log activity has been deleted.'));
        } else {
            $this->Flash->error(__('The log activity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
