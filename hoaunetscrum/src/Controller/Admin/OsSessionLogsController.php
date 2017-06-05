<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OsSessionLogs Controller
 *
 * @property \App\Model\Table\OsSessionLogsTable $OsSessionLogs
 *
 * @method \App\Model\Entity\OsSessionLog[] paginate($object = null, array $settings = [])
 */
class OsSessionLogsController extends AppController
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
        $osSessionLogs = $this->paginate($this->OsSessionLogs);

        $this->set(compact('osSessionLogs'));
        $this->set('_serialize', ['osSessionLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Os Session Log id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $osSessionLog = $this->OsSessionLogs->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('osSessionLog', $osSessionLog);
        $this->set('_serialize', ['osSessionLog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $osSessionLog = $this->OsSessionLogs->newEntity();
        if ($this->request->is('post')) {
            $osSessionLog = $this->OsSessionLogs->patchEntity($osSessionLog, $this->request->getData());
            if ($this->OsSessionLogs->save($osSessionLog)) {
                $this->Flash->success(__('The os session log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The os session log could not be saved. Please, try again.'));
        }
        $users = $this->OsSessionLogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('osSessionLog', 'users'));
        $this->set('_serialize', ['osSessionLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Os Session Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $osSessionLog = $this->OsSessionLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $osSessionLog = $this->OsSessionLogs->patchEntity($osSessionLog, $this->request->getData());
            if ($this->OsSessionLogs->save($osSessionLog)) {
                $this->Flash->success(__('The os session log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The os session log could not be saved. Please, try again.'));
        }
        $users = $this->OsSessionLogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('osSessionLog', 'users'));
        $this->set('_serialize', ['osSessionLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Os Session Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $osSessionLog = $this->OsSessionLogs->get($id);
        if ($this->OsSessionLogs->delete($osSessionLog)) {
            $this->Flash->success(__('The os session log has been deleted.'));
        } else {
            $this->Flash->error(__('The os session log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
