<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EasycaseMilestones Controller
 *
 * @property \App\Model\Table\EasycaseMilestonesTable $EasycaseMilestones
 *
 * @method \App\Model\Entity\EasycaseMilestone[] paginate($object = null, array $settings = [])
 */
class EasycaseMilestonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Easycases', 'Milestones', 'Projects', 'Users']
        ];
        $easycaseMilestones = $this->paginate($this->EasycaseMilestones);

        $this->set(compact('easycaseMilestones'));
        $this->set('_serialize', ['easycaseMilestones']);
    }

    /**
     * View method
     *
     * @param string|null $id Easycase Milestone id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $easycaseMilestone = $this->EasycaseMilestones->get($id, [
            'contain' => ['Easycases', 'Milestones', 'Projects', 'Users']
        ]);

        $this->set('easycaseMilestone', $easycaseMilestone);
        $this->set('_serialize', ['easycaseMilestone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $easycaseMilestone = $this->EasycaseMilestones->newEntity();
        if ($this->request->is('post')) {
            $easycaseMilestone = $this->EasycaseMilestones->patchEntity($easycaseMilestone, $this->request->getData());
            if ($this->EasycaseMilestones->save($easycaseMilestone)) {
                $this->Flash->success(__('The easycase milestone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The easycase milestone could not be saved. Please, try again.'));
        }
        $easycases = $this->EasycaseMilestones->Easycases->find('list', ['limit' => 200]);
        $milestones = $this->EasycaseMilestones->Milestones->find('list', ['limit' => 200]);
        $projects = $this->EasycaseMilestones->Projects->find('list', ['limit' => 200]);
        $users = $this->EasycaseMilestones->Users->find('list', ['limit' => 200]);
        $this->set(compact('easycaseMilestone', 'easycases', 'milestones', 'projects', 'users'));
        $this->set('_serialize', ['easycaseMilestone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Easycase Milestone id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $easycaseMilestone = $this->EasycaseMilestones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $easycaseMilestone = $this->EasycaseMilestones->patchEntity($easycaseMilestone, $this->request->getData());
            if ($this->EasycaseMilestones->save($easycaseMilestone)) {
                $this->Flash->success(__('The easycase milestone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The easycase milestone could not be saved. Please, try again.'));
        }
        $easycases = $this->EasycaseMilestones->Easycases->find('list', ['limit' => 200]);
        $milestones = $this->EasycaseMilestones->Milestones->find('list', ['limit' => 200]);
        $projects = $this->EasycaseMilestones->Projects->find('list', ['limit' => 200]);
        $users = $this->EasycaseMilestones->Users->find('list', ['limit' => 200]);
        $this->set(compact('easycaseMilestone', 'easycases', 'milestones', 'projects', 'users'));
        $this->set('_serialize', ['easycaseMilestone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Easycase Milestone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $easycaseMilestone = $this->EasycaseMilestones->get($id);
        if ($this->EasycaseMilestones->delete($easycaseMilestone)) {
            $this->Flash->success(__('The easycase milestone has been deleted.'));
        } else {
            $this->Flash->error(__('The easycase milestone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
