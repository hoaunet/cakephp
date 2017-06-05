<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Timezones Controller
 *
 * @property \App\Model\Table\TimezonesTable $Timezones
 *
 * @method \App\Model\Entity\Timezone[] paginate($object = null, array $settings = [])
 */
class TimezonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $timezones = $this->paginate($this->Timezones);

        $this->set(compact('timezones'));
        $this->set('_serialize', ['timezones']);
    }

    /**
     * View method
     *
     * @param string|null $id Timezone id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timezone = $this->Timezones->get($id, [
            'contain' => ['DailyUpdates', 'Users']
        ]);

        $this->set('timezone', $timezone);
        $this->set('_serialize', ['timezone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timezone = $this->Timezones->newEntity();
        if ($this->request->is('post')) {
            $timezone = $this->Timezones->patchEntity($timezone, $this->request->getData());
            if ($this->Timezones->save($timezone)) {
                $this->Flash->success(__('The timezone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timezone could not be saved. Please, try again.'));
        }
        $this->set(compact('timezone'));
        $this->set('_serialize', ['timezone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Timezone id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timezone = $this->Timezones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timezone = $this->Timezones->patchEntity($timezone, $this->request->getData());
            if ($this->Timezones->save($timezone)) {
                $this->Flash->success(__('The timezone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The timezone could not be saved. Please, try again.'));
        }
        $this->set(compact('timezone'));
        $this->set('_serialize', ['timezone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Timezone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timezone = $this->Timezones->get($id);
        if ($this->Timezones->delete($timezone)) {
            $this->Flash->success(__('The timezone has been deleted.'));
        } else {
            $this->Flash->error(__('The timezone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
