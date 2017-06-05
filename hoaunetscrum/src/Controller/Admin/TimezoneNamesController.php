<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TimezoneNames Controller
 *
 * @property \App\Model\Table\TimezoneNamesTable $TimezoneNames
 *
 * @method \App\Model\Entity\TimezoneName[] paginate($object = null, array $settings = [])
 */
class TimezoneNamesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $timezoneNames = $this->paginate($this->TimezoneNames);

        $this->set(compact('timezoneNames'));
        $this->set('_serialize', ['timezoneNames']);
    }

    /**
     * View method
     *
     * @param string|null $id Timezone Name id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timezoneName = $this->TimezoneNames->get($id, [
            'contain' => []
        ]);

        $this->set('timezoneName', $timezoneName);
        $this->set('_serialize', ['timezoneName']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timezoneName = $this->TimezoneNames->newEntity();
        if ($this->request->is('post')) {
            $timezoneName = $this->TimezoneNames->patchEntity($timezoneName, $this->request->getData());
            if ($this->TimezoneNames->save($timezoneName)) {
                $this->Flash->success(__('The timezone name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timezone name could not be saved. Please, try again.'));
        }
        $this->set(compact('timezoneName'));
        $this->set('_serialize', ['timezoneName']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Timezone Name id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timezoneName = $this->TimezoneNames->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timezoneName = $this->TimezoneNames->patchEntity($timezoneName, $this->request->getData());
            if ($this->TimezoneNames->save($timezoneName)) {
                $this->Flash->success(__('The timezone name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timezone name could not be saved. Please, try again.'));
        }
        $this->set(compact('timezoneName'));
        $this->set('_serialize', ['timezoneName']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Timezone Name id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timezoneName = $this->TimezoneNames->get($id);
        if ($this->TimezoneNames->delete($timezoneName)) {
            $this->Flash->success(__('The timezone name has been deleted.'));
        } else {
            $this->Flash->error(__('The timezone name could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
