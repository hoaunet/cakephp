<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DailyUpdates Controller
 *
 * @property \App\Model\Table\DailyUpdatesTable $DailyUpdates
 *
 * @method \App\Model\Entity\DailyUpdate[] paginate($object = null, array $settings = [])
 */
class DailyUpdatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Projects', 'Users', 'Timezones']
        ];
        $dailyUpdates = $this->paginate($this->DailyUpdates);

        $this->set(compact('dailyUpdates'));
        $this->set('_serialize', ['dailyUpdates']);
    }

    /**
     * View method
     *
     * @param string|null $id Daily Update id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dailyUpdate = $this->DailyUpdates->get($id, [
            'contain' => ['Companies', 'Projects', 'Users', 'Timezones']
        ]);

        $this->set('dailyUpdate', $dailyUpdate);
        $this->set('_serialize', ['dailyUpdate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dailyUpdate = $this->DailyUpdates->newEntity();
        if ($this->request->is('post')) {
            $dailyUpdate = $this->DailyUpdates->patchEntity($dailyUpdate, $this->request->getData());
            if ($this->DailyUpdates->save($dailyUpdate)) {
                $this->Flash->success(__('The daily update has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The daily update could not be saved. Please, try again.'));
        }
        $companies = $this->DailyUpdates->Companies->find('list', ['limit' => 200]);
        $projects = $this->DailyUpdates->Projects->find('list', ['limit' => 200]);
        $users = $this->DailyUpdates->Users->find('list', ['limit' => 200]);
        $timezones = $this->DailyUpdates->Timezones->find('list', ['limit' => 200]);
        $this->set(compact('dailyUpdate', 'companies', 'projects', 'users', 'timezones'));
        $this->set('_serialize', ['dailyUpdate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Daily Update id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dailyUpdate = $this->DailyUpdates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dailyUpdate = $this->DailyUpdates->patchEntity($dailyUpdate, $this->request->getData());
            if ($this->DailyUpdates->save($dailyUpdate)) {
                $this->Flash->success(__('The daily update has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The daily update could not be saved. Please, try again.'));
        }
        $companies = $this->DailyUpdates->Companies->find('list', ['limit' => 200]);
        $projects = $this->DailyUpdates->Projects->find('list', ['limit' => 200]);
        $users = $this->DailyUpdates->Users->find('list', ['limit' => 200]);
        $timezones = $this->DailyUpdates->Timezones->find('list', ['limit' => 200]);
        $this->set(compact('dailyUpdate', 'companies', 'projects', 'users', 'timezones'));
        $this->set('_serialize', ['dailyUpdate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Daily Update id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dailyUpdate = $this->DailyUpdates->get($id);
        if ($this->DailyUpdates->delete($dailyUpdate)) {
            $this->Flash->success(__('The daily update has been deleted.'));
        } else {
            $this->Flash->error(__('The daily update could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
