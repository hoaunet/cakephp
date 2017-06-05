<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DailyupdateNotifications Controller
 *
 * @property \App\Model\Table\DailyupdateNotificationsTable $DailyupdateNotifications
 *
 * @method \App\Model\Entity\DailyupdateNotification[] paginate($object = null, array $settings = [])
 */
class DailyupdateNotificationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Companies']
        ];
        $dailyupdateNotifications = $this->paginate($this->DailyupdateNotifications);

        $this->set(compact('dailyupdateNotifications'));
        $this->set('_serialize', ['dailyupdateNotifications']);
    }

    /**
     * View method
     *
     * @param string|null $id Dailyupdate Notification id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dailyupdateNotification = $this->DailyupdateNotifications->get($id, [
            'contain' => ['Users', 'Companies']
        ]);

        $this->set('dailyupdateNotification', $dailyupdateNotification);
        $this->set('_serialize', ['dailyupdateNotification']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dailyupdateNotification = $this->DailyupdateNotifications->newEntity();
        if ($this->request->is('post')) {
            $dailyupdateNotification = $this->DailyupdateNotifications->patchEntity($dailyupdateNotification, $this->request->getData());
            if ($this->DailyupdateNotifications->save($dailyupdateNotification)) {
                $this->Flash->success(__('The dailyupdate notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailyupdate notification could not be saved. Please, try again.'));
        }
        $users = $this->DailyupdateNotifications->Users->find('list', ['limit' => 200]);
        $companies = $this->DailyupdateNotifications->Companies->find('list', ['limit' => 200]);
        $this->set(compact('dailyupdateNotification', 'users', 'companies'));
        $this->set('_serialize', ['dailyupdateNotification']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dailyupdate Notification id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dailyupdateNotification = $this->DailyupdateNotifications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dailyupdateNotification = $this->DailyupdateNotifications->patchEntity($dailyupdateNotification, $this->request->getData());
            if ($this->DailyupdateNotifications->save($dailyupdateNotification)) {
                $this->Flash->success(__('The dailyupdate notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailyupdate notification could not be saved. Please, try again.'));
        }
        $users = $this->DailyupdateNotifications->Users->find('list', ['limit' => 200]);
        $companies = $this->DailyupdateNotifications->Companies->find('list', ['limit' => 200]);
        $this->set(compact('dailyupdateNotification', 'users', 'companies'));
        $this->set('_serialize', ['dailyupdateNotification']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dailyupdate Notification id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dailyupdateNotification = $this->DailyupdateNotifications->get($id);
        if ($this->DailyupdateNotifications->delete($dailyupdateNotification)) {
            $this->Flash->success(__('The dailyupdate notification has been deleted.'));
        } else {
            $this->Flash->error(__('The dailyupdate notification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
