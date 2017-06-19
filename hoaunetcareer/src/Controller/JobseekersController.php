<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jobseekers Controller
 *
 * @property \App\Model\Table\JobseekersTable $Jobseekers
 *
 * @method \App\Model\Entity\Jobseeker[] paginate($object = null, array $settings = [])
 */
class JobseekersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Careers', 'Degrees']
        ];
        $jobseekers = $this->paginate($this->Jobseekers);

        $this->set(compact('jobseekers'));
        $this->set('_serialize', ['jobseekers']);
    }

    /**
     * View method
     *
     * @param string|null $id Jobseeker id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobseeker = $this->Jobseekers->get($id, [
            'contain' => ['Users', 'Careers', 'Degrees']
        ]);

        $this->set('jobseeker', $jobseeker);
        $this->set('_serialize', ['jobseeker']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobseeker = $this->Jobseekers->newEntity();
        if ($this->request->is('post')) {
            $jobseeker = $this->Jobseekers->patchEntity($jobseeker, $this->request->getData());
            if ($this->Jobseekers->save($jobseeker)) {
                $this->Flash->success(__('The jobseeker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jobseeker could not be saved. Please, try again.'));
        }
        $users = $this->Jobseekers->Users->find('list', ['limit' => 200]);
        $careers = $this->Jobseekers->Careers->find('list', ['limit' => 200]);
        $degrees = $this->Jobseekers->Degrees->find('list', ['limit' => 200]);
        $this->set(compact('jobseeker', 'users', 'careers', 'degrees'));
        $this->set('_serialize', ['jobseeker']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jobseeker id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobseeker = $this->Jobseekers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobseeker = $this->Jobseekers->patchEntity($jobseeker, $this->request->getData());
            if ($this->Jobseekers->save($jobseeker)) {
                $this->Flash->success(__('The jobseeker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jobseeker could not be saved. Please, try again.'));
        }
        $users = $this->Jobseekers->Users->find('list', ['limit' => 200]);
        $careers = $this->Jobseekers->Careers->find('list', ['limit' => 200]);
        $degrees = $this->Jobseekers->Degrees->find('list', ['limit' => 200]);
        $this->set(compact('jobseeker', 'users', 'careers', 'degrees'));
        $this->set('_serialize', ['jobseeker']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jobseeker id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobseeker = $this->Jobseekers->get($id);
        if ($this->Jobseekers->delete($jobseeker)) {
            $this->Flash->success(__('The jobseeker has been deleted.'));
        } else {
            $this->Flash->error(__('The jobseeker could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
