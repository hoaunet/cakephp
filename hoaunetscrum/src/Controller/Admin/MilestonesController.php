<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Milestones Controller
 *
 * @property \App\Model\Table\MilestonesTable $Milestones
 *
 * @method \App\Model\Entity\Milestone[] paginate($object = null, array $settings = [])
 */
class MilestonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Uniqs', 'Projects', 'Companies', 'Users']
        ];
        $milestones = $this->paginate($this->Milestones);

        $this->set(compact('milestones'));
        $this->set('_serialize', ['milestones']);
    }

    /**
     * View method
     *
     * @param string|null $id Milestone id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $milestone = $this->Milestones->get($id, [
            'contain' => ['Uniqs', 'Projects', 'Companies', 'Users', 'EasycaseMilestones']
        ]);

        $this->set('milestone', $milestone);
        $this->set('_serialize', ['milestone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $milestone = $this->Milestones->newEntity();
        if ($this->request->is('post')) {
            $milestone = $this->Milestones->patchEntity($milestone, $this->request->getData());
            if ($this->Milestones->save($milestone)) {
                $this->Flash->success(__('The milestone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milestone could not be saved. Please, try again.'));
        }
        $uniqs = $this->Milestones->Uniqs->find('list', ['limit' => 200]);
        $projects = $this->Milestones->Projects->find('list', ['limit' => 200]);
        $companies = $this->Milestones->Companies->find('list', ['limit' => 200]);
        $users = $this->Milestones->Users->find('list', ['limit' => 200]);
        $this->set(compact('milestone', 'uniqs', 'projects', 'companies', 'users'));
        $this->set('_serialize', ['milestone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Milestone id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $milestone = $this->Milestones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $milestone = $this->Milestones->patchEntity($milestone, $this->request->getData());
            if ($this->Milestones->save($milestone)) {
                $this->Flash->success(__('The milestone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milestone could not be saved. Please, try again.'));
        }
        $uniqs = $this->Milestones->Uniqs->find('list', ['limit' => 200]);
        $projects = $this->Milestones->Projects->find('list', ['limit' => 200]);
        $companies = $this->Milestones->Companies->find('list', ['limit' => 200]);
        $users = $this->Milestones->Users->find('list', ['limit' => 200]);
        $this->set(compact('milestone', 'uniqs', 'projects', 'companies', 'users'));
        $this->set('_serialize', ['milestone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Milestone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $milestone = $this->Milestones->get($id);
        if ($this->Milestones->delete($milestone)) {
            $this->Flash->success(__('The milestone has been deleted.'));
        } else {
            $this->Flash->error(__('The milestone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
