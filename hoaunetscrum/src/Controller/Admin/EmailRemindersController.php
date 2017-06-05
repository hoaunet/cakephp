<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailReminders Controller
 *
 * @property \App\Model\Table\EmailRemindersTable $EmailReminders
 *
 * @method \App\Model\Entity\EmailReminder[] paginate($object = null, array $settings = [])
 */
class EmailRemindersController extends AppController
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
        $emailReminders = $this->paginate($this->EmailReminders);

        $this->set(compact('emailReminders'));
        $this->set('_serialize', ['emailReminders']);
    }

    /**
     * View method
     *
     * @param string|null $id Email Reminder id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailReminder = $this->EmailReminders->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('emailReminder', $emailReminder);
        $this->set('_serialize', ['emailReminder']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailReminder = $this->EmailReminders->newEntity();
        if ($this->request->is('post')) {
            $emailReminder = $this->EmailReminders->patchEntity($emailReminder, $this->request->getData());
            if ($this->EmailReminders->save($emailReminder)) {
                $this->Flash->success(__('The email reminder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email reminder could not be saved. Please, try again.'));
        }
        $users = $this->EmailReminders->Users->find('list', ['limit' => 200]);
        $this->set(compact('emailReminder', 'users'));
        $this->set('_serialize', ['emailReminder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Reminder id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailReminder = $this->EmailReminders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailReminder = $this->EmailReminders->patchEntity($emailReminder, $this->request->getData());
            if ($this->EmailReminders->save($emailReminder)) {
                $this->Flash->success(__('The email reminder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email reminder could not be saved. Please, try again.'));
        }
        $users = $this->EmailReminders->Users->find('list', ['limit' => 200]);
        $this->set(compact('emailReminder', 'users'));
        $this->set('_serialize', ['emailReminder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Reminder id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailReminder = $this->EmailReminders->get($id);
        if ($this->EmailReminders->delete($emailReminder)) {
            $this->Flash->success(__('The email reminder has been deleted.'));
        } else {
            $this->Flash->error(__('The email reminder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
